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
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('css/style.css')}}">
      <link rel="stylesheet" href="{{ asset('css/responsive.css')}}">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('img/lo.png')}}"/>
      <!-- fonts -->
       <!-- bootstrap css -->
       <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
       <!-- Scrollbar Custom CSS -->
       <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css')}}">
       <!-- Tweaks for older IEs-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
       <link rel="stylesheet" href="css/style_step.css"/>
        @livewireStyles
   </head>
   <!-- body -->
   <body class="main-layout" style="font-family: Century Gothic">
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
         <div class="col-xs-12">
            <div class="container-fluid px-0">
               <nav class="navbar navbar-expand-lg navbar-light">
                   <div class="d-flex">
                       <button class="navbar-toggler justify-content-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                       </button>
                   </div>
                   <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <div class="navbar-nav w-50 p-6 mx-auto justify-content-evenly" style="width: 200px;">
                      <a class="nav-item nav-link enojoy2-css2" href="{{ url('/') }}" style="font-size: 20px; color:rgb(0, 0, 0)" style="font-family: Century Gothic"><b>Inicio</b></a>
                      <a class="nav-item nav-link enojoy2-css2" href="{{ url('/nosotros') }}" style="font-size: 20px; color: #000000"  style="font-family: Century Gothic"><b>Nosotros</b></a>
                      <a class="nav-item nav-link enojoy2-css2" href="/adm" style="font-size: 20px; color: #000000" style="font-family: Century Gothic"><b>Admisiones 2023</b></a>
                      <li class="nav-item dropdown enojoy2-css2">
                         <a class="nav-item nav-link dropdown-toggle enojoy2-css2" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 20px; color: #000000" style="font-family: Century Gothic">
                          <b>Validar Gestión</b>
                         </a>
                         <ul class="dropdown-menu btn-outline-light enojoy2-css2"  aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item enojoy2-css2" href="{{ url('/val') }}" style="color: #a000000" style="font-family: Century Gothic">Pre-Inscripción</a></li>
                           <li><a class="dropdown-item enojoy2-css2" href="{{ url('/conducta') }}" style="color: #a000000" style="font-family: Century Gothic">Carta de Conducta</a></li>
                           <li><a class="dropdown-item enojoy2-css2" href="{{ url('/soportecnico') }}" style="color: #a000000" style="font-family: Century Gothic">Soporte Técnico</a></li>
                           <li><a class="dropdown-item enojoy2-css2" href="{{ url('/restablecerusuario') }}" style="color: #a000000" style="font-family: Century Gothic">Restablecer Usuario</a></li>
                         </ul>
                       </li>
                       <a class="nav-item nav-link enjoy-css" target="_blank" href="https://colegioelcastano.edu.gt/portal/index.php" style="font-size: 20px; color: #000000" style="font-family: Century Gothic"><b>&nbsp;&nbsp;Casys&nbsp;&nbsp;</b></a>                 
                     </div>
                 </div>
               </nav>
           </div>
         </div>
         <style>
            .btn-pre {
              display: inline-block;
              -webkit-box-sizing: content-box;
              -moz-box-sizing: content-box;
              box-sizing: content-box;
              cursor: pointer;
              padding: 10px 20px;
              border: none;
              -webkit-border-radius: 12px;
              border-radius: 12px;
              font: normal 16px/normal "Century Gothic", Times, serif;
              color: rgba(255,255,255,0.9);
              -o-text-overflow: clip;
              text-overflow: clip;
              background: -webkit-linear-gradient(-90deg, #3a3e7b 0, #3a3e7b);
              background: -moz-linear-gradient(180deg, #3a3e7b 0, #3a3e7b);
              background: linear-gradient(180deg, #3a3e7b 0, #3a3e7b);
              background-position: 50% 50%;
              -webkit-background-origin: padding-box;
              background-origin: padding-box;
              -webkit-background-clip: border-box;
              background-clip: border-box;
              -webkit-background-size: auto auto;
              background-size: auto auto;
              -webkit-box-shadow: 2px 2px 2px 0 rgba(58,228,0,0.2) ;
              box-shadow: 2px 2px 2px 0 rgba(58,228,0,0.2) ;
              text-shadow: -1px -1px 0 rgba(15,73,168,0.66) ;
              -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
              -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
              -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
              transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
            }
            
            .btn-pre2 {
          border: 0px solid #3a3e7b;
          -webkit-border-radius: 12px;
          border-radius: 12px;
          color:#ffffff;
          background: -webkit-linear-gradient(-90deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: -moz-linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
          background: linear-gradient(180deg, r #3a3e7b 0,  #3a3e7b 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }
        .btn-pre2:hover {
          border: 0px solid #8b91e4;
          color:#ffffff; 
          -webkit-border-radius: 12px;
          border-radius: 12px;
          background: -webkit-linear-gradient(-90deg,  #8b91e4 0,  #8b91e4 100%);
          background: -moz-linear-gradient(180deg,  #8b91e4 0,  #8b91e4 100%);
          background: linear-gradient(180deg, r #8b91e4 0,  #8b91e4 100%);
          background-position: 50% 50%;
          -webkit-background-origin: padding-box;
          background-origin: padding-box;
          -webkit-background-clip: border-box;
          background-clip: border-box;
          -webkit-background-size: auto auto;
          background-size: auto auto;
        }
            
            .btn-pre:hover {
              border: 0px solid #33a506;
              -webkit-border-radius: 12px;
              border-radius: 12px;
              background: -webkit-linear-gradient(-90deg,  #626bdd 0,  #6269cc 100%);
              background: -moz-linear-gradient(180deg,  #626bdd 0,  #6269cc 100%);
              background: linear-gradient(180deg, r #626bdd 0,  #6269cc 100%);
              background-position: 50% 50%;
              -webkit-background-origin: padding-box;
              background-origin: padding-box;
              -webkit-background-clip: border-box;
              background-clip: border-box;
              -webkit-background-size: auto auto;
              background-size: auto auto;
            }
            
            .btn-pre:active {
              -webkit-border-radius: 17px;
              border-radius: 12px;
              background: -webkit-linear-gradient(-90deg, #3a3e7b 0,  #3a3e7b 100%);
              background: -moz-linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
              background: linear-gradient(180deg,  #3a3e7b 0,  #3a3e7b 100%);
              background-position: 50% 50%;
              -webkit-background-origin: padding-box;
              background-origin: padding-box;
              -webkit-background-clip: border-box;
              background-clip: border-box;
              -webkit-background-size: auto auto;
              background-size: auto auto;
            }
            </style>
          
         <style>
.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 10px 20px;
  border: none;
  -webkit-border-radius: 12px;
  border-radius: 12px;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: -webkit-linear-gradient(-90deg, #a4cb39 0, #a4cb39);
  background: -moz-linear-gradient(180deg, #a4cb39 0, #a4cb39);
  background: linear-gradient(180deg, #a4cb39 0, r#a4cb39);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
  -webkit-box-shadow: 2px 2px 2px 0 rgba(58,228,0,0.2) ;
  box-shadow: 2px 2px 2px 0 rgba(58,228,0,0.2) ;
  -webkit-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -moz-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  -o-transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
  transition: all 300ms cubic-bezier(0.42, 0, 0.58, 1);
}

.enjoy-css:hover {
  border: 0px solid #33a506;
  -webkit-border-radius: 12px;
  border-radius: 12px;
  background: -webkit-linear-gradient(-90deg, rgba(206,239,139,1) 0, rgba(124,188,10,1) 100%);
  background: -moz-linear-gradient(180deg, rgba(206,239,139,1) 0, rgba(124,188,10,1) 100%);
  background: linear-gradient(180deg, rgba(206,239,139,1) 0, rgba(124,188,10,1) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
}

.enjoy-css:active {
  -webkit-border-radius: 17px;
  border-radius: 12px;
  background: -webkit-linear-gradient(-90deg, rgb(182, 233, 79) 0, rgb(183, 231, 99) 100%);
  background: -moz-linear-gradient(180deg, rgb(182, 233, 79) 0, rgb(183, 231, 99) 100%);
  background: linear-gradient(180deg, rgb(182, 233, 79) 0, rgb(183, 231, 99) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
}

.enojoy2-css2:hover {
   font: normal 16px/normal "Century Gothic", Times, serif;
  border: 0px solid #33a506;
  color:#a4cb39 !important;
  -webkit-border-radius: 12px;
  border-radius: 12px;
  background: -webkit-linear-gradient(-90deg, rgb(255, 255, 255) 0, rgb(255, 255, 255) 100%);
  background: -moz-linear-gradient(180deg, rgb(255, 255, 255) 0, rgb(255, 255, 255) 100%);
  background: linear-gradient(180deg, rgb(255, 255, 255) 0, rgb(255, 255, 255) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
}


.enojoy2-css2:active {
  -webkit-border-radius: 16px;
  border-radius: 12px;
  color:#a4cb39 !important;
  background: -webkit-linear-gradient(-90deg, rgb(236, 236, 236) 0, rgb(255, 255, 255) 100%);
  background: -moz-linear-gradient(180deg,rgb(236, 236, 236) 0, rgb(255, 255, 255) 100%);
  background: linear-gradient(180deg, rgb(236, 236, 236) 0, rgb(255, 255, 255) 100%);
  background-position: 50% 50%;
  -webkit-background-origin: padding-box;
  background-origin: padding-box;
  -webkit-background-clip: border-box;
  background-clip: border-box;
  -webkit-background-size: auto auto;
  background-size: auto auto;
}
</style>
      </div>


      
         <!-- end header inner -->
      </header>


         <div>
            @yield('contenido')
         </div>
         
            

      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{ asset('js/jquery.min.js') }}"></script>

      <!-- sidebar -->

      <script src="{{ asset('js/custom.js') }}"></script>
      {{-- <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script> --}}
      <br>
   <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
   <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    AOS.init();
  </script>
   @livewireScripts
   </body>
   <footer>
    <div class="footer" style="background-color: #272b61">
       <div class="container">
         <div class="row">
            <div class="col text-center">
               <div class="contact">
                  <h3 class="text-xs text-light"><strong>Contáctanos</strong></h3>
                     <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                     </svg> (+502) 4643-2931</span><br>
                     <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                     </svg> (+502) 2433-3399</span><br>
                     <span><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                     </svg> colegioelcastano@hotmail.com</span>
               </div>
            </div>
            <div class="col text-center">
               <div class="contact text-center">
                  <h3 class="text-xs text-light"><strong>Ubicación</strong></h3>
                  <p style="color:white"><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                     <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                  </svg> 0 av b 1-45 zona 4 Montserrat 1 01057-Mixco, Guatemala.</p><br>
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.0995604467653!2d-90.5839736856792!3d14.650289479785926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8589a0226e5847b5%3A0x97abf4d970bd6fac!2sColegio%20Biling%C3%BCe%20El%20Casta%C3%B1o!5e0!3m2!1ses!2sgt!4v1619627593600!5m2!1ses!2sgt" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                     </div>
               </div>
            </div>
            <div class="col text-center">
               <div class="contact">
                  <h3 class="text-xs text-light"><strong>Atención al cliente</strong></h3>
                  <span> Horarios</span><br>
                  <span>Lunes - Viernes</span><br>
                  <span><svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-alarm-fill" viewBox="0 0 16 16">
                     <path d="M6 .5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1H9v1.07a7.001 7.001 0 0 1 3.274 12.474l.601.602a.5.5 0 0 1-.707.708l-.746-.746A6.97 6.97 0 0 1 8 16a6.97 6.97 0 0 1-3.422-.892l-.746.746a.5.5 0 0 1-.707-.708l.602-.602A7.001 7.001 0 0 1 7 2.07V1h-.5A.5.5 0 0 1 6 .5zm2.5 5a.5.5 0 0 0-1 0v3.362l-1.429 2.38a.5.5 0 1 0 .858.515l1.5-2.5A.5.5 0 0 0 8.5 9V5.5zM.86 5.387A2.5 2.5 0 1 1 4.387 1.86 8.035 8.035 0 0 0 .86 5.387zM11.613 1.86a2.5 2.5 0 1 1 3.527 3.527 8.035 8.035 0 0 0-3.527-3.527z"/>
                  </svg> 7:00 a.m - 14:00 p.m.</span>
               </div>
            </div>
         </div>
      </div>

       <div class="copyright">
           <div class="row">
                <div class="col-xs-12">
                   <div class="top-box" style="float: center;">
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
      </div>

 </footer>
</html>
