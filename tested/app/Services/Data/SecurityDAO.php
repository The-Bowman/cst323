<?php
namespace App\Services\Data;

use App\Models\User;

class SecurityDAO{
    
    public function __construct() {
    }
    
    public function findbyUser(User $user){
        $username = $user->getName();
        $password = $user->getPassword();
        $conn = $this->getConnection();
        
        // SQL database query actions.
        $sql = "SELECT * FROM user WHERE username='$username';";
        $result = mysqli_query($conn, $sql);
        if ($result){
         
        if ($row = mysqli_fetch_assoc($result)){
          
            if ($username == $row['username']){
         
                if ($password == $row['password']){
          
                    return true;
                } else {
                    // password fails
                    return false;
                }
            } else {
                // username fails
                return false;
            }
        } else {
            // row fails
            return false;
        }  
        } else {
            // no result
            return false;
        }
   }
   
   public function insertUser(User $user){
      
       // setup variables
       $username = $user->getName();
       $password = $user->getPassword();
       $email = $user->getEmail();
       $conn = $this->getConnection();
   
       
       // MySQL query
       $sql = "INSERT INTO user(email, username, password) VALUES('$email', '$username', '$password');";
       $result = mysqli_query($conn, $sql);
     
       if ($result){
           return true;
       } else {
           return false;
       }
   }

public function getConnection() {
    // The default Server settings.
    $mysql_host = "localhost";
    $mysql_database = "cst323";
    $mysql_user = "root";
    $mysql_password = "root";
    $mysql_port = "3306";
    
    // Creates an SQL connection.
    $conn = mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_database, $mysql_port);
    
    // Checks the SQL connection.
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error()); // For failed SQL connections.
    }
    
    return $conn;
}

       
}
