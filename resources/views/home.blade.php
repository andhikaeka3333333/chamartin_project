<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamartin Quiz</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }
        /* Navbar styling */
        .navbar {
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-weight: bold;
            color: #007bff !important;
        }
        .navbar-nav .nav-link {
            color: #555 !important;
            font-weight: 500;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff !important;
        }
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            padding: 60px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        .btn-start-quiz {
            background-color: #ffc107;
            color: #333;
            font-weight: bold;
            border-radius: 25px;
            padding: 10px 20px;
        }
        .btn-start-quiz:hover {
            background-color: #e0a800;
        }
        /* Card styling */
        .card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }
        .card img {
            height: 180px;
            object-fit: cover;
        }
        .card-title {
            font-weight: bold;
            color: #007bff;
        }
        .btn-quiz {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border-radius: 20px;
            padding: 8px 16px;
        }
        .btn-quiz:hover {
            background-color: #0056b3;
        }
        /* Footer styling */
        footer {
            background-color: #333;
            color: #f8f9fa;
            padding: 20px 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Navbar -->

    <x-navbar></x-navbar>
    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Chamartin Quiz!</h1>
        <p>Ikuti langkah-langkah sederhana dan buat website yang profesional tanpa harus menghabiskan waktu berjam-jam.</p>
        <a href="#quizzes" class="btn btn-start-quiz">Start Quiz</a>
    </section>

    <!-- Quiz Cards Section -->
    <section id="quizzes" class="container my-5">
        <div class="text-center mb-5">
            <h2>Choose Your Quiz</h2>
            <p>Select a topic to begin your adventure!</p>
        </div>
        <div class="row">
            <!-- Sample Quiz Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Quiz Topic 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">Topic 1</h5>
                        <p class="card-text">Description for quiz topic 1.</p>
                        <a href="/html" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
            <!-- Sample Quiz Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Quiz Topic 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">Topic 2</h5>
                        <p class="card-text">Description for quiz topic 2.</p>
                        <a href="#" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
            <!-- Sample Quiz Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="Quiz Topic 3">
                    <div class="card-body text-center">
                        <h5 class="card-title">Topic 3</h5>
                        <p class="card-text">Description for quiz topic 3.</p>
                        <a href="#" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center">
        <p>© 2024 Chamartin Quiz. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
