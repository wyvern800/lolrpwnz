<?php
function show_commands()
{
    $con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
# here database details
    mysqli_select_db($con, DB_NAME);
    $result = mysqli_query($con, 'SELECT commandname, action, FROM commands ORDER BY id ASC LIMIT  0,6');

    while ($row = mysqli_fetch_array($result)) {
        echo "<b>'" . $row['id'] ."'>" . $row['commandname'] . "</b>";
    }
}

