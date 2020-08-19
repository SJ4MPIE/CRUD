<?php
include "db.php";
include "functions.php";
include "header.php";
?>
<h1 class="text-center">Read users</h1>
<?php read_rows(); ?>
<form>
    <input type="button" value="Go back!" onclick="history.back()">
</form>