	
	<?php
	include_once("crud_class.php");
 
$crud = new crud();



if(isset($_POST['update']))
	
	{
		
			 $id =$_GET['id'];
			 
			 

$fname = $_POST['fname'];
$lname = $_POST['lname'];

$email = $_POST['email'];

 $result = $crud->execute("UPDATE users SET firstname='$fname',lastname='$lname',email='$email' WHERE id=$id");
 
 if($result ==true)
 {
	 echo "updated";
 }
 else
 {
	 echo "nooo";
 }


	}

	
	?>
	
	
	
<?php
// including the database connection file
include_once("crud_class.php");
 
$crud = new crud();
 
//getting id from url
//$id = $crud->escape_string($_GET['id']);
 $id =$_GET['id'];

//selecting data associated with this particular id
$result = $crud->getData("SELECT * FROM users WHERE id=$id");
 
foreach ($result as $res) {
    $name = $res['firstname'];
    $age = $res['lastname'];
    $email = $res['email'];
}
?>
<html>
<head>    
    <title>Edit Data</title>
</head>
 
<body>
    <a href="index.php">Home</a>
    <br/><br/>
    
    <form name="form1" method="post" action="#">
        <table border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="fname" value="<?php echo $name;?>"></td>
            </tr>
            <tr> 
                <td>Age</td>
                <td><input type="text" name="lname" value="<?php echo $age;?>"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email" value="<?php echo $email;?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>