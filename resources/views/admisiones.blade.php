<section class="slider_section">

  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
        <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
  </div>
</section>
<div class="container col-12">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

  <script>
    $(document).on('click', '#val', function() {
  $('#valinfo').modal('show');
  });
  
  $(document).on('click', '#valpedido', function() {
  $('#valpedidos').modal('show');
  });
  </script>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:rgb(0, 0, 0)">Validar Codigo MINEDUC</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="ratio ratio-16x9">
        <iframe src="https://portal.mineduc.gob.gt/VALIDADOCUMENTOS/Modulos/Conalfa/wbfrmBuscarEstudiante.aspx" title="Ver codigo personal" allowfullscreen></iframe>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
      
    </div>
  </div>
</div>
</div>

<div class="container">

<div class="row">
@if($val==null)

   <div class="col-md-9 offset-md-4">
        <div class="container bootstrap snippets bootdeys">
           <div class="row">
            <div class="col-md-6 col-sm-6 content-card">
              <div class="card-big-shadow">
                  <div class="card card-just-text" data-background="color" data-color="green" data-radius="none">
                      <div class="content" style="text-align: justify;" >
                        <h6 class="category text-center"  ><b>Importante</b></h6>
                        <p class="description py-2  font-size: 35px"> Inicia tu proceso si tienes los siguientes datos:</p>
                        
                          <h3 class="description py-2">*Datos encargado.</h3>
                          <p class="description py-2">*Datos generales alumno.</p>
                          <p class="description py-2">*No CUI alumno.</p>
                          <p class="description py-2">*Codigo Personal alumno.
                                                           
                           <a type="button" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                              ?
                          </a>
                           </p> 
                           <p  class="description py-2"> </p>
                           <p class="text-center">
                              <button style="color:white; width:100%; display:block;"type="button" class="btn buy me-md-1; font-size: 25px" wire:click="va1l()">Pre-inscribir</button>
                          </p>
                      
                         </div>
                  </div> <!-- end card -->
              </div>
          </div>

             </div>
           </div>
        </div>
   
@else
<div class="accordion accordion-flush" id="accordionFlushExample">
<div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingOne">
    @if($gradoin!=null)
    <button class="accordion-button collapsed list-group-item-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOn" aria-expanded="false" aria-controls="flush-collapseOn">
      <h4 class="font-weight-bolder">
        @if($gradoin)
        Grado seleccionado: <b class="text-center"> {{$gradoin}}</b>
        @else
        Seleccionar Grado
        @endif
      </h4>
    </button>
    @else
    <button class="accordion-button collapsed list-group-item-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOn" aria-expanded="false" aria-controls="flush-collapseOn">
      <h4 class="font-weight-bolder text-center">
        @if($gradoin)
        Grado seleccionado: <b> {{$gradoin}}</b>
        @else
        Seleccionar Grado
        @endif
      </h4>
    </button>
    @endif
  </h2>
  <div id="flush-collapseOn" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
        <div class="row">
          <div class="col-md">
            <div class="tab">
                  
              @error('gradoin') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe seleccionar un grado</span>
                 </div> @enderror

              <ul class="list-group">
                <li class="list-group-item list-group-item-action"  for="flexRadioGrado01">
                  <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="PRE-KINDER" aria-label="..." id="flexRadioGrado01">
                  <label class="form-check-label" for="flexRadioGrado01" style="font-size: 15px; color:#000000;">
                  PRE-KINDER
                  </label>
                  
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="KINDER" aria-label="..."  id="flexRadioGrado02">
                  <label class="form-check-label" for="flexRadioGrado02" style="font-size: 15px; color:#000000;">
                    KINDER
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" type="radio" wire:model="gradoin" value="PREPARATORIA" aria-label="..."  id="flexRadioGrado03">
                  <label class="form-check-label" for="flexRadioGrado03" style="font-size: 15px; color:#000000;">
                    PREPARATORIA
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" type="radio"  wire:model="gradoin"  value="PRIMER GRADO" aria-label="..."  id="flexRadioGrado1">
                  <label class="form-check-label" for="flexRadioGrado1" style="font-size: 15px; color:#000000;">
                    PRIMER GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" type="radio"   wire:model="gradoin" value="SEGUNDO GRADO" aria-label="..."  id="flexRadioGrado2">
                  <label class="form-check-label" for="flexRadioGrado2" style="font-size: 15px; color:#000000;">
                    SEGUNDO GRADO
                    </label>
                  
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="TERCER GRADO" aria-label="..."  id="flexRadioGrado3">
                  <label class="form-check-label" for="flexRadioGrado3" style="font-size: 15px; color:#000000;">
                    TERCER GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="CUARTO GRADO" aria-label="..."  id="flexRadioGrado4">
                  <label class="form-check-label" for="flexRadioGrado4" style="font-size: 15px; color:#000000;">
                    CUARTO GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio"  wire:model="gradoin" value="QUINTO GRADO" aria-label="..."  id="flexRadioGrado5">
                  <label class="form-check-label" for="flexRadioGrado5" style="font-size: 15px; color:#000000;">
                    QUINTO GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="SEXTO GRADO" aria-label="..."  id="flexRadioGrado6">
                  <label class="form-check-label" for="flexRadioGrado6" style="font-size: 15px; color:#000000;">
                    SEXTO GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="SEPTIMO GRADO" aria-label="..."  id="flexRadioGrado7">
                  <label class="form-check-label" for="flexRadioGrado7" style="font-size: 15px; color:#000000;">
                    SEPTIMO GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="OCTAVO GRADO" aria-label="..."  id="flexRadioGrado8">
                  <label class="form-check-label" for="flexRadioGrado8" style="font-size: 15px; color:#000000;">
                    OCTAVO GRADO
                    </label>
                
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="NOVENO GRADO" aria-label="..."  id="flexRadioGrado9">
                  <label class="form-check-label" for="flexRadioGrado9" style="font-size: 15px; color:#000000;">
                    NOVENO GRADO
                    </label>
                  
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"  type="radio"  wire:model="gradoin" value="DECIMO GRADO" aria-label="..."  id="flexRadioGrado10">
                  <label class="form-check-label" for="flexRadioGrado10" style="font-size: 15px; color:#000000;">
                    DECIMO GRADO
                    </label>
                
                </li>
              </ul>
             
          </div>
       
            </div>
          </div>
          </div>
  </div>
