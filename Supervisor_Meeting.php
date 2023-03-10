<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/supervisor_meeting.css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/supervisor_meeting.js"></script>
    <script src="./js/nav-bar.js"></script>
	<?php include 'includes/../php/supervisor_nav-bar.inc.php'; ?>
    <title>Meetings</title>
</head>
<body>
    

    <div class="container__content">
        <div class="container__meeting">
            <h1 class="content-title">Meetings</h1>
            <div class="wrapper__button">
                <div class="button--left-group">
                    <div>
                        <button id="upcomingBtn" class="button button-active">Upcoming</button>
                    </div>
                    <div>
                        <button id="pastBtn" class="button">Past</button>
                    </div>
                </div>
                <div class="button--right-group">
                    <div>
                        <button id="createMeetingBtn" class="button button-add"><span class="icon"><i class="fa-solid fa-plus"></i></span></i>Create Meeting</button>
                    </div>
                </div>
            </div>
            <hr>
            
            <div id="upcomingTable" class="card card__upcoming">
                <h3 class="title">Upcoming Meeting</h3>
                <div class="container__table">
                    <table class="table table-upcoming">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Student</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Meeting</td>
                                <td>May 1, 2022</td>
                                <td>1:00 PM</td>
                                <td>Hall</td>
                                <td>Albert Lim</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="pastTable" class="card card__past hidden">
                <h3 class="title">Past Meeting</h3>
                <div class="container__table">
                    <table class="table table-past">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Location</th>
                                <th>Participants</th>
                                <th>Meeting Logs</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Meeting</td>
                                <td>May 1, 2022</td>
                                <td>11:00AM</td>
                                <td>Meeting Room</td>
                                <td>Albert Lim</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="createMeeting" class="card card__create-meeting hidden">
                <form  action="" method="post" class="form form__create--meeting ">
                    <h3 class="form__title">Create a Meeting</h3>
                    <!-- <div class="form__message form__message--error">Incorrect username/password combination</div> -->
        
                    <div class="form__input-group">
                        <label class="form__input-label" for="title">Title</label><br>
                        <i class="fa-solid fa-square-pen form__input-icon"></i>
                        <input type="text" id="title" class="form__input" autofocus placeholder="Enter meeting title...">
                        <div class="form__input-error-message"></div>
                    </div>
                    
                    <div class="form__input-group">
                        <label class="form__input-label" for="date">Date</label><br>
                        <i class="fa-solid fa-clock form__input-icon"></i>
                        <input type="date" id="date" class="form__input" autofocus>
                        <div class="form__input-error-message"></div>
                    </div>
        
                    <div class="form__input-group">
                        <label class="form__input-label" for="time">Time</label><br>
                        <i class="fa-solid fa-calendar-days form__input-icon"></i>
                        <input type="time" id="time" class="form__input" autofocus>
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="form__input-group">
                        <label class="form__input-label" for="location">Location</label><br>
                        <i class="fa-solid fa-location-dot form__input-icon"></i>
                        <input type="text" id="location" class="form__input" autofocus placeholder="Enter meeting location...">
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="">
                        <label class="form__input-label" for="participants">Students</label><br>
                        <i class="fa-solid fa-users form__input-icon"></i>
                        <select name="participants" id="participants">
                            <option>Select Students</option>
                            <option value="1">Sam</option>
                            <option value="2">Oliver</option>
                            <option value="3" >Student Name 3</option>
                        </select>
                        <!-- <input type="text" id="participants" class="form__input" autofocus placeholder="Invite students..."> -->
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="form__input-group">
                        <label class="form__input-label" for="description">Description</label><br>
                        <i class="fa-solid fa-file-lines form__input-icon"></i>
                        <input type="textarea" id="description" class="form__input" autofocus placeholder="Enter meeting description...">
                        <div class="form__input-error-message"><!--This is an error message --></div>
                    </div>

                    <div class="container__button">
                        <button class="form__button form__button--create" type="submit"><span class="icon"><i class="fa-solid fa-circle-plus"></i></span>Create</button>
                        <button class="form__button form__button--clear" type="reset" value="Clear Form"><span class="icon"><i class="fa-solid fa-delete-left"></i></span>Clear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>