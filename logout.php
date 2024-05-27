


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, intial-scale=1.0">
        <title>halaman Login</title>
        <link rel="stylesheet" href="login.css">
    
    </head>
    <body>
        <div class="container">
            <h1>LOG-OUT</h1><br>
            <form action="" method="post">
                <input type="email" id="email" name="email" placeholder="email">
                <input type="password" id="password" name="password"placeholder="password">
                <?php if(isset($error)):?>
                <p align="center" style="color : red; font-style:italic;">Password / Username Salah Bosss</p>
                <?php endif;?>       
                <button type="submit"  name="logout">Login</button>
            </form>
        </div>
    </body>    
</html>