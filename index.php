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
                <input type="text" class="form-control" name="firstName">
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name:</label>
                <input type="text" class="form-control" name="lastName">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email Address:</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <select name="userType" class="form-select">
                    <option selected value="">Select User Type</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary" name="add-user">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>