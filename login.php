<?php include_once "header.php"; ?>
<?php
if(isset($_POST['calc'])){
    $name = $_POST['name'];
    $loan = $_POST['loan'];
    $years = $_POST['years']; 
    header('location:result.php');
}
?>
    <div class="container">
        <div class="row">
        <h1 class="display-2 text-dark text-center mx-auto my-5 font-weight-bold">Loan Calculate</h1>
            <div class="col-6 offset-3 my-5">
                <form method="POST" action="result.php">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputname" placeholder="Name" name="name">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="inputtext" placeholder="Loan" name="loan">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" id="inputnumber" placeholder="Years" name="years">
                    </div>
                    <button type="submit" name="calc" class="btn btn-danger form-control">Calculate</button>
                </form>
            </div>
        </div>
    </div>
<?php include_once "footer.php"; ?>