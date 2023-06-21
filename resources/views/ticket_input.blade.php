<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Retail IT Feedback Form</title>
    <style>
        /* Add banner styles */
        .banner {
            background-color: #f1f1f1;
            padding: 10px;
            text-align: center;
            font-weight: bold;
            color: #333;
        }

        body {
            font-family: "Karla", sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid #ccc;
            padding: 20px;
            height: 500px;
            /* Adjust the height as desired */
        }

        .form-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .input-container {
            position: relative;
            margin-bottom: 1em;
        }

        .input-container label {
            position: absolute;
            top: -12px;
            left: 10px;
            background-color: #ffffff;
            padding: 0 5px;
            font-size: 12px;
        }

        .input-container label.fixed-label {
            top: 5px;
            /* Adjust the desired position of the label */
        }

        .input-container input {
            padding: 5px;
            border: 1px solid black;
            border-radius: 5px;
            font-size: 14px;
            padding-left: 30px;
        }

        .input-container .label-container {
            position: relative;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            background-color: #ffffff;
        }

        .logo {
            margin-bottom: 20px;
        }

        .label-container {
            position: relative;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-top: 10px;
            background-color: #ffffff;
        }

        .label-text {
            position: absolute;
            top: -12px;
            /* Adjust the desired position of the label text */
            left: 10px;
            /* Adjust the desired position of the label text */
            background-color: #ffffff;
            padding: 0 5px;
            font-size: 12px;
        }

        .loader-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        .loader-content {
            background-color: white;
            padding: 2em;
            border-radius: 5px;
            max-width: 400px;
            text-align: center;
        }

        .note-box {
            margin-top: 1em;
            border: 1px solid black;
            padding: 1em;
        }

        /* Styles for the welcome pop-up */
        .welcome-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        .welcome-content {
            background-color: white;
            padding: 2em;
            border-radius: 5px;
            max-width: 400px;
            text-align: center;
        }

        .welcome-logo {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1em;
        }

        .welcome-logo img {
            width: 100px;
            /* Adjust the width as needed */
            height: 100px;
            /* Adjust the height as needed */
            margin-right: 0.5em;
        }

        .welcome-heading {
            text-align: center;
        }

        .welcome-close-button {
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 0.5em;
            margin-top: 1em;
            cursor: pointer;
        }

        .welcome-close-button:hover {
            background-color: #23527c;
        }

        .submit-button {
            background-color: #337ab7;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            }

            .submit-button:hover {
            background-color: #23527c;
            }

    </style>
</head>

<body>
    <div class="banner">
        <p>SITE RETAIL IT SUPPORT - FEEDBACK</p>
    </div>
    <div class="container">
        <img class="logo" src="{{ asset('survey_feedback\public\shell.png') }}" alt="Logo">
        <div class="form-container">
            <form action="/details" method="GET" onsubmit="return validateForm();">
                <div class="input-container">
                    <div class="label-container">
                        <label for="input">Ticket #</label>
                        <input type="text" id="input" name="id" value="" placeholder="YYYYMM-TNNNN">
                    </div>
                </div>
                <button type="submit" id="submit-button" class="submit-button">Submit</button>

            </form>

            <div class="loader-overlay" id="loader-overlay">
                <div class="loader-content">
                    <p>Please wait, validating...</p>
                </div>
            </div>

            <!-- Welcome pop-up -->
            <div class="welcome-overlay" id="welcome-popup">
                <div class="welcome-content">
                    <div class="welcome-logo">
                        <img src="images/dsc.png" alt="Logo">
                        <h1 class="welcome-heading">Welcome to Shell Site System Support Feedback</h1>
                    </div>
                    <h3>This Portal is intended only for Datalogic Support Calls.</h3>
                    <button id="close-welcome-popup" class="welcome-close-button">Close</button>
                </div>
            </div>

            <div class="note-box">
                <p><strong>Note:</strong> Please enter valid Ticket numbers for Datalogic Support Services only such as Information & Assistance, Onsite Support Services and Equipment Swap Services</p>
            </div>
        </div>


        <script>
            const welcomePopup = document.getElementById('welcome-popup');
            const closeWelcomePopupButton = document.getElementById('close-welcome-popup');
            const submitButton = document.getElementById('submit-button');


            closeWelcomePopupButton.addEventListener('click', function() {
                welcomePopup.style.opacity = '0';
                welcomePopup.style.visibility = 'hidden';
            });

            submitButton.addEventListener('click', function() {
                const label = document.querySelector('.input-container label');
                label.classList.add('fixed-label');
            });

            // Show the welcome message when the page loads
            window.addEventListener('load', function() {
                welcomePopup.style.opacity = '1';
                welcomePopup.style.visibility = 'visible';
            });

            function validateForm() {
                var input = document.getElementById('input').value;
                var regex = /^\d{6}-T\d{4}$/;

                if (!regex.test(input)) {
                    alert('Please enter a valid format: YYYYMM-TNNN');
                    input.focus(); // Set focus back to the input field
                    return false;
                }

                showLoader();

                // Simulate a delay to demonstrate the loader
                setTimeout(function() {
                    hideLoader();
                    // Proceed with form submission
                    document.forms[0].submit();
                }, 2000);

                return false;
            }

            function showLoader() {
                var loaderOverlay = document.getElementById('loader-overlay');
                loaderOverlay.style.opacity = '1';
                loaderOverlay.style.visibility = 'visible';
            }

            function hideLoader() {
                var loaderOverlay = document.getElementById('loader-overlay');
                loaderOverlay.style.opacity = '0';
                loaderOverlay.style.visibility = 'hidden';
            }

            function showWelcomePopup() {
                var welcomePopup = document.getElementById('welcome-popup');

                // Check if the welcome popup has been displayed before
                var hasDisplayed = sessionStorage.getItem('welcomeDisplayed');

                if (!hasDisplayed) {
                    welcomePopup.style.opacity = '1';
                    welcomePopup.style.visibility = 'visible';
                    sessionStorage.setItem('welcomeDisplayed', true);
                }
            }

            // Check if the welcome popup should be displayed on page load
            if (document.readyState === 'complete') {
                showWelcomePopup();
            } else {
                window.addEventListener('load', showWelcomePopup);
            }
        </script>
</body>

</html>