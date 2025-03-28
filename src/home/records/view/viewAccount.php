<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User</title>
    <link rel="stylesheet" href="../../../../styles/listActions.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../../homepage.html">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="../../misc/aboutUs.php">About Us</a></li>
            <li><a href="../../misc/contactUs.html">Contact Us</a></li>
            <li>
                <div class="settings-dropdown">
                    <a href="#">Settings</a>
                    <div class="settings-dropdown-content">
                        <div class="user-dropdown">
                            <a href="#">User</a>
                            <div class="user-dropdown-content">
                                <a href="../profileList.php">Profile</a>
                                <a href="../accountList.php">Account</a>
                                <a href="../scheduleList.php">Schedule</a>
                            </div>
                        </div>

                        <a href="../../../../index.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1>View User</h1>
        
        <?php
            include("../../../../php/connector.php");

            $id = $_GET["id"];
            $conn = createConnection(); 
            $query = "SELECT * FROM `useraccount` WHERE `SchoolID` = '$id'";
            $result = query($conn, $query)->fetch_assoc();

            echo("
                <div class=\"details\">
                    <span class=\"school-id\">
                        <p>School ID:</p>
                        <p>" . $result["SchoolID"] . "</p>
                    </span>
                    
                    <span class=\"name\">
                        <p>Full Name:</p>
                        <p>" . $result["Surname"] . ", " . $result["FirstName"] . " " . $result["MiddleName"] . "</p>
                    </span>

                    <span class=\"username\">
                        <p>Username:</p>
                        <p>" . $result["Username"] . "</p>
                    </span>

                    <span class=\"password\">
                        <p>Password:</p>
                        <p>" . str_repeat("*", strlen($result["Password"])) . "</p>
                    </span>
                </div>
            ") 
        ?>

        <div class="buttons">
            <button class="cancel-button" onclick="window.location.href = '../accountList.php'">Go Back</button>
        </div>
    </div>
</body>
</html>