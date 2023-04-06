<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleh.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Login | Ludiflex - youtube channel</title>
</head>
<body>
<form action ="healthconnect.php" method="POST" >
    <div class="wrapper">
        <div class="container main">
            <div class="row">
                <div class="col-md-6 side-image">
                    <!-------Image-------->
                    <img src="images/white.png" alt="">
                    <div class="text">
                        <p>WellCome <i>Kratin Technologies</i></p>
                    </div>
                </div>
                <div class="col-md-6 right">
                     <div class="input-box">
                        <header>Create account</header>
                        <div class="input-field">
                            <input type="text" class="input" id="h_name" name ="h_name"required autocomplete="off">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="h_phone" name ="h_phone" required>
                            <label for="Number">Mobile No</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="h_gender" name ="h_gender" required>
                            <label for="text">Gender</label>
                        </div>
                        <div class="input-field">
                            <input type="text" class="input" id="h_pin" name ="h_pin" required>
                            <label for="Number">Create Pin</label>
                        </div>
                        <div class="input-field">
                            <input type="submit" class="submit" value="Sign Up">
                            
                        </div>
                        <div class="signin">
                            <span>Already have an account? <a href="hlogin.php">Log in here</a></span>
                        </div>
                     </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>