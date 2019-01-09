<?php
/*********************************************************************
    class.themes.php

    External adaptation themes for osTicket

    RedHawk
    Luffynando
    Copyright by TeamRedhawk (www.teamredhawk.net)

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.
**********************************************************************/
/**
 * basic adaptation
 */
class HelperTheme{
    function getStatusBag($status){
        if($status == 'Open'){
            return '<span class="label label-warning">'.$status.'</span>';
        }elseif($status == 'Resolved'){
            return '<span class="label label-success">'.$status.'</span>';
        }else{
            return '<span class="label label-danger">'.$status.'</span>';
        }
    }

    function getVersion(){
        return 'v.1.3.10';
    }

    function getOptions(){
        $file = INCLUDE_DIR.'themes/config.json';
        return JsonDataParser::decode(file_get_contents($file));
    }

    function setOptions($mix){
        $file = INCLUDE_DIR.'themes/config.json';
        file_put_contents($file,JsonDataEncoder::encode($mix));
    }

    function validateOptions($vars, &$errors){
        //clientvalidation
        if($vars['c_fixed']=='1' && $vars['c_boxed']=='1')
            $errors['err']=sprintf('%s - %s', __('Fixed and booxed'), __('You cant use fixed and boxed layouts together'));
        return (!$errors);    
    }
}