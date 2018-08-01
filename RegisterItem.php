<?php

require("person.php");
require('item.php');


if(isset($_POST['report_btn'])){
    $fname = strtolower($_POST['report_fname']);
    $lname = strtolower($_POST['report_lname']);
    $tel =$_POST['report_tel'];
    $town = strtolower($_POST['report_town']);
    $type = strtolower($_POST['item_type']);
    $person = new person($fname,$lname);
    $lost_item = new item($town,$type,$tel);

    /*** start of logic**/
    if (!$person->in_people($con)) {
        $person->add_to_people($con);
        $lost_item->add_to_item($con,$person->info($con)['people_id']);
    } else {
        if (!$lost_item->is_in_item($con, $person->info($con)['people_id'])) {
            $lost_item->add_to_item($con, $person->info($con)['people_id']);
            /** check if the person has a phone then send him an sms about his lost item */
                require"sms/src/Osms.php";
                $config = array(
                    'token' => 'Basic TUR6QXVzY2huV0FFQVZjZldXalF1b2dVSnB5RzhybkU6MzF1RmdSTW4wdFNSU3psTw=='
                );
                $sms = new \Osms\Osms($config);
                $sms->sendSms("tel:+237691968422","tel:+237673535042",'Dear Cient to better track down your lost items we urge you to always be on guard','ItemTracker');
        }
    else {
        echo "item exists";
    }
        
    }
}else
    header("Location:report.php");