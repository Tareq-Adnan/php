<?php
include("db.php");
include("function.php");
if (isset($_POST['submit'])) {
    create($_POST['username'], $_POST['password']);
}
include("includes/header.php");
?>

<div class="container">

    <div class="col-xs-6">
        <h1 class="text-center">Insert Data</h1>
        <form action="login.php" method="post">

            <label for="username">Username</label>
            <div class="form-group">
                <input type="text" name="username" placeholder="username" class="form-control">
            </div>


            <label for="password">Password</label>
            <div class="form-group">
                <input type="password" name="password" placeholder="Password!" class="form-control">
            </div>

            <input type="submit" name="submit" class="btn btn-primary">


        </form>
    </div>

</div>
</body>

</html>