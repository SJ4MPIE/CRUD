<?php include "functions.php"; ?>
<?php update_user(); ?>
<?php include "header.php"; ?>

<body>
    <div class="container-fluid">
        <div class="col-sm-3">
            <h1 class="text-center">Update user</h1>
            <div class="form-group">
                <form action="form_update.php" method="post">
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
    </div>
</body>

</html>