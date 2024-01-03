<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    
    <link rel="stylesheet" href="../CSS/explore-css.css" />
</head>
<body>
<header>

  <div class="flexbox-container">

    <div class="flexbox-item flexbox-item-1">

      <ul class="nav-ul">
        <li class="nav-li"><a href="../index.html">Lokanatha Phang</a></li>
        <li class="nav-li"><a href="../HTML/about_me.html">About Me</a></li>
        <li class="nav-li"><a href="../HTML/explore.html">Explore</a></li>
      </ul>

    </div>

  </div>

</header> 

<section>

<div class="flexbox-container">

<div class="flexbox-item flexbox-item-2">
  
<h2>Information successfully inserted</h2>
  <?php

    //store our connection credentials in variables;
    $server = 'sql308.epizy.com';
    $user = 'epiz_32921643';
    $pass = 'gfau09QNG2jR';//there is no password for the my current setup of MySQL
    $dbase = 'epiz_32921643_sideproject';
    
    //make the actual connection to myaql and the chosen database
    $conn = mysqli_connect($server, $user, $pass, $dbase);
    
    //if the connection failed print error message
    if (!$conn)
     {
     die('Could not connect to database because: ' . mysqli_connect_error());
     }
    // else echo "You are successfully connected to $dbase <br>"; 

	 //retrieve form data and store them in PHP variables
	 $name = $_POST['name-retrieve'];
	 $email = $_POST['email-retrieve'];
	 $message = $_POST['message'];
	 
	//  echo 'Welcome '. $_POST['name-retrieve']. '! <br>Thank you for joining. <br>';
	 
	 //use PHP variables as input to MqSQL query.
	 $qry_one = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";
	 
	 //execute the query
	 $result_one = mysqli_query($conn, $qry_one);
	 
	 //check on the success of the query
	 if($result_one);
	 else echo 'Error occurred: ' . mysqli_error($conn) . '<br><br>';
	 
	 //close the connection
	 mysqli_close($conn);
?>

    </div>

</div>

</section>

<footer>

  <div class="flexbox-container">

    <div class="flexbox-item flexbox-item-3">
      <p>&copy; Lokanatha Phang - Web and Graphic Design <br> Disclaimer any pictures seen was taken from <a href="https://unsplash.com">unsplash.com</a> a copyright free stock photo site to which all original images belong to their repective owners</p>
    </div>

  </div>

</footer>

</body>
</html>