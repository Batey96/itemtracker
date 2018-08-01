<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>tracker</title>

    <!-- Bootstrap Core CSS -->
    <link href="css1/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css1/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation">
    <div style="background-color:#Ff224f13;" class="container-fluid">
        <!-- Logo and responsive toggle -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" style="color: limegreen"><span ><img style="max-width:100%; max-height:100%; " src="images/logobottom.jpg"></span> ITEM TRACKER</a>
        </div>
        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="momo.php">Report</a>
                </li>
                <li class="active">
                    <a href="AgentRegister.php">Momo Agent</a>
                </li>

            </ul>

            <!-- Search
            <form class="navbar-form navbar-right" role="search" action="RegisterItem.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="search">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
            </form>
-->
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="col-sm-3">

    <!-- Form -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-log-in"></span>
                Agent Log In
            </h3>
        </div>
        <div class="panel-body">
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-success">
            </form>
        </div>
    </div>

    <!-- Progress Bars -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">
                <span class="glyphicon glyphicon-scale"></span>
                Agent Registration form
            </h3>
        </div>
        <div class="panel panel-default">

            <div class="panel-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="telephone">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="uid" name="uid" placeholder="region">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="confirm Password">
                    </div>
                    <button type="submit" class="btn btn-success">submit</button>
                </form>
            </div>
        </div>
    </div>


    <!-- Carousel -->

</div>
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport bug workaround -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <!-- Placeholder Images -->
    <script src="js/holder.min.js"></script>

</body>

</html>
