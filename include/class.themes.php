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
}