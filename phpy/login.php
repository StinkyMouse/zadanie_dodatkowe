<?php 
$laczenie = mysqli_connect('localhost','root','','erdp_database');


if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"]) && isset($_POST["haslo"])) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];


    $zapytanie = "select login, haslo from customers where login = '$login' and haslo = '$haslo'";

    $wysylanie = mysqli_query($laczenie, $zapytanie);

    

    if($pobieranie = mysqli_num_rows($wysylanie) > 0){
        echo "zalogowano";
    }else{
        echo "zle";
    }
}else{
    echo "podaj wszystkie dane";
}
mysqli_close($laczenie);
?>