<?php 


include('../config.php');
include('database.php');

    class User{
        private string $firstName;
        private string $lastName;
        private string $email;
        private string $userType;
    
        public function __construct($firstName, $lastName, $email, $userType)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->userType = $userType;
        }
    

        public function save(){
              
                    $pdo = Database::connect();
                    $stmt = $pdo->prepare('INSERT INTO users(firstName, lastName, email, userType) VALUES(:firstName, :lastName, :email, :userType);');
                
                    // binding parameters
                    $stmt->bindParam(":firstName", $this->firstName);
                    $stmt->bindParam(":lastName", $this->lastName);
                    $stmt->bindParam(":email", $this->email);
                    $stmt->bindParam(":userType", $this->userType);
                
                    $stmt->execute();
                
                    // echo "Connected successfully!";
    
            
        }


        
    };

?>
