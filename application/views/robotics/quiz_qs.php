<!DOCTYPE html>
<htm>

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;500&display=swap" rel="stylesheet">
        <title>Quiz App</title>
        <style>
            body {
                margin: 0px;
                padding: 0px;
                height: 100%;
                width: 100%;
                background-image: url("<?php echo base_url();?>assets/users/robotics/bg.jpeg");

            }

            .quiz-app {
                margin: 8px auto;
                height: 620px;
                width: 350px;
                background-color: #252C4A;
                border-style: solid;
                border-width: 18px;
                border-color: #282B49;
                border-radius: 30px;
                opacity: 0.9;
            }

            #code {
                margin-left: 90px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
                color: #BFBFBF;
            }

            .time-bar {
                margin: 30px auto;
                width: 300px;
                height: 30px;
                border-style: solid;
                border-width: 2px;
                border-radius: 30px;
                border-color: #41476A;
                background-color: #252C4A;
            }

            .time-left {
                width: 300px;
                height: 30px;
                border-style: none;
                border-radius: 30px;
                border-color: rgb(250, 81, 113);
                background-color: rgb(250, 81, 113);


            }

            .time {
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
                color: white;
                text-align: center;
            }

            .q-text {
                color: #8E97BD;
                text-align: left;
                margin-left: 20px;
                margin-top: 30px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                font-size: 20px;
            }

            #question {
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                font-size: 25px;
                color: white;
                padding: 10px 20px 10px 20px;

            }

            .btn {
                width: 250px;
                height: 50px;
                margin-bottom: 10px;
                margin-left: 40px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 400;
                font-size: 15px;
                border-style: solid;
                border-width: 3px;
                border-radius: 20px;
                background-color: transparent;
                color: white;
                border-color: #254567;
                outline: none;


            }

            .btn:hover {
                background: linear-gradient(90deg, rgba(250, 81, 113, 1) 46%, rgba(250, 81, 113, 1) 50%, rgba(37, 44, 74, 1) 100%);

            }

            #next {
                padding: 15px 40px 15px 40px;
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                font-size: 15px;
                border-style: solid;
                border-width: 3px;
                border-radius: 30px;
                background-color: #117EEB;
                color: white;
                border-color: #117EEB;
                margin-left: 100px;
                margin-top: 10px;
                outline: none;


            }

            #next:hover {
                background-color: white;
                color: #117EEB;
                border-color: white;
            }

            #dots {
                color: #8E97BD;
                margin-left: 20px;
                margin-top: -20px;
            }

            .il {
                color: white;
                font-size: 100px;
                /* margin-top: 130px; */
                margin-left: 110px;
            }

            .midd {
                margin-top: 130px;
            }

            .app {
                font-family: 'Montserrat', sans-serif;
                font-weight: 900;
                font-size: 35px;
                color: white;
                text-align: center;

            }
        </style>
    </head>

    <body>
        <div class="main-div">
            <div class="quiz-app">
                <div class="start" id="start" style="display: block;">
                    <img src="<?php echo base_url();?>assets/users/robotics/images/img-01.png" height="120px" width="120px" class="il midd" />
                    <h1 class="app">Quiz App</h1>
                    <p id="code">&copy; Code by Interval</p>
                </div>
                <div class="quiz" id="quiz-secreen" style="display:none;">
                    <div class="time-bar">
                        <div class="time-left" id="timeLeft">

                        </div>
                    </div>
                    <div class="question-no">
                        <h3 class="q-text">Questions<span id="currentQuestion"> 1</span> / <span id="totalQuestions"> 10</span></h3>
                        <h3 id="dots">.............................................................</h3>
                    </div>
                    <div class="qus">
                        <h1 id="question"></h1>
                        <img src="" id=q_img height="120px" width="120px" class="il" />
                    </div>
                    <div class="choices">
                        <button class="btn" id="a"></button>
                        <button class="btn" id="b"></button>
                        <button class="btn" id="c"></button>
                        <button class="btn" id="d"></button>
                    </div>
                    <!-- <div class="next-btn">
                        <button id="next">Next</button>
                    </div> -->
                </div>
                <div class="result" id="resultSecreen" style="display: none;">
                    <form method="post">

                        <img src="<?php echo base_url();?>assets/users/robotics/images/img-01.png" height="120px" width="120px" class="il midd" />
                        <h1 class="app"> Thank You </h1>
                        <input type="text" id="score" class="form-control" name="score" value="" style="display: none;">
                        <!-- <h1 class="app"> Score : <span >6</span></h1> -->

                        <input type="submit" id="submit" value="Submit" class="btn btn-info" />
                        <p id="code">&copy; Code by Interval</p>


                    </form>
                </div>
            </div>
        </div>
        <script>
            var currentQuestion = 0;
            var totalScore = 0;
            var cQuestion = document.getElementById('currentQuestion');
            var totalQuestions = document.getElementById('totalQuestions');
            var splashSecreen = document.getElementById('start');
            var quizScreen = document.getElementById('quiz-secreen');
            var x = 0;
            var resultSecreen = document.getElementById('resultSecreen');
            var timeLeft = document.getElementById('timeLeft');
            var score = document.getElementById('score');
            var question = document.getElementById('question');
            var a = document.getElementById('a');
            var b = document.getElementById('b');
            var c = document.getElementById('c');
            var d = document.getElementById('d');
            var btn = document.getElementsByClassName('btn');
            var next = document.getElementById('next');
            var res = "";
            var quizQuestions = <?php echo json_encode($data); ?>;


            function nextQuestion(no) {
                //  Inter(300);
                cQuestion.textContent = " " + (no + 1);
                totalQuestions.textContent = " " + quizQuestions.length;
                console.log("number " + no);
                question.textContent = quizQuestions[no].questions;
                if (quizQuestions[no].image != "") {
                    document.getElementById("q_img").style.display = "block";
                    document.getElementById('q_img').src = "<?php echo base_url();?>assets/users/robotics/" + quizQuestions[no].image + ".png";
                } else
                    document.getElementById("q_img").style.display = "none";

                a.textContent = quizQuestions[no].option_a;
                b.textContent = quizQuestions[no].option_b;
                if (quizQuestions[no].option_c != "") {
                    document.getElementById('c').style.visibility = 'visible';
                    c.textContent = quizQuestions[no].option_c;
                } else {
                    document.getElementById('c').style.visibility = 'hidden';
                }
                if (quizQuestions[no].option_d != "") {
                    document.getElementById('d').style.visibility = 'visible';
                    d.textContent = quizQuestions[no].option_d;
                } else {
                    document.getElementById('d').style.visibility = 'hidden';
                }
            }
            var z = setInterval(function() {
                if (x == 1) {
                    clearInterval(z);
                    splashSecreen.style.display = "none";
                    quizScreen.style.display = "block";
                    nextQuestion(currentQuestion);
                }
                x++;
            }, 2000);
            for (var i = 0; i < btn.length; i++) {
                btn[i].onclick = function() {
                    res += this.id;

                    // console.log(res);
                    if (currentQuestion < 14) {
                        clearInterval(bar);
                        currentQuestion++;
                        nextQuestion(currentQuestion);
                    } else {
                        endSecreen();

                    }
                }
            }
            var bar;

            function endSecreen() {

                quizScreen.style.display = "none";
                resultSecreen.style.display = "block";
                // score.textContent = res;
                document.getElementById('score').value = res;


            }

            function Inter(set) {
                var statusTime = set;
                timeLeft.style.width = statusTime + "px";
                bar = setInterval(function() {
                    if (statusTime == 0) {
                        clearInterval(bar);
                        if (currentQuestion < 14) {
                            currentQuestion++;
                            nextQuestion(currentQuestion);
                        } else {
                            endSecreen();
                        }

                    }
                    timeLeft.style.width = statusTime + "px";
                    statusTime = statusTime - 2;
                }, 1000);
            }
        </script>
    </body>

    </html>