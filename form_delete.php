<?php include "db_delete.php"; ?>
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
                <form action="db_delete.php" method="post">
                    <select name="id" id="">
                        <?php get_id(); ?>
                    </select>
                    <input class="btn btn-primary" type="submit" name="submit" value="Delete">
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