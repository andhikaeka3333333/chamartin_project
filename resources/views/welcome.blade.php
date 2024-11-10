<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Quiz System - Coding for Teens</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        .hero {
            background: #007bff;
            color: white;
            padding: 50px 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .card {
            border-radius: 15px;
        }
        .btn-quiz {
            background-color: #28a745;
            color: white;
            font-weight: bold;
        }
        .btn-quiz:hover {
            background-color: #218838;
        }
        .card img {
            height: 150px;
            object-fit: cover;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section class="hero">
        <h1>Welcome to Coding Quiz for Teens!</h1>
        <p>Learn coding fundamentals in a fun and interactive way!</p>
        <a href="#quizzes" class="btn btn-light mt-4">Start Quiz</a>
    </section>

    <!-- Quiz Cards Section -->
    <section id="quizzes" class="container my-5">
        <div class="text-center mb-5">
            <h2>Choose Your Quiz</h2>
            <p>Select a topic to begin your coding adventure!</p>
        </div>
        <div class="row">
            <!-- HTML Quiz Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="HTML Quiz">
                    <div class="card-body">
                        <h5 class="card-title">HTML Basics</h5>
                        <p class="card-text">Learn the foundations of HTML and build your first webpage!</p>
                        <a href="#" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
            <!-- CSS Quiz Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="CSS Quiz">
                    <div class="card-body">
                        <h5 class="card-title">CSS Styling</h5>
                        <p class="card-text">Style your webpage with colors, fonts, and layouts using CSS.</p>
                        <a href="#" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
            <!-- JavaScript Quiz Card -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="https://via.placeholder.com/300x150" class="card-img-top" alt="JavaScript Quiz">
                    <div class="card-body">
                        <h5 class="card-title">JavaScript Basics</h5>
                        <p class="card-text">Learn the basics of JavaScript to make interactive websites.</p>
                        <a href="#" class="btn btn-quiz">Start Quiz</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="text-center py-4 bg-dark text-light">
        <p>© 2024 Coding Quiz for Teens. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
