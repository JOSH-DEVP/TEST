<?php
if (isset($_POST['send'])) {
    $to = "joshdevp@gmail.com";
    $subject = "Portfolio Contact - " . $_POST['name'];
    $message = $_POST['message'];
    $headers = "From: " . $_POST['email'];
    mail($to, $subject, $message, $headers);
    echo "<script>alert('Message Sent!');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Joshua Reine V. Lacson | Portfolio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #1e1e1e;
      color: #ffffff;
    }

    .navbar,
    footer {
      background-color: #000;
    }

    .navbar .nav-link {
      color: #fff !important;
    }

    .navbar .nav-link.active,
    .navbar .nav-link:hover {
      text-decoration: underline;
      color: #f8f9fa !important;
    }

    .hero {
      background: #000;
      color: white;
      padding: 80px 0;
      text-align: center;
    }

    section {
      background-color: #1e1e1e;
      padding: 60px 0;
      color: #fff;
    }

    .card-custom {
      border: none;
      border-radius: 20px;
      background-color: #2c2c2c;
      box-shadow: 0 4px 20px rgba(0,0,0,0.5);
      overflow: hidden;
      transition: 0.3s ease;
      color: #fff;
    }

    .card-custom:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 30px rgba(0,0,0,0.6);
    }

    .card-body {
      flex-grow: 1;
      padding-bottom: 20px;
    }

    .card-img-top {
      object-fit: cover;
      width: 100%;
      height: 300px;
    }

    h2.section-title {
      text-align: center;
      margin-bottom: 40px;
      font-weight: 600;
      color: #fff;
    }

    .btn-social {
      display: inline-flex;
      align-items: center;
      gap: 10px;
      background-color: #343a40;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 10px;
      margin: 10px;
      text-decoration: none;
      transition: background-color 0.3s;
    }

    .btn-social:hover {
      background-color: #495057;
      color: #fff;
    }

    footer {
      color: white;
      text-align: center;
      padding: 20px;
      margin-top: 50px;
    }

    ul {
      color: white;
    }

#projects .row { display: flex;
     justify-content: 
    space-between; } 

 .card-custom { display: flex; 
    flex-direction: column;
     height: 100%;
 } 
 
 .card-body { flex-grow: 1; 
    padding-bottom: 20px; /* Adjust padding for better spacing */ } 
    
    .card-img-top { object-fit: cover;
         /* Ensures the image covers the space without distortion */ 
         width: 100%; /* Make the image take the full width of the card */
          height: 300px; /* You can adjust this value as needed */ 
        
        } .card-title, 
        card-text {/* Allow the text to expand and be readable */
             white-space: normal; overflow: visible; 
            }
  </style>

  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">MY PORTFOLIO</a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link active" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero Section -->
<section class="hero" id="home">
  <div class="container">
    <h1>Hello, I'm Joshua Reine V. Lacson</h1>
    <p class="lead">Web & Software Developer | Video Editor | Database Analyst</p>
  </div>
