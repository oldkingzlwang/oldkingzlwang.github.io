<?php

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");  
header("Cache-Control: no-cache, must-revalidate,no-store");  
header("Pragma: no-cache");  

$cur=getdate();

echo "var nyear=",$cur["year"],";";
echo "var nmonth=",$cur["mon"],";";
echo "var nday=",$cur["mday"],";";
echo "var nwday=",date("w"),";";
echo "var nhrs=",$cur["hours"],";";
echo "var nmin=",$cur["minutes"],";";
echo "var nsec=",$cur["seconds"],";";

?>
var t0=new Date().getTime();





