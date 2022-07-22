<section class="slider_section">
<div class="contact">
  <div class="container">
      <div class="row">
          <div class="col-md-7 offset-md-3">
          <div class="title">
              <h1 class="fs-1" style="color: #3a3e7b"><strong>VALIDACIÓN PROCESO</strong></h1>
              <h1 class="fs-1" style="color: #3a3e7b"><strong>DE INSCRIPCIÓN</strong></h1>
              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>
              <br>
              <br>


              <span style="color:black">Ingrese los siguientes datos requeridos.</span>
          </div>
          </div>

          
          @if($mensaje!=null && $mensaje==1)
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
              # de gestión no encontrada.
            </div>
          </div>
        
          @endif
        
          <div class="modal-body">
            @isset($mensaje_diaco)
            @if($mensaje_diaco!=null)
            
            <div class="alert alert-success" role="alert">
                ¡Agregado Correctamente!
              </div>
            @endif
            @endisset
            @isset($mensaje_diaco1)
              @if($mensaje_diaco1!=null)
              <div class="alert alert-success" role="alert">
                No fue agregado Correctamente!
              </div>
              @endif
            @endisset

            
            @isset($validar_info)
            @if($validar_info==1)
            
            <div class="alert alert-success" role="alert">
              Su información ha sido enviada correctamente, se le informará por correo electrónico cuando su información haya sido validada, su código de familia será:<strong> {{$codigo_familia3}}</strong> 
              </div>
            @endif
            @endisset
            @isset($validar_info)
              @if($validar_info==0)
              <div class="alert alert-success" role="alert">
                No fue agregado Correctamente!
              </div>
              @endif
            @endisset
           </div>     
  <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="name" style="color: #3a3e7b"><b>No. Gestión</b></label><br>
          <div>
              <input class="form-control input100 rounded-pill" wire:model="nogestion" type="number" class="validate" required>
              <span></span>
          </div>
          @error('nogestion')
          <div class="alert alert-warning" role="alert">
           Pendiente
          </div>
          @enderror
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="lastname" style="color: #3a3e7b" ><b>DPI Encargado</b></label>
          <input class="form-control me-2 input100 rounded-pill" wire:model="dpi" type="number" class="validate" required>
          @error('dpi')
          <div class="alert alert-warning" role="alert">
           Pendiente
          </div>
          @enderror
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="date" style="color: #3a3e7b"><b>Fecha Nacimiento Encargado</b></label><br>
          <input class="form-control me-2 input100 rounded-pill"id='email' wire:model="fehencargado"type="date"class="validate"required>
          @error('fehencargado')
          <div class="alert alert-warning" role="alert">
           Pendiente
          </div>
          @enderror
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <option></option>
        <label for="date" style="color: #3a3e7b"><b>&nbsp;&nbsp;&nbsp;</label><br>
      <button class="btn btn-pre input100 rounded-pill" wire:click="buspre" >Validar</button>
    </div>
    {{$op}}
  </div>
</div>

@isset($mensaje24)
@if ($mensaje24!=null)
  <div class="alert alert-success" role="alert">
    ¡su comprobante fue enviado, se notificara por correo cuando se confirme su pago!
  </div>
@endif
@endisset
@isset($mensaje25)
@if($mensaje25!=null)
  <div class="alert alert-danger" role="alert">
    ¡No fue posible enviar su comprobante, intenta nuevamente!
  </div>
@endif
@endisset
       </div>
   </div>
</section>
  

