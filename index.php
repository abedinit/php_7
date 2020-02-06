<?php include('header.php'); ?>
<?php include('nav.php'); ?>
<?php include('mysql_connection.php'); ?>


<div class="container">
<div class="row">
<div class="col-md-3 mt-2 border">
<?php include('sidebar.php');
?>
<!-- validate input  -->

<?php
 if ($_SERVER['REQUEST_METHOD'] == 'POST') { //#1
 require('process-register-page.php');
 } // End of the main Submit conditional.
 ?>


</div>
<div class="col-sm-8">
    <h2 class="h2 text-center">
    Register</h2>
    <form action="register-page.php" method="post"onsubmit="return checked();">
        <div class="form-group row">
            <label for="first_name" class="col-sm--4 col-form-label">First Name</label>
            <div class="col-sm-8">
            <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your First Name" maxlength="30" required value="<?php if(isset($_POST['first_name'])) echo $_POST['first_name']; ?>" >
            </div>        
            </div>
            <div class="form-group row">
                <label for="last_name"></label>
            </div>
            
            <button type="submint" class="btn btn-primary"> Submint</button>
    </form>
</div>

</div>
</div>
 

<?php include('footer.php'); ?>

