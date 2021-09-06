<html>
<?php
$n = $_GET["licz"];
function fibo($n)
{
    if ($n == 0) {
        return 0;
    }
    
    elseif ($n == 1) {
        return 1;
    }
    
    else {
        return fibo($n-1)+fibo($n-2);
    }
    
}
echo fibo($n);
?>
<head>   
</head>
<body>
<form action="" method="get">
        <input type="text" name="licz">
        <input type="submit" />
    </form>
</body>
</html>