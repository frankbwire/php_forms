<!DOCTYPE html>
<html>
<?php
    include 'connect.php';
    ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>fedha</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-warning">
        <div class="container-fluid"><a class="navbar-brand text-monospace" href="index.php" style="font-weight: bold;">FEDHA YOUTH GROUP</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav text-monospace ml-auto" style="font-weight: bold;">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Members</a>
                        <div class="dropdown-menu text-center" role="menu"><a class="dropdown-item" role="presentation" href="add_member.php">Add Member</a><a class="dropdown-item" role="presentation" href="members.php">View Members</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Contributions</a>
                        <div class="dropdown-menu text-center" role="menu"><a class="dropdown-item" role="presentation" href="add_contribution.php">Add Contribution</a><a class="dropdown-item" role="presentation" href="contributions.php">View Contributions</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Dividends</a>
                        <div class="dropdown-menu text-center" role="menu"><a class="dropdown-item" role="presentation" href="add_dividend.php">Add Dividents</a><a class="dropdown-item" role="presentation" href="dividends.php">View Dividends</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Loans</a>
                        <div class="dropdown-menu text-center" role="menu"><a class="dropdown-item" role="presentation" href="add_loan.php">Add Loan</a><a class="dropdown-item" role="presentation" href="loans.php">View Loans</a><a class="dropdown-item" role="presentation" href="loans.php"></a></div>
                    </li>
                </ul>
        </div>
        </div>
    </nav>
    <hr>
    <div>
        <div class="container">
            <h3 class="text-center">FEDHA YOUTH GROUP SYSTEM</h3>
            <p>Use the form below to add&nbsp;new&nbsp;<strong>DIVIDEND</strong>.</p>
            <hr>
            <form method="post" action="add_dividend.php">
                <div class="form-row">
                         <input type="text" name="did" value="DIV-<?php echo rand(10,99).rand(10,99);  ?>" readonly required hidden>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">MemberID:</label><input class="form-control form-control-sm" type="text" name="mid" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">PersonalTotal:</label><input class="form-control form-control-sm" type="number" name="dpt" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Dividends:</label><input class="form-control form-control-sm" type="number" name="dd" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">GroupTotalShares</label><input class="form-control form-control-sm" type="number" name="dgt" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">MemberDividends:</label><input class="form-control form-control-sm" type="number" required name="dmd"></div>
                    <div class="col-md-6 text-center" style="padding: 10px;padding-top: 30px;"><button class="btn btn-success btn-sm text-monospace" type="submit" name="div"><i class="fa fa-plus" ></i>&nbsp;Dividend</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php
    //
    
    if(isset($_POST["div"])){
        $mid=$_POST["mid"]; 
        $did=$_POST["did"]; 
       $dpt=$_POST["dpt"]; 
       $dgt=$_POST["dgt"]; 
       $dd=$_POST["dd"]; 
       $dmd=$_POST["dmd"]; 
       //
        $sql="INSERT INTO `dividends` (`dividend_id`, `member_id`, `personal_total`, `grouptotalshares`, `dividends`, `member_dividends`, `date_added`) VALUES ('$did', '$mid', '$dpt', '$dgt', '$dd', '$dmd', current_timestamp());";
        $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
        //
          echo "<script type='text/javascript'>
           window.location='dividends.php';</script>";
        
    };
    //
?>
</html>