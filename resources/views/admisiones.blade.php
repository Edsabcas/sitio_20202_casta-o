  <section class="slider_section">

    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
          <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
    </div>
  </section>
  <div class="container col-6">
    <div class="accordion accordion-flush" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          @if($gradoin!=null)
          <button class="accordion-button collapsed list-group-item-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOn" aria-expanded="false" aria-controls="flush-collapseOn">
            <h4 class="font-weight-bolder text-center">
              @if($gradoin)
              Grado seleccionado: <b> {{$gradoin}}</b>
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
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin' wire:model="gradoin" value="PRE-KINDER" aria-label="..." id="flexRadioGrado01">
                        <label class="form-check-label" for="flexRadioGrado01" style="font-size: 15px; color:#000000;">
                        PRE-KINDER
                        </label>
                        
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin' wire:model="gradoin" value="KINDER" aria-label="..."  id="flexRadioGrado02">
                        <label class="form-check-label" for="flexRadioGrado02" style="font-size: 15px; color:#000000;">
                          KINDER
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin' wire:model="gradoin" value="PREPARATORIA" aria-label="..."  id="flexRadioGrado03">
                        <label class="form-check-label" for="flexRadioGrado03" style="font-size: 15px; color:#000000;">
                          PREPARATORIA
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin' wire:model="gradoin"  value="PRIMER GRADO" aria-label="..."  id="flexRadioGrado1">
                        <label class="form-check-label" for="flexRadioGrado1" style="font-size: 15px; color:#000000;">
                          PRIMER GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin'  wire:model="gradoin" value="SEGUNDO GRADO" aria-label="..."  id="flexRadioGrado2">
                        <label class="form-check-label" for="flexRadioGrado2" style="font-size: 15px; color:#000000;">
                          SEGUNDO GRADO
                          </label>
                        
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1" type="radio" wire:model='gradoin' wire:model="gradoin" value="TERCER GRADO" aria-label="..."  id="flexRadioGrado3">
                        <label class="form-check-label" for="flexRadioGrado3" style="font-size: 15px; color:#000000;">
                          TERCER GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio" wire:model='gradoin' wire:model="gradoin" value="CUARTO GRADO" aria-label="..."  id="flexRadioGrado4">
                        <label class="form-check-label" for="flexRadioGrado4" style="font-size: 15px; color:#000000;">
                          CUARTO GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio" wire:model='gradoin' wire:model="gradoin" value="QUINTO GRADO" aria-label="..."  id="flexRadioGrado5">
                        <label class="form-check-label" for="flexRadioGrado5" style="font-size: 15px; color:#000000;">
                          QUINTO GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio" wire:model='gradoin' wire:model="gradoin" value="SEXTO GRADO" aria-label="..."  id="flexRadioGrado6">
                        <label class="form-check-label" for="flexRadioGrado6" style="font-size: 15px; color:#000000;">
                          SEXTO GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio"  wire:model='gradoin' wire:model="gradoin" value="SEPTIMO GRADO" aria-label="..."  id="flexRadioGrado7">
                        <label class="form-check-label" for="flexRadioGrado7" style="font-size: 15px; color:#000000;">
                          SEPTIMO GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio" wire:model='gradoin' wire:model="gradoin" value="OCTAVO GRADO" aria-label="..."  id="flexRadioGrado8">
                        <label class="form-check-label" for="flexRadioGrado8" style="font-size: 15px; color:#000000;">
                          OCTAVO GRADO
                          </label>
                      
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio"  wire:model='gradoin' wire:model="gradoin" value="NOVENO GRADO" aria-label="..."  id="flexRadioGrado9">
                        <label class="form-check-label" for="flexRadioGrado9" style="font-size: 15px; color:#000000;">
                          NOVENO GRADO
                          </label>
                        
                      </li>
                      <li class="list-group-item list-group-item-action">
                        <input class="form-check-input me-1"  type="radio"  wire:model='gradoin' wire:model="gradoin" value="DECIMO GRADO" aria-label="..."  id="flexRadioGrado10">
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
                      @if($nombre_es!=null)
                      {{$nombre_es}}
                      @endif
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
                  </div>
                  @error('f_nacimiento_es')
                  <div class="alert alert-warning" role="alert">
                   Pendiente
                  </div>
                  @enderror
                  <div class="col-md">
                      <label for="inputApellidos" style="font-size: 15px; color:#000000;">Genero:</label>
                      <br>
                      <div class="form-check form-check-inline ">
                        <input class="form-check-input"  wire:model='genero' value="Masculino"  type="radio" wire:model="genero_es" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1" style="font-size: 15px; color:#000000;">
                        Masculino
                        @if($genero!=null) {
                          {{ $genero}}
                        }
                        @endif
                        </label>
                      </div>
                      <div class="form-check form-check-inline " >
                        <input class="form-check-input"  wire:model='genero' value="Femenino" type="radio" wire:model="genero_es" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2" style="font-size: 15px; color:#000000;">
                          Femenino
                        </label>
                      </div>
                    </div>
                    @error('genero_es')
                    <div class="alert alert-warning" role="alert">
                     Pendiente
                    </div>
                    @enderror
                  </div>
    
                  <div class="row g-3">
                    <div class="col-md">
                    <label for="inputDireccion" style="font-size: 15px; color:#000000;">CUI:</label>
                    <input type='number' placeholder=""  wire:model="cui_es" class="form-control " required>
                </div>
                @error('cui_es')
                    <div class="alert alert-warning" role="alert">
                     Pendiente
                    </div>
                    @enderror
                <div class="col-md">
                  <label for="inputInstitucion" style="font-size: 15px; color:#000000;">Codigo Personal (Mineduc):</label>
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
                <input class="form-check-input"  type="radio" value="Catolica" wire:model="religion_es" id="flexRadioDefault1111">
                <label class="form-check-label" for="flexRadioDefault1111 " style="font-size: 15px; color:#000000;">
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
          @if($a==3)
          <button class="accordion-button collapsed list-group-item-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR" aria-expanded="false" aria-controls="flush-collapseFOR">
            <h4 class="font-weight-bolder">    <b>Detalle encargado: </b>  </h4>
          </button>
          @else
          <button class="accordion-button collapsed list-group-item-danger" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFOR" aria-expanded="false" aria-controls="flush-collapseFOR">
            <h4 class="font-weight-bolder">  <b> Detalle encargado:</b>    </h4>
          </button>
          @endif
        
        </h2>
        <div id="flush-collapseFOR" class="accordion-collapse collapse" aria-labelledby="flush-headingOn" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body">
            <div class="table-responsive">
            <form wire:submit.prevent="val3()" class="form-floating">
              <div class="form-group col-xs-12">
                <label for="inputNombres" style="font-size: 15px; color:#000000;">Nombre Completo:</label>
                <input type="text" placeholder=""  name="nombre_en" class="form-control " required>
            </div>
            @error('nombre_en')
            <div class="alert alert-warning" role="alert">
             Pendiente
            </div>
            @enderror
            <div class="row g-3">
              <div class="col-md">>
              <label for="fnacimiento_en" style="font-size: 15px; color:#000000;">Fecha Nacimiento:</label>
              <input type="date" placeholder=""   name="fnacimiento_en" class="form-control " required>
          </div>
          @error('fnacimiento_en')
          <div class="alert alert-warning" role="alert">
           Pendiente
          </div>
          @enderror
        
          <div class="col-md">
                <label for="inputDPI" style="font-size: 15px; color:#000000;">DPI:</label>
                <input type="number" placeholder="" type="number"   name="dpi_en" class="form-control " required>
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
              <input type="text" placeholder=""  name="extentido_en" class="form-control " required>
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
              <input class="form-check-input"  type="radio" name="es_civil_en" id="flexRadioEstado1">
              <label class="form-check-label" for="flexRadioEstado1" style="font-size: 15px; color:#000000;">
              Casado
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="es_civil_en" id="flexRadioEstado2">
              <label class="form-check-label" for="flexRadioEstado2" style="font-size: 15px; color:#000000;">
                Soltero
              </label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="es_civil_en" id="flexRadioEstado3">
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
            <input type="text" placeholder="" type="email" name="direccion_en" class="form-control " required>
        </div>
        @error('direccion_en')
        <div class="alert alert-warning" role="alert">
         Pendiente
        </div>
        @enderror

        <div class="row g-3">
          <div class="col-md">
          <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono de casa:</label>
          <input placeholder="" type="number"  name="tel_casa_en" class="form-control " required>
      </div>
      @error('tel_casa_en')
      <div class="alert alert-warning" role="alert">
       Pendiente
      </div>
      @enderror
        <div class="col-md">
        <label for="inputApellidos" style="font-size: 15px; color:#000000;">Telefono celular:</label>
        <input placeholder="" type="number"  name="cel_en" class="form-control " required>
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
                <input placeholder="" type="email"  name="correo_en" class="form-control " required>
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
                <input class="form-check-input"  type="radio" name="religion_en" id="flexRadioReligionen222" >
                <label class="form-check-label" for="flexRadioReligionen222" style="font-size: 15px; color:#000000;">
                Catolica
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="religion_en" id="flexRadioReligionen2">
                <label class="form-check-label" for="flexRadioReligionen2" style="font-size: 15px; color:#000000;">
                  Protestante
                </label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="religion_en" id="flexRadioReligionen3">
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
               
    <div class="row g-3">
      <a wire:click='val2' data-bs-toggle="collapse"  class="btn btn-outline-warning">Validar</a>
    </div>
            </form>
          </div>
        </div>
        </div>
      </div>
      @endif

</div>
</div>