<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Fruit Selector</title>
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
    .subtitle {
      color: #6366f1;
      font-size: 1.1rem;
      margin-bottom: 1.5rem;
    }
    .form-check {
      margin-bottom: 1rem;
    }
    .btn-primary {
      background: linear-gradient(90deg, #6366f1 0%, #60a5fa 100%);
      border: none;
      font-weight: 600;
      padding: 0.75rem 2rem;
      border-radius: 2rem;
      transition: background 0.2s;
    }
    .btn-primary:hover {
      background: linear-gradient(90deg, #60a5fa 0%, #6366f1 100%);
    }
  </style>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="card shadow p-4" style="width: 100%; max-width: 420px;">
      <div class="card-body">
        <h2 class="card-title text-center mb-2">Fruit Selector</h2>
        <div class="subtitle text-center">Mamili ng paborito mong prutas.</div>
        <form action="process_fruits.php" method="post">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruits[]" value="Apple" id="fruitApple">
            <label class="form-check-label" for="fruitApple">Apple</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruits[]" value="Banana" id="fruitBanana">
            <label class="form-check-label" for="fruitBanana">Banana</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruits[]" value="Mango" id="fruitMango">
            <label class="form-check-label" for="fruitMango">Mango</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruits[]" value="Orange" id="fruitOrange">
            <label class="form-check-label" for="fruitOrange">Orange</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" name="fruits[]" value="Strawberry" id="fruitStrawberry">
            <label class="form-check-label" for="fruitStrawberry">Strawberry</label>
          </div>
          <div class="d-grid mt-4">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
