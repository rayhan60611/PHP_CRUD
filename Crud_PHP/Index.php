<?php
include("db_connection.php");
session_start();
// $id = $_GET['id'];
// echo $_SESSION['kk'];
// echo $_SESSION['deleteFailed'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Crud</title>
</head>

<body>
    <?php
    $query = "SELECT * FROM `usertable`";
    $result = mysqli_query($conn, $query) or die('Query Failed!');

    ?>

    <div class="container">
        <h1 class="text-center my-5 bg-danger"> PHP CRUD</h1>
        <?php if (isset($_SESSION['alert'])) { ?>
            <div class="alert alert-success text-center font-weight-bold" role="alert">
              <h3>  User Update Successfull!</h3>
            </div>
        <?php  } ?>

        <?php if (isset($_SESSION['deleteOk'])) { ?>
            <div class="alert alert-success text-center font-weight-bold" role="alert">
               <h3>User Deleted Successfull!</h3> 
            </div>
        <?php  } ?>

        <?php if (isset($_SESSION['deleteFailed'])) { ?>
            <div class="alert alert-danger text-center font-weight-bold" role="alert">
               <h3>User Deleted Failed!</h3> 
            </div>
        <?php  } ?>

        <?php if (mysqli_num_rows($result) > 0) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID No</th>
                        <th scope="col">NAME</th>
                        <th scope="col">SEX</th>
                        <th scope="col">AGE</th>
                        <th scope="col">CITY</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['name'] ?></td>
                            <td><?php echo $row['sex'] ?></td>
                            <td><?php echo $row['age'] ?></td>
                            <td><?php echo $row['city'] ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-success">Edit</a>
                                <a href="Delete.php?id=<?php echo $row['id']; ?>" class="btn btn-outline-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        <?php } ?>
        <a href="Add.php" class="btn btn-outline-primary">Add new User</a>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>


<?php unset($_SESSION['alert']); ?>
<?php unset($_SESSION['deleteOk']); ?>
<?php unset($_SESSION['deleteFailed']); ?>