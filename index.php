<?php include "php/connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Magebit Test</title>
  <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>

<?php
$email = '';
$errors = array('email'=>'', 'checkbox'=>'');


if(isset($_POST['submit'])){

  if(empty($_POST['email'])){
    $errors['email'] = "Email address is required";
  } else {
    $email = $_POST['email'];

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors['email'] = "Please provide a valid email address";
    }

    if(preg_match('/\.co$/', $email)){
        $errors['email'] = "We are not accepting subscriptions from Columbian emails";
    }
  }

  if(empty($_POST['checkbox'])){
    $errors['checkbox'] = "You must accept the terms and conditions";
  }

  if(array_filter($errors)){
    // echo "errors!";
  } else {
    $email = mysqli_real_escape_string($conn, $_POST['email']);

    $sql = "INSERT INTO emails(id,address,time) VALUES('', '$email', '')";
    if(mysqli_query($conn, $sql)){
      header('Location: success.php');
    } else {
      echo 'error in the query: ' . mysqli_error($conn);
    }
  }
}
?>

<div class="wrapper">
  <div class="content-right">
      <nav class="navigation">     
          <div class="extra-logo">
            <div class="logo">
              <div class="logo1">
                <img class="fruity" src="Images\Union.png" alt="">
              </div>
              <div class="logo2">
                <!-- <img class="text-logo" src="Images\pineapple..png" alt=""> -->
                <div class="text-logo">pineapple.</div>
              </div>
            </div>
          </div>
            <div class="nav-list">
                <ul>
                  <li><a href="#">About</a></li>
                  <li><a href="#">How It Works</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
            </div>
      </nav>  

    <div class="content-box">
      <div class="subscription-box change-from">

          <div class="subscr-text">
            <h1>Subscribe to newsletter</h1>
            <p>Subscribe to our newsletter and get 10% discount on pineapple glasses.</p>
          </div>
        <form action="" method="POST" class="form" name="form" id="form">
          <label class="email" for="email"></label>
          <input name="email" class="form-field" id="email" placeholder="Type your email address here…" value="<?php echo htmlspecialchars($email); ?>">      
          <div class="error hidden">Email address is required</div>
          <div class="error columbian">We are not accepting subscriptions from Columbian emails</div>
          <div class="error"><?php echo $errors['email']?></div>
          <button name="submit" id="button" class="" type="submit" value="insert" onclick="valid()">
            <img src="images/ic_arrow.svg" alt="">
          </button>
          <br>     
          <div class="checkbox-line">
            <div class="center-checkbox">
              <input type="checkbox" name="checkbox" class="checkbox-input" id="checkbox">
              <label class="checkbox" id="checkbox">I agree to <a href="#">terms of service</a></label>
            </div>
            <div id="agree" class="error hidden">You must accept the terms and conditions</div>
            <div id="agree" class="error"><?php echo $errors['checkbox']?></div>
          </div>     
        </form>
      </div>

        <div name="success-box" class="success-box hidden">
          <div class="subscr-text">      
            <img src="images/throphy.png" alt="">
            <h1>Thanks for subscribing!</h1>
            <p>You have successfully subscribed to our email listing. Check your email for the discount code.</p>
          </div>
        </div>

        <div class="handles">
          <a href="#">
            <div id="fb" onclick="document.getElementById('fb').style.background='url(images/Fb3.png)'"></div>
          </a>
          <a href="#">
            <div id="ig" onclick="document.getElementById('ig').style.background='url(images/Instagram3.png)'"></div>
          </a>
          <a href="#">
            <div id="twt" onclick="document.getElementById('twt').style.background='url(images/Twt3.png)'"></div>
          </a>
          <a href="#">
            <div id="yt" onclick="document.getElementById('yt').style.background='url(images/Youtube3.png)'"></div>
          </a>
        </div>

    </div>
  </div>
</div>

<!-- Uncomment the script tag below to test JavaScript validation --> 
<!-- <script src="validate.js"></script> --> 

</body>
</html>