<?php 
include '../inc/header.php';
include 'User.php';
?>
<?php
    $user = new  User();

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Registration']))
    {
        $usrRegi =$user->userRegistration($_POST);
    }

?>
  <?php
if (isset($usrRegi)) 
{
    echo $usrRegi;
}
  ?>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    	<h2>User Login</h2>
    </div>
    <div class="panel-body">
        <div style="max-width:600px; margin:0 auto">
<form action="" method="post">
            <div class="form-group">

                <label for="Name">Name</label>
                <input type="text" id="Name" name="Name" class="form-control" />

                    <label for="UserName">User Name</label>
                    <input type="text" id="UserName" name="UserName" class="form-control" />

                        <label for="Email">Email Address</label>
                        <input type="text" id="Email" name="Email" class="form-control" />

                 <label for="Password">Your Password</label>
                 <input type="text" id="Pswd" name="Pswd" class="form-control" />


            </div>  
            <button type="submit" name="Registration" class="btn btn-success">Submit</button> 
        </form>
</div>
<?php include '../inc/footer.php'; ?>