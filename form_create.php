<?php include "db_create.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-sm-3">
                <div class="form-group">
                    <form action="db_create.php" method="post">
                        <label for="username">Username:</label>
                        <input class="form-control" type="text" name="username">
                        <label for="password">Password:</label>
                        <input class="form-control" type="text" name="password">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </form>
                </div>
            </div>
            <div class="form-group">
            <form>
                <input type="button" value="Go back!" onclick="history.back()">
            </form>
            </div>
        </div>
    </body>
</html>