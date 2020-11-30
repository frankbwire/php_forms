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
            <p>Use the form below to add member <strong>LOAN</strong>.</p>
            <hr>
            <form method="post" action="add_loan.php">
                <div class="form-row">
                     <input type="text" name="lid" value="FYG-M-<?php echo rand(10,99).rand(10,99);  ?>" readonly required hidden>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">MemberID:</label><input class="form-control form-control-sm" type="text" name="lmid" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">MonthsContributed:</label><input class="form-control form-control-sm" type="text" name="lmc" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">TotalShares:</label><input class="form-control form-control-sm" type="text" required name="lts"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">BorrowAmount:</label><input class="form-control form-control-sm" type="text" required name="lba"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">TotalLoan:</label><input class="form-control form-control-sm" type="text" required name="ltl"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Instalments:</label><input class="form-control form-control-sm" type="text" required name="linst"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Borrow Date:</label><input class="form-control form-control-sm" type="date" required name="ldt"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Due Date:</label><input class="form-control form-control-sm" type="date" required name="ldue"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">LoanType:</label>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="ltype" value="emergency.loan"><label class="form-check-label" for="formCheck-1">Emergency Loan</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="ltype" value="short.loan"><label class="form-check-label" for="formCheck-2">Short Loan</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-3" name="ltype" value="normal.loan"><label class="form-check-label" for="formCheck-3">Normal Loan</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-4" name="ltype" value="development.loan"><label class="form-check-label" for="formCheck-4">Development Loan</label></div>
                    </div>
                    <div class="col-md-6 text-center" style="padding: 10px;padding-top: 30px;"><button class="btn btn-success btn-sm text-monospace" type="submit" name="borrow">Borrow</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php
    //
    
    if(isset($_POST["borrow"])){
        //
        $lid=$_POST["lid"];
        $ldt=$_POST["ldt"];
        $lmid=$_POST["lmid"];
        $lmc=$_POST["lmc"];
        $lts=$_POST["lts"];
        $lll= 100000;
        $lba=$_POST["lba"];
        $ltl=$_POST["ltl"];
        $ltype=$_POST["ltype"];
        $linst=$_POST["linst"];
        $ldue=$_POST["ldue"];
        //
        $sql="INSERT INTO `loans` (`loan_id`, `borrow_date`, `due_date`, `member_id`, `months_contributed`, `total_shares`, `loan_limit`, `borrow_amount`, `total_loan`, `installments`, `loan_type`, `date_added`) VALUES ('$lid', '$ldt', '$ldue', '$lmid', '$lmc', '$lts', '$lll', '$lba', '$ltl', '$linst', '$ltype', current_timestamp())";
        $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
        //
          echo "<script type='text/javascript'>
           window.location='loans.php';</script>";
        
    };
    //
?>
</html>