</section>
<!-- About Section -->
<section id="about">
  <div class="container">
    <h2 class="section-title">About</h2>
    <div class="row align-items-stretch">

      <!-- About Me Column -->
      <div class="col-md-6 mb-4 d-flex">
        <div class="card card-custom p-4 w-100">
          <h4 class="mb-3">About Me</h4>
          <p class="mb-0">
            I’m a highly motivated and hardworking graduate of Bachelor of Science in Information Technology.
            I have hands-on experience in web design, software development, video editing, and public speaking.
            I strive to grow professionally and help companies achieve their goals through creative and technical solutions.
          </p>
        </div>
      </div>

      <!-- Professional Objective Column -->
      <div class="col-md-6 mb-4 d-flex">
        <div class="card card-custom p-4 w-100">
          <h4 class="mb-3">Professional Objective</h4>
          <p class="mb-0">
            A motivated IT graduate with a positive attitude, skilled in web and software development, including dynamic websites and full-stack applications.
            Proficient in C#, Java, editing, animation, and public speaking, with a strong academic and practical background.
            Seeking a role to contribute expertise to an innovative company.
          </p>
        </div>
      </div>

      <!-- Experience Column -->
      <div class="col-md-6 mb-4 d-flex">
        <div class="card card-custom p-4 w-100">
          <h4 class="mb-3">Experience</h4>
          <ul class="mb-0 list-unstyled">
            <li class="mb-2">
              <strong>Freelance (Apr 2023 – Jan 2025)</strong><br>
              <small>Software and Website Developer</small><br>
              - Designed and developed software solutions and websites.<br>
              - Managed project timelines ensuring high-quality outputs.
            </li>
            <li>
              <strong>Kenjay Gym Workout (Jan 2020 – Nov 2022)</strong><br>
              <small>Fitness Coach</small><br>
              - Guided clients with training programs and nutrition plans.<br>
              - Monitored progress and adjusted routines for better results.
            </li>
          </ul>
        </div>
      </div>

      <!-- Skills Column -->
      <div class="col-md-6 mb-4 d-flex">
        <div class="card card-custom p-4 w-100">
          <h4 class="mb-3">Skills</h4>
          <ul class="mb-0 list-unstyled">
            <li><strong>Software and Web Development</strong></li>
            <ul>
              <li>• HTML, CSS, Bootstrap, JavaScript, PHP</li>
              <li>• MySQL, C#, Java, Python</li>
            </ul>

            <li class="mt-3"><strong>Other Technical Skills</strong></li>
            <ul>
              <li>• Troubleshooting, Product Validation, OOP with Java</li>
            </ul>

            <li class="mt-3"><strong>Creative Skills</strong></li>
            <ul>
              <li>• Video Editing, Photo Editing</li>
            </ul>

            <li class="mt-3"><strong>Soft Skills</strong></li>
            <ul>
              <li>• Leadership, Effective Communication, Critical Thinking, Public Speaking</li>
            </ul>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- Projects Section -->
<section id="projects">
  <div class="container">
    <h2 class="section-title">Projects</h2>
    <div class="row">
      <!-- Project 1 -->
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="sccs.jfif" class="card-img-top" alt="Project 1">
          <div class="card-body">
            <h5 class="card-title">SUPREME CAR CARE SERVICES SALES AND INVENTORY MANAGEMENT SYSTEM</h5>
            <p class="card-text">The Supreme Car Care Sales and Inventory Management System is a modern solution for tracking inventory and sales in real-time. This system allows owners and managers to monitor product stock and sales accurately. Real-time data helps manage products, prevent stockouts, and ensure accurate pricing. It is designed to be user-friendly, helping automotive shops streamline operations and improve customer service for better business growth.</p>
          </div>
        </div>
      </div>

      <!-- Project 2 -->
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="sccs1.PNG" class="card-img-top" alt="Project 2">
          <div class="card-body">
            <h5 class="card-title">SUPREME CAR CARE SERVICES ONLINE RESERVATION</h5>
            <p class="card-text">The Supreme Car Care Services Online Reservation system provides a convenient and efficient way for customers to book automotive services online. Users can schedule appointments for services like oil changes, tire rotations, and engine diagnostics, all from home or on the go. This system integrates a user-friendly web interface with real-time scheduling and database management, streamlining the reservation process and enhancing customer satisfaction.</p>
          </div>
        </div>
      </div>

      <!-- Project 3 -->
      <div class="col-md-4">
        <div class="card card-custom">
          <img src="BRGY.PNG" class="card-img-top" alt="Project 3">
          <div class="card-body">
            <h5 class="card-title">BARANGAY DATABASE ENCODING SYSTEM</h5>
            <p class="card-text">The Barangay Database Encoding System is a software solution designed to simplify the management and storage of resident data for barangay offices. It automates the encoding, storing, and retrieving of resident information, including personal details, household records, and community interactions. This system helps barangay officials efficiently manage and access data for administrative tasks.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section id="contact">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card card-custom p-4">
          <h3 class="text-center">You can contact me through my social media:</h3>
          <!-- Social Media Links -->
          <div class="social-links text-center mt-4">
            <a href="https://www.facebook.com/CLXSUPREMO" target="_blank" class="btn btn-social">
              <img src="facebook.png" alt="Facebook" width="40" height="40"> Facebook
            </a>
            <a href="https://www.instagram.com/_xsupremo/" target="_blank" class="btn btn-social">
              <img src="instagram.png" alt="Instagram" width="40" height="40"> Instagram
            </a>
            <a href="https://t.me/joshdevp" target="_blank" class="btn btn-social">
              <img src="telegram.png" alt="Telegram" width="40" height="40"> Telegram
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <p>&copy; <?= date('Y') ?> Joshua Reine V. Lacson. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
