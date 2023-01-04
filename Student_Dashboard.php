<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/student_dashboard.css" type="text/css">
    <script src="https://kit.fontawesome.com/3d7a902bb5.js" crossorigin="anonymous"></script>
    <script src="./js/nav-bar.js"></script>
    <?php include 'includes/../php/student_nav-bar.inc.php'; ?>
    <title>Dashboard</title>
</head>
<body>

    

    <div class="container__content">
        <div class="container__dashboard">
            <h1 class="content-title">Dashboard</h1>
            <hr>
            <div class="container__card">
				

                <div class="card card-right">
				<h3>Title:</h3> 
				<h3>Supervisor:</h3>
                    <h2 class="card__title">Upcoming Meetings</h2>
                    <div class="container__table">
                        <table class="table table-upcoming">
                            <thead>
                                <tr>
                                    <th>Meetings</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Rooms</th>
                                </tr>
                            </thead>
                            <!--PHP RETREIVE MEETING DATA HERE START-->
                            <tbody>
                                <tr>
                                    <!--PHP RETREIVE MEETING DATA HARDCODE START-->
                                    <td>MEETING01</td>
                                    <td>1.Check model KNN & SVD MAE results<br>
                                        2.Check Chapter 3 Report
                                    </td>
                                    <td>Jan 6, 2023</td>
                                    <td>11:00AM</td>
                                    <td>https://meet.google.com/iyx-mxsi-mtc</td>
                                    <!--PHP RETREIVE MEETING DATA HARDCODE END-->
                                </tr>

                            </tbody>
                            <!--PHP RETREIVE MEETING DATA HERE END-->
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>