<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>

<html>
    <head>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    </head>
    <?php 
    
    ?>
    <body>
        <div class="panel">
            <div class="panel-body">
                <?php header( "refresh:5;url=wherever.php" );?>
                <img src="<?php echo base_url("image/ajax-loader.gif");?>">
            </div>
        </div>
    </body>
</html>