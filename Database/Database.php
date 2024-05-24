<?php
// Connect to the database, and execute a query
class Database {
    // Instance property
    public $connection;

    // Constructor to establish the database connection
    public function __construct($config, $username = 'root', $password = '')
    {
        // Construct the DSN string
        $dsn = 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'];

        try {
            // Establish the database connection
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Enable error reporting
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // Set default fetch mode
            ]);
        } catch (PDOException $e) {
            // Handle connection errors
            throw new Exception("Failed to connect to the database: " . $e->getMessage());
        }
    }

    // Method to prepare a SQL statement
    public function prepare($query)
    {
        try {
            return $this->connection->prepare($query);
        } catch (PDOException $e) {
            // Handle statement preparation errors
            throw new Exception("Failed to prepare SQL statement: " . $e->getMessage());
        }
    }

    // Method to execute a query
    public function query($query, $params = [])
    {
        try {
            // Prepare the SQL query
            $statement = $this->prepare($query);

            // Bind parameters
            foreach ($params as $paramName => &$paramValue) {
                $statement->bindParam($paramName, $paramValue);
            }

            // Execute the query
            $statement->execute();

            // Return the statement object
            return $statement;
        } catch (PDOException $e) {
            // Handle query execution errors
            throw new Exception("Query execution failed: " . $e->getMessage());
        }
    }
}
?>
