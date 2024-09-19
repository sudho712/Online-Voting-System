<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <div id="headerSection">
        <h1>Online Voting System</h1>
        <hr>
    </div>
    <div id="bodySection">
        <form action="">
            <h3>Login</h3>
            <input type="number" name="mobile" placeholder="Enter Mobile"><br><br>
            <input type="password" name="password" placeholder="Enter password"><br><br>
            <select id="dropbox" name="role">
                <option value="1">Voter</option>
                <option value="2">Group</option>
            </select><br><br>
            <button id="loginbtn">Login</button><br><br>
            New User : <a href="Routes/register.php">Reister Here</a>
        </form>
    </div>
</body>
</html>