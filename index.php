<?php include_once "site_header.php";
if(isset($_COOKIE['fname']) && isset($_COOKIE['lname']) && isset($_POST['search_tel'])){
    require"person.php";
    $tel = $_POST['search_tel'];
    $person = new person($_COOKIE['fname'],$_COOKIE['lname']);
    $person->update_people($con,$tel);
    unset($_COOKIE['fname']);
    unset($_COOKIE['lname']);
    setcookie("fname", "", time() - 3600);
    setcookie("lname", "", time() - 3600);
    echo'<script type="text/javascript" language="JavaScript">alert("Your Information has been Updated..")</script>';
}
?>
    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 style="color: darkgreen">Item tracker</h1>
                <p>WE HAVE PUT SMILES ON FACES! item tracker reunites you with your lost possession</p>
                <a href="report.php" class="btn btn-success btn-lg" style="background-color: darkgreen">Engage Now</a>
				<form style="margin-top:3px" class="header-content-inner" role="search" action="result.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="First and last name Example: Batey Takuntoh" id="query" name="result_query" required="true"/>
					</div>
					<button type="submit" class="btn btn-success" style="background-color: limegreen" name="search_btn"><span class="glyphicon glyphicon-search"></span> Search</button>
				</form>
            </div>
        </div>
    </header>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
