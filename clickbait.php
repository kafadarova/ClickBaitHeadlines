<?php

 ?>
 <!DOCTYPE html>
 <html>
   <head>

     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <title><?php echo TITLE; ?></title>

     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
   <body>
<div class="container">
  <h1><?php TITLE; ?></h1>
  <p class="lead">Hate click bait? Turn those annoying headlines into realist and honest ones using this simple program.</p>

  <div class="row">
    <form class="col-sm-8 col-sm-offset-2" action="" method="post">
<textarea class="form-control input-lg" name="clickbait_headline" placeholder="Paste click bait headline here"></textarea>
<button type="submit" class="btn btn-primary btn-lig pull-right" name="fix_submit">Make honest</button>
    </form>

  </div>
</div>

      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
  </html>
