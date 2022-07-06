<center>
  <section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
          <img class="first-slide" src="{{ asset('images/imgadmin.png') }}" alt="First slide">
    </div>
    <br>
    <br>
    <br>
    <br>
  </section>
</center>

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
<div  wire:ignore.self class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
          <script>
                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                  return new bootstrap.Tooltip(tooltipTriggerEl)
                })
            </script>
            
          <div class="col-sm-6">
            <div class="card" style="border-color: #ffff; outline-color: transparent; background-color:transparent">
              <div class="card-body">
                <h3 class="card-title" style="color:#3a3e7b;"><b>DATOS DEL ESTUDIANTE:</b></h3>
                <p class="text-white">• Datos generales. <br>
                  • No. CUI. <br>
                  • Código Personal.                    
                        <a
                        class="btn-pre text-white font-monospace" style="background-color:#3a3e7b" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                ?
                </a>
                </p>
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
  Ingrese la siguiente información importante para iniciar su proceso de inscripción</h2>

  
  <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
    <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
      <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingtipo">
        @if($a!=null && $a==6)
        <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetipoins" aria-expanded="false" aria-controls="panelsStayOpen-collapsetipoins">
          <h4 class="font-weight-bolder">  <b>Inscripción: 
          @if($tipo_ins!=null &&  $tipo_ins==1)
          Re-ingreso 
          @elseif($tipo_ins!=null &&  $tipo_ins==2)
          Nuevo ingreso
          @endif  
          </b>   </h4>
        </button>
        @else
        <button class="accordion-button collapsed" style="background-color:#a6a8c3; border:6px solid #3a3e7b; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetipoins" aria-expanded="false" aria-controls="panelsStayOpen-collapsetipoins">
        <h4 class="font-weight-bolder">  <b>Inscripción</b>   </h4>
        </button>
        @endif
      </h2>
      <div  wire:ignore.self id="panelsStayOpen-collapsetipoins"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingmodalidad">
        <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
        <div class="mb-3">
              <li class="list-group-item list-group-item-action">
               
                  <input class="form-check-input me-1" wire:click='valtipoins()' data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetipoins" type="radio" wire:model="tipo_ins" value="1" aria-label="..."  id="flexRadioGradopre1">
                  <label class="form-check-label" for="flexRadioGradopre1" style="font-size: 15px; color:#000000;">
                      Re-ingreso 
                    </label>
                  
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1"   wire:click='valtipoins()' type="radio" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsetipoins" wire:model="tipo_ins" value="2" aria-label="..."  id="flexRadioGradvir2">
                  <label class="form-check-label" for="flexRadioGradvir2" style="font-size: 15px; color:#000000;">
                    Nuevo ingreso
                    </label>
                
                </li>
                @error('tipo_ins') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        
                          <span>Debe de seleccionar</span>
                         </div> @enderror
      </div>
      </div>
    </div>
  </div>
</div>


@if($tipo_ins!=null)
  <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
    <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
      <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingtipo">
        @if($a!=null && $a==5)
        <button class="accordion-button collapsed" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsemodalidad" aria-expanded="false" aria-controls="panelsStayOpen-collapsemodalidad">
          <h4 class="font-weight-bolder">  <b>Modalidad de estudio en el ciclo escolar 2023: 
          @if($tipo!=null)
          {{$tipo}}
          @endif  
          </b>   </h4>
        </button>
        @else
        <button class="accordion-button collapsed" style="background-color:#a6a8c3; border:6px solid #3a3e7b; border-radius: 60px 60px 60px 60px;" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsemodalidad" aria-expanded="false" aria-controls="panelsStayOpen-collapsemodalidad">
        <h4 class="font-weight-bolder">  <b>Modalidad de estudio en el ciclo escolar 2023.</b>   </h4>
        </button>
        @endif
      </h2>
      <div  wire:ignore.self id="panelsStayOpen-collapsemodalidad"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingmodalidad">
        <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
        <div class="mb-3">
              <li class="list-group-item list-group-item-action">
               
                  <input class="form-check-input me-1" wire:click='valmodalidad()' data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsemodalidad" type="radio" wire:model="tipo" value="Presencial" aria-label="..."  id="flexRadioGradopre">
                  <label class="form-check-label" for="flexRadioGradopre" style="font-size: 15px; color:#000000;">
                      Presencial 
                    </label>
                  
                </li>
                <li class="list-group-item list-group-item-action">
                  <input class="form-check-input me-1" wire:click='valmodalidad()'  type="radio" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapsemodalidad" wire:model="tipo" value="Virtual" aria-label="..."  id="flexRadioGradvir">
                  <label class="form-check-label" for="flexRadioGradvir" style="font-size: 15px; color:#000000;">
                    Virtual
                    </label>
                
                </li>
                @error('tipo') 
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        
                          <span>Debe de seleccionar</span>
                         </div> @enderror
      </div>
      </div>
    </div>
  </div>
