<html>
    <head>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"/>

    <script  src="{{ asset('js/app.js')}}"></script>
    
    </head>
    
    <body>
       <!-- Navigation -->
<nav class="navbar navbar-expand-lg static-top">
    <div class="container">
     
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active ">
            <a class="nav-link design" href="/sign">Sign Up
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link design" href="/logins">Login</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
  <!-- Page Content -->
  <div class="container" id="jumb">
  <div class=" shadow p-3 mb-5 rounded jumbotron tron" >
        
    <form method="POST" action="sign">
    {{ csrf_field() }}
            <div class="form-group space">
              <input type="name" class="form-control round" id="name" name="name" aria-describedby="emailHelp" placeholder="Name">
            </div>
            <div class="form-group space">
                  <input type="email" class="form-control round" id="email" name="email" aria-describedby="emailHelp" placeholder="Email">
                </div>
                <div class="form-group space">
                  <input type="password" class="form-control round" id="password" name="password"  placeholder="Password">
                </div>
                <div class="form-group space">
                        <input type="password" class="form-control round" id="password1" name="password_confirmation" placeholder="Confirm Password">
                      </div>

                      <div class="form-group">
                            <button type="submit" class="form-control" id="roundUs">Submit</button>
                      </div>     
                      <div class="form-group space d-flex">
                                    <div class="flex-fill same"><p>Sign up with </p></div>
                                    <div class="p-2 flex-fill"> 
                                        <img class="logo" src="{{ asset('images/facebook.svg')}}" alt="">
                                    </div>
                                    <div class="p-2 flex-fill"> 
                                        <img class="logo" src="{{ asset('images/google-plus.svg')}}" alt="">
                                    </div>               
                      </div>

                      @if (count($errors))
                          
    
                      <div class="form-group">

                         <div class="alert alert-danger">
                            <ul>
                              @foreach ($errors->all() as $error)
                                <li> {{$error}}</li>
                              
                              @endforeach
                        </ul>
                        </div>
                      </div>
                      @endif

              </form>
      </div>
  </div>
 
    </body>
</html>