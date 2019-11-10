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
        
        <form>
          <div class="container">
                <div class="form-group space">
                  <input type="password" class="form-control round" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group space">
                        <input type="password" class="form-control round" id="exampleInputPassword1" placeholder="Confirm Password">
                </div>
                <div class="form-group space">
                    <button type="submit" class="form-control" id="roundUs">Submit</button>
                    </div>

                      <div class="form-group space d-flex flex-row same">
                                    <div class="same">Sign in with</div>
                                    <div class="flex-fill"> 
                                        <img class="logo" src="{{ asset('images/facebook.svg')}}" alt="">
                                    </div>
                                    <div class="justify-content-center"> 
                                        <img class="logo" src="{{ asset('images/google-plus.svg')}}" alt="">
                                    </div>               
                      </div>
          </div>
              </form>
      </div>
  </div>
  <!-- /.container -->
    </body>
</html>