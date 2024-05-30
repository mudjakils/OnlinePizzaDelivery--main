<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Back</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #00c6ff, #0072ff);
            color: #fff;
        }
        .welcome-container {
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .welcome-container h1 {
            margin: 0;
            font-size: 2.5rem;
        }
        .welcome-container b {
            color: #ffeb3b;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome back <b><?php echo $_SESSION['adminusername']; ?></b></h1>
    </div>
</body>
</html>
