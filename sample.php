<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=mydatabase user=myusername password=mypassword");
if (!$dbconn) {
    echo "Connection failed!";
} else {
    echo "Connected to database successfully!";
}
?>
