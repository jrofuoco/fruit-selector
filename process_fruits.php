<?php
function renderHeader() {
    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fruit Selection Result</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      min-height: 100vh;
      background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
      font-family: 'Segoe UI', Arial, sans-serif;
    }
    .card {
      border-radius: 1.25rem;
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.12);
      border: none;
    }
    .card-title {
      font-size: 2rem;
      font-weight: 700;
      color: #3b3b3b;
    }
    .btn-back {
      background: linear-gradient(90deg, #6366f1 0%, #60a5fa 100%);
      border: none;
      font-weight: 600;
      padding: 0.5rem 1.5rem;
      border-radius: 2rem;
      color: #fff;
      text-decoration: none;
      display: inline-block;
      margin-top: 1.5rem;
    }
    .btn-back:hover {
      background: linear-gradient(90deg, #60a5fa 0%, #6366f1 100%);
      color: #fff;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 420px;">
      <div class="card-body">
HTML;
}

function renderFooter() {
    echo <<<HTML
        <div class="text-center">
          <a href="index.php" class="btn-back">Back</a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
HTML;
}

renderHeader();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['fruits']) && is_array($_POST['fruits'])) {
        $selectedFruits = $_POST['fruits'];

        echo "<h2 class='card-title text-center mb-3'>Ang mga napili</h2>";
        echo "<ul class='list-group mb-3'>";
        foreach ($selectedFruits as $fruit) {
            echo "<li class='list-group-item'>" . htmlspecialchars($fruit) . "</li>";
        }
        echo "</ul>";

        // Extra: Conditional logic
        if (in_array("Mango", $selectedFruits)) {
            echo "<div class='alert alert-success text-center'><strong>Mango ang Paborito kong prutas!</strong></div>";
        } else {
            echo "<div class='alert alert-info text-center'><em>Ay walang mango, sayang!</em></div>";
        }
    } else {
        echo "<div class='alert alert-warning text-center'><p>Pumili ng kahit anong prutas.</p></div>";
    }
} else {
    echo "<div class='alert alert-danger text-center'><p>Invalid request.</p></div>";
}

renderFooter();
?>
