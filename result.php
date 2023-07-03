<?php
    $textArea = $_GET['textArea'];
    $badWord = $_GET['badWord'];
    $censoredText = str_ireplace($badWord, '***', $textArea);
    $originalLength = strlen($textArea);
    $censoredLength = strlen($censoredText);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Result</title>
</head>
<body>
    <h3>Il tuo testo e:</h3>
    <p>
        <?php echo $textArea; ?>
    </p>
    <span>Lunghezza: <?php echo $originalLength; ?></span>

    <hr>

    <h3>Il tuo testo censurato:</h3>
    <p>
        <?php echo $censoredText; ?>
    </p>
    <span>Lunghezza: <?php echo $censoredLength; ?></span>
</body>
</html>