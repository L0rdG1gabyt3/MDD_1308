<?php
echo "<h2>Your Home Location</h2>";
foreach ($rows as $num => $row){
    $c_id = $row['userId'];
    echo "</br><h3><a href='coasterInfo.php?id=" . mysql_real_escape_string($c_id) . "'>${row['homeZipcode']}</a></h2>";

}
?>