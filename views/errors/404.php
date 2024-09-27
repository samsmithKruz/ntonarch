<!DOCTYPE html>
<html>
<head>
    <title>Page Not Found</title>
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
        h1{
            color: var(--dark);
        }
        p{
            margin-bottom: 0;
            color: var(--dark-text);
        }
    </style>
</head>
<body>
    <h1>404</h1> | 
    <p><?= $error ?? "Page Not Found." ?></p>
</body>
</html>