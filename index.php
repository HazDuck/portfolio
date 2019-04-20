<?php

require_once 'functions.php';
require_once 'dbConnectPortfolio.php';

$db = getDbConnection();
$aboutMeInfo = getAboutMeInfo($db);
$showAboutMeInfo = printAboutMeInfo($aboutMeInfo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pete Heyes - Developer Chap</title>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Yellowtail" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="js/function.js" defer></script>
</head>
<body>
    <div class="split1">
        <nav>
            <ul class="nav-items">
                <li><a href="#home" class="link">Home</a></li>
                <li><a href="#portfolio" class="link">Portfolio</a></li>
                <li><a href="#about" class="link">About Me</a></li>
                <li><a href="#contact" class="link">Contact</a></li>
            </ul>
                <img id="hamMenu" class="ham" src="img/bars.svg"/>
            <div class="icons-container">
                <a href="https://github.com/HazDuck" target="_blank"><img src="img/github.png"/></a>
                <a href="https://twitter.com/peteheyes" target="_blank"><img src="img/twitter.png"/></a>
                <a href="https://uk.linkedin.com/in/pete-heyes-b7b98985" target="_blank"><img src="img/in.png"/></a>
            </div>
            <div id="dropDownNav" class="dropDownOptionsArea hide-dropDown">
                <ul>
                    <li class="dropDownOptions"><a href="#home" class="link brand">Home</a></li>
                    <li class="dropDownOptions"><a href="#portfolio" class="link brand">Portfolio</a></li>
                    <li class="dropDownOptions"><a href="#about" class="link brand">About Me</a></li>
                    <li class="dropDownOptions"><a href="#contact" class="link brand">Contact</a></li>
                </ul>
            </div>
        </nav>
        <main id="home" class="home">
            <p class="headline gutter">Hi I'm Pete...</p>
            <div class="portrait"></div>
            <p class="quote gutter">Full Stack Web Developer (TBC) based in Bath</p>
        </main>
    </div>
    <main id="portfolio" class="portfolio">
        <h4 class="brand">My Projects</h4>
        <div class="port-container">
            <div class="port-area">
                <div class="port-pic port1"></div>
                <div class="port-text"><p>Responsive Web Design</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">Info: cape browsers and the startup discs that EarthLink and AOL tucked in mailboxes discs that EarthLink and AOL tucked in mailboxes</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/students/2019/feb/pete/Pilot/" target="_blank"><button class="demo">Demo</button></a>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port3"></div>
                <div class="port-text"><p>Coming Soon</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I'm currently working on further projects. In the meantime please enjoy this picture of a friendly dog.</p>
                    </div>
                    <button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port2"></div>
                <div class="port-text"><p>Coming Soon</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I'm currently working on further projects. In the meantime please enjoy this picture of a friendly dog.</p>
                    </div>
                    <button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port2"></div>
                <div class="port-text"><p>Coming Soon</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I'm currently working on further projects. In the meantime please enjoy this picture of a friendly dog.</p>
                    </div>
                    <button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port2"></div>
                <div class="port-text"><p>Coming Soon</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I'm currently working on further projects. In the meantime please enjoy this picture of a friendly dog.</p>
                    </div>
                    <button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port2"></div>
                <div class="port-text"><p>Coming Soon</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I'm currently working on further projects. In the meantime please enjoy this picture of a friendly dog.</p>
                    </div>
                    <button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
        </div>
    </main>
    <main id="about" class="about">
        <h4>A Little Bit About Me</h4>
        <div class="about-me-area">
            <?php echo $showAboutMeInfo;?>
        </div>
    </main>
    <main id="contact" class="contact">
        <h4 class="brand">Get in Contact</h4>
        <div class="contact-container">
                <a href="https://github.com/HazDuck" target="_blank"><img src="img/github-blue.svg"></a>
        </div>
        <div class="contact-container">
                <a href="https://uk.linkedin.com/in/pete-heyes-b7b98985" target="_blank"><img src="img/linked.svg"></a>
        </div>
        <div class="contact-container">
                <a href="https://twitter.com/peteheyes" target="_blank"><img src="img/twitter.svg"></a>
        </div>
        <div class="contact-container">
                <a href="mailto:peter.e.heyes@gmail.com?Subject=Howdy" target="_blank"><img src="img/email.svg"></a>
        </div>
        <div class="contact-container">
                <a href="https://github.com/HazDuck" target="_blank"><img src="img/skype.svg"></a>
        </div>
        <div class="contact-container">
                <a href="https://www.instagram.com/peteheyes1990/" target="_blank"><img src="img/instagram.svg"></a>
        </div>
    </main>
    <a href="signin.php"><p class="brand">Admin</p></a>
</body>
</html>