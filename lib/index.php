<?php 
include '../inc/header.php';
include 'User.php';
$user = new User();
?>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
    	<h2>User list <span float="right"><strong>Welcome</strong>Delowar</span></h2>
    </div>
    <div class="panel-body">
    	<table class="table table-striped">
    		<tr>
    		<th width="20%">Serial</th>
    		<th width="20%">Name</th>
    		<th width="20%">Username</th>
    		<th width="20%">Email Address</th>
    		<th width="20%">Action</th>
    	</tr>
    	<tr>
    		<td>01</td>
    		<td>Rifat khan sonet</td>
    		<td>Sonet Khan</td>
    		<td>sonetkhanrkb@gmail.com</td>
    		<td>
    			<a href="profile.php?id=1" class="btn btn-primary">View</a>
    		</td>
    	</tr>
    	<tr>
    		<td>02</td>
    		<td>Kazi Saddam</td>
    		<td>Saddam Miah</td>
    		<td>Saddammiah@gmail.com</td>
    		<td>
    			<a href="profile.php?id=2" class="btn btn-primary">View</a>
    		</td>
    	</tr>
    		<td>03</td>
    		<td>Munshi Liton miah</td>
    		<td>Liton Miah</td>
    		<td>LitonMiah@gmail.com</td>
    		<td>
    			<a href="profile.php?id=3" class="btn btn-primary">View</a>
    		</td>
    	<tr>
    	</tr>
    		
    	</table>
    </div>
  </div>

<?php include '../inc/footer.php'; ?>