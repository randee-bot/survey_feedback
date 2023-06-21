<!DOCTYPE html>
<html lang="en">
<head>
  <title>Site Retail IT Feedback Form</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .container {
      max-width: 600px;
      padding: 2em;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
      animation: slideIn 1s ease-in-out;
    }

    @keyframes slideIn {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    h1 {
      font-size: 2em;
      margin-bottom: 0.5em;
    }

    p {
      font-size: 1.2em;
      margin-top: 0;
    }

    .thank-you-symbol {
      margin-top: 1em;
      font-size: 5em;
      animation: spin 2s linear infinite, scale 1s infinite alternate;
    }

    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes scale {
      0%, 100% {
        transform: scale(1);
      }
      50% {
        transform: scale(1.5);
      }
    }
  </style>
  <!-- <script>
    setTimeout(function() {
      window.location.href = 'ticket_input.blade.php';
    }, 10000); // 10 seconds in milliseconds
  </script> -->
</head>
<body>
  <div class="container">
    <h1>Thank You!</h1>
    <p>Your survey has been submitted successfully.</p>
    <p>We appreciate your feedback.</p>
    <div class="thank-you-symbol">👍</div>
  </div>
</body>
</html>