</div>



  @if($gradoin!==null)
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      @if($a!=null && $a==2)
      <button class="accordion-button collapsed list-group-item-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR22" aria-expanded="false" aria-controls="flush-collapseFOR22">
        <h4 class="font-weight-bolder">  <b>Datos Estudiante:</b>   </h4>
      </button>
      @else
      <button class="accordion-button collapsed list-group-item-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR22" aria-expanded="false" aria-controls="flush-collapseFOR22">
        <h4 class="font-weight-bolder">  <b>Datos Estudiante:</b>   </h4>
      </button>
      @endif

    </h2>
    <div id="flush-collapseFOR22" class="accordion-collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
            <form wire:submit.prevent="savep3()" class="form-floating">
              <div class="col-md">
                <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre Completo:
                </label>
                <input  wire:model="nombre_es" class="form-control " required>
                @error('nombre_es')
                <div class="alert alert-warning" role="alert">
                 Pendiente
                </div>
                @enderror
            </div>
            <div class="row g-3">
              <div class="col-md">
                <label for="inputApellidos" style="font-size: 15px; color:#000000;">Fecha de Nacimiento:</label>
                <input type="date"  wire:model="f_nacimiento_es" class="form-control " required>
                @error('f_nacimiento_es')
                <div class="alert alert-warning" role="alert">
                 Pendiente
                </div>
                @enderror
            </div>
            
            <div class="col-md">
                <label for="inputApellidos" style="font-size: 15px; color:#000000;">Genero:</label>
                <br>
                <div class="form-check form-check-inline ">
                  <input class="form-check-input"  wire:model='genero' value="Masculino"  type="radio" wire:model="genero_es" id="flexRadioDefault1">
                  <label class="form-check-label" for="flexRadioDefault1" style="font-size: 15px; color:#000000;">
                  Masculino
                  </label>
                </div>
                <div class="form-check form-check-inline " >
                  <input class="form-check-input"  wire:model='genero' value="Femenino" type="radio" wire:model="genero_es" id="flexRadioDefault2">
                  <label class="form-check-label" for="flexRadioDefault2" style="font-size: 15px; color:#000000;">
                    Femenino
                  </label>
                </div>
                @error('genero_es')
                <div class="alert alert-warning" role="alert">
                 Pendiente
                </div>
                @enderror
              </div>
             
            </div>

            <div class="row g-3">
              <div class="col-md">
              <label for="inputDireccion" style="font-size: 15px; color:#000000;">CUI:</label>
              <input type='number' placeholder=""  wire:model="cui_es" class="form-control " required>
              @error('cui_es')
              <div class="alert alert-warning" role="alert">
               Pendiente
              </div>
              @enderror
          </div>

          <div class="col-md">
            <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Codigo Personal (Mineduc):

                  <!-- Button trigger modal -->
                <a class="btn btn-outline-danger"  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                ?
                </a>
            </label>
            <input type='text' placeholder=""  wire:model="codigo_pe_es" class="form-control " required>
        </div>
        @error('codigo_pe_es')
        <div class="alert alert-warning" role="alert">
         Pendiente
        </div>
        @enderror
      </div>
        
      <div class="row g-3">
        <div class="col-md">
              <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Nacionalidad:</label>
              <input type='text' placeholder=""  wire:model="nac_es" class="form-control " required>
          </div>
          @error('nac_es')
          <div class="alert alert-warning" role="alert">
           Pendiente
          </div>
          @enderror
          <div class="col-md">
            <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Lugar Nacimiento (País):</label>
            <input type='text' placeholder="" wire:model="lug_nac_es" class="form-control " required>
        </div>
        @error('lug_nac_es')
        <div class="alert alert-warning" role="alert">
         Pendiente
        </div>
        @enderror
      </div>
      <div class="row g-3">
        <div class="col-md">
        <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Telefono Casa:</label>
        <input type='number' placeholder=""  wire:model="tel_es" class="form-control " required>
    </div>
    @error('tel_es')
    <div class="alert alert-warning" role="alert">
     Pendiente
    </div>
    @enderror
    <div class="col-md">
      <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Telefono Celular:</label>
      <input type='number' placeholder=""  wire:model="cel_es" class="form-control " required>
  </div>
  @error('cel_es')
  <div class="alert alert-warning" role="alert">
   Pendiente
  </div>
  @enderror
