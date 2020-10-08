<?php
    session_start();

    if (!empty($_POST)){
        if ($_POST['name'] == ''){
            $error['name'] = 'blank';
        }

        if ($_POST['email'] == ''){
            $error['email'] = 'blank';
        }

        if ($_POST['message'] == ''){
            $error['message'] = 'blank';
        }

        if (empty($error)){
            $_SESSION['mail'] = $_POST;
            header('Location: send_email.php');
        }
    }  

    function h($value){
        return  htmlspecialchars($value, ENT_QUOTES);
    }
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

        <!-- for animation.css-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <!--for top screen animation -->
        <script src="js/three.r92.min.js"></script>
        <script src="js/vanta.net.min.js"></script>
        
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>
<!-- header -->
        <header id="header">
            <div class="hello">
                <div id="hello"></div>
                <h1 id="name-at-the-top"></h1>
                <div id="self-desc"></div>
            </div>
        </header>


<!--ABOUT -->
        <div id="about">
            <h1 class="section-title">ABOUT</h1>
            
            <div class="about-container">
                <div class="about-top">
                    <div class="self-intro">
                        A determined web developer who strives to create elegant, interactive and 
                        useful websites with strong passion for writing clean and maintainable code.
                    </div>
                </div>

                <!--
                <div class="about-middle">
                    <img src="https://img.icons8.com/carbon-copy/50/000000/resume.png"/>
                    <img src="https://img.icons8.com/material-sharp/50/000000/github.png"/>
                    <img src="https://img.icons8.com/material-sharp/50/000000/linkedin.png"/>
                </div>
                -->

                <div class="about-bottom">
                    <div class="language tech">
                        <h3 class="skill-title">Languages:</h3>
                        <div>Javascript, PHP, HTML, CSS, SQL</div>
                    </div>
                    <div class="library tech">
                        <h3 class="skill-title">Frameworks:</h3>
                        <div>React, jQuery, Bootstrap, Semantic UI</div>
                    </div>
                    <div class="framework tech">
                        <h3 class="skill-title">Databse:</h3>
                        <div>MySQL with PHPMyAdmin</div>
                    </div>
                    <div class="database tech">
                        <h3 class="skill-title">Others:</h3>
                        <div>Git/GitHub, CLI</div>
                    </div>
                </div>
            </div>
        </div>


<!--professional  project -->
        <div id="professional-work">
            <div id="professional-top-container">
                <h1 class="section-title">PROFESSIONAL PROJECTS</h1>
            </div>
        
            <div id="professional-bottom-container">
                <div id="professional-bottom-inside-container">
                    <a class="each-profesional" href="http://tadashikonno.com/balancesheeteng">
                        <h2>Daily Trial Balance Sheet</h2>
                        <p class="stacked-used">PHP, MySQL, jQuery</p>
                        <div>Created for a local Japanese restaurant. It allows them to input their bookkeeping
                        digitally. Ease-to-use interface with a backend code to store the data into database and export
                        data in excel format.</div>
                        <div class="link">tadashikonno.com/balancesheeteng</div>
                    </a>

                    <a class="each-profesional" href="https://coding-components.web.app/en/">
                        <h2>Wordpress Theme</h2>
                        <p class="stacked-used">HTML, CSS, JavaScript, jQuery</p>
                        <div>Coded front end parts of a Wordpress theme for a Japanese web agency. Used CSS and JS for animations.
                            Expected to generate $30,000 after its release.
                        </div>
                        <div class="link">coding-components.web.app/en/</div>
                    </a>

                    <a class="each-profesional">
                        <h2>Multi-step Survey App</h2>
                        <p class="stacked-used">React, CSS, Shopify API</p>
                        <div>An app for a start-up that sells vegetable supplements. By users filling out a brief survey, 
                            5 supplements will be selected for them that best fit their needs.
                        </div>
                        <div class="link">In Development</div>
                    </a>
                </div>
            </div>
        </div>



