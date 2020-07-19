<?php
$title = "Welcome";                   // (1) Set the title
include ("includes/header.php");                 // (2) Include the header
?>

<!-- begin page content -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <form action="code.php" method="POST">
            <div class = "form-group">
                <input type="text" name="username" class ="form-control" placeholder="Enter Username">
            </div>

             <div class = "form-group">
                <input type="text" name="email" class ="form-control" placeholder="Enter Email">
            </div>

             <div class = "form-group">
                <input type="text" name="phoneno" class ="form-control" placeholder="Enter phone-no.">
            </div>

             <div class = "form-group">
                <button type="submit" name="save_push_data">Save_data</button>
            </div>
        </div>
        </form>
    </div>
</div>
<!-- end page content -->

<?php
include ("includes/footer.php");                 // (3) Include the footer
?>