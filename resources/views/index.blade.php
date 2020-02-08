<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Winery</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/app.css')}}"/>
    
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"/>
    <script  src="{{ asset('js/app.js')}}"></script>
    

    </head>
 <body style="background-image: url(image/alcoholic.jpg); 
            width:100%;
            background-color:#f5f5f5;
            color: #727272;
            background-repeat: no-repeat;">
            
 @include('partials.header')
<div class="wrapper">
        <a href="#" class="btn btn-primary butt" id="bott" style="background-color:#A84059;">Get Started</a>
    </div>
     <section>
        <div class="one">
            <h2 class="htwo">Wine Tester</h2>

         <div class="loorem">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
              culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
              maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
              Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
              repellat ipsum, quia laborum animi aut quam soluta cumque.

            </p>
            <hr/>
        </div>     
        <div class="row distance">
        <div class="col-8">
            <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                repellat ipsum, quia laborum animi aut quam soluta cumque.
  
              </p>
                  <a href="#" class="btn btn-primary blutt" style="background-color:#A84059;">Learn More</a>
        </div>

        <div class="col-4">
          <img  src="image/celebration.jpg" height="300px" width="300px">
          </div>
        </div>
        {{-- <br/>  <br/> 
        <hr/>
        --}}
       
        <div class="two">
            <h2>Wine Makers</h2>

            <div class="loorem">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                 culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                 maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                 Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                 repellat ipsum, quia laborum animi aut quam soluta cumque.
   
               </p>
               <hr/>
            </div>
               <div class="row distance">
                    <div class="col-8">
                        <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                            culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                            maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                            Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                            repellat ipsum, quia laborum animi aut quam soluta cumque.
              
                          </p>
                              <a href="#" class="btn btn-primary blutt" style="background-color:#A84059;">Learn More</a>
                    </div>
            
                    <div class="col-4">
                      <img  src="image/maja.jpg" height="300px" width="300px">
                      </div>
                    </div>
            </div>
           </div>  

           <div class="three">

           <h2>Buy Your Wine </h2>

           <div class="loorem">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                repellat ipsum, quia laborum animi aut quam soluta cumque.
              </p>
              <hr/>
           </div>
              <div class="row distance">
                   <div class="col-8">
                       <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut id repudiandae 
                           culpa dolor fugiat veniam sed, odit aliquid error quidem optio corporis neque iusto 
                           maiores tempora sequi minima atque dignissimos.Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                           Nihil consectetur nam adipisci libero velit inventore possimus eius sint qui asperiores voluptatibus
                           repellat ipsum, quia laborum animi aut quam soluta cumque.
             
                         </p>
                             <a href="shop" class="btn btn-primary blutt" style="background-color:#A84059;">Learn More</a>
                   </div>
           
                   <div class="col-4">
                     <img  src="image/winee.png" height="300px" width="300px">
                     </div>
                   </div>
          </div>  

     
@include('partials.footer')

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
