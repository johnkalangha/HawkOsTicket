
        </div>
    </div>
    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs">
                <b>HawkOs Theme AdminLTE by <a href="https://teamredhawk.net" target="_blank">Team RedHawk</a> Version</b> 1.3.10
            </div>
            <strong>Copyright &copy; <?php echo date('Y'); ?> <?php echo (string) $ost->company ?: 'osTicket.com'; ?>.</strong> All rights
            reserved. <a id="poweredBy" href="http://osticket.com" target="_blank"><?php echo __('Helpdesk software - powered by osTicket'); ?></a>
        </div>
        <!-- /.container -->
    </footer>
    <div class="modal fade" id="myload" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <img class="center-block centered" src="<?php echo ROOT_PATH; ?>images/FhHRx-Spinner.gif"/>
                        </div>
                        <div class="col-md-8">
                            <h4><?php echo __('Please Wait!');?></h4>
                            <p><?php echo __('Please wait... it will take a second!');?></p>
                        </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- theme switcher -->
    <?php if($custom_theme['client']['choose']) { ?>
    <div id="switcher">
        <div class="switcher box box-primary" id="sw-theme">
            <a href="#" ui-toggle-class="active" target="#sw-theme" class="bg-primary sw-btn">
                <i class="fa fa-gear"></i>
            </a>
            <div class="box-header">
                <h3 class="box-title">
                    <?php echo __('Theme Switcher'); ?>
                </h3>
            </div>
            <div class="box-body p-a">
                <p>Themes:</p>
                <div data-target="bg" class="text-center">
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-blue m-a-0">
                        <input type="radio" name="theme" value="skin-blue" hidden>
                        Blue
                    </label>
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-black m-a-0">
                            <input type="radio" name="theme" value="skin-black" hidden>
                            Black
                    </label>
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-red m-a-0">
                            <input type="radio" name="theme" value="skin-red" hidden>
                            Red
                    </label>
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-yellow m-a-0">
                        <input type="radio" name="theme" value="skin-yellow" hidden>
                        Yellow
                    </label>
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-purple m-a-0">
                        <input type="radio" name="theme" value="skin-purple" hidden>
                        Purple
                    </label>
                    <label class="p-a col-xs-6 btn btn-lg btn-block bg-green m-a-0">
                        <input type="radio" name="theme" value="skin-green" hidden>
                        Green
                    </label>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
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
<!-- JqueryStorageApi -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/jquery-storage/jquery.storageapi.min.js"></script>
<!-- PACE -->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/components/PACE/pace.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!--<script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/app.js"></script>-->
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/ui-toggle-class.js"></script> 
<script src="<?php echo ROOT_PATH; ?>assets/adminlte/js/hawk-app.js"></script>
<script type="text/javascript">
    getConfig().resolve(<?php
        include INCLUDE_DIR . 'ajax.config.php';
        $api = new ConfigAjaxAPI();
        print $api->client(false);
    ?>);
</script>
</body>
</html>
