<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/form.png') }}" alt="First slide">
    </div>
</section>
<br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-3">
            <div class="title">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                  </svg>
                <br>
                <br>

                <span style="color:black">Resumen encuesta ciclo escolar 2023</span>
            </div>
            </div>
 
    <div class="row">
        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Respuestas
                  
                  </h5>
                  <p class="card-text">
                  <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-person-workspace" viewBox="0 0 16 16">
                        <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                        <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                      </svg>
                      &nbsp;&nbsp;&nbsp;&nbsp;
                      <b  class="fs-1">{{$sum_res}}</b>
                      
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> ¿Como prefiere que sus hijos estudien el ciclo escolar 2023?</h5>
                  <p class="card-text">
                   </p>

                       @if($sumVirtual!=null)
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-laptop" viewBox="0 0 16 16">
                      <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                    </svg>  Virtual:
                    <b> {{$sumVirtual}}</b>  
                      @endif
                      <br>
                      <br>
                      <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-people" viewBox="0 0 16 16">
                        <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                      </svg> Presencial:
                     @if($sumPre!=null)
                     <b> {{$sumPre}}</b>
                     
                      @endif
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <br>
          <br>
        </div>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Generar Excel:</h5>
                  <p class="card-text">
                    <a href="/exp" wire:click="export" class="btn enjoy-css">...</a>
                    <br>
                    @if($a22==1)
                    <div class="spinner-border text-primary" role="status">
                      <span class="visually-hidden">Loading...</span>
                    </div>
                    @endif
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title"> ¿De ser las clases presenciales, necesitaría de bus escolar?</h5>
                  <p class="card-text">
                   </p>

                       @if($sumabus!=null)
                       <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-truck" viewBox="0 0 16 16">
                        <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                      </svg>  Si:
                    <b> {{$sumabus}}</b>  
                      @endif
                      <br>
                      <br>
                </div>
              </div>
            </div>
    </div>
    
    <div class="table-responsive">
      <br>
    <br>
    <hr>
    <table class="table">
        <thead>
          <tr>
              <th scope="col">No.</th>
              <th scope="col">Fecha</th>
              @foreach ($preguntas as $pregunta)
              <th scope="col">{{$pregunta->DESCRIPCION}}</th>  
              @endforeach
           
          </tr>
        </thead>
        <tbody>
           
        
            @foreach($respuestas as $respuesta)
            @php
            $va=0;   
           @endphp
            <tr>
            <th scope="row">{{$respuesta->ID_RESPUESTA}}</th>
            <th scope="row">{{$respuesta->FECHA_REALIZADO}}</th>
            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==1)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif
            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==2)
            @php
            $va=1;             
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp
            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==3)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==4)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==5)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==6)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==7)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==8)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            
            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==9)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach
            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp

            @foreach($resdetalles as $resdetalle)
            @if($respuesta->ID_RESPUESTA==$resdetalle->ID_RESPUESTA)            
            @if($resdetalle->ID_PREGUNTA==10)
            @php
            $va=1;   
           @endphp
            <td>{{$resdetalle->RESPUESTA}}</td>
            @endif
            @endif
            @endforeach

            @if($va==0)
            <td></td>
            @endif

            @php
            $va=0;
            @endphp
        </tr>
            @endforeach
       
        </tbody>
      </table>
      </div>
</div>
         </div>
     </div>
