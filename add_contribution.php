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
    <div class="container">
        <h3 class="text-center">FEDHA YOUTH GROUP SYSTEM</h3>
        <hr>
        <p>Use the form below to add member <strong>CONTRIBUTION</strong></p>
        <hr>
        <form method="post" action="add_contribution.php">
            <div class="form-row">
                <input type="text" name="cid" value="CONT-<?php echo rand(10,99).rand(10,99);  ?>" readonly required hidden>
                <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">MemberID:</label><input class="form-control form-control-sm" type="text" name="cmid"></div>
                <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">TotalShares:</label><input class="form-control form-control-sm" type="number" name="cshares"></div> 
                <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">AmountsContributed:</label><input class="form-control form-control-sm" type="number" name="camount"></div>
                <div class="col text-center" style="padding: 10px;padding-top: 30px;"><button class="btn btn-success btn-sm text-monospace" type="submit" name="cont"><i class="fa fa-plus"></i>&nbsp;Contribute</button></div>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php
    //
    
    if(isset($_POST["cont"])){
        $cid=$_POST["cid"];
        $cmid=$_POST["cmid"];
       // $cname= $_POST["cname"]; 
        // $cname2=str_replace(' ','.',$cname);
        $cshare=$_POST["cshares"]; 
        $camt=$_POST["camount"];
        
        $sql="INSERT INTO `contributions` (`contribution_id`, `member_id`, `amount`, `total_shares`, `contribution_date`) VALUES ('$cid', '$cmid', '$camt', '$cshare', current_timestamp());";
        $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
        //
          echo "<script type='text/javascript'>
           window.location='contributions.php';</script>";
        
    };
    //
?>
</html>