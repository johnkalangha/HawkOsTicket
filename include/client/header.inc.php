<?php
$title=($cfg && is_object($cfg) && $cfg->getTitle())
    ? $cfg->getTitle() : 'osTicket :: '.__('Support Ticket System');
$signin_url = ROOT_PATH . "login.php"
    . ($thisclient ? "?e=".urlencode($thisclient->getEmail()) : "");
$signout_url = ROOT_PATH . "logout.php?auth=".$ost->getLinkToken();

header("Content-Type: text/html; charset=UTF-8");
header("X-Frame-Options: SAMEORIGIN");
if (($lang = Internationalization::getCurrentLanguage())) {
    $langs = array_unique(array($lang, $cfg->getPrimaryLanguage()));
    $langs = Internationalization::rfc1766($langs);
    header("Content-Language: ".implode(', ', $langs));
}
?>
<!DOCTYPE html>
<html<?php
if ($lang
        && ($info = Internationalization::getLanguageInfo($lang))
        && (@$info['direction'] == 'rtl'))
    echo ' dir="rtl" class="rtl"';
if ($lang) {
    echo ' lang="' . $lang . '"';
}
?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo Format::htmlchars($title); ?></title>
    <meta name="description" content="customer support platform">
    <meta name="keywords" content="osTicket, Customer support system, support ticket system">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/Ionicons/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/css/skins/skin-blue.min.css">
    <!-- Pace style -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/plugins/pace/pace.min.css">
    <!-- RedHawkCustomCss -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/css/Redhawk.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/fonts/font.css">

    <!-- jQuery 3 -->
    <script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/jquery/dist/jquery.min.js"></script>
    <!-- jQueryMigrate -->
    <script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/jquery-migrate-3.0.1.min.js"></script>

	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/osticket.css?035fd0a" media="screen"/>

    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>css/print.css?035fd0a" media="print"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>scp/css/typeahead.css?035fd0a"
         media="screen" />
    <link type="text/css" href="<?php echo ROOT_PATH; ?>css/ui-lightness/jquery-ui-1.10.3.custom.min.css?035fd0a"
        rel="stylesheet" media="screen" />
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/thread.css?035fd0a" media="screen"/>
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/redactor.css?035fd0a" media="screen"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/font-awesome.min.css?035fd0a"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/flags.css?035fd0a"/>
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/rtl.css?035fd0a"/>
    <!-- Select2 -->
    <link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/adminlte/components/select2/dist/css/select2.min.css">
    <!--<link type="text/css" rel="stylesheet" href="<?php echo ROOT_PATH; ?>css/select2.min.css?035fd0a"/>-->
    <!--<script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-1.11.2.min.js?035fd0a"></script>-->
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/jquery-ui-1.10.3.custom.min.js?035fd0a"></script>
    <script src="<?php echo ROOT_PATH; ?>js/osticket.js?035fd0a"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/filedrop.field.js?035fd0a"></script>
    <script src="<?php echo ROOT_PATH; ?>scp/js/bootstrap-typeahead.js?035fd0a"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor.min.js?035fd0a"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor-plugins.js?035fd0a"></script>
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/redactor-osticket.js?035fd0a"></script>
    <!-- Select2 -->
    <script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/select2/dist/js/select2.full.min.js"></script>
    <!--<script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/select2.min.js?035fd0a"></script>-->
    <script type="text/javascript" src="<?php echo ROOT_PATH; ?>js/fabric.min.js?035fd0a"></script>
    <?php
    if($ost && ($headers=$ost->getExtraHeaders())) {
        echo "\n\t".implode("\n\t", $headers)."\n";
    }

    // Offer alternate links for search engines
    // @see https://support.google.com/webmasters/answer/189077?hl=en
    if (($all_langs = Internationalization::getConfiguredSystemLanguages())
        && (count($all_langs) > 1)
    ) {
        $langs = Internationalization::rfc1766(array_keys($all_langs));
        $qs = array();
        parse_str($_SERVER['QUERY_STRING'], $qs);
        foreach ($langs as $L) {
            $qs['lang'] = $L; ?>
        <link rel="alternate" href="//<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>?<?php
            echo http_build_query($qs); ?>" hreflang="<?php echo $L; ?>" />
<?php
        } ?>
        <link rel="alternate" href="//<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"
            hreflang="x-default" />
<?php
    }
    ?>
