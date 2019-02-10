<!DOCTYPE html>

<html>
<body>

<?php
class crud 
{    
    private $_host = 'localhost';
    private $_username = 'root';
    private $_password = '';
    private $_database = 'crudoops';
    
    protected $conn;
    
    public function __construct()
    {
        if (!isset($this->connection)) {
            
            $this->conn = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
            
            if (!$this->conn) {
                echo 'Cannot connect to database server';
                exit;
            }            
        } 			
		
	}
	
	
	public function insert($fname, $lname, $email)
	
	{
		
		$sql = "INSERT INTO users(firstname, lastname, email)values('$fname', '$lname', '$email')";
		
		$insert = $this->conn->query($sql);
		
		//$insert = mysqli_query($this->conn, $sql);
		if($insert)
		{
			
			echo "data inserted ";
		}
		else
		{
			echo "no data inserted ".mysqli_connect_error();
		}
	
	}
	
	 public function getData($query)
    {        
        $result = $this->conn->query($query);
        
        if ($result == false) {
            return false;
        } 
        
        $rows = array();
        
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        
        return $rows;
    }
	
	public function execute($query) 
    {
        $result = $this->conn->query($query);
        
        if ($result == false) {
            echo 'Error: cannot execute the command';
            return false;
        } else {
            return true;
        }        
    }
	
	
	 public function delete($id, $table) 
    { 
        $query = "DELETE FROM $table WHERE id = $id";
        
        $result = $this->conn->query($query);
    
        if ($result == false) {
            echo 'Error: cannot delete id ' . $id . ' from table ' . $table;
            return false;
        } else {
            return true;
        }
    }
}

?>


</body>

</html>