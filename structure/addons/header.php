<?php
    if (count(get_included_files()) <= 1) {
        die();
    }

    if (!Registry::get("system")->getSecurityManager()->securityCheck("SITE_LOAD")) {
        die("You have loaded too many pages in a short amount of time.");
    }

    $user = Registry::get("user");
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
    <title><?php echo defined('TITLE') ? TITLE . " - " . BASE_TITLE : BASE_TITLE; ?></title>
    <meta http-equiv='content-Type' content='text/html; charset=utf-8'>
    <meta http-equiv='content-language' content='en-gb'>
    <meta name='author' content='<?= SITE_NAME ?>'>
    <meta name='description' content="<?php echo DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo KEYWORDS; ?>"/>
    <link rel="icon" type="image/png" href="/structure/design/images/icons/favicon.ico"/>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="/structure/design/css/style.css?rand=<?php echo rand(1000, 10000000); ?>" rel='stylesheet'>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>
    <!-- Banner -->
    <div id = 'parchment'>
        <div id ='scroll'>
            <div id ='head'>
                <div id ='scroll-background'>    
                    <div id="scroll-top"></div>
                    <img id="banner" src="" alt="MithScape">

                    <script type="text/javascript">
                        document.getElementById("banner").src = `/structure/design/images/banners/${new Date().getMonth() + 1}.png`;
                    </script>

                    <div id="scroll-banner-image"><a href="" id="logo_select"></a>
                    <div id="banner-text">Welcome to <span class="branding-color">MithScape!</span> There are currently <span class="branding-color">3<?php echo Registry::get("system")->getPlayersOnline() ?>9</span> players online!</div></div>
                    <div id="scroll-bottom"></div>
                </div>
            </div>
        </div>
    
    <!-- Language Selector -->
    <div id ='language-select'>
        <a href='https://mithscape.nl'><img src="/structure/design/images/flags/nl-nl.png" height="12" width="20" style="margin: 0px 5px 0px 0px;"></img></a><a href='https://mithscape.com'><img src="/structure/design/images/flags/en-uk.png" height="12" width="20" style="margin: 0px 0px 0px 0px;"></img></a>
    </div>

    <!-- Main Menu -->
    <div id="menu-header">
        <ul id="main-menu">
            <!-- Home -->
            <li class="top"><a href="/index.php" id="home" class="tl">
                <span class="ts">Home</span></a>
            </li>
            
            <!-- Play Now -->
            <?php if (!$user->isLoggedIn()) { ?>
                <li class="top"><a id="download" class="tl" href="/login=error"><span class="tl">Play Now</span></a></li>
            <?php } else { ?>
                <li class="top"><a id="download" class="tl" href="/downloads/MithLauncher.jar"><span class="tl">Play Now</span></a></li>
            <?php } ?>

            <!-- Game Guide -->
            <li class="top"><a id="guide" class="tl" href="/kbase">
                <span>Game Guide</span></a>
            </li>

            <!-- Community -->
            <li class="top"><a id="guide" class="tl" href="/community">Community</span></a>
                <ul>
                    <li><a href="/hiscores" class="fly"><span>Hiscores</span></a></li>
                    <li><a href="/kbase/rules" class="fly"><span>Rules</span></a></li>
                    <li><a href="/kbase/hof" class="fly"><span>Hall of Fame</span></a></li>
                    <li><a href="/kbase/staff" class="fly"><span>Staff Members</span></a></li>
                    <li><a href="/kbase/about" class="fly"><span>What is MithScape?</span></a></li>
                </ul>
            </li>
            
            <!-- Economy -->
            <li class="top"><a id="guide" class="tl" href="/economy">Economy</span></a>
                <ul>
                    <li><a href="/grandexchange" class="fly"><span>Grand Exchange</span></a></li>
                    <li><a href="/itemdatabase" class="fly"><span>Item Database</span></a>
                    <li><a href="/droptables" class="fly"><span>Drop Tables</span></a></li>
                </ul>
            </li>

            <!-- Help -->
            <li class="top"><a id="guide" class="tl" href="/community/index.php?board_id=4&page=1">Support</span></a>
                <ul>
                    <li><a href="/kbase/faq" class="fly"><span>Frequently Asked Questions</span></a></li>
                </ul>
            </li>

            <!-- Login -->
            <?php if (!$user->isLoggedIn()) { ?>
                <li class="top"><a id="login" class="tl" href="/login"><span class="tl">Log In</span></a>
                    <ul>
                        <li><a href="/register" class="fly"><span>Create Account</span></a>
                        <li><a href="/recover" class="fly"><span>Recover Account</span></a>
                    </ul>
                </li>
            <?php } else { ?>
                <li class="top"><a id="login" class="tl" href="/account"><span class="tl"><?php echo ucfirst($user->getUsername()) ?></span></a>
                    <ul>
                        <li><a href="/account" class="fly"><span>Account Management</span></a></li>
                        <li><a href="/account/message" class="fly"><span>Message Center</span></a>
                        <li><a href="/logout" class="fly"><span>Log Out</span></a>
                    </ul>
                </li>
            <?php } ?>
        </ul>

        <br class="clear" />
    </div>