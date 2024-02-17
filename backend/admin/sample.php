<?php
  session_start();
  include('assets/inc/config.php');
  include('assets/inc/checklogin.php');
  check_login();
  $aid=$_SESSION['ad_id'];
?>

                                                <?php
                                                    //code for summing up total number of salary
                                                    $result ="SELECT sum(pay_emp_salary) FROM his_payrolls";
                                                    $stmt = $mysqli->prepare($result);
                                                    $stmt->execute();
                                                    $stmt->bind_result($totalsalary);
                                                    $stmt->fetch();
                                                    $stmt->close();
                                                ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <link rel="stylesheet" href="./assets/css/payroll.css">
    </head>

<body>

<div class="container">    
        <h3 class="text-dark mt-1"><span data-plugin="counterup"> $ <?php echo $totalsalary;?></span></h3>
        <p class="text-muted mb-1 text-truncate">Total Salary</p>   
        <a href="his_admin_dashboard.php" class="btn"> back </a>
</div>                               
</body>
</html>