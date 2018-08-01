<!-- Center Column -->
<?php include_once"db.php"?>
		<div class="col-sm-6">

            <hr> <!-- Alert -->
			<div class="alert alert-danger" role="alert">
				<strong>Recently found item Owners</strong>

			</div>
         <?php
            $retrieve = "SELECT * FROM item INNER JOIN people on item.people_id=people.people_id ORDER by item_id DESC limit 4";
            $exec = mysqli_query($con,$retrieve);
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
         ?>
<!-- Articles -->



        </div><!--/Center Column-->


<!-- Right Column -->
<!--/Right Column -->

<!--/container-fluid-->

