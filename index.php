<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Fast and responsive food ordering website">
    <title>Restoku - Fast Food Delivery</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Restoku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero d-flex align-items-center justify-content-center text-white text-center">
      <div class="container">
        <h1 class="display-4">Delicious Meals Delivered Fast!</h1>
        <p class="lead">Order now and enjoy hot, fresh food delivered right to your doorstep.</p>
        <a href="#menu" class="btn btn-primary btn-lg mt-3">Order Now</a>
      </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-5 bg-light text-center">
      <div class="container">
        <h2>About Restoku</h2>
        <img src="https://nagantour.com/wp-content/uploads/2023/09/The-Muara-Jogja-2.png" alt="About Us" class="img-fluid mb-4" />
        <p class="lead">Restoku is your trusted partner for fast, fresh, and convenient meal delivery. Whether you're craving local delicacies or international cuisine, we've got you covered.</p>
        <p>With a commitment to using only the freshest ingredients and offering fast delivery, Restoku ensures that you enjoy every meal as if it's straight from the kitchen.</p>
      </div>
    </section>

    <!-- Menu Section -->
    <section id="menu" class="py-5 text-center">
      <div class="container">
        <h2>Our Menu</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img src="https://lingkar.news/wp-content/uploads/2023/04/Re…p-Nasi-Goreng-Kampung-Simple-Buat-Makan-Malam.jpg" class="card-img-top" alt="Nasi Goreng" />
              <div class="card-body">
                <h5 class="card-title">Nasi Goreng</h5>
                <p class="card-text">A traditional Indonesian fried rice, served with egg, vegetables, and choice of meat.</p>
                <p class="price">Rp 25.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img src="https://images.unsplash.com/photo-1577053639281-b7c9e2544d65" class="card-img-top" alt="Mie Goreng" />
              <div class="card-body">
                <h5 class="card-title">Mie Goreng</h5>
                <p class="card-text">A savory stir-fried noodle dish with vegetables and a choice of chicken, beef, or seafood.</p>
                <p class="price">Rp 20.000</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card shadow-sm">
              <img src="https://images.unsplash.com/photo-1629007455693-4dc92c0b144c" class="card-img-top" alt="Chicken Wings" />
              <div class="card-body">
                <h5 class="card-title">Chicken Wings</h5>
                <p class="card-text">Crispy, juicy chicken wings served with your choice of dipping sauces.</p>
                <p class="price">Rp 30.000</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="py-5 text-center">
      <div class="container">
        <h2>Our Services</h2>
        <div class="row g-4">
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Fast Delivery</h5>
                <p class="card-text">Meals delivered in under 30 minutes.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Fresh Ingredients</h5>
                <p class="card-text">We use only the freshest ingredients for every dish.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card shadow-sm">
              <div class="card-body">
                <h5 class="card-title">Wide Selection</h5>
                <p class="card-text">Choose from a variety of local and international dishes.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-5 bg-light text-center">
      <div class="container">
        <h2>Contact Us</h2>
        <p class="lead">We'd love to hear from you! Please fill out the form below.</p>

        <?php
        // PHP logic to handle form submission
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            // You can process or send this data using PHP mail function or store it in a database
            $to = "info@restoku.com";
            $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";
            $headers = "From: $email";

            if (mail($to, $subject, $body, $headers)) {
                echo '<p class="text-success">Message sent successfully!</p>';
            } else {
                echo '<p class="text-danger">Message sending failed. Please try again later.</p>';
            }
        }
        ?>

        <form method="POST" action="#contact">
          <div class="row mb-3">
            <div class="col-md-6">
              <input type="text" class="form-control" name="name" placeholder="Your Name" required />
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" name="email" placeholder="Your Email" required />
            </div>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="subject" placeholder="Subject" required />
          </div>
          <div class="mb-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </section>

    <!-- Footer Section -->
    <footer class="py-4 bg-dark text-white text-center">
      <p>Contact Us: info@restoku.com | Phone: +62 812-3456-7890</p>
      <p>Address: Jl. Merdeka No. 10, Yogyakarta, Indonesia</p>
      <p>&copy; 2024 Restoku. All Rights Reserved.</p>
    </footer>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts.js"></script>
</body>
</html>
