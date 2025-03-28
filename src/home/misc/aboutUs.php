<?php include("../../../php/connector.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="../../../styles/about.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../homepage.html">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="contactUs.html">Contact Us</a></li>
            <li>
                <div class="settings-dropdown">
                    <a href="#">Settings</a>
                    <div class="settings-dropdown-content">
                        <div class="user-dropdown">
                            <a href="#">User</a>
                            <div class="user-dropdown-content">
                                <a href="../records/profileList.php">Profile</a>
                                <a href="../records/accountList.php">Account</a>
                                <a href="../records/scheduleList.php">Schedule</a>
                            </div>
                        </div>

                        <a href="../../../index.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">
        <h1 class="title">About Us</h1>
        <div class="members">
            <div class="member">
                <img src="../../../asset/avelino.jpg" alt="User Image">
                <span class="member-info">
                    <p>Avelino, Chester Monteverde</p>
                    <p>BSIT</p>
                    <p>(+63) 966 138 9601</p>
                    <p>chstr.vln@gmail.com</p>
                </span>
            </div>

            <div class="member">
                <img src="../../../asset/delgado.jpg" alt="User Image">
                <span class="member-info">
                    <p>Delgado, Ryan Micko Manalili</p>
                    <p>BSIT</p>
                    <p>(+63) 915 324 1785</p>
                    <p>ryanmicko123@gmail.com</p>
                </span>
            </div>

            <div class="member">
                <img src="../../../asset/flores.jpg" alt="User Image">
                <span class="member-info">
                    <p>Flores, Janver Suterio</p>
                    <p>BSIT</p>
                    <p>(+63) 993 412 8934</p>
                    <p>itsjamyang@proton.me</p>
                </span>
            </div>

            <div class="member">
                <img src="../../../asset/mateo.jpg" alt="User Image">
                <span class="member-info">
                    <p>Mateo, Axel Ross Edep</p>
                    <p>BSIT</p>
                    <p>(+63) 927 683 7017</p>
                    <p>axelrossmateo@gmail.com</p>
                </span>
            </div>

            <div class="member">
                <img src="../../../asset/santiago.jpg" alt="User Image">
                <span class="member-info">
                    <p>Santiago, John Ivan Pana</p>
                    <p>BSIT</p>
                    <p>(+63) 956 402 8356</p>
                    <p>santiagoivan6@gmail.com</p>
                </span>
            </div>
        </div>
    </div>
</body>
</html>