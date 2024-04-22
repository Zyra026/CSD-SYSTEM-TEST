<?php

@include 'tracking_db.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $day_of_week = $_POST['day_of_week'];
    $subject = $_POST['subject'];
    $from_month = $_POST['from_month'];
    $to_month = $_POST['to_month'];
    $course_id = $_POST['course_id'] ?? null;
    $professor_id = $_POST['professor_id'] ?? null;
    $room_id = $_POST['room_id'] ?? null;
    $details = $_POST['details'] ?? '';

    // Prepare and execute SQL statement
    $sql = "INSERT INTO professorschedule (professor_id, course_id, room_id, day_of_week, start_time, end_time, from_month, end_date, details) 
            VALUES ('$professor_id', '$course_id', '$room_id', '$day_of_week', '$start_time', '$end_time', '$from_month', '$to_month', '$details')";

};

// Close connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CSD Faculty</title>
    <link rel="stylesheet" href="addsched.css" />
</head>
<body>
    <nav>  
        <div class="wrapper">
            <nav class="navbar">
                <div class="navbar_left">
                    <div class="nav__logo">
                        <a href="#"><img src="imahe/FAST.png" alt="logo" /></a>
                    </div>
                </div>
                <div class="navbar_center_text">
                    <a href="#">Home</a>
                    <a href="addsched.php">Add Schedule</a>
                    <a href="schedule.php">View schedule</a>
                </div>

                <div class="navbar_right">
                    <div class="notifications">
                        <div class="icon_wrap"><i class="far fa-bell"></i></div>
                        <div class="notification_dd">
                            <!-- Notification dropdown content -->
                        </div>
                    </div>
                    <div class="profile">
                        <div class="icon_wrap">
                            <img src="landing/imahe/profile/prof13.png" alt="profile_pic">
                        </div>
                        <div class="profile_dd">
                            <!-- Profile dropdown content -->
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </nav>
    
    <header class="itloog__container header__container" id="homealone">
        <div class="header__content">
            <h1>Computer Studies<br><h1 class="dp">Department</h1></h1>
            <form action="" class="search-bar">
                <input type="text" placeholder="search name..">
                <button type="submit" i class="ri-search-line"></button>
            </form> 
        </div>
        <div class="header__image">
            <img src="imahe/torch.png" alt="header" />
        </div>
    </header>

    <div class="form-container">
        <h2>Add Schedule</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="start_time">Start Time:</label>
            <input type="time" id="start_time" name="start_time" required><br><br>

            <label for="end_time">End Time:</label>
            <input type="time" id="end_time" name="end_time" required><br><br>

            <label for="day_of_week">Day of Week:</label>
            <input type="text" id="day_of_week" name="day_of_week" required><br><br>
      
            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required><br><br>

            <label for="from_month">From Month:</label>
            <input type="text" id="from_month" name="from_month" required><br><br>

            <label for="to_month">To Month:</label>
            <input type="text" id="to_month" name="to_month" required><br><br>

            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required><br><br>

            <label for="room">Room:</label>
            <input type="text" id="room" name="room" required><br><br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
