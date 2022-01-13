$(function () {
    "use strict";
    $('body').scrollspy({
        target: '#bs-example-navbar-collapse-1'
    });
    // for navbar background color when scrolling
    $(window).scroll(function () {
        var $scrolling = $(this).scrollTop();
        var bc2top = $("#back-top-btn");
        var stickytop = $(".sticky-top");
        if ($scrolling >= 100) {
            stickytop.addClass('navcss');
        } else {
            stickytop.removeClass('navcss');
        }

        if ($scrolling > 150) {
            bc2top.fadeIn(2000);
        } else {
            bc2top.fadeOut(2000);
        }
    });

    //Preloader js
    $('#musa-loader').delay(1500).fadeOut(500);
    // newsletter

    // this is for back to top js
    var bc2top = $('#back-top-btn');
    bc2top.on('click', function () {
        html_body.animate({
            scrollTop: 0
        }, 1500);
    });

    // Closes responsive menu when a scroll link is clicked
    $('.nav-link').on('click', function () {
        $('.navbar-collapse').collapse('hide');
    });

    //animation scroll js
    var nav = $('nav'),
        navOffset = nav.offset().top,
        $window = $(window);
    /* navOffset ends */
    //animation scroll js
    var html_body = $('html, body');
    $('nav a').on('click', function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                html_body.animate({
                    scrollTop: target.offset().top - 80
                }, 1000);
                return false;
            }
        }
    });

});


if (username == '') {
    alert('username is undefined');
    // hide messageArea
    $('#messageArea').hide();
}

$(document).ready(function () {
    fetchMessages();
    // sent a message if user press enter
    $('#message').keypress(function (e) {
        if (e.which == 13) {
            if (username == '') {
                alert('Please enter your username');
            } else {
                messageSent(username);
            }
        }
    });
    $('#sentMessage').click(function () {
        if (username == '') {
            alert('Please enter your username');
        } else {
            messageSent(username);
        }

    });
    // run the function every 5 seconds
    setInterval(fetchMessages, 5000);


    // fetch messages from an API
    function fetchMessages() {
        $.ajax({
            url: '/form.php',
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#messages').empty();
                $.each(data, function (index, message) {
                    var messageContent = "<p><b>" + message.username + "</b> " + message.message + "<br> <i>" + message.created_at + "</i>" + "</p>";
                    $('#messages').append(messageContent);
                    $('#messages').scrollTop($('#messages')[0].scrollHeight);
                });
            },
            error: function (error) {
                console.log(error);
                // alert("Error");
            }
        });
    }

    function messageSent(username) {
        // var username = "Raheel2717";
        var input = $('#message').val();
        // now date
        var now = new Date();
        var date = now.getFullYear() + '-' + (now.getMonth() + 1) + '-' + now.getDate();
        var message = "<p><b>" + username + "</b> " + input + "<br> <i>" + date + "</i>";
        $('#messages').append(message);
        // clear the input field
        $('#message').val('');
        $('#messages').scrollTop($('#messages')[0].scrollHeight);
        // storing data into database
        // checking if username is empty
        if (username == '') {
            alert('Please enter your username');
        } else {
            $.ajax({
                type: "POST",
                url: 'http://leo.local.com/store.php',
                data: {
                    "username": username,
                    "message": input
                },
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                }
            });
        }
    }
});

$(document).ready(function () {
    $('#chat-button').click(function () {
        // toggle chat-window css class
        $('#chat-window').css('display', 'block');
        // change this button id
        $('#messages').scrollTop($('#messages')[0].scrollHeight);
    });

    $('#roadmap-button').click(function () {
        $('#exampleModal5').modal('show');
    });




    $('#chatBoxClose').click(function () {
        // toggle chat-window css class
        $('#chat-window').css('display', 'none');
    });
});