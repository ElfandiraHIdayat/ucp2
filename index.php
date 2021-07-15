<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form action="./login.php" method="post" name="form">

            <ul>
                <li>
                    <label for="username">username :</label>
                    <input type="text" name="username" id="username" required>
                </li>
                <li>
                    <label for="password">password :</label>
                    <input type="password" name="password" id="password" required>
                </li>
                <li>
                    <button type="submit">Login</button>
                </li>
            </ul>

        </form>
    </body>
</html>