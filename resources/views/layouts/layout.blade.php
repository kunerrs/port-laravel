<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Errand </title>
        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">   
    </head>
    <body>
    

        @yield('content')

        <footer>
           <div class="brand">
               <div class="image">
                <a href="/"><img src="/img/otw.png" alt="image"></a>
                <h3>Baguio Errand</h3>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                   Libero saepe quibusdam voluptate quia tempore quasi porro, 
                   nulla similique optio exercitationem.</p>
           </div>

           <div class="social">
                <div class="support">
                    <h3>Support</h3>
                    <ul>
                    <a href="#"><li>FAQs</li></a>
                    <a href="#"><li>Customer Support</li></a>
                    <a href="#"><li>How to</li></a>
                    </ul>
                </div>

               <div class="social-links">
                <h3>Get in touch</h3>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-yahoo" aria-hidden="true"></i></a>
                </div>             
           </div>


           <div class="extra">
               <div class="company">
                   <h3>Company</h3>
                   <ul>
                      <a href="#"><li>Careers</li></a>
                      <a href="#"><li>Locations</li></a>
                      <a href="#"><li>Privacy</li></a>
                      <a href="#"><li>Terms</li></a>
                   </ul>
               </div>
           </div>
        </footer>
    </body>
</html>