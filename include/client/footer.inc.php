
        </div>
    </div>
    <div id="footer">
        <p>Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'osTicket.com'; ?> - All rights reserved.</p>
        <a id="poweredBy" href="http://osticket.com" target="_blank"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>
    </div>
<div id="overlay"></div>
<div id="loading">
    <h4><?php echo __('Please Wait!');?></h4>
    <p><?php echo __('Please wait... it will take a second!');?></p>
</div>
</div>
<?php
if (($lang = Internationalization::getCurrentLanguage()) && $lang != 'en_US') { ?>
    <script type="text/javascript" src="ajax.php/i18n/<?php
        echo $lang; ?>/js"></script>
<?php } ?>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/adminlte.min.js"></script>
<!-- PACE -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/PACE/pace.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/demo.js"></script>-->
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
</body>
</html>
