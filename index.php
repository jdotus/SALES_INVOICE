<?php 
    include 'dbcon.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* * {
            margin: 0;
            padding: 0;
        } */

    </style>
</head>
    <body>
        <form action="2nd.php" method="post">
            <div class="mb-3">
                <label for="fullname" class="form-label">Name: </label>
                <input
                    type="text"
                    class="form-control"
                    name="fullname"
                    id="fullname"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address: </label>
                <input
                    type="text"
                    class="form-control"
                    name="address"
                    id="address"
                    aria-describedby="helpId"
                    placeholder=""
                />
                <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            <button type="submit" name="submit">Print</button>
        </form>
       
    </body>
</html>