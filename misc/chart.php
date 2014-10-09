
<div class="panel panel-default" style="">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-th">&nbsp;</span>My Performance Summary </h3>
  </div>
  <div class="panel-body"> 
  
<div class="zclear"></div>   
<div id="zchart" style="width:100%; height:400px;"></div>
<div class="zclear"></div>   


  </div>
</div>  


<?php 
if(isset($_SESSION['USERNAME']) and $_SESSION['USERNAME'] != '' and
   isset($_SESSION['LEVEL']) and $_SESSION['LEVEL'] != ''){
		$label = "";
		$dataset = "";
		$year = date('Y');
		$result = mysql_query('
					SELECT 	* 
					FROM	trx_history 
					WHERE	trx_history.USER = "'.$_SESSION['USERNAME'].'"
					AND 	trx_history.YEAR = "'.$year.'"');
		// Verify it worked
		if (!$result) echo mysql_error();		
		
		while($data=mysql_fetch_array($result)){
												
			 $date1 = $data["START_AT"];
			 $date2 = $data["FINISH_AT"]; 
			 $diff = strtotime($date2) - strtotime($date1);
			 $diff_in_hrs = round($diff/3600,0);
			 
			if($label == ""){
				$label = "'".$data["DOC_NUMBER"]."'";
				$dataset = "".$diff_in_hrs."";
			}else{
				$label = $label.",'".$data["DOC_NUMBER"]."'";
				$dataset = $dataset.",".$diff_in_hrs."";
			}
			
		}
		
	
   }
?>

<script>
$(function () {
    $('#zchart').highcharts({
		chart: {
            zoomType: 'x'
        },
        plotOptions: {
            area: {
                fillColor: {
                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
                    stops: [
                        [0, Highcharts.getOptions().colors[0]],
                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
                    ]
                },
                marker: {
                    radius: 2
                },
                lineWidth: 1,
                states: {
                    hover: {
                        lineWidth: 1
                    }
                },
                threshold: null
            }
			
        },

        title: {
            text: 'Ticket Duration'
        },
        subtitle: {
            text: 'Year : <?=$year?>'
        },
        xAxis: {
            title: {
                text: 'Document'
            },
			categories: [<?=$label?>],
			labels: {
                enabled: false
            }
			
        },
        yAxis: {
            title: {
                text: 'Duration (Hours)'
            },
			
        },
        series: [{			
			type:'area',
            name: 'Submitted Document',
            data: [<?=$dataset?>]
        }]
    });
});
</script>