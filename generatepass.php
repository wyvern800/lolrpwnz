<?php
require_once('config.php');
$senha = 'kkkk';
$hash = crypt($senha, MINI_SALT . SALT_COST . '$' . BIG_SALT . '$');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo WEBSITE_NAME ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo BASEURL; ?>/assets/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <script type="text/javascript">
        $(document).ready(function(e) {
            var h = $('nav').height() + 20;
            $('body').animate({ paddingTop: h });
        });
    </script>
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

<?php echo '
<div class="panel panel-primary" width="80%">
    <div class="panel-heading">
        <h3 class="panel-title">Senha Encriptada</h3>
    </div>
    <div class="panel-body">
        <center><strong><h1> '.$hash.'</h1></strong></h2></center>
    </div>
</div>';
?>

