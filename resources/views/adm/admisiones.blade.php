@extends('layouts.plantilla')
@section('contenido')
<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
    </div>


    <div class="container">
       <div class="row">
          <div class="col-md-6 offset-md-3">
               <div class="container bootstrap snippets bootdeys">
                  <div class="row">
                    <div class="col-sm-12 content-card">
                        {{-- <div class="card-big-shadow">
                            <div class="card card-just-text" data-background="color" data-color="blue" data-radius="none">
                                <div class="content">
                                <h4 class="category">Presione, para validar gestion: </h4>
                                <p>
                                    <a style="color:white"type="button" class="btn buy me-md-1; font-size: 25px" href="{{url('/val')}}">Validar Gestion</a></p></div>
                                </p>
                                </div>
                            </div> <!-- end card -->
                        </div> --}}
                     {{-- <div class="col-md-6 col-sm-12 content-card"> --}}
                        <div class="card-big-shadow text-center">

                            <div class="card card-just-text" data-background="color" data-color="green"  data-radius="none">
                                <div class="content">
                                    <h3 class="description text-justify"><b>Importante</b></h3>
                                    <p class="description text-left">
                                        Tome en cuenta tener los siguientes datos para iniciar tu proceso de pre-inscripción.
                                    </p>
    
                                  </div>
                                <div class="content px-5">
                                    <h3 class="description py-2">-Datos encargado</h3>
                                   <p class="description py-2">-Datos generales alumno</p>
                                    <p class="description py-2">-No CUI alumno</p>
                                    <p class="description py-2">-Codigo Personal alumno <a type="button" class="btn btn-warning"  data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
                                        ?
                                    </a>
                                     </p> 
                                     
                                     <br>
                                    <p class="text-center">
                                        <a style="color:white; width:100%; display:block;"type="button" class="btn buy me-md-1; font-size: 25px" href="{{url('/ing')}}">Pre-inscribir</a>
                                    </p>
                                </div>


                          
                              </div>
                            </div> <!-- end card -->
                        {{-- </div> --}}
                        <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                            <div class="offcanvas-header">
                              <h5 id="offcanvasTopLabel" class="text-center"><b>Busca tu codigo personal en Mineduc</b></h5>
                              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="ratio ratio-16x9">
                                    <iframe src="https://portal.mineduc.gob.gt/VALIDADOCUMENTOS/Modulos/Conalfa/wbfrmBuscarEstudiante.aspx" title="Ver codigo personal" allowfullscreen></iframe>
                                  </div>
                            </div>
                          </div>

                       </div>
                    </div>
                  </div>
               </div>
            </div>
       </div>

<br>
<style type="text/css">


   .card-big-shadow {
       max-width: 550px;
       position: relative;
   }

   .coloured-cards .card {
       margin-top: 30px;
   }

   .card[data-radius="none"] {
       border-radius: 0px;
   }
   .card {
       border-radius: 8px;
       box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
       background-color: #FFFFFF;
       color: #252422;
       margin-bottom: 20px;
       position: relative;
       z-index: 1;
   }


   .card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
       color: #FFFFFF;
   }
   .card.card-just-text .content {
       padding: 20px 20px;
       text-align: left;
   }
   .card .content {
       padding: 20px 20px 10px 20px;
   }
   .card[data-color="blue"] .category {
       color: #7a9e9f;
   }

   .card .category, .card .label {
       /* font-size: 14px; */
       margin-bottom: 0px;
   }
   .card-big-shadow:before {
       background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
       background-position: center bottom;
       background-repeat: no-repeat;
       background-size: 100% 100%;
       bottom: -12%;
       content: "";
       display: block;
       left: -12%;
       position: absolute;
       right: 0;
       top: 0;
       z-index: 0;
   }
   h4, .h4 {
       font-size: 1.5em;
       font-weight: 600;
       line-height: 1.2em;
   }
   h6, .h6 {
       font-size: 0.9em;
       font-weight: 600;
       text-transform: uppercase;
   }
   .card .description {
       font-size: 16px;
       color: #66615b;
   }
   .content-card{
       margin-top:30px;
   }
   a:hover, a:focus {
       text-decoration: none;
   }

   /*======== COLORS ===========*/
   .card[data-color="blue"] {
       background: #b8d8d8;
   }
   .card[data-color="blue"] .description {
       color: #506568;
   }

   .card[data-color="green"] {
       background: #d5e5a3;
   }
   .card[data-color="green"] .description {
       color: #60773d;
   }
   .card[data-color="green"] .category {
       color: #92ac56;
   }

   .card[data-color="yellow"] {
       background: #ffe28c;
   }
   .card[data-color="yellow"] .description {
       color: #b25825;
   }
   .card[data-color="yellow"] .category {
       color: #d88715;
   }

   .card[data-color="brown"] {
       background: #d6c1ab;
   }
   .card[data-color="brown"] .description {
       color: #75442e;
   }
   .card[data-color="brown"] .category {
       color: #a47e65;
   }

   .card[data-color="purple"] {
       background: #baa9ba;
   }
   .card[data-color="purple"] .description {
       color: #3a283d;
   }
   .card[data-color="purple"] .category {
       color: #5a283d;
   }

   .card[data-color="orange"] {
       background: #ff8f5e;
   }
   .card[data-color="orange"] .description {
       color: #772510;
   }
   .card[data-color="orange"] .category {
       color: #e95e37;
   }
   </style>
@endsection
