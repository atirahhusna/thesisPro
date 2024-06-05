<?php
include('header/home.php');
?>

<!doctype html>
<html lang="en">
<head>
    <title>FK Park Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #fff;
            margin: 0;
            font-family: 'Lato', sans-serif;
        }

        .login-wrap {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            padding: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background-color: #fff;
        }

        .login-wrap .icon {
            background: #007bff;
            padding: 20px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        .login-wrap .icon span {
            font-size: 24px;
            color: #fff;
        }

        .login-wrap h3 {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .login-form .form-control {
            height: 45px;
            background: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 16px;
            transition: background 0.3s, border-color 0.3s;
        }

        .login-form .form-control:focus {
            background: #fff;
            border-color: #007bff;
            outline: none;
        }

        .login-form .btn {
            background: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
            width: 100%;
        }

        .login-form .btn:hover {
            background: #0056b3;
        }

        .login-form .select {
            width: 100%;
        }

        .login-form .select select {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background: #f8f9fa;
            border: 1px solid #ced4da;
            font-size: 16px;
            transition: background 0.3s, border-color 0.3s;
        }

        .login-form .select select:focus {
            background: #fff;
            border-color: #007bff;
            outline: none;
        }

        .checkbox-wrap .checkbox-primary {
            position: relative;
            padding-left: 25px;
        }

        .checkbox-wrap .checkbox-primary input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .checkbox-wrap .checkbox-primary .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 20px;
            width: 20px;
            background-color: #eee;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .checkbox-wrap .checkbox-primary input:checked ~ .checkmark {
            background-color: #007bff;
        }

        .checkbox-wrap .checkbox-primary .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .checkbox-wrap .checkbox-primary input:checked ~ .checkmark:after {
            display: block;
        }

        .checkbox-wrap .checkbox-primary .checkmark:after {
            left: 7px;
            top: 3px;
            width: 6px;
            height: 10px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .login-wrap .forgot-password {
            text-align: right;
            display: block;
            margin-top: 10px;
        }

        .login-wrap .forgot-password a {
            color: #007bff;
            text-decoration: none;
        }

        .login-wrap .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
                <h2 class="heading-section">FK Park Login</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Log In</h3>
                    <form action="#" class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" placeholder="Username" required>
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" placeholder="Password" required>
                        </div>
                        <div class="form-group select">
                            <select name="category" id="category" class="form-control rounded-left">
                                <option value="Administrator">Administrator</option>
                                <option value="Staff">Staff Unit Keselamatan</option>
                                <option value="Student">Student</option>
                            </select>
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50">
                                <label class="checkbox-wrap checkbox-primary">Remember Me
                                    <input type="checkbox" checked>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="w-50 text-md-right forgot-password">
                                <a href="#">Forgot Password</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">LOGIN</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>
