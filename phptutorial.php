
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP tutorial test</title>
</head>
<body>

</body>
</html>
<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
include 'footer.php'
?>