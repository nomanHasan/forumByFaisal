
<html>
<head>
	<title>Forum AIUB</title>
	<link rel="stylesheet" href="style.css" type="text/css">
</head>
<style>
a{
	text-decoration: none;
}
body {
	/* background-color: #4E4E4E; */
	text-align: center;			/* make sure IE centers the page too */
	background:  url("images/bg.jpg") repeat right top;
}

#wrapper {
	width: 700px;
	margin: 0 auto; 			/* center the page */
}

#content {
	background-color: #fff;
	border: 1px solid #000;
	float: left;
	font-family: Arial;
	padding: 20px 30px;
	text-align: left;
	width: 100%;				/* fill up the entire div */
}

#menu {
	float: left;
	border: 1px solid #000;
	border-bottom: none;		/* avoid a double border */
	clear: both;				/* clear:both makes sure the content div doesn't float next to this one but stays under it */
	width:100%;
	height:40px;
	padding: 0 30px;
	background-color: #FFF;
	text-align: left;
	font-size: 85%;
}

#menu a:hover {
	background-color: #009FC1;
}

#userbar {
	background-color: #fff;
	float: right;
	width: 400px;
	height: 60px;
}

#footer {
	clear: both;
}

/* begin table styles */
table {
	border-collapse: collapse;
	width: 100%;
}

table a {
	color: #000;
}

table a:hover {
	color:#373737;
	text-decoration: none;
}

th {
	background-color: #B40E1F;
	color: #F0F0F0;
}

td {
	padding: 5px;
}

/* Begin font styles */
h1,h4, #footer {
	font-family: Arial;
	color: #F1F3F1;
}

h3 {margin: 0; padding: 0;}

/* Menu styles */
.item {
	background-color: #00728B;
	border: 1px solid #032472;
	color: #FFF;
	font-family: Arial;
	padding: 3px;
	text-decoration: none;
}

.leftpart {
	width: 70%;
}

.rightpart {
	width: 30%;
}

.small {
	font-size: 75%;
	color: #373737;
}
#footer {
	font-size: 65%;
	padding: 3px 0 0 0;
}

.topic-post {
	height: 100px;
	overflow: auto;
}

.post-content {
	padding: 30px;
}

textarea {
	width: 500px;
	height: 200px;
}
</style>
<body>
<h1>AIUB STUDENTS FORUM</h1>
<h4>A place where students share their Thoughts</h4>
	<div id="wrapper">
	<div id="menu">
		<a class="item" href="/forum/index.php">Home</a> -
		<a class="item" href="/forum/create_topic.php">Create a topic</a> -
		<a class="item" href="/forum/create_cat.php">Create a category</a>
		
		<div id="userbar">
		<?php
 session_start();
 if(isset($_SESSION['signed_in'])){
   echo 'Welcome, ' . $_SESSION['user_name'] . '. <a href="index.php">Proceed to the forum overview</a>. <a href="signout.php" style="color:red">Sign Out</a>';
	 
	 
	 	}
 	else
 	{
 		echo '<b style="color:green;">Ask a Question or share your Thoughts!</b> <a href="signin.php">Sign in</a> or <a href="signup.php">Create an account</a>.';
 	}
?>
</div>
</div>
		<div id="content">
	


