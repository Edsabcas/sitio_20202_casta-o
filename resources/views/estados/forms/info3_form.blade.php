
      <!-- Modal -->
<div wire:ignore.self class="modal fade" id="ModalInscripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Datos importantes</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- FORM DENTRO DE LA MODAL -->
            <h2 class="card-title" style="color:#3a3e7b;" >
                Ingrese la siguiente información importante para continuar con su proceso de inscripción</h2>
            
               <div wire:ignore.self class="accordion" id="accordionDatosVarios">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h4 class="font-weight-bolder">
                            DATOS VARIOS
                          </h4>
                        </button>
                  </h2>
                  
                  <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                      <div class="tab">
                        <strong><label for="exampleInputPassword1" class="form-label">¿Tiene hermanos en colegio?</label></strong>
                        <center>
                        <div style="width: 12rem;">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" wire:click="confirmar_hermano('1')">
                            <label class="form-check-label" for="flexRadioDefault1">
                              Si
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" wire:click="confirmar_hermano('0')">
                            <label class="form-check-label" for="flexRadioDefault1">
                              No
                            </label>
                          </div>
                        </div>
                    </center>
                          @if($confi==1)
                        @error('gradoin') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          
                            <span>Debe seleccionar un grado</span>
                           </div> @enderror
                        
                        <ul class="list-group" style="border-radius: 60px 60px 60px 60px;">
                          @foreach($grados as $grado)
                          <li class="list-group-item list-group-item-action"  for="flexRadioGrado{{$grado->ID_GR}}">
                            <input class="form-check-input me-1" type="radio" wire:click='insertar_grados_hermanos("{{$grado->ID_GR}}","{{$grado->GRADO}}")' name="grado" value="{{$grado->ID_GR}}" aria-label="..." id="flexRadioGrado{{$grado->ID_GR}}">
                            <label class="form-check-label" for="flexRadioGrado{{$grado->ID_GR}}" style="font-size: 15px; color:#000000;">
                          {{$grado->GRADO}}
                            </label>
                          </li>
                          
                          @endforeach
                        
                        </ul>
                        <br>
                        @endif  
                        <h5>Grados escogidos {{$grados_mostrar}}</h5>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="labelañoingreso" class="form-label">Coloque el año de primer ingreso</label></strong>
                                <input  type="number" class="form-control"  wire:model="año_ingreso">
                              </div>
                              @error('año_ingreso')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="col-md-6">
                                <strong><label for="exampleInputPassword1" class="form-label" >Coloque el año de primer ingreso</label></strong>
                                <select class="form-select" aria-label="Default select example" wire:model="grado_primer_ingreso">
                                  <option selected >Elige el grado de primer ingreso</option>
                                  @foreach($grados as $grado)
                                  <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                                  @endforeach
                                </select>
                              </div>
                              @error('grado_primer_ingreso')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                        </div>
                        
                       
                    </div>
                    </div>
                  </div>
                </div>
              </div> 

              <div wire:ignore.self class="accordion" id="accordionDatosdelpadre">
                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h4 class="font-weight-bolder">
                            DATOS DEL PADRE
                          </h4>
                        </button>
                  </h2>
                  
                  <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                      <div class="tab">
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el nombre del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="nombre_padre">
                              </div>
                              @error('nombre_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la fecha de nacimiento del padre</label></strong>
                                <input  type="date" class="form-control"  wire:model="nacimiento_padre">
                              </div>
                              @error('nacimiento_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la nacionalidad del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="nacionalidad_padre">
                              </div>
                              @error('nacionalidad_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de nacimiento del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="lugar_nacimiento_padre">
                              </div>
                              @error('lugar_nacimiento_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                        </div>
                        <div class="row">
                            <div class="row">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el estado civil del padre</label></strong>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_padre('1')">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Casado(a)
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_padre('2')">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Separado(a)
                                        </label>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_padre('3')">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Soltero(a)
                                        </label>
                                      </div>
                                </div>  
                            </div>
                            <br>
                            
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de DPI del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="DPI_padre">
                              </div>
                              @error('DPI_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de celular del padre</label></strong>
                                <input  type="number" class="form-control"  wire:model="celular_padre">
                              </div>
                              @error('celular_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el número de casa del padre</label></strong>
                                <input  type="number" class="form-control"  wire:model="telefono_padre">
                              </div>
                              @error('telefono_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la dirección de la residencia del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="direccion_residencia">
                              </div>
                              @error('direccion_residencia')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el correo electrónico del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="correo_padre">
                              </div>
                              @error('correo_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                    Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                            <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de trabajo del padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="lugar_profesion_padre">
                              </div>
                              @error('lugar_profesion_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el cargo de trabajo que ocupa el padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="cargo_profesion_padre">
                              </div>
                              @error('cargo_profesion_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la religion que profesa el padre</label></strong>
                                <input  type="text" class="form-control"  wire:model="religion_padre">
                              </div>
                              @error('religion_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="col-md-6">
                                <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el NIT del padre</label></strong>
                                <input  type="number" class="form-control"  wire:model="NIT_padre">
                              </div>
                              @error('NIT_padre')
                              <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                                <div>
                                  Es necesario que llenes este campo para envíar la información
                                </div>
                              </div>
                              @enderror
                              <div class="row">
                                <div class="row">
                                    <strong><label  for="Labelnombrepadre" class="form-label">¿Vive con el padre?</label></strong>
                                    <center>
                                    <div style="width: 12rem;">
                                    <div class="col-md-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="confirmar_vive_padre('1')">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              Si
                                            </label>
                                          </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="confirmar_vive_padre('2')">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                              No
                                            </label>
                                          </div>
                                    </div>
                                </div>
                              </center>
                              </div>
                            </div>
                        </div>
                          
                       
                    </div>
                    </div>
                  </div>
                </div>
              </div> 
              <div wire:ignore.self class="accordion" id="accordionDatosdelamadre">

                <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                  <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOneDatosdelamadre">
                    <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <h4 class="font-weight-bolder">
                            DATOS DE LA MADRE
                          </h4>
                        </button>
                  </h2>
              <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                  <div class="tab">
                    <div class="row">
                        <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese la dirección de la residencia de la madre</label></strong>
                            <input  type="text" class="form-control"  wire:model="direccion_residenciamadre">
                          </div>
                          @error('direccion_residenciamadre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                        <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese el correo electrónico de la madre</label></strong>
                            <input  type="text" class="form-control"  wire:model="correo_madre">
                          </div>
                          @error('correo_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                                Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                        <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese la profesión a la que se decica la madre <label></strong>
                            <input  type="text" class="form-control"  wire:model="profesion_madre">
                          </div>
                          @error('profesion_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror

                    
                    <div class="col-md-6">
                      <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el nombre de la madre</label></strong>
                      <input  type="text" class="form-control"  wire:model="nombre_madre">
                    </div>
                    @error('nombre_madre')
                    <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Es necesario que llenes este campo para envíar la información
                      </div>
                    </div>
                    @enderror
                    <div class="col-md-6">
                      <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la fecha de nacimiento de la madre</label></strong>
                      <input  type="date" class="form-control"  wire:model="fechana_madre">
                    </div>
                    @error('fechana_madre')
                    <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Es necesario que llenes este campo para envíar la información
                      </div>
                    </div>
                    @enderror
                    <div class="col-md-6">
                      <strong><label  for="Labelnombrepadre" class="form-label">Ingrese la nacionalidad de la madre</label></strong>
                      <input  type="text" class="form-control"  wire:model="nacionalidad_madre">
                    </div>
                    @error('nacionalidad_madre')
                    <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Es necesario que llenes este campo para envíar la información
                      </div>
                    </div>
                    @enderror
                    <div class="col-md-6">
                      <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el lugar de nacimiento de la madre</label></strong>
                      <input  type="text" class="form-control"  wire:model="lugar_nacimiento_madre">
                    </div>
                    @error('lugar_nacimiento_madre')
                    <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      <div>
                        Es necesario que llenes este campo para envíar la información
                      </div>
                    </div>
                    @enderror
                    <div class="row">
                      <div class="row">
                          <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el estado civil de la madre</label></strong>
                          <div class="col-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_madre('1')">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Casado(a)
                                  </label>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_madre('2')">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Separado(a)
                                  </label>
                                </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="flexRadioDefault"  wire:click="estado_civil_madre('3')">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                    Soltero(a)
                                  </label>
                                </div>
                          </div>  
                      </div>
                      <br>
                      
                  </div>
                  <br>
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el DPI de la madre</label></strong>
                    <input  type="number" class="form-control"  wire:model="DPI_madre">
                  </div>
                  @error('DPI_madre')
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  @enderror
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el telefono de la madre</label></strong>
                    <input  type="number" class="form-control"  wire:model="telefono_madre">
                  </div>
                  @error('telefono_madre')
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  @enderror
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Ingrese el celular de la madre</label></strong>
                    <input  type="number" class="form-control"  wire:model="celular_madre">
                  </div>
                  @error('celular_madre')
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  @enderror

                  </div>

                          <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese el lugar donde la madre ejerce su profesion <label></strong>
                            <input  type="text" class="form-control"  wire:model="lugar_prof_madre">
                          </div>
                          @error('lugar_prof_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                          <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese cual es el cargo que la madre ocupa en su profesion <label></strong>
                            <input  type="text" class="form-control"  wire:model="cargo_madre">
                          </div>
                          @error('cargo_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                          <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese cual es la religion que la madre profesa<label></strong>
                            <input  type="text" class="form-control"  wire:model="religion_madre">
                          </div>
                          @error('religion_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                          <div class="col-md-6">
                            <strong><label  for="Labelnombremadre" class="form-label">Ingrese el NIT de la madre(por favor no utilice ningun signo solo ingerese numeros)<label></strong>
                            <input  type="number" class="form-control"  wire:model="NIT_madre">
                          </div>
                          @error('NIT_madre')
                          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              Es necesario que llenes este campo para envíar la información
                            </div>
                          </div>
                          @enderror
                                <strong><label  for="Labelnombremadre" class="form-label">¿El alumno vive con la madre?</label></strong>
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check form-check-inline"type="radio" name="flexRadioDefault"  wire:click="vive_con_la_madre('1')">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                          Si
                                        </label>
                                      </div>
                                <div class="col-md">
                                  <div class="form-check">
                                      <input class="form-check form-check-inline" type="radio" name="flexRadioDefault"  wire:click="vive_con_la_madre('2')">
                                      <label class="form-check-label" for="flexRadioDefault1">
                                        No
                                      </label>
                                    </div>
                              </div>
                            <br>                          
                    </div>
                </div>
                </div>
              </div>
            </div>
          </div> 

          <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample2">
            <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
              <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <h4 class="font-weight-bolder">
                        DATOS MEDICOS
                      </h4>
                    </button>
              </h2>
          <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
              <div class="tab">
                <div class="row">
                    desde aqui trabaja
                        <br>                          
                </div>
            </div>
            </div>
          </div>
        </div>
      </div> 


        </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" wire:click='insertar_datos()'>Envíar Información</button>
        </div>
      </div>
    </div>
  </div>

 