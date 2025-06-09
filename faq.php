<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>QEJANI Hostels - FAQ</title>
  <link rel="stylesheet" href="faq.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .faq-container {
      max-width: 900px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    h1 {
      text-align: center;
      color: #311331;
      margin-bottom: 30px;
    }

    .faq-item {
      margin-bottom: 15px;
      border-bottom: 1px solid #ccc;
    }

    .faq-question {
      background-color: #311331;
      color: #fff;
      cursor: pointer;
      padding: 15px;
      font-size: 18px;
      border: none;
      width: 100%;
      text-align: left;
      outline: none;
      transition: background 0.3s ease;
    }

    .faq-question:hover {
      background-color: #4b1d4b;
    }

    .faq-answer {
      padding: 15px;
      display: none;
      background-color: #f9f9f9;
      color: #333;
    }

    .active + .faq-answer {
      display: block;
    }
  </style>
</head>
<body>
    <?php include("navbar.php"); ?>
    <main>

<div class="faq-container">
  <h1>Frequently Asked Questions</h1>

  <div class="faq-item">
    <button class="faq-question">What is QEJANI Hostels?</button>
    <div class="faq-answer">QEJANI Hostels is a student accommodation service providing safe, comfortable, and affordable housing for university and college students.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Where are you located?</button>
    <div class="faq-answer">We are located near Multimedia University,
        Catholic University and Corperative university with easy access to campus and nearby amenities.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">How do I book a room?</button>
    <div class="faq-answer">You can book a room through our website by navigating to the Rooms section or visiting our front office.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">What facilities are provided?</button>
    <div class="faq-answer">We provide furnished rooms, free Wi-Fi, laundry services, 24/7 security, and a clean kitchen and bathroom setup.</div>
  </div>

  <div class="faq-item">
    <button class="faq-question">Can I visit before booking?</button>
    <div class="faq-answer">Yes! You’re welcome to schedule a visit to inspect the hostel and rooms before making your decision.</div>
  </div>

</div>
</main>
<script>
  // Toggle answers
  const questions = document.querySelectorAll(".faq-question");
  questions.forEach(button => {
    button.addEventListener("click", () => {
      button.classList.toggle("active");
      const answer = button.nextElementSibling;
      answer.style.display = answer.style.display === "block" ? "none" : "block";
    });
  });
</script>
<footer>
    <div class="footer-bottom">
      <p>&copy; 2025 Qejani Hostels. All Rights Reserved.</p>
    </div>
  </div>
  </footer>
</body>
</html>
