<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Login</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    .background-radial-gradient {
      background-color: #054bb4;
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#658cc2, #2e5caf);
      overflow: hidden;
      background-size: cover;
    }
    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#658cc2, #2e5caf);
      overflow: hidden;
      background-size: cover;
    }
    #button-forgotPassword {
      color: #ffffff;
    }
    .bg-glass {
      background-color: rgba(255, 255, 255, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
      background-size: cover;
    }
  </style>
</head>
<body>
  <!-- Section: Design Block -->
  <section class="background-radial-gradient overflow-hidden">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
            The best offer <br />
            <span style="color: hsl(218, 81%, 75%)">Finish your Thesis within 6 months?</span>
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            ThesisPro offers you opportunity to help you finish your thesis and graduate on time! Do not lose this opportunity!
          </p>
        </div>

        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
          <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
          <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
               <!-- Display success message -->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <!-- Display error message -->
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Display validation errors -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
              <form method="post" action="{{ route('LoginPost') }}">
                @csrf
                <!-- Username input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Username</label>
                  <input type="text" id="form3Example3" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Enter username" value="{{ old('username') }}" />
                  @error('username')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Password input -->
                <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter password" />
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Category select -->
                <div class="form-outline mb-4">
                  <select class="form-select @error('category') is-invalid @enderror" name="category" aria-label="Default select example">
                    <option value="" selected>Select your category</option>
                    <option value="platinum" >Platinum</option>
                    <option value="staff" >Staff</option>
                    <option value="mentor" >Mentor</option>
                  </select>
                  @error('category')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <!-- Submit button -->
                <div class="text-center">
                  <button type="submit" name="login" class="btn btn-primary btn-block mb-4">Login</button>
                  <a href="http://127.0.0.1:8000/ForgotPassword" class="btn btn-primary btn-block mb-4">Forgot password</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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
</body>
</html>