</div>
   @endif
@if($tipo!=null && $tipo!="")
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
    <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
        <div class="tab">
                  
          @error('gradoin') 
          <div class="alert alert-danger d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            
              <span>Debe seleccionar un grado</span>
             </div> @enderror
          
          <ul class="list-group" style="border-radius: 60px 60px 60px 60px;">
            @foreach($grados as $grado)
            <li class="list-group-item list-group-item-action"  for="flexRadioGrado{{$grado->ID_GR}}">
              <input class="form-check-input me-1" type="radio" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" wire:click='selgrado("{{$grado->ID_GR}}","{{$grado->GRADO}}")' name="grado" value="{{$grado->ID_GR}}" aria-label="..." id="flexRadioGrado{{$grado->ID_GR}}">
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
@endif


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
    <div  wire:ignore.self id="panelsStayOpen-collapseTwo"style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
      <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
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
                      <input type="date"  wire:model="f_nacimiento_es" class="form-control " min="2000-01-01" max="2020-12-31" required>
                      @error('f_nacimiento_es')
                      <div class="alert alert-warning" role="alert">
                       Pendiente
                      </div>
                      @enderror
                      @if($errorfecha!=null && $errorfecha==1)
                      <div class="alert alert-warning" role="alert">
                        Debe de agregar una fecha correcta.
                        {{$f_nacimiento_es}}
                       </div>
                    
                      @endif
                  </div>
                  
                  <div class="col-md">
                    <label for="inputApellidos" style="font-size: 15px; color:#000000;">Género:</label>
                    <br>
                    <div class="form-check form-check-inline ">
                      <input class="form-check-input"  wire:model='genero' value="Masculino" wire:click="valfecha"  type="radio" wire:model="genero_es" id="flexRadioDefault1">
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
                      <a class="btn font-monospace" type="button" style="background-color:#a4cb39" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <b>?</b>  
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
                <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Teléfono Celular:</label>
                <input type='number' placeholder=""  wire:model="cel_es" class="form-control " required>
                @error('cel_es')
                <div class="alert alert-warning" role="alert">
                  Pendiente
                </div>
                @enderror
              </div>
              <div class="col-md">
                <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
                <br>
                <input type='text' placeholder=""  wire:model="religion_es" class="form-control" required>
              </div>
              @error('religion_es')
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
          
            <a class="btn btn-pre" style="border-radius: 60px 60px 60px 60px;"  type="button" wire:click='val2' >Validar datos</a>
            
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
    <div  wire:ignore.self id="panelsStayOpen-collapseThree" style="border-radius: 60px 60px 60px 60px;"class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
      <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
        <div class="container">
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
            Casado(a)
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="es_civil_en" value="Soltero" id="flexRadioEstado2">
            <label class="form-check-label" for="flexRadioEstado2" style="font-size: 15px; color:#000000;">
              Soltero(a)
            </label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" wire:model="es_civil_en"  value="Viuda" id="flexRadioEstado3">
            <label class="form-check-label" for="flexRadioEstado3" style="font-size: 15px; color:#000000;">
              Viudo(a)
            </label>
          </div>
        </div>
        @error('es_civil_en')
        <div class="alert alert-warning" role="alert">
         Pendiente
        </div>
        @enderror
        <div class="col-md">
          <div class="form-group col-xs-12">
            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Profesión:</label>
            <input type="text" placeholder="" type="text" wire:model="profesion_en" class="form-control " required>
        </div>
        </div>
        @error('profesion_en')
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
    <div class="col-md">
      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Religión:</label>
      <br>
      <input type='text' placeholder=""  wire:model="religion_en" class="form-control" required>
    </div>
    @error('religion_en')
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
            <label for="inputApellidos" style="font-size: 15px; color:#000000;">Segundo correo electronico (opcional):</label>
            <input placeholder="" type="email"  wire:model="correo_en2" class="form-control " required>
        </div>
        
    </div>
    <br>
    <div class="row g-4" style="border-radius: 60px 60px 60px 60px;">
      
    <a wire:click='val3' type="button" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre">Validar Información</a>
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
  <button id="val" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre">Confirmar Información</button>
  </div>
  @include('modals.modalinfo')
  @include('modals.modalval')
  @endif
  
</div>



  @endif
</div>

@endif

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
@if($mensaje!=null  && $mensaje==1)
<br>
<br><br>
<br>
<div class="row">
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Su gestión ha sido ingresada satisfactoriamente.</strong><br>
    Puede validar el correo de encargado, y encontrará su gestión y los pasos a realizar.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> 
</div>

@elseif($mensaje!=null && $mensaje==2)
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Intente en unos minutos, no se logro enviar su información.
  </div>
</div>
@endif
</div>