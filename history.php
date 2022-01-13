<?php
include 'db.php';
?>
<?php include('inc/head.php'); ?>
<section id="gallery" class="gallery">
    <div class="container">
        <br>
        <br>

        <div class="row mb-5">
            <div class="col-md-12 ml-md-auto text-center">
                <h2 class="font-alt heading">Messages History</h2>
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
                                            <th>Name</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($result as $row) {
                                        ?>
                                            <tr class="bg-dark">
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['message'] ?></td>
                                                <td><?php echo $row['created_at'] ?></td>
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
<section class="section invitation-section" id="invitation">
    <div id="contact" class="section contact-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="col-md-12 text-center">
                        <div class="cont-icon">
                            <h6>Get Update</h6>
                            <ul>
                                <li><a href="https://t.me/leopardinuofficial"><i class="fa fa-telegram"></i></a></li>
                                <li><a href="https://www.reddit.com/user/leopardinu"><i class="fa fa-reddit"></i></a></li>
                                <li><a href="https://discord.gg/x9Z9NCYmZ6"><i class="fa fa-globe"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="footer_text">
                            <a href="#">Copyright © Leopardinu <?php echo date('Y'); ?>. All rights reserved</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="col-12">
    <div class="row">
        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i></a>
                    </div>
                    <div id="letter5" class="">
                        <img src="images/modal.png" alt="Modal Road Map">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("inc/chat.php") ?>
<?php include("inc/footer.php") ?>
</body>

</html>