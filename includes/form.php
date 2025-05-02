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
        
        
        if(empty($firstName) || empty($lastName) || empty($email) || empty($userType)){
            $_SESSION["add_user_errors"] = "All fields required";

            $_SESSION["add_user_inputs"] = ["firstName" => $firstName, "lastName" => $lastName, "email" => $email, "userType" => $userType];

            header("Location: ../index.php" );
            die();
        };

        echo "Hello";

        try{
            $user->save();
            $_SESSION["add_user_success"] = true;
            unset($_SESSION["add_user_inputs"]);

            header("Location: ../index.php");
        } catch(PDOException $e) {
            echo $e->getMessage();
        }


};

} else {
    header('Location: ../userPage.php');
};

$user= $_SESSION["CURRENT_USER"];

print_r($user);