<!-- personal work -->
        <div id="work">
            <h1 class="section-title">PERSONAL PROJECTS</h1>

            <div class="filter-container">
                <div class="to-react filter active">React</div>
                <div class="to-php filter">PHP</div>
                <div class="to-js filter" >JS</div>
            </div>

            

            <!-- React -->
                <div id="react" class="animated">
                    <div id="shiritori" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>WORD CHAIN GAME</h2>
                                <div>
                                    Player comes up with words that begin with the letter that the previous word ended with.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://englishshiritori-7c4a3.firebaseapp.com/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/shiritori">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="formation" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>SOCCER FORMATION</h2>
                                <div>
                                    This is an app that lets soccer coaches make formations.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://formation-1aa35.web.app/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/formation">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div id="question-selector" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>QUESTION SELECTOR</h2>
                                <div>
                                    I created this app for my previous work. It keeps track of how many questions I have made for each grammar target.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://question-selector.web.app/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/question-selection-tool">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="news" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>NEWS APP</h2>
                                <div>
                                    You can search for news articles on a certain topic by typing in a search string.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://tadakongithub.github.io/news/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/news">Code</a></div>
                            </div>
                        </div>
                    </div>             -->
                </div>

            <!-- PHP -->
                <div id="php" class="animated">
                    <div id="booking" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>BOOKING SYSTEM</h2>
                                <div>
                                    Booking System for a programming course. You can sign up, sign in, choose a class, and receive a confirmation email.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://tada-booking.com/login.php">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/booking">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="japanese" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>JAPANESE GRAMMAR QUIZ</h2>
                                <div>
                                    You can try Japanese grammar quizes for 5 different levels.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/jpgrammar/index.php">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/grammarquiz">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div id="dojo" class="each-project">
                        <div class="no-hover">
                        <div class="no-hover-content">
                                <h2>TASK MAMAGEMENT APP</h2>
                                <div>
                                    This app was intended to help me manage a task I was in charge of at my previous company. Check README on Github for more details.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/taskmanagetool/login.php">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/taskmanagement">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="recipe" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>RECIPE FINDER</h2>
                                <div>
                                    You can type in any ingredients in the search  box, and this app will find recipes that use those ingredients.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://tada-recipe.com/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/tadarecipe">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="todo" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>TO DO APP</h2>
                                <div>
                                    You can prioritize things to do, set the deadline for each task, and set the genre each task goes under. You can inline edit each task.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/todolist/index.php#">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/todolist">Code</a></div>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- js -->
                <div id="js" class="animated">
                    <div id="cardgame" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>CARD MATCHING GAME</h2>
                                <div>
                                    You flip two cards, and if the numbers match, you get the cards. Whoever has more cards at the end wins the game.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://tadakongithub.github.io/">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/card-game">Code</a></div>
                            </div>
                        </div>
                    </div>

                    <div id="study-app" class="each-project">
                        <div class="no-hover">
                            <div class="no-hover-content">
                                <h2>STUDY APP</h2>
                                <div>
                                    You can keep track of how long you have studied each subject every day.
                                </div>
                            </div>
                        </div>
                        <div class="hover">
                            <div class="hover-content">
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="http://study-application.com//sign-up.php">Visit Website</a></div>
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/study-application">Code</a></div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>


<!-- contact form-->
        <div id="contact">
            <h1 class="section-title">Contact</h1>

            <div class="contact-me">
                If you have any question, please send me a message below.
            </div>

            <form action="" method="post" id="form">
                <input type="text" id="name" name="name" placeholder="Name" required>

                <input type="email" id="email" name="email" placeholder="Email" required>

                <textarea name="message" id="message" placeholder="Message"></textarea>

                <button type="submit" id="submit">Submit</button>
            </form>
        </div>

        <script>
            //top screen animation
            VANTA.NET({
            el: "#header",
            color: 0x771bfa,
            backgroundColor: 0x1d0f37,
            points: 10.00,
            maxDistance: 20.00,
            spacing: 15.00
            });
        </script>
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"
        ></script>
        <script src="js/main.js"></script>
        <script src="js/typewriter.js"></script>
    </body>
</html>