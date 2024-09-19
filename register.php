<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting System</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <style>
        #add {
            width: 24%;
        }
        #profilepic {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 30%;
        }
        #role {
            border: 1px solid black;
            border-radius: 5px;
            padding: 10px;
            width: 30%;
        }
        #role select {
            border-radius: 5px;
            padding: 10px;
        }
    </style>

    <h1>Online Voting System</h1>
    <hr>
    
    <form action="../api/register.php" method="post" enctype="multipart/form-data">
        <h3>Registration Form</h3>
        
        <label for="name">Name:</label>
        <input type="text" name="name" class="name" placeholder="Enter Name" required>
        <label for="mobile">Mobile:</label>
        <input type="number" name="mobile" class="mobile" placeholder="Enter Mobile No." required maxlength="10"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" name="password" class="password" placeholder="Password" required>
        <label for="cpassword">Confirm Password:</label>
        <input type="password" name="cpassword" class="cpassword" placeholder="Confirm Password" required><br><br>
        
        <label for="address">Address:</label>
        <input id="add" type="text" name="address" class="address" placeholder="Address" required><br><br>

        <center>
            <div id="profilepic">
                Upload Image: <input type="file" class="photo" name="photo" required><br><br>
            </div>
        </center><br><br>

        <center>
            <div id="role">
                Select Role:
                <select name="role" required>
                    <option value="1">Voter</option>
                    <option value="2">Group</option>
                </select>
            </div><br><br>
        </center>

        <button type="submit" style="padding: 5px; border-radius: 5px; background-color: rgba(0, 72, 255, 0.711); color: white;">
            Register
        </button><br><br>
        
        Already a User? <a href="http://localhost/Voting%20System/">Login here</a>
    </form>

</body>
</html>
