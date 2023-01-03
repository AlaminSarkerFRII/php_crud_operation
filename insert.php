<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>


<body>
    <div class="w-50 mx-auto">

        <?php

        $conn = mysqli_connect('localhost', 'root', '', 'phptest'); // server-> localhost , user->root, password-> '', databaseName->'phptest'

        if (isset($_POST['submit'])) {
            $name = ($_POST['name']);
            $email = ($_POST['email']);
            $mobile = ($_POST['mobile']);
            $password = ($_POST['password']);

            $sql = "INSERT INTO student(name,email,mobile,password)
             VALUES ('$name','$email','$mobile','$password')";

            if (mysqli_query($conn, $sql) === TRUE) {
                echo "Data Inserted ";
                header('location: insert.php'); // redirect to insert page
            } else {
                echo "Data Not Inserted";
            } // connection name , query name 
        }


        ?>
        <form action="insert.php" method="POST">
            <div class="row mx-auto my-4">
                <div class="col-md-12 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control" name="name">

                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control" name="email">

                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="col-md-12 mb-3">
                    <label class="form-label">mobile</label>
                    <input type="number" class="form-control" name="mobile">
                </div>
            </div>
            <input class="form-control bg-info" type="submit" name="submit" value="submit">
        </form>
    </div>
</body>

</html>