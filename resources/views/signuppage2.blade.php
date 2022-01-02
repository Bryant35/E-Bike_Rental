<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Register</title>
    {{-- <link rel="stylesheet" href="css/signuppage.css"> --}}
    <link rel="stylesheet" href="css/register2.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        @if (Session::has('emptydata'))
            <div class="alert alert-danger alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <strong>{{ Session::get('emptydata') }}</strong>
            </div>
        @endif
        @if (Session::has('usernameUsed'))
            <div class="alert alert-warning alert-block mx-4">
                {{-- <button type="button" class="close position-absolute top-0 start-100 translate-middle" data-dismiss="alert"><i class="bi bi-x-circle-fill"></i></button> --}}
                <ul>
                    <?php
                        $list_msg = Session::get('usernameUsed');
                        foreach($list_msg as $msg){
                            echo "<li>".$msg."</li>";
                        }
                    ?>
            </div>
        @endif
        <form action="{{ url('/insert')}}" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="f_name" required>
                <span></span>
                <label>First Name</label>
            </div>
            <div class="txt_field">
                <input type="text" name="l_name" required>
                <span></span>
                <label>Last Name</label>
            </div>
            <div class="txt_field">
                <input type="email" name="email" required>
                <span></span>
                <label>Email Address</label>
            </div>
            <div class="txt_field">
                <input type="number" name="phone" required>
                <span></span>
                <label>Phone Number</label>
            </div>
            <div class="txt_field">
                <input type="text" name="address" required>
                <span></span>
                <label>Address</label>
            </div>
            <div class="txt_field">
                <input type="text" name="uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass" href="{{ url('/forgotpassword') }}"><a href="{{ url('/forgotpassword') }}">Forgot Password?</a></div><!--Term and Condition-->
            <input type="submit" value="Login">
            <div class="signup_link">
                Already have an account? <a href="{{ url('/insert') }}">Log In</a>
            </div>
        </form>
    </div>
</body>
</html>
