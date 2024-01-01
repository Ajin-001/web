<html>
<?php
if($_POST){
$x=$_POST["txtnum"];
if($x==0 || $x==1)
{
echo"Factorial of $x is 1";
}
else
{
$fact=1;
for($i=1;$i<=$x;$i++)
{
$fact=$fact*$i;
}
echo"The factorial of $x is $fact";
}
}
?>
</html>
