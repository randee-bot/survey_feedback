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
      margin: 0;
    }

    .continue-button {
      background-color: #4caf50;
      color: #fff;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .continue-button:hover {
      background-color: #45a049;
    }

    .container {
      max-width: 90%;
      width: 600px;
      padding: 2em;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      text-align: center;
      animation: slideIn 1s ease-in-out;
      position: fixed;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
        }

    @media screen and (max-width: 768px) {
      .container {
        width: 90%;
        padding: 1em;
      }
    }

    h1 {
      text-align: center;
    }

    .survey-question {
      margin-bottom: 2em;
    }

    .survey-question-label {
      font-weight: bold;
      margin-bottom: 0.5em;
    }

    .survey-answer {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-bottom: 1em;
    }

    .survey-answer input[type="radio"] {
      margin-right: 0.5em;
    }

    .survey-answer span {
      font-weight: bold;
    }

    .emoji {
      margin-left: 0.25em;
    }

    .survey-submit {
      text-align: center;
      margin-top: 1em;
    }

    .survey-submit button {
      padding: 10px 20px;
      font-size: 16px;
      font-weight: bold;
      color: #fff;
      background-color: #007bff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .survey-submit button:hover {
      background-color: #0056b3;
    }

    .popup {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    .popup-content {
      background-color: #fff;
      padding: 2em;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
      max-width: 500px; /* Adjust the maximum width as needed */
      width: 90%; /* Adjust the width as needed */
      text-align: center;
      position: fixed;
      top: 50%;
      left: 50%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      transform: translate(-50%, -50%);
    }

    .popup h2 {
      margin-bottom: 1em;
    }

    .popup ul {
      list-style-type: none;
      padding: 0;
      margin: 0;
      justify-content: center;
      text-align: justify;
    }

    .popup li {
      margin-bottom: 0.5em;
      text-align: justify;
    }

    .popup li strong {
      display: inline-block;
      min-width: 1.5em;
      text-align: center;
    }

    .popup-button {
      text-align: center;
      margin-top: 1em;
    }

    .popup-content .emoji {
      font-size: 24px; /* Adjust the font size as needed */
    }
    
    label {
      display: flex;
      justify-content: center;
      margin-bottom: 0.5em; /* Add spacing between labels */
    }

    input#customer,
    input#comments {
      display: block;
      width: 100%;
      padding: 0.5em;
      margin-bottom: 1em;
      border: 1px solid #ccc;
      border-radius: 3px;
      font-size: 16px;
      height: 40px;
      text-align: center;
      box-sizing: border-box;
      width: 100%;
      max-width: 400px; /* Adjust the maximum width as desired */
      margin: 0 auto;
      margin-bottom: 1em; /* Add spacing between input fields */
      background-image: none; /* Remove background image */
    }

    input#customer {
      max-width: 400px; /* Adjust the maximum width as desired */
    }

    input#comments {
      max-width: 400px; /* Adjust the maximum width as desired */
    }

  </style>
</head>
<body>
  <div class="container">
    <form action="/insert" method="GET">
      <div class="survey-question">
        <label class="survey-question-label">Question 1: Are you satisfied with our service?</label>
        <div class="survey-answer">
          <input type="radio" name="q1" value="yes" required> <span>Yes</span>
          <input type="radio" name="q1" value="no"> <span>No</span>
          @foreach($mydata as $mydatas)
            <input type="text" name="id" value="{{$mydatas->ticket_id}}">
          @endforeach
        </div>
      </div>

      <div class="survey-question">
        <label class="survey-question-label">Question 2: How likely are you to recommend us to a friend?</label>
        <div class="survey-answer">
          <input type="radio" name="q2" value="1" required> <span>1</span> <span class="emoji">😞</span> (Not likely)
          <input type="radio" name="q2" value="2"> <span>2</span> <span class="emoji">😐</span>
          <input type="radio" name="q2" value="3"> <span>3</span> <span class="emoji">😊</span>
          <input type="radio" name="q2" value="4"> <span>4</span> <span class="emoji">😄</span>
          <input type="radio" name="q2" value="5"> <span>5</span> <span class="emoji">😃</span> (Very likely)
        </div>
      </div>

      <div class="survey-question">
        <label class="survey-question-label">Question 3: How satisfied are you with the product quality?</label>
        <div class="survey-answer">
          <input type="radio" name="q3" value="1" required> <span>1</span> <span class="emoji">😞</span> (Dissatisfied)
          <input type="radio" name="q3" value="2"> <span>2</span> <span class="emoji">😐</span>
          <input type="radio" name="q3" value="3"> <span>3</span> <span class="emoji">😊</span>
          <input type="radio" name="q3" value="4"> <span>4</span> <span class="emoji">😄</span>
          <input type="radio" name="q3" value="5"> <span>5</span> <span class="emoji">😃</span> (Very Satisfied)
        </div>
      </div>

      <div class="survey-question">
        <label class="survey-question-label">Question 4: How would you rate our customer support?</label>
        <div class="survey-answer">
          <input type="radio" name="q4" value="1" required> <span>1</span> <span class="emoji">😞</span> (Poor)
          <input type="radio" name="q4" value="2"> <span>2</span> <span class="emoji">😐</span>
          <input type="radio" name="q4" value="3"> <span>3</span> <span class="emoji">😊</span>
          <input type="radio" name="q4" value="4"> <span>4</span> <span class="emoji">😄</span>
          <input type="radio" name="q4" value="5"> <span>5</span> <span class="emoji">😃</span> (Excellent)
        </div>
      </div>

      <div class="survey-question">
        <label class="survey-question-label">Question 5: How user-friendly is our website?</label>
        <div class="survey-answer">
          <input type="radio" name="q5" value="1" required> <span>1</span> <span class="emoji">😞</span> (Not user-friendly)
          <input type="radio" name="q5" value="2"> <span>2</span> <span class="emoji">😐</span>
          <input type="radio" name="q5" value="3"> <span>3</span> <span class="emoji">😊</span>
          <input type="radio" name="q5" value="4"> <span>4</span> <span class="emoji">😄</span>
          <input type="radio" name="q5" value="5"> <span>5</span> <span class="emoji">😃</span> (Very user-friendly)
        </div>
      </div>

      <label for="customer">👤 Customer Name</label>
      <input type="text" id="customer" name="customer">

      <label for="comments">💬 Additional Comments / Unresolved Issues</label>
      <textarea id="comments" name="comments" rows="4" cols="50"></textarea>

      <div class="survey-submit">
        <button type="submit">Submit</button>
      </div>
    </form>
  </div>

  <div class="popup" id="popup">
    <div class="popup-content">
      <h2>Icon's Rating Definitions</h2>
      <ul>
        <li><strong>😃</strong> Very Satisfied </li>
        <li><strong>😄</strong> Somewhat Satisfied</li>
        <li><strong>😊</strong> Neither satisfied nor dissatisfied</li>
        <li><strong>😐</strong> Somewhat Dissatisfied</li>
        <li><strong>😞</strong> Dissatisfied</li>
      </ul>
      <div class="popup-button">
        <button class="continue-button" onclick="closePopup()">Continue</button>
      </div>

    </div>
  </div>

  <script>
    window.addEventListener('DOMContentLoaded', function() {
      showPopup();
    });

    function showPopup() {
      const popup = document.getElementById('popup');
      popup.style.display = 'flex';
    }

    function closePopup() {
      const popup = document.getElementById('popup');
      popup.style.display = 'none';
    }
  </script>
</body>
</html>
