<?php
include("db.php");
if (isset($_POST["input"])) {
    $sql = "SELECT * FROM searcher WHERE name LIKE '$_POST[input]%' OR age LIKE '$_POST[input]%'";
    $res = mysqli_query($conn, $sql);

    if (mysqli_num_rows($res) > 0) {
?>
        <table border="1">
            <tr>
                <th>
                    name
                </th>
                <th>
                    age
                </th>
            </tr>
            <?php
            while ($row = mysqli_fetch_assoc($res)) {
            ?>
                <tr>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php echo $row["age"] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
<?php
    }
}
