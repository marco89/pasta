<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New pasta type</title>
</head>

<body>

</body>

</html>

<?php

include "regions.php";
include "types.php";


?>

<body>
    <div class="container-fluid">
        <form action="insert.php" method="POST">
            <div class="container-fluid" style="width: 400px">
                <h1>Add a new variety of pasta to our library</h1>
                <br>
            </div>
            <div class="form-group">
                <!--why doesn't width scaling work here?-->
                <label for="exampleInputEmail1"></label>
                <input type="text" id="name" name="name" placeholder="What is the pasta called?" style="width: 400px;" />
            </div>
            <div class="form-group">
                <!--why doesn't width scaling work here?-->
                <label for="exampleInputEmail1"></label>
                <input type="text" id="pairing" name="pairing" value="<?= $_POST['pairing'] ?? ''; ?>" placeholder="What do you pair with this pasta?" style="width: 400px;" />
                <small id="pairingHelp" class="form-text text-muted">For example, linguini con vongole is paired with clams, so this field would be "Clams".</small>
            </div>
            <select id="region" name="region" class="form-control" style="width: 400px">
                <option hidden selected="selected">What region is it from?</option>
                <?php
                foreach ($regions as $region) {
                    echo "<option value='strtolower($region)'>$region</option>";
                };
                ?>
            </select>
            <select id="shape" name="shape" class="form-control" style="width: 400px">
                <option hidden selected="selected">What shape is it?</option>
                <?php
                foreach ($types as $type) {
                    echo "<option value='strtolower($type)'>$type</option>";
                };
                ?>
            </select>
            <input type="submit" class="btn btn-secondary" type="submit" value="Add to Pasta database" style="width: 400px">
        </form>
    </div>
</body>