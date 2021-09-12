<?php include_once "header.php"; ?>
<h1 class="display-2 text-dark text-center my-5">Result</h1>
<div class=" text-light mx-auto my-5" style="font-size:25px; background-color:teal; padding:50px 0 50px 110px; width:50%; font-style:italic; text-align:left; font-weight: 500; border: thin solid #605e5e; border-radius:30px 8px ;">
    Name:  <?php echo $_POST['name']; ?><br>
    Loan:  <?php echo $_POST['loan']; ?><br>
    
    Loan through years:  <?php echo $_POST['years']; ?><br>
    Loan after tax: <?php 
    if ($_POST['years'] < 3) {
         $tax = ($_POST['loan'] * 0.1) * $_POST['years'];
         $newloan = $_POST['loan'] + $tax;
         $loanresult = $newloan / (12 * $_POST['years']);
         echo $newloan. '<br>' ;
        } else if ($_POST['years'] >= 3) {
            $tax = ($_POST['loan'] * 0.15) * $_POST['years'];
            $newloan = $_POST['loan'] + $tax;
            $loanresult = $newloan / (12 * $_POST['years']);
            echo $newloan. '<br>' ;
            } ?>
    Your loan per month is: <?php echo $loanresult . '<br>' ?>
    
</div>
<?php include_once "footer.php"; ?>