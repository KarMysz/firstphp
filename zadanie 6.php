<html>
   <head>
       <form action="" method="POST"> 
  start  <input type="text" name="start">
  stop  <input type="text" name="stop">
  los  <input type="text" name="los">
  <input type="submit" name="tak">
  </form>
<?php
if(isset($_POST["tak"])){
$start=$_POST["start"];
$stop=$_POST["stop"];
$los=$_POST["los"];

$losowanie=rand($start,$stop);
for($i=0; $i<$los; $i++){
    $losowanie=rand($start,$stop);
    echo $losowanie;
    echo("<br>");
}
}
?>
</head>
<body>
    <body bgcolor="orange">
</body>
</html>