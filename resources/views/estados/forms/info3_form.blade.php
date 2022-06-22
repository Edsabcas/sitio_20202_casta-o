<!-- Modal -->
<div wire:ignore.self class="modal fade" id="ModalInscripcion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header" style="background:#a4cb39;color:rgb(255, 255, 255)">
        <h5 class="modal-title" id="exampleModalLabel" style="color:#ffffff;"><strong><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </svg>  Datos importantes</strong></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        
      
      <div class="modal-body">
          <!-- FORM DENTRO DE LA MODAL -->
          <h2 class="card-title" style="color:#3a3e7b;" >
              Ingrese la siguiente información para continuar con su proceso de inscripción</h2>
            <form action="" wire:submit.prevent='' enctype="multipart/form-data" method="POST">
             <div wire:ignore.self class="accordion" id="accordionDatosVarios">
              <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosvarios">
                  <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-datosvarios" aria-expanded="false" aria-controls="panelsStayOpen-datosvarios">
                      <h4 class="font-weight-bolder">
                          DATOS VARIOS
                        </h4>
                      </button>
                </h2>
                
                <div  wire:ignore.self id="panelsStayOpen-datosvarios" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                  <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                    <div class="tab">
                      <strong><label for="exampleInputPassword1" class="form-label">¿Tiene hermanos en colegio?</label></strong>
                      <center>
                      <div style="width: 12rem;">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" Wire.model="hermano" id="hermano1" wire:click="confirmar_hermano('1')">
                          <label class="form-check-label" for="hermano1">
                            Si
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" Wire.model="hermano" id="hermano2" wire:click="confirmar_hermano('0')">
                          <label class="form-check-label" for="hermano1">
                            No
                          </label>
                        </div>
                      </div>
                  </center>
                        @if($confi==1)
                      @error('confirmar_hermano') 
                      <div class="col-md-6">
                      <div class="alert alert-danger d-flex align-items-center" role="alert">
                        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                        
                          <span>Debe seleccionar un grado</span>
                         </div> 
                         </div>
                         @enderror
                      
                        <div class="mb-3">
                          <label for="" class="form-label" style="font-size:20px; color: #3a3e7b"><strong>• Seleccione el grado </strong></label>
                          <select class="form-select rounded-pill shadow-sm rounded" wire:model="idgrado" wire:click='insertar_grados_hermanos()'  style="border-radius: 70px 70px 70px 70px; border-color: #a4cb39" aria-label="Default select example" >
                            <option selected >Elige el grado </option>
                            @isset($grados)
                            @foreach($grados as $grado)
                          <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}"</option> 
                            @endforeach
                            @endisset
                  
                          </select>
                        </div>
                      <br>
                      <h5>Grados selecionados: {{$grados_mostrar}}</h5>
                      @endif  
                        
                      <br>
                      <div class="row">
                          <div class="col-md-6">
                              <strong><label  for="labelañoingreso" class="form-label">Coloque el año de primer ingreso</label></strong>
                              <input  type="number" class="form-control"  wire:model="año_ingreso">
                            </div>
                            
                            <div class="col-md-6">
                              <strong><label for="exampleInputPassword1" class="form-label" >Coloque el grado de primer ingreso</label></strong>
                              <select class="form-select" aria-label="Default select example" wire:model="grado_primer_ingreso">
                                <option selected >Elige el grado de primer ingreso</option>
                                @foreach($grados as $grado)
                                <option value="{{$grado->ID_GR}}">{{$grado->GRADO}}</option>
                                @endforeach
                              </select>
                            </div>
                            @error('año_ingreso')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('grado_primer_ingreso')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                      </div>
                      
                     
                  </div>
                  </div>
                </div>
              </div>
            </div> 
            <br>
            <div wire:ignore.self class="accordion" id="accordionDatosdelpadre">
              <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatospadre">
                  <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-padre" aria-expanded="false" aria-controls="panelsStayOpen-padre">
                      <h4 class="font-weight-bolder">
                          DATOS DEL PADRE
                        </h4>
                      </button>
                </h2>
                
                <div  wire:ignore.self id="panelsStayOpen-padre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                  <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                    <div class="tab">
                      <div class="row">
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Nombres y Apellidos</label></strong>
                              <input  type="text" class="form-control"  wire:model="nombre_padre">
                            </div>
                            
                            <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Fecha de nacimiento</label></strong>
                              <input  type="date" class="form-control"  wire:model="nacimiento_padre">
                            </div>
                            @error('nombre_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('nacimiento_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror    
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Nacionalidad</label></strong>
                              <input  type="text" class="form-control"  wire:model="nacionalidad_padre">
                            </div>
                            
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Lugar de nacimiento</label></strong>
                              <input  type="text" class="form-control"  wire:model="lugar_nacimiento_padre">
                            </div>
                            @error('nacionalidad_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('lugar_nacimiento_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                      </div>
                      <div class="row">
                          <div class="row">
                              <strong><label  for="Labelnombrepadre" class="form-label">Estado civil</label></strong>
                              <div class="col-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_padre('1')">
                                      <label class="form-check-label" for="estadocivilp1">
                                        Casado(a)
                                      </label>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_padre('2')">
                                      <label class="form-check-label" for="estadocivilp1">
                                        Separado(a)
                                      </label>
                                    </div>
                              </div>
                              <div class="col-md-4">
                                  <div class="form-check">
                                      <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_padre('3')">
                                      <label class="form-check-label" for="estadocivilp1">
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
                              <strong><label  for="Labelnombrepadre" class="form-label">Número de DPI</label></strong>
                              <input  type="number" class="form-control"  wire:model="DPI_padre">
                            </div>
                            
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Número de celular</label></strong>
                              <input  type="number" class="form-control"  wire:model="celular_padre">
                            </div>

                            @error('DPI_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('celular_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Número de casa</label></strong>
                              <input  type="number" class="form-control"  wire:model="telefono_padre">
                            </div>
                           
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Dirección de la residencia</label></strong>
                              <input  type="text" class="form-control"  wire:model="direccion_residencia">
                            </div>
                            @error('telefono_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('direccion_residencia')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                      </div>
                      <div class="row">
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Correo electrónico</label></strong>
                              <input  type="text" class="form-control"  wire:model="correo_padre">
                            </div>
                            
                            <div class="col-md-6">
                              <strong><label  for="Labelprofesionpadre" class="form-label">Profesión</label></strong>
                              <input  type="text" class="form-control"  wire:model="profesion_padre">
                            </div>
                            @error('correo_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                  Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('profesion_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                          <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Lugar de trabajo</label></strong>
                              <input  type="text" class="form-control"  wire:model="lugar_profesion_padre">
                            </div>
                            
                            <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Cargo de trabajo que ocupa</label></strong>
                              <input  type="text" class="form-control"  wire:model="cargo_profesion_padre">
                            </div>

                            @error('lugar_profesion_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('cargo_profesion_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">Religión que profesa</label></strong>
                              <input  type="text" class="form-control"  wire:model="religion_padre">
                            </div>
                            
                            <div class="col-md-6">
                              <strong><label  for="Labelnombrepadre" class="form-label">NIT (no utilice guion)</label></strong>
                              <input  type="number" class="form-control"  wire:model="NIT_padre">
                            </div>

                            @error('religion_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            @error('NIT_padre')
                            <div class="col-md-6">
                            <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                              <div>
                                Es necesario que llenes este campo para envíar la información
                              </div>
                            </div>
                            </div>
                            @enderror
                            <div class="row">
                              <div class="row">
                                  <strong><label  for="Labelnombrepadre" class="form-label">¿El alumno vive con el padre?</label></strong>
                                  <center>
                                  <div style="width: 12rem;">
                                  <div class="col-md-7">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" Wire.model="vivepadre"  wire:click="confirmar_vive_padre('1')">
                                        <label class="form-check-label" for="vivepadre1">
                                            Si
                                          </label>
                                        </div>
                                  </div>
                                  <div class="col-md-7">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" Wire.model="vivepadre"  wire:click="confirmar_vive_padre('2')">
                                        <label class="form-check-label" for="vivepadre1">
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
                <br>
                 
            <div wire:ignore.self class="accordion" id="accordionDatosdelamadre">

              <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
                <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOneDatosdelamadre">
                  <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-madre" aria-expanded="false" aria-controls="panelsStayOpen-madre">
                      <h4 class="font-weight-bolder">
                          DATOS DE LA MADRE
                        </h4>
                      </button>
                </h2>
            <div  wire:ignore.self id="panelsStayOpen-madre" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
              <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
                <div class="tab">
                  <div class="row">
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Nombres y Apellidos</label></strong>
                    <input  type="text" class="form-control"  wire:model="nombre_madre">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Fecha de nacimiento</label></strong>
                    <input  type="date" class="form-control"  wire:model="fechana_madre">
                  </div>

                  @error('nombre_madre')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror

                  @error('fechana_madre')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Nacionalidad</label></strong>
                    <input  type="text" class="form-control"  wire:model="nacionalidad_madre">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelnombrepadre" class="form-label">Lugar de nacimiento</label></strong>
                    <input  type="text" class="form-control"  wire:model="lugar_nacimiento_madre">
                  </div>

                  @error('nacionalidad_madre')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror

                  @error('lugar_nacimiento_madre')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  <div class="row">
                    <div class="row">
                        <strong><label  for="Labelnombrepadre" class="form-label">Estado civil</label></strong>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilm"  wire:click="estado_civil_madre('1')">
                                <label class="form-check-label" for="estadocivilm1">
                                  Casado(a)
                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilm"  wire:click="estado_civil_madre('2')">
                                <label class="form-check-label" for="estadocivilm1">
                                  Separado(a)
                                </label>
                              </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" Wire.model="estadocivilm"  wire:click="estado_civil_madre('3')">
                                <label class="form-check-label" for="estadocivilm1">
                                  Soltero(a)
                                </label>
                              </div>
                        </div>  
                    </div>
                    <br>
                    
                </div>
                <br>
                <br>
                <div class="col-md-6">
                  <strong><label  for="Labelnombrepadre" class="form-label">Número de DPI </label></strong>
                  <input  type="number" class="form-control"  wire:model="DPI_madre">
                </div>
                
                <div class="col-md-6">
                  <strong><label  for="Labelnombrepadre" class="form-label">Número de teléfono</label></strong>
                  <input  type="number" class="form-control"  wire:model="telefono_madre">
                </div>

                @error('DPI_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror

                @error('telefono_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror
                <div class="col-md-6">
                  <strong><label  for="Labelnombrepadre" class="form-label">Número de celular</label></strong>
                  <input  type="number" class="form-control"  wire:model="celular_madre">
                </div>


                <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Dirección de la residencia</label></strong>
                  <input  type="text" class="form-control"  wire:model="direccion_residenciamadre">
                </div>

                @error('celular_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror


                @error('direccion_residenciamadre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                      Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror
              <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Correo electrónico</label></strong>
                  <input  type="text" class="form-control"  wire:model="correo_madre">
                </div>
                
              <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Profesión a la que se decica<label></strong>
                  <input  type="text" class="form-control"  wire:model="profesion_madre">
                </div>

                @error('correo_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                      Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror

                @error('profesion_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror

                <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Lugar de trabajo<label></strong>
                  <input  type="text" class="form-control"  wire:model="lugar_prof_madre">
                </div>
                
                <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Cargo ocupa en su profesión <label></strong>
                  <input  type="text" class="form-control"  wire:model="cargo_madre">
                </div>
                @error('lugar_prof_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror
                
                @error('cargo_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror

                <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">Religión que profesa<label></strong>
                  <input  type="text" class="form-control"  wire:model="religion_madre">
                </div>
                
                <div class="col-md-6">
                  <strong><label  for="Labelnombremadre" class="form-label">NIT (no utilice gion)<label></strong>
                  <input  type="number" class="form-control"  wire:model="NIT_madre">
                </div>
                @error('religion_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror

                @error('NIT_madre')
                <div class="col-md-6">
                <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Es necesario que llenes este campo para envíar la información
                  </div>
                </div>
                </div>
                @enderror
                <div class="row">
                  <div class="row">
                      <strong><label  for="Labelnombremadre" class="form-label">¿El alumno vive con la madre?</label></strong>
                      <center>
                      <div style="width: 12rem;">
                      <div class="col-md-7">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="vivemadre"  wire:click="vive_con_la_madre('1')">
                              <label class="form-check-label" for="vivemadre1">
                                Si
                              </label>
                            </div>
                      </div>
                      <div class="col-md-7">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="vivemadre"  wire:click="vive_con_la_madre('2')">
                              <label class="form-check-label" for="vivemadre1">
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
   <br>
   <div wire:ignore.self class="accordion" id="accordionDatosdelencargado">
    <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
      <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosencargado">
        <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-encargado" aria-expanded="false" aria-controls="panelsStayOpen-encargado">
            <h4 class="font-weight-bolder">
                DATOS DEL ENCARGADO
              </h4>
            </button>
      </h2>
      
      <div  wire:ignore.self id="panelsStayOpen-encargado" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
        <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
          <div class="tab">
            <div class="row">
              <div class="row">
                  <strong><label  for="Labelnombrepadre" class="form-label">¿Quien es el encargado?</label></strong>
                  <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" Wire.model="quien_encargado"  wire:click="quien_encargado('1')">
                          <label class="form-check-label" for="qencargado1">
                            La madre
                          </label>
                        </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" Wire.model="quien_encargado"  wire:click="quien_encargado('2')">
                          <label class="form-check-label" for="qencargado1">
                            El Padre      
                          </label>
                        </div>
                  </div>
                  <div class="col-md-4">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" Wire.model="qencargado"  wire:click="quien_encargado('3')">
                          <label class="form-check-label" for="qencargado1">
                            Otro encargado
                          </label>
                        </div>
                  </div>  
              </div>
              <br>
              
          </div>
          @if($quien_encargado1==3)
            <div class="row">
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Nombre completo</label></strong>
                    <input  type="text" class="form-control"  wire:model="nombre_encargado">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Fecha de nacimiento</label></strong>
                    <input  type="date" class="form-control"  wire:model="nacimiento_encargado">
                  </div>
                  @error('nombre_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('nacimiento_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror    
            </div>
            <div class="row">
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Nacionalidad</label></strong>
                    <input  type="text" class="form-control"  wire:model="nacionalidad_encargado">
                  </div>
                  
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Lugar de nacimiento</label></strong>
                    <input  type="text" class="form-control"  wire:model="lugar_nacimiento_encargado">
                  </div>
                  @error('nacionalidad_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('lugar_nacimiento_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
            </div>
            <div class="row">
                <div class="row">
                    <strong><label  for="Labelnombreencargado" class="form-label">Estado civil</label></strong>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_encargado('1')">
                            <label class="form-check-label" for="estadocivilp1">
                              Casado(a)
                            </label>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_encargado('2')">
                            <label class="form-check-label" for="estadocivilp1">
                              Separado(a)
                            </label>
                          </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" Wire.model="estadocivilp"  wire:click="estado_civil_encargado('3')">
                            <label class="form-check-label" for="estadocivilp1">
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
                    <strong><label  for="Labelnombreencargado" class="form-label">Número de DPI</label></strong>
                    <input  type="number" class="form-control"  wire:model="DPI_encargado">
                  </div>
  
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Número de celular</label></strong>
                    <input  type="number" class="form-control"  wire:model="celular_encargado">
                  </div>

                  @error('DPI_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div> 
                  @enderror
                  @error('celular_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Número de casa</label></strong>
                    <input  type="number" class="form-control"  wire:model="telefono_encargado">
                  </div>
             
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Dirección de la residencia</label></strong>
                    <input  type="text" class="form-control"  wire:model="direccion_residencia_encargado">
                  </div>
                  @error('telefono_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('direccion_residencia_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Correo electrónico</label></strong>
                    <input  type="text" class="form-control"  wire:model="correo_encargado">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelprofesionencargado" class="form-label">Profesión</label></strong>
                    <input  type="text" class="form-control"  wire:model="profesion_encargado">
                  </div>
                  @error('correo_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                        Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('profesion_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Lugar de trabajo</label></strong>
                    <input  type="text" class="form-control"  wire:model="lugar_profesion_encargado">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Cargo de trabajo que ocupa</label></strong>
                    <input  type="text" class="form-control"  wire:model="cargo_profesion_encargado">
                  </div>

                  @error('lugar_profesion_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('cargo_profesion_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">Religión que profesa</label></strong>
                    <input  type="text" class="form-control"  wire:model="religion_encargado">
                  </div>
                  
                  <div class="col-md-6">
                    <strong><label  for="Labelnombreencargado" class="form-label">NIT (no utilice guion)</label></strong>
                    <input  type="number" class="form-control"  wire:model="NIT_encargado">

                  @error('religion_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                  @error('NIT_encargado')
                  <div class="col-md-6">
                  <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                      Es necesario que llenes este campo para envíar la información
                    </div>
                  </div>
                  </div>
                  @enderror
                </div>
                  <center>
                    <div class="col-md-6">
                   <strong><label  for="Labelnombreencargado" class="form-label">¿Que relacion tiene el encargado con el alumno?</label></strong>
                   <input  type="text" class="form-control"  wire:model="Especifique_rel">
                   </div>
                   </center>
                  <center>
                  <div class="row">
                      <strong><label  for="Labelnombreencargado" class="form-label">¿El alumno vive con el encargado?</label></strong>
                      <center>
                        <div style="width: 12rem;">
                      <div class="col-md-7">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="vive_con_el_encargado"  wire:click="vive_con_el_encargado('1')">
                              <label class="form-check-label" for="viveen1">
                                Si
                              </label>
                            </div>
                      </div>
                      <div class="col-md-7">
                          <div class="form-check">
                              <input class="form-check-input" type="radio" Wire.model="viveen"  wire:click="vive_con_el_encargado('2')">
                              <label class="form-check-label" for="viveen1">
                                No
                              </label>
                            </div>
                      </div>
                  </div>
                      </center>
                      
                </div>
              </center>
                @endif
          </div>
        </div>   
        </div>
      </div>
      </div>
   <br>

<div wire:ignore.self class="accordion" id="accordiondatosmedicos">
  <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
    <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatosmedicos  ">
      <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-medicos" aria-expanded="false" aria-controls="panelsStayOpen-medicos">
        <h4 class="font-weight-bolder">
          DATOS MÉDICOS
        </h4>
      </button>
    </h2>
          
    <div wire:ignore.self id="panelsStayOpen-medicos" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
    <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
              <div class="tab">
                <div class="row">
                <strong><label for="exampleInputPassword1" class="form-label">¿El alumno tiene alguna enfermedad o alergia?</label></strong>
                <center>
                <div style="width: 12rem;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" Wire.model="alergia" id="alergia1" wire:click="tiene_alergia('1')">
                    <label class="form-check-label" for="alergia1">
                      Si
                    </label>
                </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" Wire.model="alergia" id="alergia2" wire:click="tiene_alergia('0')">
                    <label class="form-check-label" for="alergia1">
                      No
                    </label>
                  </div>
                </div>
            </center>
            @if($tiene_alergia==1)
           <center>
          <div class="col-md-6">
           <strong><label  for="Labelnombreaseguradora" class="form-label">Especifique cuales</label></strong>
           <input  type="text" class="form-control"  wire:model="Especifique_alerg">
          </div>
           </center>
            @endif
           
            </div>
          </div>
              
          <div class="tab">
            <div class="row">
            <strong><label for="exampleInputPassword1" class="form-label">¿El alumno es alérgico a un medicamento?</label></strong>
            <center>
            <div style="width: 12rem;">
            <div class="form-check">
                <input class="form-check-input" type="radio" Wire.model="medicamento" id="medicamento1" wire:click="medicamento('1')">
                <label class="form-check-label" for="medicamento1">
                  Si
                </label>
            </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" Wire.model="medicamento" id="medicamento2" wire:click="medicamento('0')">
                <label class="form-check-label" for="medicamento1">
                  No
                </label>
              </div>
            </div>
        </center>
        @if($medicamento==1)
       <center>
      <div class="col-md-6">
       <strong><label  for="labelmedicamento" class="form-label">Especifique cuales</label></strong>
       <input  type="text" class="form-control"  wire:model="Especifique_medi">
      </div>
       </center>
        @endif
        </div>
      </div>
    
      <div class="tab">
        <div class="row">
        <strong><label for="exampleInputPassword1" class="form-label">¿El alumno es alérgico a un alimento?</label></strong>
        <center>
        <div style="width: 12rem;">
        <div class="form-check">
            <input class="form-check-input" type="radio" Wire.model="alimento" id="alimento1" wire:click="alimento('1')">
            <label class="form-check-label" for="alimento1">
              Si
            </label>
        </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" Wire.model="alimento" id="alimento2" wire:click="alimento('0')">
            <label class="form-check-label" for="alimento1">
              No
            </label>
          </div>
        </div>
        </center>
         @if($alimento==1)
        <center>
       <div class="col-md-6">
      <strong><label  for="labelalimento" class="form-label">Especifique cuales</label></strong>
      <input  type="text" class="form-control"  wire:model="Especifique_ali">
      </div>
      </center>
      @endif
     </div>
    </div>

        <div class="tab">
          <strong><label for="exampleInputPassword1" class="form-label">¿El alumno tiene todas las vacunas?</label></strong>
            <center>
              <div style="width: 12rem;">
                <div class="form-check">
                  <input class="form-check-input" type="radio" Wire.model="vacunas" id="vacunas1" wire:click="vacunas('1')">
                    <label class="form-check-label" for="vacunas1">
                      Si
                    </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" Wire.model="vacunas" id="vacunas2" wire:click="vacunas('0')">
                    <label class="form-check-label" for="vacunas1">
                      No
                    </label>
                  </div>
              </div>
            </center>
        </div>
          
    
        <div class="tab">
          <strong><label for="exampleInputPassword1" class="form-label">¿El alumno esta asegurado?</label></strong>
            <center>
              <div style="width: 12rem;">
                <div class="form-check">
                  <input class="form-check-input" type="radio" Wire.model="alumnoasegurado" id="alumnoasegurado1" wire:click="alumno_asegurado('1')">
                    <label class="form-check-label" for="alumnoasegurado1">
                      Si
                    </label>
                </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" Wire.model="alumnoasegurado" id="alumnoasegurado2" wire:click="alumno_asegurado('0')">
                  <label class="form-check-label" for="alumnoasegurado1">
                    No
                  </label>
              </div>
              </div>
              </center>
                @if($alumno_asegurado==1)
              <center>
                <div class="col-md-6">
                  <strong><label  for="Labelnombreaseguradora" class="form-label">Nombre de la aseguradora</label></strong>
                    <input  type="text" class="form-control"  wire:model="nombre_aseguradora">
                </div>
              </center>
                @endif

        </div>

            
    <div class="row">
      <div class="col-md-6">
        <strong><label  for="Labelpoliza" class="form-label">Póliza de seguro</label></strong>
          <input  type="text" class="form-control"  wire:model="poliza">
      </div>
      
                
      <div class="col-md-6">
          <strong><label  for="Labelcarneseguro" class="form-label">Número del carné de seguro</label></strong>
            <input  type="number" class="form-control"  wire:model="carne_seguro">
      </div>

      @error('poliza')
          <div class="col-md-6">
          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
             <div>
               Es necesario que llenes este campo para envíar la información
             </div>
          </div>
          </div>
        @enderror
      @error('carne_seguro')
          <div class="col-md-6">
          <div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
             <div>
               Es necesario que llenes este campo para envíar la información
             </div>
          </div>
          </div>
        @enderror
                
    </div>
  </div>
 </div>
</div>
</div>

<br>

<div wire:ignore.self class="accordion" id="accordionDatossalida"> 
  <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
      <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOnedatossalida">
        <button class="accordion-button collapsed" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-salida" aria-expanded="false" aria-controls="panelsStayOpen-salida">
          <h4 class="font-weight-bolder">
          DATOS DE SALIDA
          </h4>
        </button>
      </h2>

      <div  wire:ignore.self id="panelsStayOpen-salida" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
        <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
          <div class="tab">
            <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira solo?</label></strong>
              <center>
          <div style="width: 12rem;">
          <div class="form-check">
            <input class="form-check-input" type="radio" Wire.model="solo" id="solo1" wire:click="solo_alumno('1')">
              <label class="form-check-label" for="solo1">
               Si
              </label>
          </div>
          <div class="form-check">
          <input class="form-check-input" type="radio" Wire.model="solo" id="solo2" wire:click="solo_alumno('2')">
            <label class="form-check-label" for="solo1">
              No
            </label>
          </div>
          </center>
        </div>

    @if($solo_alumno==2)
          <div class="tab">
            <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira con un encargado?</label></strong>
            <center>
            <div style="width: 12rem;">
            <div class="form-check">
                <input class="form-check-input" type="radio" Wire.model="encargado" id="encargado1" wire:click="encargado_alumno('1')">
                <label class="form-check-label" for="encargado1">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" Wire.model="encargado" id="encargado2" wire:click="encargado_alumno('2')">
                <label class="form-check-label" for="encargado1">
                  No
                </label>
              </div>
            </div>
         </center>
         @if($encargado_alumno==1)
         <center>
        <div class="col-md-6">
          <strong><label  for="Labelnombrepadre" class="form-label">Nombre del encargado</label></strong>
          <input  type="text" class="form-control"  wire:model="nombre_encargado">
        </div>
       </center>
        @endif
        
        
        </div>

        @if($encargado_alumno==2)
        <div class="tab">
          <strong><label for="exampleInputPassword1" class="form-label">¿El alumno se retira en bus del colegio?</label></strong>
          <center>
          <div style="width: 12rem;">
          <div class="form-check">
              <input class="form-check-input" type="radio" Wire.model="buscolegio" id="buscolegio1" wire:click="bus_colegio('1')">
              <label class="form-check-label" for="buscolegio1">
                Si
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" Wire.model="buscolegio" id="buscolegio2" wire:click="bus_colegio('2')">
              <label class="form-check-label" for="buscolegio1">
                No
              </label>
            </div>
          </div>
      </center>
      </div>

      @if($bus_colegio==2)
      <center>
        <div class="col-md-6">
          <strong><label  for="Labelnombrepadre" class="form-label">Número de la matrícula del bus ajeno al Colegio</label></strong>
          <input  type="text" class="form-control"  wire:model="matricula_bus_aj">
        </div>
       </center>
      @endif
    @endif
    @endif
      </div>
      </div>
</div>

</div>

<br>

@if($validar_info==1)
<div class="alert alert-success d-flex align-items-center rounded-pill" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    Información enviada con éxito 
  </div>
</div>
@endif

@if($validacionv==2)
<div class="alert alert-danger d-flex align-items-center rounded-pill" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    Revisar, hay algunos campos vacíos 
  </div>
</div>
@endif

    </form>
    <div class="modal-footer">
      <button type="button" class="btn btn-pre2" wire:click='validar_datos()'>Validar Información</button>.
      @if($quien_encargado1==1)
         @if($validacionv==1)
       <button type="button" class="btn btn-pre2" wire:click='insertar_datos()' data-bs-dismiss="modal">Envíar Información</button>.
         @endif
      @endif

      @if($quien_encargado1==2)
         @if($validacionv==1)
          <button type="button" class="btn btn-pre2" wire:click='insertar_datos2()' data-bs-dismiss="modal">Envíar Información</button>.
          @endif
      @endif

      @if($quien_encargado1==3)
         @if($validacionv==1)
          <button type="button" class="btn btn-pre2" wire:click='insertar_datos3()' data-bs-dismiss="modal">Envíar Información</button>.
          @endif
      @endif
      
      </div>
    </div>
  </div>
  </div>
</div>
</div>