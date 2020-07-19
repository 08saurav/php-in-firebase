<?php
$title = "Welcome";                   // (1) Set the title
include ("includes/header.php");                 // (2) Include the header
?>

<!-- begin page content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
        <h3>Edit and Update Date Data in Firebase (Database) using PHP</h3>
        <hr>
        <?php
            $token= $_GET['token'];
            include('includes/dbconfig.php');
            $ref='contact/';
            $getdata=$database->getreference($ref)->getchild($token)->getvalue();
        ?>
        <form action="code.php" method="POST">
            <input type="hidden" name="token" value="<?php echo $token;?>">
            <div class = "form-group">
                <input type="text" name="username" class ="form-control" value="<?php echo $getdata['username']; ?>" placeholder="Enter Username">
            </div>

             <div class = "form-group">
                <input type="text" name="email" class ="form-control" value="<?php echo $getdata['email'];?>" placeholder="Enter Email">
            </div>

             <div class = "form-group">
                <input type="text" name="phoneno" class ="form-control" value="<?php echo $getdata['phoneno'];?>" placeholder="Enter phone-no.">
            </div>

             <div class = "form-group">
                <button type="submit" name="update_data">Update_data</button>
                <hr>
                <a href="index.php" class="btn btn-danger btn-block">Cancel</a>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- end page content -->

<?php
include ("includes/footer.php");                 // (3) Include the footer
?>