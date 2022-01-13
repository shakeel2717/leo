<?php
include '../db.php';
if (!isset($_SESSION['admin'])) {
    header('Location: login.php?error=Login_Required');
}

?>
<?php include('../inc/head.php'); ?>
<section id="gallery" class="gallery">
    <div class="container">
        <br>
        <br>

        <div class="row mb-5">
            <div class="col-md-12 ml-md-auto text-center">
                <h2 class="font-alt heading">Messages History</h2>
                <div class="btn-bar text-center">
                    <a href="logout.php">Logout Admin</a>
                </div>
                <br>
            </div>
            <div class="col-12 gallery-padding">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="card" style="background-color: #2c0047;">
                            <div class="card-body">
                                <?php
                                // fetch all messages from database and display bootstrap table
                                $sql = "SELECT * FROM messages";
                                $result = $db->query($sql);
                                // output data in bootstrap table
                                ?>
                                <table id="myTable" class='table table-hover table-bordered table-dark'>
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($result as $row) {
                                        ?>
                                            <tr class="bg-dark">
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['message'] ?></td>
                                                <td><?php echo $row['created_at'] ?></td>
                                                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-dark"><i class="fa fa-trash" aria-hidden="true"></i> Delete</a></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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