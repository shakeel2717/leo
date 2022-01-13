<div class="chat-box active" id="chat-window">
    <div class="row justify-content-between px-4 mb-3">
        <div id="chatBoxClose">
            <i class="fa fa-times-circle" style="color: white; font-size: 20px;"></i>
        </div>
        <div class="recentMessages">
            <a href="/history.php" class="text-white"> View History</a>
        </div>
    </div>
    <?php
    // if username sesstion is exist then show chat window
    if (!isset($_SESSION['username'])) {
    ?>
        <div class="username">
            <form action="/username.php" method="POST">
                <div class="form-group">
                    <label for="username" class="text-white">Type Username to start chatting..</label>
                    <input type="text" class="form-control usernameInput" id="username" name="username" placeholder="Username">
                    <input type="submit" name="submit" class="btn button" value="Set Username">
                </div>
                <div class="form-group">
                </div>
            </form>
        </div>
    <?php
    }
    ?>
    <div class="chat-conversations" id="messages">

    </div>
    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <div class="form-group messageArea">
            <input type="text" name="message" id="message" placeholder="Type to send Message" class="form-control usernameInput">
            <img src="/images/sent.png" alt="Message Sent" id="sentMessage">
        </div>
    <?php
    }
    ?>
</div>