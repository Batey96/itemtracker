<?php
/**
 * Created by PhpStorm.
 * User: Bate Agnes
 * Date: 7/26/2018
 * Time: 12:28 AM
 */
require_once('db.php');
class person {
public $fname;
public $lname;
public $tel;
    public  function __construct($fname,$lname){
            $this->fname = $fname;
            $this->lname =   $lname;
    }

    public  function is_in_item($con){
       $query = "SELECT * FROM item INNER JOIN people on item.people_id=people.people_id WHERE Fname='$this->fname' AND Lname='$this->lname'";
       $run_query = mysqli_query($con,$query);
        return mysqli_num_rows($run_query);
    }
    public function in_people($con)
    {
        //$arr = array();
        $query = "SELECT * FROM people WHERE Fname='$this->fname' AND Lname='$this->lname'";
        $run_query = mysqli_query($con,$query);
        $row  = mysqli_fetch_assoc($run_query);
        return mysqli_num_rows($run_query);
      //  $arr[1] = $row['people_id'];
       // return $arr;
    }
    public function info($con)
    {
        $arr = array();
        $query = "SELECT * FROM people WHERE Fname='$this->fname' AND Lname='$this->lname'";
        $run_query = mysqli_query($con,$query);
        $row  = mysqli_fetch_assoc($run_query);
        $arr = $row;
        return $arr;
    }
    public function add_to_people($con)
    {
        $query = "INSERT INTO people(Fname,Lname) VALUES ('$this->fname','$this->lname')";
        $run_query = mysqli_query($con,$query);
    }
    function update_people($con,$tel){
        $update = "UPDATE people SET telephone='$tel' WHERE Fname='$this->fname' AND Lname='$this->lname'";
        mysqli_query($con,$update);
    }
    public function show_his_lost_items($con){
        $retriev = "SELECT * FROM item INNER JOIN people on item.people_id=people.people_id WHERE Fname='$this->fname' AND Lname='$this->lname'";
        $exec = mysqli_query($con,$retriev);
        echo '<div class="col-sm-5">';
        while($row = mysqli_fetch_assoc($exec)){
            $name = $row['Fname'].' '.$row['Lname'];
            $town = $row['item_town'];
            $type = $row['item_type'];
            $contact = $row['contact_info'];

            echo "
            <div class='row'>
				<article class='col-xs-12'>
					<h3>$name</h3>
					<p><button class='btn btn-success' style='background-color: green' data-toggle='modal' data-target='#myModal' >Access information</button></p>
					<p class='pull-right'><span class='label label-default'>keyword</span> <span class='label label-default'>tag</span></p>
					<ul class='list-inline'>
					<li>$type</li>
					</ul>
				</article>
			</div>
                ";
        }
        echo '</div>';
    }
}