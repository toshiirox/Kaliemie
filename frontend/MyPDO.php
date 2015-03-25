<?php

class MyPDO extends PDO
{
    public function __construct($dsn, $user = NULL, $password = NULL)
    {
        parent::__construct($dsn, $user, $password);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    //méthode prepare de la classe mère qui permet de préparer des requêtes
    public function prepare($sql, $options = NULL)
    {
        $statement = parent::prepare($sql);
        if (strpos(strtoupper($sql), 'SELECT') === 0) //requête "SELECT"
        {
            $statement->setFetchMode(PDO::FETCH_ASSOC);
        }
        return $statement;
    }
}

?>
