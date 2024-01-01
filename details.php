<html>
<body>
<?php
if(isset($_REQUEST["submit"]))
{
echo"<p>Name:</strong>".$_REQUEST["name"]."</p>";
echo"<p>Address:".$_REQUEST["address"]."</p>";
echo"<p>Email:".$_REQUEST["email"]."</p>";
echo"<p>Gender:".$_REQUEST["gender"]."</p>";
echo"<p>Date of Birth:".$_REQUEST["dob"]."</p>";
}
?>
</body>
</html>
