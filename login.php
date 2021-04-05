<?php 
    include "Connection/conn.php";
    session_start();
    $adm = $db->prepare('SELECT * FROM acc WHERE username = :username AND password = :password');
    $adm->execute(array(
        ':username' => $_POST['username'],
        ':password' => md5($_POST['password'])
    ));
    $row = $adm->fetch(PDO::FETCH_ASSOC);

?>