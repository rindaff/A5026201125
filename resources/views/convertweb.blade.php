<!DOCTYPE html>
<html lang="en">
<head>
    <title>Factorial</title>
    <body>
        <?php
    $n1=$_POST['n1'];
echo "<form method=POST action=''>
<input type=text name=n1 value='$n1'>
<input type=submit value=Submit>
</form>";
$factorial=1;
for ($i=1; $i<=$n1;$i++){
	$factorial=$factorial*$i;
}

echo "Factorial of $n1 : $factorial";
?>
</body>
</html>