</div>

    <div class="row g-3">
    <div class="col-md">
      <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Dirección de domicilio:</label>
      <input type='text' placeholder=""  wire:model="direccion_es" class="form-control" required>
    </div>
    @error('direccion_es')
    <div class="alert alert-warning" role="alert">
    Pendiente
    </div>
    @enderror
      <div class="col-md">
        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" value="Catolica" wire:model="religion_es" id="flexRadioDefault20">
          <label class="form-check-label" for="flexRadioDefault20" style="font-size: 15px; color:#000000;">
            Catolica
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" value="Protestante" wire:model="religion_es" id="flexRadioDefault21">
          <label class="form-check-label" for="flexRadioDefault21" style="font-size: 15px; color:#000000;">
            Protestante
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" value="Evangelica" wire:model="religion_es" id="flexRadioDefault22">
          <label class="form-check-label" for="flexRadioDefault22" style="font-size: 15px; color:#000000;">
            Evangelica
          </label>
        </div>

      </div>
      @error('religion_es')
      <div class="alert alert-warning" role="alert">
      Pendiente
      </div>
      @enderror 
      <a wire:click='val2' data-bs-toggle="collapse"  class="btn btn-outline-warning">Validar</a>

  
    </div>
  </form>
</div>
    </div>
  </div>
@endif
       

