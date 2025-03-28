<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
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
        <h1>Delete User</h1>
        
        <?php
            include("../../../../php/connector.php");

            $id = $_GET["id"];
            $conn = createConnection(); 
            $query = "SELECT * FROM `useraccount` WHERE `SchoolID` = '$id'";
            $result = query($conn, $query)->fetch_assoc();

            echo("
            <form action=\"../../../../php/delete/deleteAccount.php\" method=\"POST\">
                <input type=\"hidden\" name=\"id\" value=\"${id}\">

                <input type=\"text\" name=\"id\" value=\"${id}\" disabled>

                <label for=\"surname\">Surname:</label>
                <input type=\"text\" id=\"surname\" name=\"surname\" value=\"{$result['Surname']}\"  disabled>

                <label for=\"first-name\">First Name:</label>
                <input type=\"text\" id=\"first-name\" name=\"first-name\" value=\"{$result['FirstName']}\" disabled>

                <label for=\"middle-name\">Middle Name:</label>
                <input type=\"text\" id=\"middle-name\" name=\"middle-name\" value=\"{$result['MiddleName']}\" disabled>

                <label for=\"username\">Username:</label>
                <input type=\"text\" id=\"username\" name=\"username\" value=\"{$result['Username']}\"  disabled>

                <label for=\"password\">Password:</label>
                <input type=\"password\" id=\"password\" name=\"password\" value=\"{$result['Password']}\" disabled>

                <div class=\"buttons\">
                    <input type=\"submit\" value=\"Delete\">
                    <input type=\"reset\" value=\"Cancel\" onclick=\"window.location.href = '../accountList.php';\">
                </div>
            </form>") 
        ?>
    </div>
</body>
</html>