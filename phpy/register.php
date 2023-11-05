<?php 
$laczenie = mysqli_connect('localhost','root','','erdp_database');


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"]) && isset($_POST["haslo"])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];


    $zapytanie = "insert into customers(login, haslo) values ('$login', '$haslo')";

    $wysylanie = mysqli_query($laczenie, $zapytanie);

    $zapytanie2 = "select login, haslo from customers where login = '$login' and haslo = '$haslo'";

    $wysylanie2 = mysqli_query($laczenie, $zapytanie2);
    if($pobieranie = mysqli_num_rows($wysylanie2) > 0){
        echo "pomyslnie zarejstrowano";
    }else{
        echo "wystapił bląd w rejestracji";
    }
}
mysqli_close($laczenie);
?>