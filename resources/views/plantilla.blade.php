<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <script src="https://kit.fontawesome.com/2cd6142c13.js" crossorigin="anonymous"></script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Colegio Bilingüe El Castaño</title>
      <link rel="shortcut icon" href="{{ asset('img/lo.png')}}" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('images/fevicon.png" type="image/gif')}}" />

        @livewireStyles
   </head>
   <!-- body -->
   <body class="main-layout" style="font-family: Comic Sans MS;">
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('img/log.png')}}" alt="#" />
         </div>
      </div>
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="head_top">
               <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                       <div class="top-box " style="float: right;" >

                        <ul class="sociel_link">
                           <!--  <li> <a href="{{ url('/') }}"><img src="{{ asset('img/LOB2.PNG')}}" width="250%" height="250%" alt="logo"/></a> </li>  -->
                           <li> <a href="https://www.facebook.com/colegioelcastano" target="_blank"><i style="font-size: 30px;"class="fa fa-facebook"></i></a></li>
                           <li> <a href="https://api.whatsapp.com/send?phone=50246432931" target="_blank"><i style="font-size: 30px;"class="fa fa-whatsapp"></i></a></li>
                           <li> <a href="https://api.instagram.com/colegioelcastano/" target="_blank"><i style="font-size: 30px;"class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                            <ul class="menu-area-main">
                                <li> <a href="{{ url('/') }}" font face="Comic Sans MS" font size=27><b>Inicio</b></a> </li>
                                <li> <a href="{{ url('/nosotros') }}" font face="Comic Sans MS" font size=27> <b> Nosotros</b></a> </li>
                                <li>
                                    <a href="/adm" font face="Comic Sans MS" font size=35>
                                        <b>Admisiones 2023</b>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('/val') }}" font face="Comic Sans MS" font size=35>
                                        <b>Validar Gestión</b>
                                    </a>
                                </li>
                                <li ><a target="_blank" type="button" class="btn buy me-md-1; font-size: 25px" href="https://colegioelcastano.edu.gt/portal/index.php">Casys</a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
         </div>
         </div>
      </div>
         <!-- end header inner -->
      </header>


         <div>
            @yield('contenido')
         </div>
            

      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>

      <!-- sidebar -->

      <script src="{{ asset('js/custom.js') }}"></script>
      {{-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> --}}

   @livewireScripts
   </body>
   <footer>
    <div class="footer">
       <div class="container">
    <div class="row">
          <div class="col-xs-12 col-md-6 text-center">
             <div class="contact">
                <h3>Contáctanos</h3>
                <span>(+502) 4643-2931</span><br>
                <span> (+502) 2433-3399</span><br>
                  <span>colegioelcastano@hotmail.com</span>
             </div>
          </div>
             <div class="col-xs-8 col-md-4 text-center">
             <div class="contact">
               <br>
                <h3>Atención al cliente</h3>
                <span> Horarios</span>
                  <span>7:00 a.m - 14:00 p.m.</span>
             </div>
          </div>

       </div>
      </div>
       <div class="contact text-center">

          <h3>Ubicación</h3>
        <p style="color:white">0 av b 1-45 zona 4 Montserrat 1 01057-Mixco, Guatemala.</p>
        <p>
         <div class="map-responsive">

          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0995604467653!2d-90.5839736856792!3d14.650289479785926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a0226e5847b5%3A0x97abf4d970bd6fac!2sColegio%20Biling%C3%BCe%20El%20Casta%C3%B1o!5e0!3m2!1ses!2sgt!4v1619627593600!5m2!1ses!2sgt" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        
         </div>
        

        </p>
      </div>
        <br>

    </div>
       <div class="copyright">
           <div class="row">
                <div class="col-xs-12">
                   <div class="top-box; float-right" >
                    <ul class="sociel_link">
                     <li> <a href="https://www.facebook.com/colegioelcastano" target="_blank"><i style="font-size: 30px;"class="fa fa-facebook"></i></a></li>
                     <li> <a href="https://api.whatsapp.com/send?phone=50246432931" target="_blank"><i style="font-size: 30px;"class="fa fa-whatsapp"></i></a></li>
                     <li> <a href="https://api.instagram.com/colegioelcastano/" target="_blank"><i style="font-size: 30px;"class="fa fa-instagram"></i></a></li>
                 </ul>
                </div>
              </div>
           </div>
           <p style="color:black">Copyright, 2021 All Right Reserved, El Castaño TI <a href="https://html.design/"></p>

       </div>
 </footer>
</html>
