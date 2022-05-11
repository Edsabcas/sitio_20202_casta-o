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
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title text-center" id="staticBackdropLabel" style="color:rgb(0, 0, 0)"><b>Validar Codigo MINEDUC</b></h5>
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
@if($mensaje!=null  && $mensaje==1)
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Su gestión ha sido ingresada satisfactoriamente.</strong><br>
  Puede validar el correo de encargado, y encontrará su gestión y los pasos a realizar.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@elseif($mensaje!=null && $mensaje==2)
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Intente en unos minutos, no se logro enviar su información.
  </div>
</div>
@endif
<div class="row">
@if($val==null)

<div class="col-md-25 offset-md-3">
  <div class="col-md-6 col-sm-10 card text-center" style="background-color:#a4cb39">
    <br>
    <div class="text-center">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/> 
      </svg>
      <div class="content">
        <h2 class="category text-center text-white"><b>¡IMPORTANTE!</b></h2>
        <h4 class="description py-3  font-size: 35px" style="color:white"> Toma en cuenta que debes tener los siguientes datos para iniciar tu proceso de pre-inscripción:</h4>
        
        <div class="row mx-auto justify-content-evenly">
          <div class="col-sm-6">
            <div class="card" style="border-color: #ffff; outline-color: transparent; background-color:transparent">
              <div class="card-body">
                <h3 class="card-title" style="color:#3a3e7b;"><b>DATOS DEL ENCARGADO:</b></h3>
                <p class="card-text text-white">• DPI. <br>
                  • Correo electrónico. <br>
                  • No. de teléfono.</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card" style="border-color: #ffff; outline-color: transparent; background-color:transparent">
              <div class="card-body">
                <h3 class="card-title" style="color:#3a3e7b;"><b>DATOS DEL ESTUDIANTE:</b></h3>
                <p class="card-text text-white">• Datos generales. <br>
                  • No. CUI. <br>
                  • Código Personal.                               
                            <a type="button" class="btn text-white" style="background-color:#3a3e7b" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                ?
                 </a></p>
              </div>
            </div>
          </div>
        </div>
    <div class="footer bg-transparent border-transparent">
      <div class="d-grid gap-3 col-8 mx-auto">
        <button class="btn btn-pre text-white" type="button" wire:click="va1l()">Pre-Inscribir</button>
      </div>
    </div>
    <br>
  </div>
</div>
</div>
</div>

@else
<br>
<h2 class="card-title" style="color:#3a3e7b;" data-aos="fade-up">
  Ingrese la siguiente información importante para iniciar su proceso de pre-inscripción</h2>
                

<div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample">
  <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
    <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOne">
      @if($gradoin!=null)
      <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <h4 class="font-weight-bolder">
          @if($gradose)
          Grado seleccionado: <b class="text-center"> {{$gradose}}</b>
          @else
          Seleccione un grado
          @endif
        </h4>
      </button>
      @else
      <button class="accordion-button" type="button" style="background-color:#a6a8c3; border:6px solid #3a3e7b; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
       <h4 class="font-weight-bolder text-center">
          @if($gradose)
          Grado seleccionado: <b> {{$gradose}}</b>
          @else
          Seleccione un grado
          @endif
        </h4>
      </button>
      @endif
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <div class="tab">
                  
          @error('gradoin') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            
              <span>Debe seleccionar un grado</span>
             </div> @enderror
          
          <ul class="list-group">
            @foreach($grados as $grado)
            <li class="list-group-item list-group-item-action"  for="flexRadioGrado{{$grado->ID_GR}}">
              <input class="form-check-input me-1" type="radio" wire:click='selgrado("{{$grado->ID_GR}}","{{$grado->GRADO}}")' name="grado" value="{{$grado->ID_GR}}" aria-label="..." id="flexRadioGrado{{$grado->ID_GR}}">
              <label class="form-check-label" for="flexRadioGrado{{$grado->ID_GR}}" style="font-size: 15px; color:#000000;">
            {{$grado->GRADO}}
              </label>
              
            </li>
            @endforeach
          
          </ul>
         
      </div>
      </div>
    </div>
  </div>
