<html>
<?php
$login = $_POST["login"];
$pass = $_POST["pass"];
$tab_login = ['Karol', 'Jacek', 'Marek', 'Krzysztof', 'Andzej'];
$tab_pass = ['qwerty', 'owca', '123456789', '12345', 'ytrewq']; 
if($tab_login[0] == $login && $pass == $tab_pass[0]){
    echo "zostałeś zalogowany";
}
else{
    echo "wara od kompa ";
}

?>
<head>   
</head>
<body>
<form action="" method="POST">
        <input type="text" name="login">
        <input type="text" name="pass">
        <input type="submit" name="oblicz" value="zaloguj">
    </form>
</body>
</html>