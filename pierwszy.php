<!DOCTYPE html>
<?php
$tak = $_POST['nie'];
for($i=1; $i<$tak; $i++) {
    $rand = rand(0,1000);
    if($rand%2==0){
      echo $rand;
      echo "<br>";
    }
}
?>

<html>
    <head>

    </head>
    <body>
    <form action="" method="post">
        <input type="text" name="nie">
        <input type="submit" />
    </form>
    </body>
</html>