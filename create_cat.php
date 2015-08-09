

<?php

//create_cat.php
include 'connect.php';
include 'header.php';

if($_SESSION['signed_in'] == false)
{
	//the user is not signed in
	echo "<h3 style=\"color:red\">sorry you have to sign in first</h3>";
}
else
{

	if($_SERVER['REQUEST_METHOD'] != 'POST')
	{
	    //the form hasn't been posted yet, display it
   	 echo '<form method="post" action="">
 		 	Category name: <input type="text" name="cat_name" /> <br /><br/>
 			<br/>Category description: <br/> <br/> <textarea name="cat_description" placeholder="Description about the category..."/></textarea>
 			<br/><input type="submit" value="Add category" />
 		 </form>';
	}
	else
	{
   	 //the form has been posted, so save it
   	 $sql = "INSERT INTO categories(cat_name, cat_description)
 		   VALUES( '".mysql_real_escape_string($_POST['cat_name'])."',
 		      '".mysql_real_escape_string($_POST['cat_description'])."' )";
   	 $result = mysqli_query($con, $sql);
  	  if(!$result)
   	 {
   	     //something went wrong, display the error
  	      echo 'Error' ;
   	 }
   	 else
   	 {
        echo 'New category successfully added. You can now <a href="index.php" style=\"background-color: #F5494B;border: 1px solid #032472;color: #FFF;font-family: Arial;padding: 3px;text-decoration: none;\"> OK </a>>Create Topic</a> under this categori';
    }
}

}





include 'footer.php';
?>
