<?php
$name = "";
$email = "";
$phone = "";
$address = "";

$errorMessage= "";
$successMessage="";

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
}

do{
    if (empty($name)||empty($email)||empty($phone)||empty($address)) {
        $errorMessage = "All fields are required";
        break;
    }

    $name = "";
    $email = "";
    $phone = "";
    $address = "";

    $successMessage= "Passenger added successfully ";

}while(false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>clinic</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container my-5">
            <h2> New passenger </h2>
            <?php
            if (!empty($errorMessage)) {
                echo"
                    <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        <strong> $errorMessage </strong>
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div> 
                ";
            } 

            ?>

            <form method="post">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-lable">Name</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="name" value="<? echo $name; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-lable">E-mail</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" value="<? echo $email; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-lable">Phone</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="phone" value="<? echo $phone; ?>">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-lable">Address</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="address" value="<? echo $address; ?>">
                    </div>
                </div>

                <?php
                if (!empty($successMessage)) {
                    echo "
                    <div class='row mb-3'>
                        <div class='offset-sm-3 col-sm-6'>
                            <div class='alert alert-success alert-dismissible fade show' rple='alert'>
                                <strong>$successMessage</strong>
                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>


                        </div>
                    </div>
                    ";
                }
                ?>
                

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grrid">
                        <button type="submit" class="btn btn-primary"></button>
                    </div>
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="/clinic/index.php" role="button"></a>
                    </div>

            </form>
        </div>
    </body>
</html>