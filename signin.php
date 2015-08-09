<?php
//signin.php
include 'connect.php';
include 'header.php';

echo '<h3>Sign in</h3>';

//first, check if the user is already signed in. If that is the case, there is no need to display this page
if(isset($_SESSION['signed_in']) && $_SESSION['signed_in'] == true)
{
	echo 'You are already signed in, you can <a href="signout.php">sign out</a> if you want.';
}
else
{
	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
		/*the form hasn't been posted yet, display it
		  note that the action="" will cause the form to post to the same page it is on */
		echo '<form method="post" action="">
			Username: <input type="text" name="user_name" />
			Password: <input type="password" name="user_pass">
			<input type="submit" value="Sign in" />
		 </form>';
	}
	else
	{
		/* so, the form has been posted, we'll process the data in three steps:
			1.	Check the data
			2.	Let the user refill the wrong fields (if necessary)
			3.	Varify if the data is correct and return the correct response
		*/
		$errors = array(); /* declare the array for later use */
		
		if(!isset($_POST['user_name']))
		{
			$errors[] = 'The username field must not be empty.';
		}
		
		if(!isset($_POST['user_pass']))
		{
			$errors[] = 'The password field must not be empty.';
		}
		
		if(!empty($errors)) /*check for an empty array, if there are errors, they're in this array (note the ! operator)*/
		{
			echo 'Uh-oh.. a couple of fields are not filled in correctly..';
			echo '<ul>';
			foreach($errors as $key => $value) /* walk through the array so all the errors get displayed */
			{
				echo '<li>' . $value . '</li>'; /* this generates a nice error list */
			}
			echo '</ul>';
		}
		else
		{
			//the form has been posted without errors, so save it
			//notice the use of mysql_real_escape_string, keep everything safe!
			//also notice the sha1 function which hashes the password
			$sql = "SELECT 
						user_id,
						user_name,
						user_level
					FROM
						users
					WHERE
						user_name = '" . mysql_real_escape_string($_POST['user_name']) . "'
					AND
						user_pass = '" . sha1($_POST['user_pass']) . "'";
						
			$result = mysqli_query($con,$sql) or trigger_error("Sorry there is an account assigned to that userid");

 

if (mysqli_affected_rows($con) == 1) { // Available.

echo "login success! <br /><br /><h3>Thank you for login! .</h3>";

$row = mysqli_fetch_array ($result, MYSQLI_NUM);
$body = "Thank you for login. <br />";
echo "<a href=\"signout.php\">sign out</a> now! .";
$_SESSION['signed_in'] = true;
					
						$_SESSION['user_id'] 	= $row[0];
						$_SESSION['user_name'] 	= $row[1];
						$_SESSION['user_level'] = $row[2];


					session_regenerate_id();
					session_regenerate_id();
					mysqli_close($con); // Close the database connection.

exit();

}else {
session_start();
	  $_SESSION["signed_in"] = false;
}

			
		}
	}
}

include 'logout.php';
?>