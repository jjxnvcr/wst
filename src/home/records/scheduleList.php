<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Schedules</title>
    <link rel="stylesheet" href="../../../styles/records.css">
</head>
<body>
    <nav>
        <ul>
            <li><a href="../homepage.html">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Announcements</a></li>
            <li><a href="../misc/aboutUs.php">About Us</a></li>
            <li><a href="../misc/contactUs.html">Contact Us</a></li>
            <li>
                <div class="settings-dropdown">
                    <a href="#">Settings</a>
                    <div class="settings-dropdown-content">
                        <div class="user-dropdown">
                            <a href="#">User</a>
                            <div class="user-dropdown-content">
                                <a href="profileList.php">Profile</a>
                                <a href="accountList.php">Account</a>
                                <a href="#">Schedule</a>
                            </div>
                        </div>

                        <a href="../../../index.html">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="header">
            <h1>List of Schedules</h1>
            <button onclick="window.location.href = 'add/addSchedule.html';">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-table-plus"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12.5 21h-7.5a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v7.5" /><path d="M3 10h18" /><path d="M10 3v18" /><path d="M16 19h6" /><path d="M19 16v6" /></svg>
                Add Schedule</button>
        </div>

        <div class="table-wrapper">
            <table>
                <th>School ID</th>
                <th>Surname</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Actions</th>

                <?php
                include("../../../php/connector.php");

                $conn = createConnection();
                $res = query($conn, "SELECT * FROM `userschedule`");

                for ($i = 0; $i < mysqli_num_rows($res); $i++) {
                    $row = mysqli_fetch_array($res);

                    echo "<tr>";
                    echo "<td>" . $row[0] . "</td>";
                    echo "<td>" . $row[1] . "</td>";
                    echo "<td>" . $row[2] . "</td>";
                    echo "<td>" . $row[3] . "</td>";
                    echo "<td>" . $row[4] . "</td>";
                    echo "<td>" . $row[5] . "</td>";
                    
                    echo "<td>";
                        echo(
                            "<button onclick=\"window.location.href = '../users/schedule/schedule.html';\">View</button>"
                        );
                        echo(
                            "<button onclick=\"window.location.href = '../records/edit/editSchedule.php?id={$row[0]}';\">Edit</button>"
                        );
                        echo(
                            "<button onclick=\"window.location.href = '../records/delete/deleteSchedule.php?id={$row[0]}';\">Delete</button>"
                        );
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </table>
        </div>
    </div>
</body>
</html>