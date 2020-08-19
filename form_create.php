<?php include "functions.php"?>
<?php db_create_user(); ?>
<?php include "header.php"; ?>

    <body>
        <div class="container-fluid">
            <div class="col-sm-3">
                <h1 class="text-center">Create user</h1>
                <div class="form-group">
                    <form action="form_create.php" method="post">
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