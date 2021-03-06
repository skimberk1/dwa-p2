<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>XKCD Password Generator</title>
  <meta name="viewport" content="width=device-width, user-scalable=no">

  <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
  <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
  <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
  <?php
  require('./generate_password.php');
  ?>

  <div class="container">
    <h2>XKCD Password Generator</h2>
    <div class="password" id="password"><?= $password; ?></div>

    <form action="./" method="GET">
      <div class="field">
        <label for="num_words">Number of words</label>
        <input type="number" name="num_words" id="num_words" min="1" step="1" value="<?= $num_words; ?>">
      </div>
      <div class="field">
        <input type="checkbox" name="capitalize_first_letter" id="capitalize_first_letter" value="on" <?= $capitalize_first_letter ? 'checked="checked"' : '' ?>>
        <label for="capitalize_first_letter">Capitalize first letter</label>
      </div>
      <div class="field">
        <input type="checkbox" name="append_number" id="append_number" value="on" <?= $append_number ? 'checked="checked"' : '' ?>>
        <label for="append_number">Add a number</label>
      </div>
      <div class="field">
        <input type="checkbox" name="append_symbol" id="append_symbol" value="on" <?= $append_symbol ? 'checked="checked"' : '' ?>>
        <label for="append_symbol">Add a symbol</label>
      </div>
      <input type="submit" value="Generate!">
    </form>

    <img src="http://imgs.xkcd.com/comics/password_strength.png" alt="XKCD Password Comic">
  </div>

  <script src="./js/select.js"></script>
  <script src="./js/debounce.js"></script>
  <script src="./js/serialize.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>
