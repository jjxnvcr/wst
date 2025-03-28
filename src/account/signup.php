<?php include("../../php/connector.php")?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../../styles/form.css">
</head>
<body>
    <div class="container">
        <h1 class="header">Sign up</h1>
        <p class="sub-header">Let's start your journey!</p>

        <div class="wrapper">
            <div class="form-wrapper">
                <span class="input-field">
                    <label for="username">Username: </label>
                    <input type="text" id="username" name="username">
                </span>

                <span class="input-field">                
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password">
                </span>

                <span class="input-field">                
                    <label for="confirm-password">Confirm Password: </label>
                    <input type="password" id="confirm-password" name="confirm-password">
                </span>
            </div>

            <div class="button-wrapper">
                <button type="submit" class="confirm-btn" onclick="window.location.href = 'setupProfile.php';">Continue</button>
                <button type="reset" class="clear-btn">Clear</button>
            </div>
        </div>

        <span class="nav-btn">
            <a href="../../index.html">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <g fill="none" fill-rule="evenodd">
                        <path d="M24 0v24H0V0zM12.594 23.258l-.012.002l-.071.035l-.02.004l-.014-.004l-.071-.036q-.016-.004-.024.006l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.016-.018m.264-.113l-.014.002l-.184.093l-.01.01l-.003.011l.018.43l.005.012l.008.008l.201.092q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.003-.011l.018-.43l-.003-.012l-.01-.01z" />
                        <path fill="currentColor" d="M12.06 5.94a1.5 1.5 0 0 1 0 2.12L8.122 12l3.94 3.94a1.5 1.5 0 0 1-2.122 2.12l-5-5a1.5 1.5 0 0 1 0-2.12l5-5a1.5 1.5 0 0 1 2.122 0Zm6 0a1.5 1.5 0 0 1 0 2.12L14.122 12l3.94 3.94a1.5 1.5 0 0 1-2.122 2.12l-5-5a1.5 1.5 0 0 1 0-2.12l5-5a1.5 1.5 0 0 1 2.122 0Z" />
                    </g>
                </svg>
            </a>
        </span>
    </div>
</body>
</html>