<?php
if(isset($_POST["a"]) && isset($_POST["b"])&& isset ($_POST["c"])){
$a=$_POST["a"];
$b=$_POST["b"];
$c=$_POST["c"];
$result=($a^3)+($b*$c)-($a/$b);
$finalresult=["result"=>$result];
echo json_encode($result) ;
}

?>