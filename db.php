<?php
try {
    $conn = mysqli_connect("localhost", "root", "", "project_trainning");
} catch (mysqli_sql_exception) {
    echo "could not connect <br>";
}
