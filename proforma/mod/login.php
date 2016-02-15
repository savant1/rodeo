<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 16/11/2015
 * Time: 16:25
 */

 session_start();
    include '../contr/controller.php';
    if(isset($_POST['login']) && isset($_POST['mdp'])){
        existe(htmlspecialchars($_POST['login']),htmlspecialchars($_POST['mdp']));
    }