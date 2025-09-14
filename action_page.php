<?php
$input = '';
$result = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['pi_digits'];

    if ($input === "314") {
        $result = "Correct! ✅";
    } else {
        $result = "Incorrect. Try again!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pi Input Result</title>
  <link rel="stylesheet" href="./style.css" />
</head>
<body>
  <h1>Pi Check</h1>
  <p>You entered: <?php echo htmlspecialchars($input); ?></p>

  <!-- Display result -->
  <?php if ($result): ?>
      <p><?php echo $result; ?></p>
  <?php endif; ?>

  <a href="index.html">Go back</a>
</body>
</html>
