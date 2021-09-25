<?php
   $user= 'root';
   $pass= '';
   $host = 'localhost';
   $base = '4k';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $imie = $_GET['Imie'];
             $nazwisko = $_GET['Nazwisko'];
             $numer = $_GET['Numer'];
$query = "Insert into uczen(Imie, Nazwisko, Numer) values('$imie', '$nazwisko', '$numer')";
$query1 = "SELECT * FROM uczen";
$jazda =mysqli_query($con,$query) or die(mysqli_error());
$jazda2 =mysqli_query($con,$query1) or die(mysqli_error());

if($jazda){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         
if($jazda2){
    echo "<p>";
    echo "<table border=\"1\"<tr>";
    echo "<td><strong>ID</strong></td>";
    echo "<td><strong>Imie</strong></td>";
    echo "<td><strong>Nazwisko</strong></td>";
    echo "<td><strong>Numer</strong></td>";
    echo "</tr>";

    while($row=mysqli_fetch_row($jazda2))
    {
        echo "</tr>";
        echo "<td bgcolor=\"gray\">" . $row[0] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[1] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[2] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[3] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "formularz jest błędny";
}
}
if(isset($_GET['delnumer']))
		 {
             $delnum = $_GET['delnum'];

$query2 = "DELETE FROM uczen WHERE id = $denum";
$query1 = "SELECT * FROM uczen";
$jazda2 =mysqli_query($con,$query2) or die(mysqli_error());

if($jazda2){
    echo "<p>";
    echo "<table border=\"1\"<tr>";
    echo "<td><strong>ID</strong></td>";
    echo "<td><strong>Imie</strong></td>";
    echo "<td><strong>Nazwisko</strong></td>";
    echo "<td><strong>Numer</strong></td>";
    echo "</tr>";

    while($row=mysqli_fetch_row($jazda2))
    {
        echo "</tr>";
        echo "<td bgcolor=\"gray\">" . $row[0] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[1] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[2] . "</td>";
        echo "<td bgcolor=\"gray\">" . $row[3] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
         }

?>
<form action="" method="get">
Imie:<input type="text" name="Imie"><br>
Nazwisko:<input type="text" name="Nazwisko"><br>
Numer:<input type="text" name="Numer"><br>
<input name="sub" type="submit" value="ok">
<br>
Podaj Numer: <input type="number" name="delnum"><br>
<input name="delnumer" type="submit" value="usun">
</form>
