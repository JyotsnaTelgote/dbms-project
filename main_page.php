<?php
echo '<h2 class="fir" id="f2">LIST OF DEPOSITORS</h2>';
include('conn.php');
$sql="select customer_name, depositor.account_number, balance from 
depositor inner join account on depositor.account_number= 
account.account_number";
$res=mysqli_query($conn, $sql);
echo '<table border="1"><tr><th>Name</th><th>A/C No.</th><th> 
Balance</th><th>Details</th></tr>';
while($result=mysqli_fetch_assoc($res))
{
echo '<tr><td>'. $result['customer_name'] . '</td><td>'. 
$result['account_number'] . '</td><td>' . $result['balance'] . '</td><td>
<a href="account_detail.php?uid=' . $result['customer_name'] . ' ">View Details</a></td></tr>';
}
echo '</table>';
?>
<?php
            echo '<h2 class="fir" id="f2">LIST OF BORROWERS</h2>';
        include('conn.php');
        $sql="select customer_name,account.account_number, balance from
        borrower, loan ,account where borrower.loan_number=loan.loan_number and loan.branch_name=account.branch_name " ;
        $res=mysqli_query($conn, $sql);
        echo '<table class="php" border="1"><tr><th>Name</th><th>A/C No.</th><th>
        Balance</th><th>Details</th></tr>';
        while($result=mysqli_fetch_assoc($res))
        {
            echo '<tr><td>'. $result['customer_name'] . '</td><td>'.
            $result['account_number'] . '</td><td>' . $result['balance'] . '</td><td><a
            href="account_detail.php?uid=' . $result['customer_name'] . ' ">View
            Details</a></td></tr>';
        }
        echo '</table>';
        
        ?>