<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap">
    <link rel="stylesheet" href="/public/asset/login.css">
</head>
<body>
    <section class="container">
        <div class="form">
            <header>Login</header>
            <form id="FormLogin">
                <div class="field input-field">
                    <label for="username">username</label>
                    <input type="text" id="username" placeholder="Enter your username" class="input">
                </div>  
                <div class="field input-field">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" class="input">
                </div>
                <div class="field button-field">
                    <button type="submit">Login</button>
                </div>
            </form>
        </div>
    </section>
    <script src="login.js"></script>
</body>
</html>