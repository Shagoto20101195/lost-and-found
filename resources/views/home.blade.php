<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Home</h1>
    <p>Welcome to the home page!</p>

    <form action="" method="POST">
        @csrf
        <input type="text" name="email" placeholder="Enter Your Email">
        <input type="password" name="password" placeholder="Enter Your Password">
        <input type="submit" value="Login">
    </form>
    <p>
        Don't have an account?
        <a href="register">Go make account!</a>
    </p>
</body>
</html>