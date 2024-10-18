<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management - Login/Register</title>
    <link rel="stylesheet" href="{{ asset('front-view/assets/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-body">
                <h2 class="text-center mb-4">Welcome</h2>

                <!-- Sign In Form -->
                <form action="{{ route('login') }}" method="POST" id="sign-in-form">
                    @csrf
                    <h4 class="text-center"> Please Sign In</h4>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required />
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Login</button>
                    {{-- <p class="text-center mt-3">Don't have an account? <a href="#!" onclick="signup()">Register</a></p> --}}
                </form>



            </div>
        </div>
    </div>

    <script>
        function signup() {
            document.getElementById('sign-in-form').style.display = 'none';
            document.getElementById('sign-up-form').style.display = 'block';
        }

        function login() {
            document.getElementById('sign-in-form').style.display = 'block';
            document.getElementById('sign-up-form').style.display = 'none';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
