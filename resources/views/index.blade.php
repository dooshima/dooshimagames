<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Winery</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<style>
   #bott{
       margin:300px auto 0;
       height: 50px;
       width: 250px;
       font-size: 20px;
       border: 0px;
       top: 50%;
   }
   .wrapper {
    text-align: center;
    margin: 200px auto 0;
    width: 50%;
    
}
nav {
    display: flex;
    flex-wrap: wrap;
}
nav span {
    margin-left: auto;
    padding-top: 19px;
    margin-right: 3%;

}
nav ul {
    list-style-type: none;
    display: flex;
    flex-wrap: wrap;
    padding-top: 19px;
}
nav li {
    padding: 0 14px;
    padding-bottom: 15px;
}
nav a{
    border-right: 2px solid brown;
    text-decoration: none;
    padding: 10px 19px 10px 0;
}
h2{
    margin-top: 200px;
    text-align: center;
    text-decoration: underline;
    /* color: #130A06; */

}
.bord{
    margin-top: 30px;
    border: 1px solid #dbc8c0;
    width: 400px;
}

.drink{
    border: none;
    height: 700px;
 
}
.butt{
    margin-top:-20px;
    text-align: center;
    height: 55px;
    padding: 15px;
    width: 200px;
   border-radius: 35px;
   border: none;
    
}
.blutt{
    text-align: center;
    height: 50px;
    padding: 15px;
    width: 200px;
   border-radius: 35px;
   border: none;
}

h4{
    margin-top: 30px;
    text-align: center;
}
.container{
    padding: 30px;

}
#cool{
    margin-top: 50px;
    background-color: #130A06;
    width: 100%;
    width: 100vw;
    color: white;
}
.wine{
    background-color: #1D1C1C;
    height: 500px;
    
}
.text{
    color: whitesmoke;
    font-size: 18px;
}
.footer{ 
  background: #254F72;
  color:white;
  
  .links{
    ul {list-style-type: none;}
    li a{
      color: white;
      transition: color .2s;
      &:hover{
        text-decoration:none;
        color:#4180CB;
        }
    }
  }  
  .about-company{
    i{font-size: 25px;}
    a{
      color:white;
      transition: color .2s;
      &:hover{color:#4180CB}
    }
  } 
  .location{
    i{font-size: 18px;}
  }
  .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
}

.loorem{
   padding:5px 70px;
}
.col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}

.row::after {
  content: "";
  clear: both;
  display: table;
}

[class*="col-"] {
  float: left;
  padding: 0 75px;
}
</style>
        
    </head>
    
        <body style="background-image: url(image/alcoholic.jpg); 
            margin:0;
            width:100%;
            background-color:#f5f5f5;
            color: #727272;
            background-repeat: no-repeat;
            height:1500px">
            
<nav>
    <ul>
        <li><a>Home</a></li>
        <li><a>Service</a></li>
        <li><a>Blog</a></li>
        <li><a>About</a></li>
        <li><a>Sign Up</a></li>
        <li><a>Sign In</a></li>
    </ul>
    {{-- <span><h2>Winery</h2></span> --}}
</nav>
  <div class="wrapper">
        <a href="#" class="btn btn-primary butt" id="bott" style="background-color:#A84059;">Get Started</a>
            </div>

            <h2>Wine Tester</h2>

         <div class="loorem">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
              culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
              maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
              repellat ipsum, quia laborum animi aut quam soluta cumque.

            </p>
            <hr/>
        </div>     
        
        <section class="row">
        <div class="col-6">
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                repellat ipsum, quia laborum animi aut quam soluta cumque.
  
              </p>
                  <a href="#" class="btn btn-primary blutt" style="background-color:#A84059;">Get Started</a>
        </div>

        <div class="col-6">
          <img  src="image/maja.jpg" height="300px" width="300px">
          </div>
        </section>
   
        
    </body>
</html>
