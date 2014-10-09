<html>
<head>
<title>NumberFormat example</title>
<script language="JavaScript" type="text/javascript" src="numberFormat154.js"></script>
<script language="JavaScript" type="text/javascript">
<!--
function formatNumber()
{
var obj = document.getElementById('txtExample');
var num = new NumberFormat();
num.setInputDecimal('.');
num.setNumber(obj.value); // obj.value is '1000'
num.setPlaces('0', false);
num.setCurrencyValue('IDR');
num.setCurrency(false);
num.setCurrencyPosition(num.LEFT_OUTSIDE);
num.setNegativeFormat(num.LEFT_DASH);
num.setNegativeRed(false);
num.setSeparators(true, '.', ',');
obj.value = num.toFormatted();

}
//-->
</script>
</head>
<form>
<input type="text" size="30" id="txtExample" onChange="formatNumber();" />
<!--<input type="text" size="30" value="1000" id="txtExample" onChange="formatNumber();" />-->
<!--<input type="button" value="Format" onFocus="formatNumber();" />-->
</form>
</body>
</html>