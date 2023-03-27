<?php
include('db.php');
include("function.php");
if (isset($_POST['submit'])) {
    delete();
}
include("includes/header.php") ?>

<div class="container">

    <div class="col-xs-6">
        <form action="delete.php" method="post">


            <label for="username">Username</label>
            <div class="form-group">
                <input type="text" name="username" placeholder="username" class="form-control">
            </div>


            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password!" class="form-control">
            </div>


            <div class="form-group">
                <select name="id" id="">
                    <?php
                    showData();
                    ?>
                </select>
            </div>

            <input type="submit" value="DELETE" name="submit" class="btn btn-primary">


        </form>
    </div>

</div>




</body>

</html>