</div>
  @if($gradoin!=null)
<div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
  <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
    <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingTwo">
      @if($a!=null && $a==2)
      <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        <h4 class="font-weight-bolder">  <b>Datos del Estudiante:</b>   </h4>
      </button>
      @else
      <button class="accordion-button collapsed" style="background-color:#a6a8c3; border:6px solid #3a3e7b; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      <h4 class="font-weight-bolder">  <b>Datos del Estudiante:</b>   </h4>
      </button>
      @endif
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body">
                 <form wire:submit.prevent="" class="form-floating">
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
                    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Género:</label>
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
                  <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Código Personal (Mineduc):
      
                        <!-- Button trigger modal -->
                      <a class="btn" style="background-color:#a4cb39" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                      ?
                      </a>
                  </label>
                  <input type='text' placeholder=""  wire:model="codigo_pe_es" class="form-control " required>
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
                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Teléfono de Casa:</label>
                <input type='number' placeholder=""  wire:model="tel_es" class="form-control " required>
                @error('tel_es')
                <div class="alert alert-warning" role="alert">
                  Pendiente
                </div>
                @enderror
              </div>
              
              <div class="col-md">
                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Teléfono Celular:</label>
                <input type='number' placeholder=""  wire:model="cel_es" class="form-control " required>
                @error('cel_es')
                <div class="alert alert-warning" role="alert">
                  Pendiente
                </div>
                @enderror
              </div>
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
                <input class="form-check-input" type="radio" name="rel" value="Catolica" wire:model="religion_es" id="flexRadioDefault20">
                <label class="form-check-label" for="flexRadioDefault20" style="font-size: 15px; color:#000000;">
                  Católica
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rel"value="Protestante" wire:model="religion_es" id="flexRadioDefault21">
                <label class="form-check-label" for="flexRadioDefault21" style="font-size: 15px; color:#000000;">
                  Protestante
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rel" value="Evangelica" wire:model="religion_es" id="flexRadioDefault22">
                <label class="form-check-label" for="flexRadioDefault22" style="font-size: 15px; color:#000000;">
                  Evangélica
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="rel" value="Otra" wire:model="religion_es" id="flexRadioDefault2111q">
                <label class="form-check-label" for="flexRadioDefault2111q" style="font-size: 15px; color:#000000;">
                  Otra
                </label>
              </div>
            </div>
            @error('religion_es')
            <div class="alert alert-warning" role="alert">
            Pendiente
            </div>
            @enderror 
            <a class="btn btn-outline-success"  type="button" wire:click='val2' >Validar</a>
            
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
  @endif


  @if($gradoin!=null && $a==2)
  <div class="accordion" id="accordionPanelsStayOpenExample3">
  <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
    <h2  style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingThree">
      @if($val1!=null && $val1==2)
      <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;"  type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
     <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
      </button>
      @else
      <button class="accordion-button collapsed" style="background-color:#a6a8c3; border:6px solid #3a3e7b; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      <h4 class="font-weight-bolder">  <b>Datos Encargado:</b>   </h4>
      </button>
      @endif
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
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
            <div class="col-md">
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
        <div class="row g-3">
        <div class="form-group col-xs-12">
          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Direccion de domicilio:</label>
          <input type="text" placeholder="" type="email" wire:model="direccion_en" class="form-control " required>
      </div>
      @error('direccion_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
    </div>
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
              <input class="form-check-input" type="radio" wire:model="religion_en" value="Protestante" id="flexRadioReligionen23">
              <label class="form-check-label" for="flexRadioReligionen23" style="font-size: 15px; color:#000000;">
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
    <br>
    <div class="row g-4">
      
    <a wire:click='val3' type="button"  class="btn btn-warning">Validar</a>
    </div>
    <br>

          </form>
        </div>
     </div>
    </div>
  </div>
  @if($val1==2)
  <br>
  <div class="d-grid gap-2">
  <button id="val"  class="btn btn-pre">Confirmar Información</button>
  </div>
  @include('modals.modalinfo')
  @include('modals.modalval')
  @endif
  
</div>



  @endif
</div>

@endif
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

 /======== COLORS ===========/
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
</div>