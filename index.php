<?php
include 'functions.php';

if (isset($_GET['lunghezza'])) {
    $lunghezza = $_GET['lunghezza'];
    $my_password = generatePassword($lunghezza);
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>PHP Strong Password Generator</title>
</head>

<body>

    <main class="container">
        <h1 class="d-flex justify-content-center my-4">Password Generator</h1>
        <form action="" method="get">
            <div class="input-group my-4">
                <label for="lunghezza">Metti la lunghezza della password da generare:</label>
                <input type="number" name="lunghezza" min="5" max="20" class="form-control mx-2" id="lunghezza" placeholder="Lunghezza">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Invia</button>
            </div>
            <div><?php echo " La tua password è: $my_password" ?></div>
        </form>
    </main>

</body>

</html>