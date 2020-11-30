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
            <p>Use the form below to add&nbsp;new <strong>MEMBER</strong>.</p>
            <hr>
            <form method="post" action="add_member.php">
                <div class="form-row">
                    <input type="text" name="mid" value="FYG-M-<?php echo rand(10,99).rand(10,99);  ?>" readonly required hidden>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Name:</label><input class="form-control form-control-sm" type="text" name="mname" required></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Age:</label><input class="form-control form-control-sm" type="number" required name="mage"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Email:</label><input class="form-control form-control-sm" type="email" required name="memail"></div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Gender:</label>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1" name="mgender" value="male" required><label class="form-check-label" for="formCheck-1">Male</label></div>
                        <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2" name="mgender" value="female" required><label class="form-check-label" for="formCheck-2">Female</label></div>
                    </div>
                    <div class="col-md-6" style="padding: 10px;"><label class="text-monospace">Registration Fees:</label><input class="form-control form-control-sm" type="number" required name="mreg"></div>
                    <div class="col-md-6 text-center" style="padding: 10px;padding-top: 30px;"><button class="btn btn-success btn-sm text-monospace" type="submit" name="reg"><i class="fa fa-plus"></i>&nbsp;Register</button></div>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
<?php
    //
    
    if(isset($_POST["reg"])){
        $mid=$_POST["mid"]; 
        $mname= $_POST["mname"]; 
        $mname2=str_replace(' ','.',$mname);
        $memail=$_POST["memail"]; 
        $mage=$_POST["mage"]; 
        $mgender=$_POST["mgender"]; 
        $mreg=$_POST["mreg"]; 
        $mid=$_POST["mid"];
        
        $sql="INSERT INTO `members` (`member_id`, `names`, `age`, `gender`, `registration_amount`, `email`, `registration_date`) VALUES ('$mid', '$mname2', '$mage', '$mgender', '$mreg', '$memail', current_timestamp());";
        $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
        //
          echo "<script type='text/javascript'>
           window.location='members.php';</script>";
        
    };
    //
?>
</html>