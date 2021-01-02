<?php 
include '../inc/header.php';
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
                <label for="email">Email address</label>
                <input type="text" id="email" name="email" class="form-control" required=""/>
                <label for="password">Password</label>
                <input type="text" id="password" name="password" class="form-control" required=""/>
            </div>  
            <button type="submit" name="login" class="btn btn-success">Login</button> 
        </form>
</div>
<?php include '../inc/footer.php'; ?>