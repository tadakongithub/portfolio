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

        <script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
        <script src="js/sp-menu.js"></script>
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/three.r92.min.js"></script>
        <script src="js/vanta.net.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.11"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
        
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        

        <header id="header">
            <div class="hello">
                <h1 class="name">Tadashi Konno</h1>
                <h3>I'm a Full Stack Developer. Always curious and excited about learning new things.</h3>
                <div class="nav"><a href="#about">View my work</a></div>
            </div>
        </header>


        <ul class="nav2">
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#works">WORKS</a></li>
                <li><a href="#contact">CONTACT</a></li>
        </ul>

        <div class="nav3"><img class="burger" src="img/burger.png" onClick='showMobileMenu()'></div>
        <div class="nav3-menu">
            <div class="nav3-each"><a href="#" onClick="hideMobileMenu()">HOME</a></div>
            <div class="nav3-each"><a href="#about" onClick="hideMobileMenu()">ABOUT</a></div>
            <div class="nav3-each"><a href="#works" onClick="hideMobileMenu()">WORKS</a></div>
            <div class="nav3-each"><a href="#contact" onClick="hideMobileMenu()">CONTACT</a></div>
        </div>

        <script>
        function showMobileMenu(){
            document.querySelector('.nav3-menu').classList.toggle('toggle-nav3');
        }

        function hideMobileMenu(){
            document.querySelector('.nav3-menu').classList.remove('toggle-nav3');
        }
        </script>

        <div id="about">
            <div class="section-title title-about">ABOUT</div>
            <div class="title-bar about-bar"></div>

            <div class="about-container">
                <div class="about-left">
                    <div id="relentless"></div>
                    <div id="relentless-mobile">
                        <span style="font-size:25px">Relentless</span> best describes the way I work. I never give up on creating designs or functionalities once I've started working on them.
                    </div>
                    <div class="media">
                        <div class="each-media" id="resume-button"><img src="img/resume.png"></div>
                        <div class="each-media"><a  target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/in/tadashi-konno-470149197/"><img src="img/github.png"></a></div>
                        <div class="each-media"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub"><img src="img/linkedin.png"></a></div>
                    </div>
                </div>

                <!-- resume modal -->
                <div id="resume-modal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="resume-container">
                            <img src="./img/myresume.png" id="resume">
                        </div>
                    </div>
                </div>


                <script>
                var resumeButton = document.getElementById('resume-button');
                var resumeModal = document.getElementById('resume-modal');
                var closeModal = document.querySelector('.close');
                var body = document.body;

                //clicking on resume icon, the modal appears
                resumeButton.onclick = function () {
                    resumeModal.style.display = 'flex';

                    //unscrollable when modal is shown
                    body.style.height = '100vh';
                    body.style.overflow = 'hidden';
                }

                //when click on cross, the modal disappears
                closeModal.onclick = function() {
                    resumeModal.style.display = 'none';
                    body.style.height = 'initial';
                    body.style.overflow = 'initial';
                }

                //when user clicks outside the modal, the modal disappears
                window.onclick = function(event) {
                    if(event.target == resumeModal) {
                        resumeModal.style.display = 'none';
                        body.style.height = 'initial';
                        body.style.overflow = 'initial';
                    }
                }
                </script>


                <div class="about-right">
                <canvas id="myChart"></canvas>
            <script>
                var data = {
                    labels: ['HTML', 'CSS', 'SASS', 'Javascript', 'React.js', 'jQuery', 'PHP'],
                    datasets: [{
                        label: 'Language/Framework',
                        data: [80, 70, 50, 60, 60, 50, 70],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)'
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)'
                        ],
                        borderWidth: 1
                    }]
                }

                var option = {
                    scale: {
                        ticks: {
                            min: 0,
                            max: 100
                        }
                    },
                    animations : {
                        duration: 2000,
                        easing: 'easeInQuad'
                    }
                }

                var inView = false;

                function isScrolledIntoView(elem)
                {
                    var docViewTop = $(window).scrollTop();
                    var headerHeight = $('#header').height() * 0.75;

                    return (docViewTop >= headerHeight);
                }


                //when scroll to about, text and graph show
                $(window).scroll(function() {
                    if (isScrolledIntoView('#myChart')) {
                        if (inView) { return; }
                        inView = true;

                        //graph
                        new Chart(
                            document.getElementById("myChart").getContext("2d"),
                            {type: 'radar', data: data, options: option });

                        //text
                        new Typed('#relentless', {
                            strings: ['<span style="font-size:25px">Relentless</span> best describes the way I work. I never give up on creating designs or functionalities once I\'ve started working on them.'],
                            typeSpeed: 10,
                            showCursor: false
                        });
                    } 
                });

            </script>

                </div>
            </div>
        </div>


        <div id="works">
            <div class="section-title work-title">WORKS</div>
            <div class="title-bar work-bar"></div>

                <div class="works_container">
                        <div class="works_img first-work" id="shiritori">
                            <div class="name-lang">
                                <div class="work-name">English Shiritori</div>
                                <div class="language-used">React</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="https://englishshiritori-7c4a3.firebaseapp.com/">Go to Site</a></div>
                                <div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/shiritori">See the Code</a></div>
                            </div>
                        </div>
                        <div class="works_img second-work" id="cardgame">
                            <div class="name-lang">
                                <div class="work-name">Card Game</div>
                                <div class="language-used">Vanilla Javascript</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tadacardgame.com/">Go to Site</a></div>
                                <div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/card-game">See the Code</a></div>
                            </div>
                        </div>
                        <div class="works_img third-work" id="jpgrammar">
                            <div class="name-lang">
                                <div class="work-name">Japanese Grammar Quiz</div>
                                <div class="language-used">SASS, PHP, MySQL, AJAX</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/jpgrammar/index.php">Go to Site</a></div>
                                <div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/grammarquiz">See the Code</a></div>
                            </div>
                        </div>
                        <div class="works_img fourth-work" id="study-app">
                            <div class="name-lang">
                                <div class="work-name">Study App</div>
                                <div class="language-used">PHP, Javascript, Bootstrap</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://study-application.com//">Go to Site</a></div>
                                <div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/study-application">See the Code</a></div>
                            </div>
                        </div>
                        <div class="works_img fifth-work" id="booking">
                            <div class="name-lang">
                                <div class="work-name">Booking System</div>
                                <div class="language-used">PHP, MySQL, AJAX</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tada-booking.com/">Go to Site</a></div>
                                <!--<div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="">See the Code</a></div>-->
                            </div>
                        </div>
                        <div class="works_img sixth-work" id="tadarecipe">
                            <div class="name-lang">
                                <div class="work-name">Recipe Website</div>
                                <div class="language-used">Rapid API, PHP</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tada-recipe.com/">Go to Site</a></div>
                                <!--<div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="">See the Code</a></div>-->
                            </div>
                        </div>
                        <div class="works_img seventh-work" id="gd">
                            <div class="name-lang">
                                <div class="work-name">Task Management Tool</div>
                                <div class="language-used">PHP, MySQL</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/taskmanagetool/">Go to Site</a></div>
                                <!--<div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="">See the Code</a></div>-->
                            </div>
                        </div>
                        <div class="works_img eighth-work" id="to-do-lists">
                            <div class="name-lang">
                                <div class="work-name">To Do List</div>
                                <div class="language-used">PHP, MySQL, jQuery, AJAX</div>
                            </div>
                            <div class="jump">
                                <div class="jump-site"><a target="_blank" rel="noopener noreferrer" href="http://tadashikonno.com/todolist/">Go to Site</a></div>
                                <div class="jump-code"><a  target="_blank" rel="noopener noreferrer" href="https://github.com/tadakongithub/todolist">See the Code</a></div>
                            </div>
                        </div>
                </div>

                <svg id="top-section-border" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
    <polygon fill="rgb(50, 49, 68)" points="0 0, 0 100, 100 100, 100 0, 50 100"/>
  </svg>      
        </div>


            <div id="contact">
                <div>
                    <div class="contact-title">CONTACT</div>
                    <div class="contact-bar"></div>
                </div>
                <p class="contact-letmeknow">Let me know if you have any question.</p>
                <form action="" method="post" class="contact-form">
                    <input type="text" name="name" placeholder="Name" required><br>
                    <input type="text" name="email" placeholder="Email" required><br>
                    <textarea name="message" placeholder="Message" required></textarea><br>
                    <input id="check" type="submit" value="SEND">
                </form>     
            </div>

            <div class="footer">
            <small class="copyright">&copy; 2020 Tadashi Konno</small>
            </div>

            <script>
            //header background animation
            VANTA.NET({
            el: "#header",
            color: 0x771bfa,
            backgroundColor: 0x1d0f37,
            points: 10.00,
            maxDistance: 20.00,
            spacing: 15.00
            });
        </script>
        <script src="js/main.js"></script>
    </body>
</html>