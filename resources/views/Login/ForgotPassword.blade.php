<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<style>
    .background {
        background: #ffffff;
    }

    #footer {
        background-color: #ffffff;
        text-align: justify;
        padding-top: 10px;
        margin-top: 20px; /* Adjusted margin-top to create space between footer and container */
    }

    .forgot-password-container {
        margin-bottom: 20px; /* Adjusted margin-bottom to reduce space between footer and container */
    }
</style>

<body class="background">
    <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center min-vh-100">
            <div class="col-12 col-md-8 col-lg-4 forgot-password-container"> <!-- Added class to increase space -->
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="mb-4">
                            <h5>Forgot Password?</h5>
                            <p class="mb-2">Enter your registered email ID to reset the password</p>
                        </div>
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email"
                                    placeholder="Enter Your Email" required="">
                            </div>
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                            <span>Want to try log in? <a href="http://127.0.0.1:8000/Login">Login</a></span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
    <table class="center" style="margin: 0 auto;">
            <tr>
                <td class="column" style="text-align: center;">
                    <img src="{{ URL('images/logo.jpg') }}" alt="logo" width="150" height="150">
                </td>
                <td style="width: 800px; text-align: justify;">
                    <p>THESISPRO is a premier academic platform designed to support postgraduate students in managing and showcasing their scholarly work. Our system offers a comprehensive suite of tools for editing, publishing, and sharing research and publications within expert domains. By facilitating seamless interactions among students, mentors, and staff, THESISPRO aims to enhance academic collaboration and promote excellence in research and education.</p>
                </td>
            </tr>
        </table>
        <hr>
        <p style="text-align:center;">Copyright &copy; 2024 THESISPRO Corporation. All Rights Reserved.</p>
    </div>
</body>

</html>
