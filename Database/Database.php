<?php 
// Connect to the database, and execure a query
class Database {
    // instance property 
    public $connection;

    //to do it once we call anew instance 
    public function __construct($config, $username= 'root', $password = '')
    {


        $dsn = 'mysql:' . http_build_query($config, '', ';');


        // we assign it to connection so i can ascces this class anyware
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC
        ]);// search for this
        
    }
    public function query($query, $params = [])
    {
       
        $statement = $this->connection->prepare($query);
        
// this is where we can bind the parameters to prevent sql injection

        $statement->execute($params);
        
        return $statement;
    }

    // public function find() 
    // {
    //     return $this->statement->fetchAll
    // }
}
