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
            <p class="quote gutter">Full Stack Web Developer based in Bath</p>
        </main>
    </div>
    <main id="portfolio" class="portfolio">
        <h4 class="brand">My Projects</h4>
<!--        <div class="port-container">-->
            <div class="port-area">
                <div class="port-pic port9"></div>
                <div class="port-text"><p>Top Dog</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">An app to display dog pictures by breed. The app is written in PHP using OOP following the SOLID principles.</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/projects/2019Feb/2019-nmr-TopDog/" target="_blank"><button class="demo">Demo</button>
                        <a href="https://github.com/Mayden-Academy/2019-nmr-TopDog" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port10"></div>
                <div class="port-text"><p>Bond Fight</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">A team project to compare Bond films. We built an API using Node with a MongoDB database that makes calls using React. (The below link will open both repositories).</p>
                    </div>
                    <a href="#" onclick="window.open('https://github.com/Mayden-Academy/2019-react-bond-fight');
    window.open('https://github.com/Mayden-Academy/2019-nodeApi-bondFight');"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port3"></div>
                <div class="port-text"><p>Paint App</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I worked as part of a team create a painting app. The app was built using Javascript according to the specifications of our Product Owner.</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/projects/2019Feb/2019-paint-app/" target="_blank"><button class="demo">Demo</button></a>
                    <a href="https://github.com/Mayden-Academy/2019-paint-app" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port1"></div>
                <div class="port-text"><p>Responsive Web Design</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I recreated a website using responsive web design. Product information templated using Handlebars.js</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/students/2019/feb/pete/pilotupdate/gulppilot/" target="_blank"><button class="demo">Demo</button></a>
                    <a href="https://github.com/HazDuck/pilotshop" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port5"></div>
                <div class="port-text"><p>Aptitude Test</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">Working as part of a team we added search and filter functionality to an existing code base.</p>
                    </div>
                    <a href="https://github.com/Mayden-Academy/aptitude-test" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port11"></div>
                <div class="port-text"><p>Milko-Crypto</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">An app that calls two API's and lets users know how many Bitcoin they'd need to fill a swimming pool with milk.</p>
                    </div>
                    <a href="https://github.com/HazDuck/bitcoinAndMilk" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port4"></div>
                <div class="port-text"><p>Pomodoro Clock</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I created a pomodoro clock using Vanilla JS.</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/students/2019/feb/pete/pomodoro" target="_blank"><button class="demo">Demo</button>
                    <a href="https://github.com/HazDuck/pomodoro" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
            <div class="port-area">
                <div class="port-pic port7"></div>
                <div class="port-text"><p>Solar System</p></div>
                <div class="port-links">
                    <div class="description">
                        <p class="brand">I created an animated SVG to replicate the solar system (plus the Death Star).</p>
                    </div>
                    <a href="http://dev.maydenacademy.co.uk/students/2019/feb/pete/solar" target="_blank"><button class="demo">Demo</button>
                        <a href="https://github.com/HazDuck/solarSystem" target="_blank"><img src="img/github-blue.svg" alt="github link" class="link-to-code"></a>
                </div>
            </div>
<!--        </div>-->
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