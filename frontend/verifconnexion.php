<?php
if (isset( $_SESSION['id']))
{

    print $_SESSION['id'];
}
else
{
    print 'pas de connexion';
}
?>