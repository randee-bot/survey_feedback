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

        .button-container {
            margin-top: 20px;
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

        #continue-button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #continue-button:hover {
            background-color: #45a049;
        }

        .form-container {
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            text-align: center;
        }

        .note-box {
            margin-top: 1em;
            border: 1px solid black;
            padding: 1em;
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
    </style>
</head>

<body>
    <div class="banner">
        <p>SITE RETAIL IT SUPPORT - FEEDBACK</p>
    </div>
    <div class="container">
        <img class="logo" src="{{ asset('survey_feedback\public\shell.png') }}" alt="Logo">
        <div class="form-container">
        <form action="/" method="GET" onsubmit="return validateForm();">
        @foreach($anything as $anythings)
        <div class="label-container">
            <label for="">{{$anythings->ticket_id}}</label>
            <div class="label-text">Ticket #</div>
        </div>
        <div class="label-container">
            <label>Service | I&A</label>
            <div class="label-text">Information Assistance</div>
        </div>
        <div class="label-container">
            <label for="">{{$anythings->site_name}}</label>
            <div class="label-text">Site Name</div>
        </div>
        <div class="label-container">
            <label for="">{{$anythings->address}}</label>
            <div class="label-text">Address</div>
        </div>
        <div class="label-container">
            <label for="">{{$anythings->field_engineer_name}}</label>
            <div class="label-text">Datalogic Support Staff Name</div>
        </div>
        @endforeach
        </form>

        <form action="/survey_feedback" method="GET" class="button-container">
            <button type="submit" id="continue-button">Continue</button>
        </form>

        <div class="note-box">
            <p><strong>Note:</strong> Please enter valid Ticket numbers for Datalogic Support Services only such as Information & Assistance, Onsite Support Services and Equipment Swap Services</p>
        </div>
    </div>
    <script>
       
    </script>
</body>

</html>