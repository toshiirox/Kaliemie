<?php
if (isset( $_SESSION['id']))
{
    session_start();
    print 'bienvenue, ';
    print $_SESSION['id'];
}
else
{
    print 'pas de connexion';
}
?>