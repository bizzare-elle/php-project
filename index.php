<?php 
session_start();
$add_user_error = isset($_SESSION["add_user_errors"]) ? $_SESSION["add_user_errors"] : null;
// echo $add_user_error;
$add_user_inputs = isset($_SESSION["add_user_inputs"]) ? $_SESSION["add_user_inputs"] : null;
$add_user_success = isset($_SESSION["add_user_success"]) ? $_SESSION["add_user_success"] : null;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'bootstrap.php'; ?>
    <link rel="stylesheet" href="styles/general.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="includes/form.php" method="POST">
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name:</label>
                <input type="text" class="form-control" name="firstName" 
                value="<?php if($add_user_inputs !== null){
                    echo $add_user_inputs["firstName"];
                }  ?>">
                <?php if($add_user_error !== null) :  ?>
                    <span class="text-danger"><?= $add_user_error  ?></span>
                <?php endif ?>    
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName" 
                value="<?php if($add_user_inputs !== null){
                    echo $add_user_inputs["lastName"];
                }  ?>" >
                <?php if($add_user_error !== null) :  ?>
                    <span class="text-danger"><?= $add_user_error  ?></span>
                <?php endif ?>   
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" name="email" 
                value="<?php if($add_user_inputs !== null){
                    echo $add_user_inputs["email"];
                }  ?>">
                <?php if($add_user_error !== null) :  ?>
                    <span class="text-danger"><?= $add_user_error  ?></span>
                <?php endif ?>   
            </div>
            <div class="mb-3">
                <label class="form-label">User Type:</label>
                <select name="userType" class="form-select" 
                value="<?php if($add_user_inputs !== null){
                    echo $add_user_inputs["userType"];
                }  ?>">
                    <option selected value="">Select User Type</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <?php if($add_user_error !== null) :  ?>
                    <span class="text-danger"><?= $add_user_error  ?></span>
                <?php endif ?>   
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="add-user">Submit</button>
            </div>
            <?php 
            
                    if($add_user_success){
                         ?>
                            <span class="text-success">User added successfully!</span>
                        <?php  
                    }
            
            ?>
        </form>
    </div>
</body>
</html>

<?php 
unset($_SESSION["add_user_errors"]);
unset($_SESSION["add_user_success"]);

?>