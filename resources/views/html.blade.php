<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Quiz - Coding Quiz System</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">HTML Basics Quiz</h2>
        <form id="html-quiz" onsubmit="return evaluateQuiz()">
            <ol class="list-group list-group-numbered">
                <li class="list-group-item">
                    <p>What does HTML stand for?</p>
                    <input type="radio" name="q1" value="a"> Hyperlinks and Text Markup Language<br>
                    <input type="radio" name="q1" value="b"> Hyper Text Markup Language<br>
                    <input type="radio" name="q1" value="c"> Home Tool Markup Language<br>
                </li>
                <li class="list-group-item">
                    <p>Which HTML element is used for the largest heading?</p>
                    <input type="radio" name="q2" value="a"> &lt;head&gt;<br>
                    <input type="radio" name="q2" value="b"> &lt;h6&gt;<br>
                    <input type="radio" name="q2" value="c"> &lt;h1&gt;<br>
                </li>
                <li class="list-group-item">
                    <p>What is the correct HTML element for inserting a line break?</p>
                    <input type="radio" name="q3" value="a"> &lt;lb&gt;<br>
                    <input type="radio" name="q3" value="b"> &lt;br&gt;<br>
                    <input type="radio" name="q3" value="c"> &lt;newline&gt;<br>
                </li>
            </ol>
            <button type="submit" class="btn btn-primary btn-lg mt-4 d-block mx-auto">Submit Quiz</button>
        </form>
        <p id="result" class="text-center mt-3"></p>
    </div>

    <script>
        function evaluateQuiz() {
            const correctAnswers = {
                q1: "b",
                q2: "c",
                q3: "b",
            };

            let score = 0;
            const totalQuestions = Object.keys(correctAnswers).length;
            const form = document.getElementById('html-quiz');

            // Check answers
            for (const [question, correctAnswer] of Object.entries(correctAnswers)) {
                const userAnswer = form.elements[question].value;
                if (userAnswer === correctAnswer) {
                    score++;
                }
            }

            // Calculate score percentage
            const scorePercent = (score / totalQuestions) * 100;
            const result = document.getElementById('result');

            if (scorePercent >= 80) {
                result.innerHTML = Congratulations! You passed with a score of ${scorePercent}%. A certificate will be issued.;
            } else {
                result.innerHTML = Your score is ${scorePercent}%. Keep practicing to improve your score!;
            }

            return false; // Prevent page reload
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
