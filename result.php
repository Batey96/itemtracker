
<?php
if(isset($_POST['search_btn']))
{
    include_once"site_header.php";
    require("person.php");
    $result_query = explode(" ",$_POST['result_query']);
    $person = new person($result_query[0],$result_query[1]);
    /* if we have no item like that name in item table **/
    if(!$person->is_in_item($con)){
        /** if that name is not in people table add it and ask to leave a number**/
        if(!$person->in_people($con)){
            $person->add_to_people($con);
            include_once"new_client_not_found.php";
            include_once"recent_items.php";
            include_once"site_footer.php";

        }
        /** if person already  in people*/
        else{
         //  $person_info = $person->info($con);
            /** ask to leave his umber */
         if($person->info($con)['telephone']==false || $person->info($con)['telephone']==null){
             include_once"new_client_not_found.php";
             include_once"recent_items.php";
             include_once"site_footer.php";
         }else{
             /* number was set but ask again if he wants to update it,probably he doesn't still use the set number**/
             include_once"client_not_found.php";
             include_once"recent_items.php";
             include_once"site_footer.php";
         }

        }
        /** end of if person already in people table with or without a set number** */
    }
    /** End of if person does not have an item lost */
    else{
        /** Person exists and has a lost item,so display his lost items.if he had a number,ask if he wants to update or ask him to leave a new one */
        $person_info = $person->info($con)['telephone'];
        /* if his number was not set,ask him to do so */
        if($person->info($con)['telephone']==false || $person->info($con)['telephone']==null){
            $person->show_his_lost_items($con);
            include"leave_number.html";
            include "recent_items.php";
            include_once"site_footer.php";
        }
        /**if he previously set his number,ask if he wants to update it **/
        else{
            $person->show_his_lost_items($con);
            include"update_number.html";
            include "recent_items.php";
            include_once"site_footer.php";
        }



    }


}
else
   echo"<script type='text/javascript' language='JavaScript'> window.location.href = 'index.php'</script>";




