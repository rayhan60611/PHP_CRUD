<?php 
include("db_connection.php") ;
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Crud Add User</title>
</head>

<body>


    <div class="container">
        <h1 class="text-center my-5 bg-danger"> PHP CRUD ADD NEW USER</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 p-5 pt- shadow-lg bg-white rounded">
                    <?php if (isset($_SESSION['duplicateUser'])) { ?>
                        <div class="alert alert-danger text-center font-weight-bold" role="alert">
                            This UserName already Exists!
                        </div>
                    <?php  } ?>
                    <?php if (isset($_SESSION['alert'])) { ?>
                        <div class="alert alert-success text-center font-weight-bold" role="alert">
                            New User Added!
                        </div>
                    <?php  } ?>
                    <form action="savedata.php" method="POST">

                        <div class="form-group " id="name">
                            <label for="exid">User Name</label>
                            <input required type="text" class="form-control" name="name" placeholder="Enter User Name" value="">
                        </div>

                        <div class="form-group " id="sex">
                            <label for="exname">Sex (e.g M or F)</label>
                            <input required type="text" class="form-control" name="sex" placeholder="Enter User Sex" value="">
                        </div>

                        <div class="form-group " id="age">
                            <label for="exname">Age</label>
                            <input required type="text" class="form-control" name="age" placeholder="Enter User Age" value="">
                        </div>

                        <div class="form-group " id="city">
                            <label for="city">City</label>
                            <input required type="text" class="form-control" name="city" placeholder="Enter User City" value="">
                        </div>
                        <button type="submit" class="btn btn-outline-success">Save</button>
                        <!-- <a type="button" href="index.php" class="btn btn-outline-info">View Employee List</a> -->
                        <a type="button" href="index.php" class="btn btn-outline-primary my-3">Home</a>
                    </form>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>

<?php unset($_SESSION['duplicateUser']); ?>
<?php unset($_SESSION['alert']); ?>