<?php
/**
 * Created by PhpStorm.
 * User: Bate Agnes
 * Date: 7/27/2018
 * Time: 2:07 PM
 */
require_once('db.php');
class item {
    public $item_type;
    public $item_town;
    public $samaritan_num;

    public function __construct($item_town,$item_type,$samaritan_num){
        $this->item_town = $item_town;
        $this->item_type = $item_type;
        $this->samaritan_num  = $samaritan_num;
    }
    public function add_to_item($con,$loser){
        $query = "INSERT INTO item(people_id,date_found,contact_info,item_town,item_type) VALUES ('$loser',current_date() ,'$this->samaritan_num','$this->item_town','$this->item_type')";
        $run_query = mysqli_query($con,$query);
        if ($run_query){

            
        }
            
        else
            echo "error in insert query";

    }

    public function is_in_item($con, $loser)
    {
        $query = "SELECT * FROM item INNER JOIN people on item.people_id=people.people_id WHERE item.people_id='$loser' AND item_type='$this->item_type' ";
        $run_query = mysqli_query($con, $query);
        return mysqli_num_rows($run_query);
    }

}