<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
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
        <h1>Edit Profile</h1>
        
        <div class="user-info">
            <div class="image-container">
                <?php 
                    include("../../../../php/connector.php");

                    $id = $_GET['id'];
                    $conn = createConnection(); 
                    $query = "SELECT * FROM `userprofile` WHERE `SchoolID` = '$id'";

                    $res = query($conn, $query);

                    $surname = lcfirst(str_replace(" ", "", $res->fetch_assoc()['Surname']));

                    echo("<img src=\"../../../../asset/${surname}.jpg\" alt=\"User Image\">");
                ?>

                <div class="hover-overlay">
                    <div class="hover-text">Upload Image</div>
                </div>
            </div>
    
            <div class="details">
                <?php
                    echo("
                    <form action=\"../../../../php/edit/editProfile.php?\" method=\"POST\">
                        <input type=\"hidden\" name=\"id\" value=\"{$_GET['id']}\">

                        <label for=\"surname\">Surname:</label>
                        <input type=\"text\" id=\"surname\" name=\"surname\">
            
                        <label for=\"first-name\">First Name:</label>
                        <input type=\"text\" id=\"first-name\" name=\"first-name\">
            
                        <label for=\"middle-name\">Middle Name:</label>
                        <input type=\"text\" id=\"middle-name\" name=\"middle-name\">
            
                        <label for=\"birthdate\">Birthdate:</label>
                        <input type=\"date\" id=\"birthdate\" name=\"birthdate\">
            
                        <label for=\"email\">Email:</label>
                        <input type=\"text\" id=\"email\" name=\"email\">

                        <div class=\"buttons\">
                            <input type=\"submit\" value=\"Save\">
                            <input type=\"reset\" value=\"Cancel\" onclick=\"window.location.href = '../profileList.php';\">
                        </div>
                    </form>");
                ?>
            </div>
        </div>
    </div>
</body>
</html>

