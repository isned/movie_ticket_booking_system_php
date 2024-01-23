<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../style/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        /* Container */
        .container {
            width: 60%;
            margin: 0 auto;
            height: 500%;
        }

        /* Login */
        #div_login {
            border: 1px solid gray;
            border-radius: 3px;
            width: 550px;
            height: 600px;
            box-shadow: 0px 2px 2px 0px gray;
            margin: 0 auto;
        }

        #div_login h1 {
            margin-top: 0px;
            font-weight: normal;
            padding: 10px;
            background-color: cornflowerblue;
            color: white;
            font-family: sans-serif;
        }

        #div_login div {
            clear: both;
            margin-top: 10px;
            padding: 5px;
        }

        #div_login .textbox {
            width: 96%;
            padding: 7px;
        }

        #div_login input[type=submit] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
        #div_login input[type=button] {
            padding: 7px;
            width: 100px;
            background-color: lightseagreen;
            border: 0px;
            color: white;
        }
    </style>
<script>
    function clearTextboxes() {
        var textboxes = document.getElementsByClassName("textbox");
        for (var i = 0; i < textboxes.length; i++) {
            textboxes[i].value = '';
        }
    }

  
</script>

</head>

<body>
<!--<i class="fa-regular fa-turn-down-left"><a href="../index.php"><click here to return to the main page</a></i>-->
<a href="index.php">click here to return to the main page</a>
    <div class="container">
    <form method="post" action="register_controller.php" onsubmit="return validateForm();">
    <div id="div_login">
        <h1>Register</h1>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Username" />
        </div>
        <div>
            <input type="text" class="textbox" id="txt_name" name="name" placeholder="Name" />
        </div>
        <div>
            <input type="text" class="textbox" id="txt_uname" name="phone" placeholder="Phone Number" />
        </div>
        <div>
            <input type="text" class="textbox" id="txt_name" name="email" placeholder="Email" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd" name="txt_pwd" placeholder="Password" />
        </div>
        <div>
            <input type="password" class="textbox" id="txt_pwd_conf" name="txt_pwd_conf" placeholder="Confirmation Password" />
        </div>
        <div>
            <input type="submit" value="Register" name="but_submit" id="but_submit" />
            <input type="button" value="Cancel" onclick="clearTextboxes();" /> <br>
            <a href="admin/index.php">Login</a>
        </div>
    </div>
</form>

<script>
    function validateForm() {
        var uname = document.getElementById("txt_uname").value.trim();
        var name = document.getElementById("txt_name").value.trim();
        var pwd = document.getElementById("txt_pwd").value.trim();
        var pwdConf = document.getElementById("txt_pwd_conf").value.trim();
        var phone = document.getElementById("phone").value.trim();
        var email = document.getElementById("email").value.trim();

        if (uname === "" || name === "" || pwd === "" || pwdConf === "" || phone==="" || email==="") {
            alert("All fields must be completed.");
            return false;
        }

        if (pwd !== pwdConf) {
            alert("Password and confirmation must be the same.");
            return false;
        }

        return true;
    }
</script>

    </div>
    


</body>

</html>



