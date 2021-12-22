<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
      <head>
         <meta charset="utf-8">
         <title>Register</title>
         <link rel="stylesheet" href="css/signuppage.css">
         <link rel="stylesheet" href="css/footer.css">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

      </head>
    <body>

    <div class="container">
        <header>Signup Form<br><h6>Already have an account?<a href="{{ url('/login') }}">Login</a></h6></header>

        <div class="progress-bar">
            <div class="step">
               <p>
                  Name
               </p>
               <div class="bullet">
                  <span>1</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Contact
               </p>
               <div class="bullet">
                  <span>2</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Address
               </p>
               <div class="bullet">
                  <span>3</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
            <div class="step">
               <p>
                  Submit
               </p>
               <div class="bullet">
                  <span>4</span>
               </div>
               <div class="check fas fa-check"></div>
            </div>
        </div>
        <div class="form-outer">
            @if (Session::has('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ Session::get('success') }}</strong>
                </div>
                @endif

            @if (Session::has('danger'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <ul>
                        <?php
                            $list_msg = Session::get('danger');
                            foreach($list_msg as $msg){
                                echo "<li>".$msg."</li>";
                            }
                        ?>
            @endif
            <form action="{{ url('/insert')}}" method="POST">
                @csrf
                <div class="page slide-page">
                    <div class="title">
                        Basic Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            First Name
                        </div>
                        <input type="text" name="f_name" required>
                    </div>
                    <div class="field">
                        <div class="label">
                            Last Name
                        </div>
                        <input type="text" name="l_name" required>
                    </div>
                    <div class="field">
                        <button class="firstNext next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Contact Info:
                    </div>
                    <div class="field">
                        <div class="label">
                            Email Address
                        </div>
                        <input type="text" name="email" required>
                    </div>
                    <div class="field">
                        <div class="label">
                            Phone Number
                        </div>
                        <input type="Number" name="phone" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-1 prev">Previous</button>
                        <button class="next-1 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Your Address:
                    </div>
                    <div class="field">
                        <div class="label">
                            Address
                        </div>
                        <input type="text" name="address" required>
                    </div>
                    {{-- <div class="field">
                        <div class="label">
                            City
                        </div>
                        <select name="city">
                            <option>Surabaya</option>
                            <option>Bali</option>
                            <option>Jakarta</option>
                        </select>
                    </div> --}}
                    <div class="field btns">
                        <button class="prev-2 prev">Previous</button>
                        <button class="next-2 next">Next</button>
                    </div>
                </div>
                <div class="page">
                    <div class="title">
                        Login Details:
                    </div>
                    <div class="field">
                        <div class="label">
                            Username
                        </div>
                        <input type="text" name="uname" required>
                    </div>
                    <div class="field">
                        <div class="label">
                            Password
                        </div>
                        <input type="password" name="pass" required>
                    </div>
                    <div class="field btns">
                        <button class="prev-3 prev">Previous</button>
                        <button type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="js/signuppage.js"></script>
    </body>
</html>
