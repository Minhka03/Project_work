<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <link rel="stylesheet" href="{{url('')}}/asset//css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <meta name="robots" content="noindex, follow">
</head>

<body>
    <div class="main">

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" />
                                @error('name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="text" name="email" placeholder="Your Email" />
                                @error('email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" style="position: relative;" id="ip_pass" name="password" placeholder="Password" />
                                <i class="fa-solid fa-eye-slash" style="position: absolute;top:10px; right: 0;" id="eye_pass" onclick="show_pass()"></i>
                                @error('password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <!-- <i class="fa-sharp fa-solid fa-eye-slash"></i> -->

                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="confirm_password" id="ip_pass2"  placeholder="Repeat your password" />
                                <i class="fa-solid fa-eye-slash" style="position: absolute;top:10px; right: 0;" id="eye_pass2" onclick="show_pass2()"></i>
                                @error('confirm_password')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="https://intphcm.com/data/upload/banner-thoi-trang%20-nhan-manh.jpg" alt="sing up image"></figure>
                        <a href="{{route('home.login')}}" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

      
        <script>
            function show_pass() {
                var x = document.getElementById("ip_pass");
                var icon = document.getElementById("eye_pass");
                if (x.type === "password") {
                    x.type = "text";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
                else {
                    x.type = "password";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                }
            }

            function show_pass2() {
                var x = document.getElementById("ip_pass2");
                var icon = document.getElementById("eye_pass2");
                if (x.type === "password") {
                    x.type = "text";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                }
                else {
                    x.type = "password";
                    icon.classList.remove("fa-eye");
                    icon.classList.add("fa-eye-slash");
                }
            }
        </script>



        <script src="{{url('')}}/vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-23581568-13');
        </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"779e3813df9a2112","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>

</html>