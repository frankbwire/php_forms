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
        <h4 class="text-center">FEDHA YOUTH GROUP SYSTEM</h4>
        <p>The table below shows all&nbsp;<strong>LOANS&nbsp;</strong>made by the group.</p>
        <hr>
        <div class="table-responsive text-center" style="height: 10cm;font-size: 14px;letter-spacing: 1px;">
            <table class="table table-striped table-sm">
                <thead style="background-color: #80de54;letter-spacing: 1px;font-size: 14px;">
                    <tr class="text-monospace">
                        <th>LoanID</th>
                        <th>BorrowDate</th>
                        <th>DueDate</th>
                        <th>MemberID</th>
                        <th>LoanAmount</th>
                        <th>Total_Loan</th>
                        <th>installments</th>
                        <th>LoanType</th>
                    </tr>
                </thead>
                 <?php
            $sql="select * from loans order by date_added desc;";
            $query=mysqli_query($connect,$sql) or die (mysqli_error($connect));
            while ($row=mysqli_fetch_assoc($query)){
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $row["loan_id"];  ?></td>
                         <td><?php echo $row["borrow_date"];  ?></td>
                         <td><?php echo $row["due_date"];  ?></td>
                         <td><?php echo $row["member_id"];  ?></td>
                        <td><?php echo $row["borrow_amount"];  ?></td> 
                        <td><?php echo $row["total_loan"];  ?></td>
                         <td><?php echo $row["installments"];  ?></td>
                         <td><?php echo $row["loan_type"];  ?></td>
                        
                    </tr>
                </tbody>
                <?php
            };
                ?>
            </table>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>