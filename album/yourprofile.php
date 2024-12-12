<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>

<?php  
if (!isset($_SESSION['username'])) {
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>
	<div class="navbar" style="text-align: center; margin-bottom: 50px;">
		<h1><?php echo $_SESSION['username']; ?>'s Profile</h1>
		<a href="index.php">Home</a>
		<a href="profile.php">Your Profile</a>
		<a href="allusers.php">All Users</a>
		<a href="core/handleForms.php?logoutUserBtn=1">Logout</a>
	</div>

	<div class="images" style="display: flex; justify-content: center; margin-top: 25px;">
		<div class="photoContainer" style="background-color: ghostwhite; border-style: solid; border-color: gray;width: 50%;">

			<img src="https://images.unsplash.com/photo-1731762512307-2271665eb149?q=80&w=1784&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" style="width: 100%;">
			
</body>
</html>