
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="{{url('')}}/asset/css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<meta name="robots" content="noindex, follow">
</head>
<body>

@if (Session::has('no'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('no')}}
            </div>
            @endif
            
            @if (Session::has('yes'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('yes')}}
            </div>
            @endif
<div class="main">
<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="https://intphcm.com/data/upload/banner-thoi-trang%20-nhan-manh.jpg" alt="sing up image"></figure>
<a href="{{route('home.register')}}" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">
<h2 class="form-title">Sign up</h2>
          
<form method="post" action="{{route('home.check_login')}}" class="register-form" id="login-form">
    @csrf
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="email" id="your_name" placeholder="Email" />
</div>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="text" name="password" id="your_pass" placeholder="Password" />
</div>
<div class="form-group">
<input type="checkbox" name="remember" id="remember-me" value="1" class="agree-term" />
<label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
</div>
<div class="form-group form-button">
<input type="submit"  id="signin" class="form-submit">
</div>
</form>
<div class="social-login">
<span class="social-label">Or login with</span>
<ul class="socials">
<li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
<li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</section>



<script src="{{url('')}}/vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"779e3813df9a2112","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.3","si":100}' crossorigin="anonymous"></script>
</body>
</html>