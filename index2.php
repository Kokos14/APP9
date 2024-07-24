<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 800px;
        }
        h1, h2 {
            color: #333;
        }
        .buttons {
            margin-top: 20px;
        }
        .button {
            display: inline-block;
            margin-right: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            font-size: 16px;
        }
        .button.whatsapp {
            background-color: #25D366;
        }
        .button.phone {
            background-color: #007BFF;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Blog</h1>
        <h2>John Siak</h2>
        <p>Povolanie: Softvérový inžinier</p>
        <div class="buttons">
            <a href="#" class="button whatsapp">My WhatsApp</a>
            <a href="#" class="button phone">My Telefónne číslo</a>
        </div>
    </div>
</body>
</html>