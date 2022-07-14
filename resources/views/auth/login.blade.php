<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
   
    
    <div class="container">
        <div class="card">
            <div class="inner-box" id="card">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <p style="color:yellow;text-align:center;font-size:12px;">{{ $error }}</p>

                    @endforeach
                </ul>
            </div>
            @endif

         @if (session('success'))
         <p style="color:green;text-align:center;font-size:12px;">

             {{ session('success') }}
         </p>
         @endif

         @if (session('fail'))
         <div style="color:yellow;text-align:center;font-size:12px;">

             {{ session('fail') }}
         </div>
         @endif




                <div class="card-front">
                    <h2>LOGIN</h2>
                    
                      <form action="{{ route('login.check') }}" method="POST" id="loginForm">
                          @csrf

                          <input type="email" class="input-box" name="email" placeholder="Enter your email ID">
                          <input type="password" class="input-box" name="password" placeholder="Enter your password">
                          <button type="submit" class="submit-btn">submit</button>
                         <input type="checkbox" class="chk-box" name="rem-me"> <span>Remember me</span>
                         <button type="button" class="btn" onclick="openRegister()">i'm new here</button>
                         <a href="">Forgot password</a>

                      </form>
                </div>

                <div class="card-back">

                    <h2>REGISTER</h2>
                         <form action="{{ route('signup') }}" method="POST" id="signupForm">

                             @csrf
                            <input type="text" class="input-box" name="name" placeholder="Enter your name" >
                              
                            <input type="email" class="input-box" name="email" placeholder="Enter your email ID" >

                            <input type="password" class="input-box" name="password" placeholder="Enter your password" >
                            <button type="submit" class="submit-btn">submit</button>
                             <input type="checkbox" class="chk-box"> name="rem me" <span>Remember me</span>


                             <button type="button" class="btn" onclick="openLogin()">I've an account</button>
                             <a href="">Forgot password</a>

                        
                        </form>

                       
                </div>
                </div>

            </div>
        </div>

    </div>

    <script>

    var card = document.getElementById("card");

        function openRegister(){
            card.style.transform = "rotateY(180deg)";
        }

        function openLogin(){
            card.style.transform = "rotateY(0deg)";
        }

    </script>
    
  {{--   <script>
            const scriptURL = 'https://script.google.com/macros/s/AKfycbzSyGVQMrCwqXMS_LjxFKuQqgmIL8mopj3S0XIhgpRqPSC0W35jjTgF-F9laVE2sM4/exec'
            const form = document.forms['google-sheet']
          
            form.addEventListener('submit', e => {
              e.preventDefault()
              fetch(scriptURL, { method: 'POST', body: new FormData(form)})
                .then(response => alert("Thanks for Contacting us..! We Will Contact You Soon..."))
                .catch(error => console.error('Error!', error.message))
            })
          </script> --}}

</body>
</html>