<?php
/**
 * Created by PhpStorm.
 * User: ferry francois
 * Date: 26/11/2015
 * Time: 23:44
 */
    session_start( ) ;
    // Suppression des variables de session et de la session
    $_SESSION = array( ) ;
    session_destroy( ) ;
    session_unset();
    header('Location:../index.html');