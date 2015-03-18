<?php
class PreparationREQ
{
    //Variables qui contiendront la  pr�paration des requ�tes
    private $ReqSelectById;
    private $ReqSelectByName;
    private $ReqSelectAll;
    private $ReqInsert;
    private $ReqTruncate;
	private $ReqConnection;


    public function __construct($db)
    {
    	//variables renseign�es lors de la pr�paration des requ�tes
	
        $this->ReqSelectAll = $db->prepare("SELECT id, name, password FROM user ORDER BY name");
		
        $this->ReqSelectById = $db->prepare("SELECT id, name FROM user WHERE id = ?");
       
 	    $this->ReqSelectByName = $db->prepare("SELECT id, name FROM user WHERE name LIKE ? ORDER BY name, id");
        
		$this->ReqInsert = $db->prepare("INSERT INTO user(name, password) VALUES (:name, :password)");
		
       $this->ReqTruncate = $db->prepare("TRUNCATE user");
	   
	   $this->ReqConnection = $db->prepare("SELECT login, password FROM   WHERE login = :login AND password = :password");
	   
    }

//M�thodes publiques qui ex�cuteront les requ�tes d�j� pr�par�es dans le constructeur.
    public function connect()
    {

        $this->ReqConnection->execute($q);
        $count = $db->rowCount($this->ReqConnection);
    }


	public function insert($name, $password)
    {
        $this->ReqInsert->execute(
            array(':name' => $name, ':password' => $password));

        return $this->ReqInsert->rowCount();
    }

    public function selectAll()
    {
    	$this->ReqSelectAll->execute();
        return $this->ReqSelectAll->fetchAll();
    }

	public function selectById($id)
    {
        $this->ReqSelectById->execute(array($id));
        return $this->ReqSelectById ->fetch();
    }

    public function selectByName($name)
    {
        $this->ReqSelectByName->execute(array('%'.$name.'%'));
        return $this->ReqSelectByName->fetchAll();
    }
    
	public function truncate()
    {
        return $this->ReqTruncate->execute();
    }
	
}