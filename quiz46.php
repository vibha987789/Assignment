<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $score = 0;

      if ($_POST['q1'] == "HTML") $score++;
      if ($_POST['q2'] == "$") $score++;
      if ($_POST['q3'] == "POST") $score++;

      echo "<p>Your Score: $score / 3</p>";
    }
  ?>
</body>
</html>
