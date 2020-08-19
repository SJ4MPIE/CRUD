<?php
include "db.php";


//read_rows will read all the rows from user table 
//returns array 
function read_rows()
{
    global $connection;
    //Another query to perfom this will read values from DB
    $query_read = "SELECT * FROM users";

    //Perform read query
    $result = mysqli_query($connection, $query_read);

    //This will display all rows from DB
    while ($row = mysqli_fetch_assoc($result)) {
        echo "</br>";
?>
        <pre>
            <?php print_r($row); ?>
        </pre>
    <?php
    }
}

//get_id will read the user table and display all users with corresponnding ID
function get_id()
{
    global $connection;
    //Another query to perfom this will read values from DB
    $query_read = "SELECT * FROM users";

    //Perform read query
    $result = mysqli_query($connection, $query_read);

    // This will display all users with the corresponding ID
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['ID'];
        $name = $row['username'];
        echo  "<option value='$id'>$id.$name</option>";
    }
}

//db_create_user() will check if user enterd values and clicked on submit button 
//Once form is submitted values will be saved in DB 
function db_create_user()
{
    if (isset($_POST["submit"])) {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];

        //prints out username and password 
        echo "username: " . $username . "</br>";
        echo "password: " . $password;


        //Query to perform this will insert values in DB
        $query_create = "INSERT INTO users(username, password)";
        $query_create .= "VALUES ('$username', '$password')";

        //perform query 
        $result = mysqli_query($connection, $query_create);

        //Check if query was successful if not display error
        if (!$result) {
            die('Query Failed' . mysqli_error($result));
        } ?>
        <input type="button" value="Go back!" onclick="history.back()">
<?php
    }
}

function update_user()
{
    if (isset($_POST["submit"])) {
        global $connection;
        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query_update = "UPDATE users SET ";
        $query_update .= "username = '$username', ";
        $query_update .= "password = '$password' ";
        $query_update .= "WHERE ID = $id ";
        var_dump($query_update);
        $result = mysqli_query($connection, $query_update);

        if (!$result) {
            die('Query Failed ' . mysqli_error($connection));
        }
    }
}

function delete_user(){
    if(isset($_POST["submit"])) {
        global $connection;
        $id = $_POST["id"];

        $query_delete = "DELETE FROM users ";
        $query_delete .= "WHERE ID = $id";
        $result = mysqli_query($connection, $query_delete);
        
        if($result){
            echo "user deleted!";
            ?> <input type="button" value="Go back!" onclick="history.back()"> <?php
        }
        else {
            echo "deleting user FAILED!";
            ?> <input type="button" value="Go back!" onclick="history.back()"> <?php
        }
    }
}
