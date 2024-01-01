
<?php 
if($_GET){
$x=$_GET["txtnum"];
if($x==0)
{
echo"Zero is neither even nor odd";
}
else if(($x%2)==0)
{
echo "Number is even";
}
else
{
echo "Number is odd";
}
}
?>