</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
    <div id="container">
        <header class="main-header">
            <nav class="navbar navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <a href="<?php echo ROOT_PATH; ?>index.php"
                        title="<?php echo __('Support Center'); ?>" class="navbar-brand"><b><?php echo $ost->getConfig()->getTitle(); ?></b></a>
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="fa fa-bars"></i>
                        </button>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <?php
                    if($nav){ ?>
                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php
                            if($nav && ($navs=$nav->getNavLinks()) && is_array($navs)){
                                foreach($navs as $name =>$nav) {
                                    echo sprintf('<li class="%s"><a class="%s" href="%s"><div></div>%s</a></li>%s',$nav['active']?'active':'',$name,(ROOT_PATH.$nav['href']),$nav['desc'],"\n");
                                }
                            } ?>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                    <?php
                    }else{ ?>
                    <hr>
                    <?php
                    } ?>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <?php
                            if ($thisclient && is_object($thisclient) && $thisclient->isValid()
                            && !$thisclient->isGuest()) {
                                echo Format::htmlchars($thisclient->getName()).'&nbsp;|';
                            ?>
                            <li><a href="<?php echo ROOT_PATH; ?>profile.php"><?php echo __('Profile'); ?></a></li>
                            <li><a href="<?php echo ROOT_PATH; ?>tickets.php"><?php echo sprintf(__('Tickets <b>(%d)</b>'), $thisclient->getNumTickets()); ?></a></li>
                            <li><a href="<?php echo $signout_url; ?>"><?php echo __('Sign Out'); ?></a></li>
                            <?php
                            } elseif($nav) {
                                if ($cfg->getClientRegistrationMode() == 'public') { ?>
                                    <li class="disabled"><a href="#">
                                    <?php echo __('Guest User'); ?></a></li><?php
                                }
                                if ($thisclient && $thisclient->isValid() && $thisclient->isGuest()) { ?>
                                    <li><a href="<?php echo $signout_url; ?>"><?php echo __('Sign Out'); ?></a></li><?php
                                }
                                elseif ($cfg->getClientRegistrationMode() != 'disabled') { ?>
                                    <li><a href="<?php echo $signin_url; ?>"><?php echo __('Sign In'); ?></a></li>
                                    <?php
                                }
                            } ?>
                            <?php
                            if (($all_langs = Internationalization::getConfiguredSystemLanguages())
                                && (count($all_langs) > 1)
                            ) {
                                $count_flags= count($all_langs);
                                $qs = array(); ?>
                                <li class="dropdown tasks-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-flag-o"></i>
                                    <span class="label label-danger"><?php echo $count_flags; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                    <!-- Inner menu: contains the tasks -->
                                    <ul class="menu">
                                    <?php parse_str($_SERVER['QUERY_STRING'], $qs);
                                    foreach ($all_langs as $code=>$info) {
                                    list($lang, $locale) = explode('_', $code);
                                    $qs['lang'] = $code;
                                    ?>
                                    <li>
                                    <a class="flag flag-<?php echo strtolower($locale ?: $info['flag'] ?: $lang); ?>"
                                    href="?<?php echo http_build_query($qs);
                                    ?>" title="<?php echo Internationalization::getLanguageDescription($code); ?>"></a>
                                    </li>
                                <?php } ?>
                                    </li>
                                </ul>
                                </li>
                           <?php } ?>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <div class="content-wrapper">
            <div class="container">

         <?php if($errors['err']) { ?>
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <p><?php echo $errors['err']; ?></p>
            </div>
         <?php }elseif($msg) { ?>
            <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p><?php echo $msg; ?></p></div>
         <?php }elseif($warn) { ?>
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p><?php echo $warn; ?></p></div>
         <?php } ?>
