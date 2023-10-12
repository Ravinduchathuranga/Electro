<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <div class="row p-5">
        <div class="col-12 d-grid justify-content-center">
            <h3>Sign In</h3>
            <label for="">Username</label>
            <input type="text" name="" id="username">
            <label for="">Password</label>
            <input type="password" id="password">
            <div class="input-group mb-1">
                <div class="input-group-text">
                    <span><input class="form-check-input mt-1" type="checkbox" value="" aria-label="Checkbox for following text input me-4">Remeber Me</span>
                </div>
            </div>
            <a href="#" class="text-danger" onclick="forgotpassword();">forgot password</a>
            <button class="btn btn-primary mt-1" onclick="signIn();">Sign In</button>
        </div>
    </div>

    <script src="js/script.js"></script>
</body>

</html>