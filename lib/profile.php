<?php 
include '../inc/header.php';
?>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    	<h2>Your Profile <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h2>
    </div>
    <div class="panel-body">
        <div style="max-width:600px; margin:0 auto">
    	<form action="" method="post">

             <label for="Name">Name</label>
                <input type="text" id="Name" name="Name" class="form-control" value="Rifat khan sonet"/>

                    <label for="UserName">User Name</label>
                    <input type="text" id="UserName" name="UserName" class="form-control" value="Sonet khan"/>

                        <label for="Email">Email Address</label>
                        <input type="text" id="Email" name="Email" class="form-control" value="Sonetkhanrkb@gmail.com"/>

                 <label for="Password">Your Password</label>
                 <input type="text" id="Pswd" name="Pswd" class="form-control" required=""/>
             </div>

                  <button type="submit" name="Registration" class="btn btn-success">Submit</button>
        </form>
</div>
<?php include '../inc/footer.php'; ?>