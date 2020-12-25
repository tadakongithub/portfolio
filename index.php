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

                <div class="links">
                    <a href="https://www.youtube.com/channel/UClPqBk4ddZ3h6rbLW7wz-MQ" target="_blank" rel="noopener noreferrer"><img src="./img/youtube.png" class="link-icon"/></a>
                    <a href="https://github.com/tadakongithub" target="_blank" rel="noopener noreferrer"><img src="./img/github.png" class="link-icon"/></a>
                    <a href="https://www.linkedin.com/in/tadashi-konno/" target="_blank" rel="noopener noreferrer"><img src="./img/linkedin.png" class="link-icon"/></a>
                </div>

                <div class="about-bottom">
                    <div class="language tech">
                        <h3 class="skill-title">Languages:</h3>
                        <div class="skills">JavaScript, CSS, HTML, GraphQL, PHP, Liquid</div>
                    </div>
                    <div class="library tech">
                        <h3 class="skill-title">Libraries/Frameworks:</h3>
                        <div class="skills">React.js, Redux, Gatsby.js, jQuery, Material UI, Semantic UI</div>
                    </div>
                    <div class="framework tech">
                        <h3 class="skill-title">Databse:</h3>
                        <div class="skills">MySQL</div>
                    </div>
                    <div class="database tech">
                        <h3 class="skill-title">Others:</h3>
                        <div class="skills">Git/GitHub, HTTP, Babel, Webpack, Shopify</div>
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
                    <a class="each-profesional" href="https://counseling.vegemin.jp/" target="_blank" rel="noopener noreferrer">
                        <h2>Multi-Step Survey App</h2>
                        <p class="stacked-used">React, CSS, Shopify Storefront API, GraphQL</p>
                        <div>Currently making a multi-step customer survey app for a Japanese startup. By users filling out this brief survey, 5 products will be selected for them that best fit their needs. Communicated with the designer and the backend developer efficiently. Developed with Reactjs, Figma, and Shopify storefront API.
                        </div>
                        <div class="link">counseling.vegemin.jp</div>
                    </a>

                    <a class="each-profesional" href="http://tadashikonno.com/balancesheeteng" target="_blank" rel="noopener noreferrer">
                        <h2>Daily Trial Balance Sheet</h2>
                        <p class="stacked-used">PHP, MySQL, jQuery, PHPSpreadsheet</p>
                        <div>Built a daily trial balance sheet system with PHP and MySQL for a local restaurant, which allowed them to handle their accounting digitally. Used jQuery for its interactive UI. The client used to handle their finance in a traditional way with a pen and paper, so this app saved a lot of time by eradicating possible human-made errors.</div>
                        <div class="link">tadashikonno.com/balancesheeteng</div>
                    </a>

                    <div class="each-profesional dev">
                        <h2>LP for Tax Accountant Corporation</h2>
                        <p class="stacked-used">HTML, CSS</p>
                        <div>Created a responsive landing page for a tax accountant corporation in Yokohama, Japan. Coded the page to match its design layouts I received in Illustrator. Finished 50,000 pixels LP in 2 weeks.
                        </div>
                        <div class="link">In Development</div>
                    </div>

                    <!-- <a class="each-profesional" href="http://tadashikonno.com/designlapaultest/">
                        <h2>LP for A Web Agency</h2>
                        <p class="stacked-used">HTML, CSS, JavaScript, PHP</p>
                        <div>
                        Updated UI of a Japanese web agency’s website using HTML, CSS. To also add a contact form, I used JavaScript for form validation and sending form data to backend, and PHP for sending the form information by email
                        </div>
                        <div class="link">http://tadashikonno.com/designlapaultest/</div>
                    </a>

                    <a class="each-profesional" href="https://coding-components.web.app/en/">
                        <h2>Wordpress Theme</h2>
                        <p class="stacked-used">HTML, CSS, JavaScript, jQuery</p>
                        <div>Coded front end parts of a Wordpress theme for a Japanese web agency. Used CSS and JS for animations.
                            Expected to generate $30,000 after its release.
                        </div>
                        <div class="link">coding-components.web.app/en/</div>
                    </a>

                    <a class="each-profesional" href="http://tadashikonno.com/taskmanagetool">
                        <h2>Work Progress Manage Tool</h2>
                        <p class="stacked-used">PHP</p>
                        <div>
                             I created this tool to help me manage a team who were creating English Grammar questions. Question creators were able to update their progress on this tool, which helped me check the progress of the whole project.
                        </div>
                        <div class="link">http://tadashikonno.com/designlapaultest/</div>
                    </a> -->

                    <!-- <div class="each-profesional dev" href="https://github.com/tadakongithub/sugitomo_blog">
                        <h2>Blog Website</h2>
                        <p class="stacked-used">Gatsbyjs, Material UI</p>
                        <div>
                        Built a template page for a blog post of my friend’s website using Gatsby js.
                        </div>
                        <div class="link">In Development</div>
                    </div> -->
                </div>
            </div>
        </div>



<!-- personal work -->
        <div id="work">
            <h1 class="section-title">PERSONAL PROJECTS</h1>

            <div class="filter-container">
                <div id="to-react" class="filter active">React</div>
                <div id="to-php" class="filter">PHP</div>
                <div id="to-js" class="filter" >JS</div>
            </div>

            

            <!-- React -->
                <div id="react" class="animated">
                    <div class="each-project">
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

                    <div class="each-project">
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
                                <div class="each-title"><a target="_blank" rel="noopener noreferrer" href="https://tadashikonno.com/tadabooking">Visit Website</a></div>
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
        <script src="js/index.js"></script>
        <script src="js/typewriter.js"></script>
    </body>
</html>