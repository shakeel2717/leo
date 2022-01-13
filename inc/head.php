<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="Keywords" content="HTML,CSS,jQuery,Bootstrap,Web development,programming,portfolio,source code,colors,company,business,personal,Party,helloween,Ticket,Newsletter">
    <meta name="Description" content="Well designed, easy to understand and use">
    <title> Leopardinu - Welcome to Leopardinu Official Website.</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/magnific-popup.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="icon" href="/images/logo.png" />
</head>
<?php
if (isset($_SESSION['username'])) {
    echo '<script>var username = "' . $_SESSION['username'] . '";</script>';
}
?>

<body class="body-back" data-spy="scroll" data-target="#bs-example-navbar-collapse-1">
    <a href="#" id="back-top-btn"><img src="/images/living-dead.png" class="img-fluid" alt=""></a>
    <header>
        <nav id="nav-part" class="navbar header-nav other-nav sticky-top navbar-expand-md">
            <div class="container menu-nav">
                <a class="navbar-brand" href="#"><img src="/images/logo.png" class="img-fluid" alt="logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item"><a class="nav-link active" href="/">Home<span class="sr-only">(current)</span></a></li>
                        <li class="nav-item"><a class="nav-link" href="https://pancakeswap.finance/swap?outputCurrency=0xb67800d46F9Ad3830C4682bb46d73c0aB163d7b5">PancakeSwap</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://www.dextools.io/app/bsc/pair-explorer/0xb67800d46F9Ad3830C4682bb46d73c0aB163d7b5">DexTools</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://poocoin.app/tokens/0xb67800d46F9Ad3830C4682bb46d73c0aB163d7b5">PooCoin</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://bscscan.com/token/0xb67800d46F9Ad3830C4682bb46d73c0aB163d7b5">BSCscan</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://memetools.app/">Meme Tools</a></li>
                        
                        <li class="nav-item"><a class="nav-link" id="roadmap-button" href="javascript:void(0)">ROADMAP</a></li>
                        <li class="nav-item"><a class="nav-link" id="chat-button" href="javascript:void(0)">CHAT</a></li>
                    </ul>

                    <ul class="navbar-right nav-sign">
                        <li><a class="nav-link" href="https://pancakeswap.finance/swap?outputCurrency=0xb67800d46F9Ad3830C4682bb46d73c0aB163d7b5">Buy Now</a></li>

                    </ul>
                </div>
                <audio id="jingle_bell" src="/music/loop.mp3" hidden controls autoplay loop>
                    <p>Audio is not supported in your browser.</p>
                </audio>
                <div class="switch">
                    <div class="sound_toggle_btn"><span class="fa fa-pause"></span></div>
                </div>
            </div>
        </nav>
    </header>