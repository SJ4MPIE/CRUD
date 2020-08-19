<?php include "functions.php"; ?>
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
                <form action="db_update.php" method="post">
                    <label for="username">Username:</label>
                    <input class="form-control" type="text" name="username">
                    <label for="password">Password:</label>
                    <input class="form-control" type="text" name="password">
                    <select name="id" id="">
                        <?php get_id(); ?>
                    </select>
                    <input class="btn btn-primary" type="submit" name="submit" value="Update">
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