<?php

class DBController
{
//    // Database Connection Properties
//     protected $host = 'sql305.ultihost.net';
//     protected $user = 'ufhne_31408048';
//     protected $password = 'UjaBw08D';
//     protected $database = "ufhne_31408048_ufhne_31408048_XXX";
   // Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "art";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
        // echo"Succesfull!";
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}



