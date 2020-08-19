
<?php include "functions.php"; ?>
<?php delete_user(); ?>
<?php include "header.php"; ?>

<body>
    <div class="container-fluid">
        <div class="col-sm-3">
            <h1 class="text-center">Delete user</h1>
            <div class="form-group">
                <form action="form_delete.php" method="post">
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