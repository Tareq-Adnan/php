<?php
include('db.php');
include("function.php");

read();
include("includes/header.php");
?>


<h1>View Data</h1>
<?php

while ($value = mysqli_fetch_assoc($result)) {
    ?>
    <pre>
                <?php
                print_r($value);
                ?>
            </pre>
<?php } ?>
</body>

</html>