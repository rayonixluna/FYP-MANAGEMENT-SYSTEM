<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_meeting.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/student_meeting.js"></script>
    <script src="./js/nav-bar.js"></script>
	<?php include 'includes/../php/student_nav-bar.inc.php'; ?>
    <title>Meetings</title>
</head>
<body>

    


    <div class="container__content">
        <div class="container__meeting">
            <h1 class="content-title">Meetings</h1>
            <div class="wrapper__button">
                <div class="button-group">
                    <div>
                        <button id="upcomingBtn" class="button button-active">Upcoming</button>
                    </div>
                    <div>
                        <button id="pastBtn" class="button">Past</button>
                    </div>
                </div> 
            </div> <hr>

            <div id="upcomingCard" class="container__card">
                <div class="card">
                    <div>
                        <h3 class="card__title"><i class="fa-solid fa-square-pen card__icon"></i>Meeting C</h3>
                    </div>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Location</p>
                </div>

                <div class="card">
                    <div>
                        <h3 class="card__title"><i class="fa-solid fa-square-pen card__icon"></i>Meeting B</h3>
                    </div>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Location</p>
                </div>

                <div class="card">
                    <div>
                        <h3 class="card__title"><i class="fa-solid fa-square-pen card__icon"></i>Meeting E</h3>
                    </div>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Location</p>
                </div>
            </div>

            <div id="pastCard" class="container__card hidden">
                <div class="card ">
                    <div>
                        <h3 class="card__title"><i class="fa-solid fa-square-pen card__icon"></i>Meeting A</h3>
                    </div>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Location</p>
                    <p>Meeting Log</p>
                </div>

                <div class="card ">
                    <div>
                        <h3 class="card__title"><i class="fa-solid fa-square-pen card__icon"></i>Meeting D</h3>
                    </div>
                    <p>Date</p>
                    <p>Time</p>
                    <p>Location</p>
                    <p>Meeting Log</p>
                </div>
            </div>

        </div>
        
    </div>
</body>
</html>