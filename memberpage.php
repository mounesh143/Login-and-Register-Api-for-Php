<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); exit(); }

//define page title
$title = 'Members Page';

//include header template
require('layout/header.php'); 
?>

<style>
    
    .header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}
.test{
    overflow: hidden;
  background-color: #f1f1f1;
  float : right;
  padding: 10px 10px 50px 0px;
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
<div class="test"><p>Welcome <?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES); ?>
 <a href='logout.php'>Logout</a></p>
 
</div>
<div class="header">
  <a href="#default" class="logo">Signal Test</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a href="./contact.php">Contact</a>
    <a href="./admin.php">Admin Login</a>
  </div>
</div>

<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			
				<h2>Member only page - </h2>
				
				<hr>

		</div>
	</div>

</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
