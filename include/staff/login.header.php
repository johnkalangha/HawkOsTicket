<?php
defined('OSTSCPINC') or die('Invalid path');
header("X-Frame-Options: SAMEORIGIN");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="refresh" content="7200" />
    <title>osTicket :: <?php echo __('Agent Login'); ?></title>
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/css/AdminLTE.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/fonts/font.css">

    <link rel="stylesheet" href="css/login.css" type="text/css" />
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/font-awesome.min.css?035fd0a"/>
    <meta name="robots" content="noindex" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />
    <!-- jQuery 3 -->
    <script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/jquery/dist/jquery.min.js"></script>
    <!-- jQueryMigrate -->
    <script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/jquery-migrate-3.0.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("input:not(.dp):visible:enabled:first").focus();
         });
    </script>
</head>
<body class="hold-transition login-page brickwall">
<div class="login-box">

