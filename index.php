<?php

$output = '';
$error = '';

// check if form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  if(!$_POST['name']){
    $error = "<br>- Please enter your name";
  }

  if(!$_POST['email']){
    $error .= "<br>- Please enter your email";
  }

  if(!$_POST['message']){
    $error .= "<br>- Please enter a message";
  }

  if(!isset($_POST['check'])){
    $error .= "<br>- Please confirm you are human";
  }

  if($error){
    $output = '<p class="alert alert-danger" role="alert"><strong>Whoops, there is an error.</strong> Please correct the following: '.$error.'</p>';
  }else{
    // mail("ivan_yosifov@yahoo.com", "Contact message", "Name: ".$_POST['name']." Email: ".$_POST['email']." Message: ".$_POST['message']);

    $output = '<p class="alert alert-success text-center" role="alert">Thank you! I\'ll get back to you as soon as possible.</p>';
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="A simple contact form">
  <meta name="author" content="Ivan Yosifov">
  <link rel="icon" href="email.ico">

  <title>Contact Me</title>
  
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="styles.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1 class="text-center">Contact Form</h1>

          <?php echo $output; ?>

          <p class="text-center">Send a message via the form below</p>

          <form action="" method="post" role="form">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Your name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Your email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Your message..."><?php if(isset($_POST['message'])) echo $_POST['message']; ?></textarea>
            </div>
            <div class="checkbox">
              <label>        
                <input type="checkbox" name="check"> I am human
              </label>
            </div>
            <div class="text-center">
              <input type="submit" value="Send Message" class="btn btn-default" name="submit">         
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
