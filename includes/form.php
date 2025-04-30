<?php 
session_start();
  
include('../config.php');
include('../classes/user.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if(isset($_POST["add-user"])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $userType = $_POST['userType'];

        $user = new User( $firstName, $lastName, $email, $userType);
        
        $_SESSION["CURRENT_USER"] = ["firstName" => $firstName, "lastName" => $lastName, "email" => $email, "userType" => $userType];
        
        
        try{
            $user->save();
        } catch(PDOException $e) {
            echo $e->getMessage();
        }


};

} else {
    header('Location: ../userPage.php');
};

$user= $_SESSION["CURRENT_USER"];

print_r($user);