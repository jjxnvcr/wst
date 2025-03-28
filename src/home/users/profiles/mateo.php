<?php include("../../../../php/connector.php")?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mateo's Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link rel="stylesheet" href="../../../../styles/profile.css" />
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
                              <a href="../../records/profileList.php">Profile</a>
                              <a href="../../records/accountList.php">Account</a>
                              <a href="../../records/scheduleList.php">Schedule</a>
                          </div>
                      </div>

                      <a href="../../../../index.html">Logout</a>
                  </div>
              </div>
          </li>
      </ul>
  </nav>

    <div class="container">
      <div class="user-content user-profile">
        <div class="avatar">
          <img src="../../../../asset/mateo.jpg" alt="User Avatar" />
        </div>

        <div class="user">
          <h1 class="name">Axel Ross Mateo</h1>
          <div class="title">
            <h4>BSIT Student</h4>
          </div>
        </div>

        <ul class="socials">
          <li>
            <span class="facebook-qlink">
              <a href="https://facebook.com/axl.mteo">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                  <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
              </a>
            </span>
          </li>

          <li>
            <span class="instagram-qlink">
              <a href="https://instagram.com/axl.rssmt">
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-brand-instagram"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M16 3a5 5 0 0 1 5 5v8a5 5 0 0 1 -5 5h-8a5 5 0 0 1 -5 -5v-8a5 5 0 0 1 5 -5zm-4 5a4 4 0 0 0 -3.995 3.8l-.005 .2a4 4 0 1 0 4 -4m4.5 -1.5a1 1 0 0 0 -.993 .883l-.007 .127a1 1 0 0 0 1.993 .117l.007 -.127a1 1 0 0 0 -1 -1" /></svg>
                </svg>
              </a>
            </span>
          </li>
        </ul>

        <ul class="others">
          <li class="others-content">
            <span>
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-phone"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 3a1 1 0 0 1 .877 .519l.051 .11l2 5a1 1 0 0 1 -.313 1.16l-.1 .068l-1.674 1.004l.063 .103a10 10 0 0 0 3.132 3.132l.102 .062l1.005 -1.672a1 1 0 0 1 1.113 -.453l.115 .039l5 2a1 1 0 0 1 .622 .807l.007 .121v4c0 1.657 -1.343 3 -3.06 2.998c-8.579 -.521 -15.418 -7.36 -15.94 -15.998a3 3 0 0 1 2.824 -2.995l.176 -.005h4z" /></svg>
            </span>

            <a href="https://messages.google.com/web/conversations/new" target="_blank" rel="noopener noreferrer">
              <div>
                <h4>Phone</h4>
                <p>(+63) 927 683 7017</p>
              </div>
            </a>
          </li>

          <li class="separator"></li>

          <li class="others-content">
            <span>
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-mail"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 7.535v9.465a3 3 0 0 1 -2.824 2.995l-.176 .005h-14a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-9.465l9.445 6.297l.116 .066a1 1 0 0 0 .878 0l.116 -.066l9.445 -6.297z" /><path d="M19 4c1.08 0 2.027 .57 2.555 1.427l-9.555 6.37l-9.555 -6.37a2.999 2.999 0 0 1 2.354 -1.42l.201 -.007h14z" /></svg>
            </span>

            <a href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blank" rel="noopener noreferrer">
              <div>
                <h4>Email</h4>
                <p>axelrossmateo@gmail.com</p>
              </div>
            </a>
          </li>

          <li class="separator"></li>

          <li class="others-content">
            <span>
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-map-pin"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" /></svg>
            </span>

            <a href="https://www.google.com/maps/place/San+Miguel,+Bulacan" target="_blank" rel="noopener noreferrer">
              <div>
                <h4>Location</h4>
                <p>San Miguel, Bulacan, PH</p>
              </div>
            </a>
          </li>

          <li class="separator"></li>

          <li class="others-content">
            <span>
              <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-cake"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 20h18v-8a3 3 0 0 0 -3 -3h-12a3 3 0 0 0 -3 3v8z" /><path d="M3 14.803c.312 .135 .654 .204 1 .197a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1a2.4 2.4 0 0 0 2 -1a2.4 2.4 0 0 1 2 -1a2.4 2.4 0 0 1 2 1a2.4 2.4 0 0 0 2 1c.35 .007 .692 -.062 1 -.197" /><path d="M12 4l1.465 1.638a2 2 0 1 1 -3.015 .099l1.55 -1.737z" /></svg>
            </span>

            <a href="https://calendar.google.com/calendar/u/0/r/day/2025/10/3?pli=1" target="_blank" rel="noopener noreferrer">
              <div>
                <h4>Birthdate</h4>
                <p>October 14, 2005</p>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="user-content user-details">
        <div class="user-about-me">
          <div class="title">
            <h1>About Me</h1>

            <div class="line"></div>
          </div>

          <span class="content">
            <p>
              I am also an  Information Technology student at Bulacan State University, enthusiastic about innovation, technology, and solving problems. I like learning about several facets of IT, such as web development, cybersecurity, and programming. My objective is to constantly increase my knowledge and abilities in order to keep up with the rapidly changing tech sector. I enjoy taking on problems that test my critical and creative thinking, and I do best in group settings. With a solid background in information technology and a strong desire to learn new things constantly, I hope to advance the industry by creating effective and significant solutions.
            </p>
          </span>
        </div>

        <div class="user-skills">
          <h2>My Skills</h2>

          <ul class="skills-list">
            <li class="skill">
              <span>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-calculator"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M18 2a3 3 0 0 1 3 3v14a3 3 0 0 1 -3 3h-12a3 3 0 0 1 -3 -3v-14a3 3 0 0 1 3 -3zm-10 15a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm-8 -4a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm4 0a1 1 0 0 0 -1 1l.007 .127a1 1 0 0 0 1.993 -.117l-.007 -.127a1 1 0 0 0 -.993 -.883zm-1 -7h-6a2 2 0 0 0 -2 2v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2 -2v-1a2 2 0 0 0 -2 -2z" /></svg>
              </span>

              <span class="skill-info">
                <h4>Problem Solving</h4>
                <span>
                  <p>
                    Quickly compute math problems and understand logic efficiently
                  </p>
                </span>
              </span>
            </li>

            <li class="skill">
              <span>
                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="currentColor"  class="icon icon-tabler icons-tabler-filled icon-tabler-headphones"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 18a3 3 0 0 1 -2.824 2.995l-.176 .005h-1a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-3a3 3 0 0 1 2.824 -2.995l.176 -.005h1c.351 0 .688 .06 1 .171v-.171a7 7 0 0 0 -13.996 -.24l-.004 .24v.17c.25 -.088 .516 -.144 .791 -.163l.209 -.007h1a3 3 0 0 1 2.995 2.824l.005 .176v3a3 3 0 0 1 -2.824 2.995l-.176 .005h-1a3 3 0 0 1 -2.995 -2.824l-.005 -.176v-6a9 9 0 0 1 17.996 -.265l.004 .265v6z" /></svg>
              </span>

              <span class="skill-info">
                <h4>Active Listener</h4>
                <span>
                  <p>Great at grasping vocal details that come from people</p>
                </span>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
