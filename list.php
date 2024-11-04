<?php
$directory = __DIR__;
$files = glob($directory . '/portfolio_*.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Portfolios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
    <h1>Generated Portfolios</h1>
    <ul>
        <?php foreach ($files as $file): ?>
            <li><a href="<?php echo basename($file); ?>"><?php echo basename($file); ?></a></li>
        <?php endforeach; ?>
    </ul>
</div>
</body>
</html>