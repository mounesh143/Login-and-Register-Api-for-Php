<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_admin_in()){ header('Location: login.php'); exit(); }

//define page title
$title = 'Admin Page';

//include header template
require('layout/header.php'); 
?>

<style>
    
    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}


.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}


.header a.logo {
  font-size: 25px;
  font-weight: bold;
}


.header a:hover {
  background-color: #ddd;
  color: black;
}


.header a.active {
  background-color: dodgerblue;
  color: white;
}


.header-right {
  float: right;
}


@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>
<div class="header">
  <a href="#default" class="logo">Signal Test</a>
  <div class="header-right">
    <a class="active" href="./memberpage.php">Home</a>
    <a href="#contact">Contact</a>
    <a href="#about">About</a>
  </div>
</div>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Admin only page - Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?></h2>
				<p><a href='logout.php'>Logout</a></p>
				<hr>

		</div>
	</div>

</div>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->
    <title>View Users</title>
</head>
<style>
    .login-panel {
        margin-top: 150px;
    }
    .table {
        margin-top: 50px;

    }

</style>

<body>

<div class="table-scrol">
    <h1 align="center">All the Users</h1>

<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->


    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>

        <tr>

            <th>User Id</th>
            <th>User Name</th>
            <th>User E-mail</th>
            <th> User Active </th>
            <th>Delete User</th>
        </tr>
        </thead>

        <?php
        
        $conn = new mysqli('localhost','jamboree_moni','AX2IT8lm+!i*','jamboree_moni');
        if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
        $user="select * from members";//select query for viewing users.
        
        $run=mysqli_query($conn,$user);//here run the sql query.

        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.
        {
            $user_id=$row[0];
            $user_name=$row[1];
            $user_email=$row[3];
            $user_pass=$row[4];



        ?>

        <tr>
<!--here showing results in the table -->
            <td><?php echo $user_id;  ?></td>
            <td><?php echo $user_name;  ?></td>
            <td><?php echo $user_email;  ?></td>
            <td><?php echo $user_pass;  ?></td>
            <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->
        </tr>

        <?php } ?>

    </table>
        </div>
</div>


</body>

</html>


<?php 
//include header template
require('layout/footer.php'); 
?>
