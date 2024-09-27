<!-- ./views/errors/404.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Not Found</title>
    <link rel="stylesheet" href="<?=url("public/css/theme.css");?>">
    <style>
        body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--input-bg);
            gap: 1rem;
            user-select: none;
        }
    </style>
</head>

<body>
    <h1>View Not Found</h1>
    <p>The requested view <strong><?= $view ?></strong> could not be found.</p>
    <p>Error: <?= $error ?></p>
</body>

</html>
