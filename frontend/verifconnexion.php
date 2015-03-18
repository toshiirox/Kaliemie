<?php
if (isset( $_SESSION['id']))
{
    session_start();
    print $_SESSION['id'];
}
else
{
    print 'pas de connexion';
}
?>