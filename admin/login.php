<?php
include '../db.php';
if (isset($_SESSION['admin'])) {
    header('Location: index.php?message=Already_Logged_In');
}
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // checking if username and password are correct
    $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($db, $sql);
    if (mysqli_num_rows($result) > 0) {
        // if username and password are correct
        // start a session
        session_start();
        // storing session
        $_SESSION['admin'] = $username;
        // redirect to admin page
        header('Location: index.php');
    } else {
        // if username and password are incorrect
        // redirect to login page
        header('Location: login.php?error=invalid_login');
    }
}
?>
<?php include('../inc/head.php'); ?>
<section id="gallery" class="gallery">
    <div class="container">
        <br>
        <br>

        <div class="row">
            <div class="col-md-12 ml-md-auto text-center">
                <div class="col-md-12 ml-md-auto text-center">
                    <h2 class="font-alt heading">Messages History</h2>
                    <div class="btn-bar text-center">
                        <a href="../index.php">Back to Home</a>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-12 gallery-padding">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <form action="login.php" method="POST">
                            <div class="card mb-5" style="background-color: #2c0047;">
                                <div class="card-body">
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="username" class="text-white">Username</label>
                                                <input type="text" name="username" id="username" class="form-control" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="password" class="text-white">Password</label>
                                                <input type="text" name="password" id="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <input type="submit" name="submit" id="submit" class="btn btn-white btn-block text-dark" value="Sign in">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("../inc/top-footer.php"); ?>
<?php include("../inc/modal.php"); ?>
<?php include("../inc/chat.php") ?>
<?php include("../inc/footer.php") ?>
</body>

</html>