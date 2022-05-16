<div class="table-responsive">
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
