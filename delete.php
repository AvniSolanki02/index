<?php
require_once "./conn.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT `iname` FROM `avni1` WHERE `id`=$id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $data=mysqli_fetch_assoc($result);

        $iname=$data['iname'];
        unlink("./uploads/".$iname);

        $query = "DELETE FROM `avni1` WHERE `id`= '$id' ";
        $result = mysqli_query($conn, $query);

        if ($result) {
            ?>

            <script>
                alert("DATA DELETE SUCCESFULLY");
                window.location.href = "table.php";
            </script>

            <?php

        } else {
            echo "delete failed";
        }
    }
}
?>