@if($a!=null && $a==2)
<div class="accordion-item">
  <h2 class="accordion-header" id="flush-headingOn">

    @if($val!=null && $val==2)
    <button class="accordion-button collapsed list-group-item-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR221" aria-expanded="false" aria-controls="flush-collapseFOR221">
      <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
    </button>
    @else
    <button class="accordion-button collapsed list-group-item-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR221" aria-expanded="false" aria-controls="flush-collapseFOR221">
      <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
    </button>
    @endif

  </h2>
  <div id="flush-collapseFOR221" class="accordion-collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
    <div class="accordion-body">
      <div class="table-responsive">
      <form wire:submit.prevent="val3()" class="form-floating">
        <div class="form-group col-xs-12">
          <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre Completo:</label>
          <input type="text" placeholder=""  wire:model="nombre_en" class="form-control " required>
      </div>
      @error('nombre_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
      <div class="row g-3">
        <div class="col-md">>
        <label for="fnacimiento_en" style="font-size: 15px; color:#000000;">Fecha Nacimiento:</label>
        <input type="date" placeholder=""   wire:model="fnacimiento_en" class="form-control " required>
    </div>
    @error('fnacimiento_en')
    <div class="alert alert-warning" role="alert">
     Pendiente
    </div>
    @enderror
  
    <div class="col-md">
          <label for="inputDPI" style="font-size: 15px; color:#000000;">DPI:</label>
          <input type="number" placeholder="" type="number"   wire:model="dpi_en" class="form-control " required>
      </div>
      @error('dpi_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
    </div>
      <div class="row g-3">
        <div class="col-md">
        <label for="inputNombres" style="font-size: 15px; color:#000000;">Extendido en:</label>
        <input type="text" placeholder=""  wire:model="extentido_en" class="form-control " required>
    </div>
    @error('extentido_en')
    <div class="alert alert-warning" role="alert">
     Pendiente
    </div>
    @enderror
    <div class="col-md">
      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Estado Civil:</label>
      <br>
      <div class="form-check form-check-inline">
        <input class="form-check-input"  type="radio" wire:model="es_civil_en" value="Casado" id="flexRadioEstado1">
        <label class="form-check-label" for="flexRadioEstado1" style="font-size: 15px; color:#000000;">
        Casado
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="es_civil_en" value="Soltero" id="flexRadioEstado2">
        <label class="form-check-label" for="flexRadioEstado2" style="font-size: 15px; color:#000000;">
          Soltero
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" wire:model="es_civil_en"  value="Viuda" id="flexRadioEstado3">
        <label class="form-check-label" for="flexRadioEstado3" style="font-size: 15px; color:#000000;">
          Viuda/o
        </label>
      </div>
    </div>
    @error('es_civil_en')
    <div class="alert alert-warning" role="alert">
     Pendiente
    </div>
    @enderror
    </div>

    <div class="form-group col-xs-12">
      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Direccion de domicilio:</label>
      <input type="text" placeholder="" type="email" wire:model="direccion_en" class="form-control " required>
  </div>
  @error('direccion_en')
  <div class="alert alert-warning" role="alert">
   Pendiente
  </div>
  @enderror

  <div class="row g-3">
    <div class="col-md">
    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono de casa:</label>
    <input placeholder="" type="number"  wire:model="tel_casa_en" class="form-control " required>
</div>
@error('tel_casa_en')
<div class="alert alert-warning" role="alert">
 Pendiente
</div>
@enderror
  <div class="col-md">
  <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono celular:</label>
  <input placeholder="" type="number"  wire:model="cel_en" class="form-control " required>
</div>
@error('cel_en')
<div class="alert alert-warning" role="alert">
Pendiente
</div>
@enderror
  </div>

<div class="row g-3">
<div class="col-md">
          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Correo electronico:</label>
          <input placeholder="" type="email"  wire:model="correo_en" class="form-control " required>
      </div>
      @error('correo_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
      <div class="col-md">
        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input"  type="radio" wire:model="religion_en" value="Catolica" id="flexRadioReligionen222" >
          <label class="form-check-label" for="flexRadioReligionen222" style="font-size: 15px; color:#000000;">
          Catolica
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" wire:model="religion_en" value="Protestante" id="flexRadioReligionen2">
          <label class="form-check-label" for="flexRadioReligionen2" style="font-size: 15px; color:#000000;">
            Protestante
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" wire:model="religion_en" value="Evangelica" id="flexRadioReligionen3">
          <label class="form-check-label" for="flexRadioReligionen3" style="font-size: 15px; color:#000000;">
            Evangelica
          </label>
        </div>
      </div>
      @error('religion_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
    
</div>
@if($val1==2)
<div class="row g-3">
<a wire:click='val3' data-bs-toggle="collapse"  class="btn btn-outline-warning">Validar</a>
</div>
<br>
<div class="row g-3">
<button type="button" id="val"  class="btn btn-success">Confirmar Información</button>
</div>
@include('modals.modalinfo')
@include('modals.modalval')
@else
<div class="row g-3">
<a wire:click='val3' data-bs-toggle="collapse"  class="btn btn-outline-warning">Validar</a>
</div>
@endif

      </form>
    </div>
  </div>
  </div>
</div>
@endif

</div>
@endif
</div>
</div>
<hr>
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



</div>