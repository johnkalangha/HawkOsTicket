<?php
if(!defined('OSTADMININC') || !$thisstaff || !$thisstaff->isAdmin()) die('Access Denied');
$themeconf = HelperTheme::getOptions();
?>
<h2><?php echo __('Theme Settings'); ?></h2>
<p><?php echo 'Version : '.HelperTheme::getVersion(); ?></p>
<form action="settings.php?t=themes" method="post" class="save">
<?php csrf_token(); ?>
<input type="hidden" name="t" value="themes" >
<table class="form_table settings_table" width="940" border="0" cellspacing="0" cellpadding="2">
    <thead>
        <tr>
            <th colspan="2">
                <em><b><?php echo __('Client Settings'); ?></b></em>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td width="220" class="required"><?php echo __('Custom Chooser skin');?>:</td>
            <td>
                <span>
                <label><input type="radio" name="c_choose"  value="1"   <?php echo $themeconf['client']['choose']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio" name="c_choose"  value="0"   <?php echo !$themeconf['client']['choose']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Fixed Layout');?>:</td>
            <td>
                <span>
                <label><input type="radio" name="c_fixed" value="1"   <?php echo $themeconf['client']['fixed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio" name="c_fixed" value="0"   <?php echo !$themeconf['client']['fixed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Boxed Layout');?>:</td>
            <td>
                <span>
                <label><input type="radio" name="c_boxed" value="1"   <?php echo $themeconf['client']['boxed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio" name="c_boxed" value="0"   <?php echo !$themeconf['client']['boxed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Skin default');?>:</td>
            <td>
                <span>
                    <select name="c_skin">
                    <option value="">&mdash; <?php echo __('Select Default skin');?> &mdash;</option>
                    <option value="skin-blue"><?php echo __('blue'); ?></option>
                    <option value="skin-black"><?php echo __('black'); ?></option>
                    <option value="skin-red"><?php echo __('red'); ?></option>
                    <option value="skin-yellow"><?php echo __('yellow'); ?></option>
                    <option value="skin-purple"><?php echo __('purple'); ?></option>
                    <option value="skin-green"><?php echo __('green'); ?></option>
                    </select>
                </span>
            </td>
        </tr>
        <!-- Custom header custom footer-->
        <!-- -->
    </tbody>
    <tbody>
        <tr>
            <th colspan="2">
                <em><b><?php echo __('Admin Settings'); ?></b>&nbsp;
                </em>
            </th>
        </tr>
        <tr>
            <td width="220"><?php echo __('Current Unavailable');?></td>
        </tr>
        <!--<tr>
            <td width="220" class="required"><?php echo __('Custom Chooser skin');?>:</td>
            <td>
                <span>
                <label><input type="radio"   value="1"   <?php echo $themeconf['client']['choose']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio"   value="0"   <?php echo !$themeconf['client']['choose']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Fixed Layout');?>:</td>
            <td>
                <span>
                <label><input type="radio"   value="1"   <?php echo $themeconf['client']['fixed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio"   value="0"   <?php echo !$themeconf['client']['fixed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Boxed Layout');?>:</td>
            <td>
                <span>
                <label><input type="radio"   value="1"   <?php echo $themeconf['client']['boxed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Enable'); ?></b>&nbsp;</label>
                <label><input type="radio"   value="0"   <?php echo !$themeconf['client']['boxed']?'checked="checked"':''; ?> />&nbsp;<b><?php echo __('Disable'); ?></b></label>
                </span>
            </td>
        </tr>
        <tr>
            <td width="220" class="required"><?php echo __('Skin default');?>:</td>
            <td>
                <span>
                    <select name="nani">
                    <option value="">&mdash; <?php echo __('Select Default skin');?> &mdash;</option>
                    <option value=""><?php echo __('blue'); ?></option>
                    <option value=""><?php echo __('black'); ?></option>
                    <option value=""><?php echo __('red'); ?></option>
                    <option value=""><?php echo __('yellow'); ?></option>
                    <option value=""><?php echo __('purple'); ?></option>
                    <option value=""><?php echo __('green'); ?></option>
                    </select>
                </span>
            </td>
        </tr>-->
        <!-- custom admin settings -->
        <!-- -->
        <!-- Custom header custom footer-->
        <!-- -->
    </tbody>
</table>
<p style="text-align:center;">
    <input class="button" type="submit" name="submit" value="<?php echo __('Save Changes');?>">
    <input class="button" type="reset" name="reset" value="<?php echo __('Reset Changes');?>">
</p>
</form>