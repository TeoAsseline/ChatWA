<?php
    function dateDiff($date1, $date2){
        $diff = abs($date1 - $date2); // abs pour avoir la valeur absolute, ainsi éviter d'avoir une différence négative
        $retour = array();
     
        $tmp = $diff;
        $retour['second'] = $tmp % 60;
     
        $tmp = floor( ($tmp - $retour['second']) /60 );
        $retour['minute'] = $tmp % 60;
     
        $tmp = floor( ($tmp - $retour['minute'])/60 );
        $retour['hour'] = $tmp % 24;
     
        $tmp = floor( ($tmp - $retour['hour'])  /24 );
        $retour['day'] = $tmp;
     
        return $retour;
    }
    function tempsecoule($date){
        date_default_timezone_set('Europe/Paris');
        $date=dateDiff(time(),strtotime($date));
        $str="maintenant";
        if($date['day']!=0){
            $str="Il y a ".$date['day']."j ".$date['hour']."h ".$date['minute']."m ".$date['second']."s";
        } else if($date['hour']!=0){
            $str="Il y a ".$date['hour']."h ".$date['minute']."m ".$date['second']."s";
        } else if($date['minute']!=0){
            $str="Il y a ".$date['minute']."m ".$date['second']."s";
        } else if($date['second']!=0){
            $str="Il y a ".$date['second']."s";
        }
        return $str;
    }
?>