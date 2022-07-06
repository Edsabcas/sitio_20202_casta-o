

<!-- Modal -->
<div wire:ignore.self id="valinfo" style="border-radius: 60px 60px 60px 60px;" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="valinfo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content" style="border:4px solid #a4cb39">
        <div class="modal-header"  style="background:#a4cb39;color:rgba(255, 255, 255, 255.255)">
          <h1 class="modal-title text-center"  style="color:#ffffff;" id="staticBackdropLabel1"><strong>Verifique la información ingresada</strong></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-touch="false" data-bs-interval="false" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <div class="card text-dark mb-10 shadow p-3 mb-5 bg-body rounded" style="border:2px solid #d6e7a6" style="max-width: 50rem;">
                  <h4 class="card-header text-center text-light" style="background-color: #a4cb39"><strong>Grado de Inscripción</strong></h4>
                  <div class="card-body" style="border-radius: 60px 60px 60px 60px;">
                    <div class="table table-striped table-hover table-responsive" style="border-radius: 60px 60px 60px 60px;">
                      <table class="table text-center">
                        <thead></thead>
                        <tbody>
                          <tr>
                            <td>Grado:</td>
                            <th>
                              <b>{{$gradose}}</b>
                            </th>
                          </tr>
                          <td>Modalidad de estudio:</td>
                          <th>
                            <b>{{$tipo}}</b>
                          </th>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                    
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card text-dark mb-10 shadow p-3 mb-5 bg-body rounded" style="border:2px solid #d6e7a6" style="max-width: 50rem;">
                  <h4 class="card-header text-center text-light" style="background-color: #a4cb39"><b>Datos Estudiante</b></h4>
                  <div class="card-body">
                    <div class="card-title text-center fst-italic fw-bold">Valide que la información esté correcta.</div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          
                        </thead>
                        <tbody>
                          <th></th>
                          <th></th>
                          
                          <tr>
                            <td>Nombre:</td>
                            <td>
                              <b>{{$nombre_es}}</b>
                            </td>
                          </tr>
                            <tr>
                              <td>Fecha de Nacimiento:</td>
                              <td>
                                <b>{{$f_nacimiento_es}} </b> 
                              </td>
                            </tr>
                            <tr>
                              <td>Género:</td>
                              <td> <b>  {{$genero}}</b> </td>
                            </tr>
                            <tr>
                              <td>CUI:</td>
                              <td><b>{{$cui_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Código Estudiante (Mineduc):</td>
                              <td><b>{{$codigo_pe_es}}</b> </td>
                            </tr>
                            <tr>
                              <td>Nacionalidad:</td>
                              <td><b>{{$nac_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Lugar De Nacimiento:</td>
                              <td><b>{{$lug_nac_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Celular:</td>
                              <td><b>{{$cel_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Dirección:</td>
                              <td><b>{{$direccion_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Religión:</td>
                              <td><b>{{$religion_es}} </b></td>
                            </tr>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card text-dark mb-10 shadow p-3 mb-5 bg-body rounded" style="border:2px solid #d6e7a6" style="max-width: 50rem;">
                  <h4 class="card-header text-center text-light" style="background-color: #a4cb39"><b>Datos Encargado</b></h4>
                  <div class="card-body">
                    <div class="card-title text-center fst-italic fw-bold">Valide que la información esté correcta.</div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          
                        </thead>
                        <tbody>
                          <th></th>
                          <th></th>
                          
                          <tr>
                            <td>Nombre Completo:</td>
                            <td>
                              <b>{{$nombre_en}}</b>
                            </td>
                          </tr>
                            <tr>
                              <td>Fecha Nacimiento:</td>
                              <td>
                                <b>{{$fnacimiento_en}}</b> 
                              </td>
                            </tr>
                            <tr>
                              <td>DPI:</td>
                              <td><b>{{$dpi_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Extendido en:</td>
                              <td><b>{{$extentido_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Estado Civil:</td>
                              <td><b>{{$es_civil_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Profesión:</td>
                              <td><b>{{$profesion_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Dirección de residencia:</td>
                              <td><b>{{$direccion_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Tel. Casa:</td>
                              <td><b>{{$tel_casa_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Celular:</td>
                              <td><b>{{$cel_en}}</b></td>
                            </tr>
                            <tr>
                              <td>Correo Electrónico:</td>
                              <td><b>{{$correo_en}} </b></td>
                            </tr>
                            <tr>
                              <td>2do. Correo Electrónico (opcional):</td>
                              <td><b>{{$correo_en2}} </b></td>
                            </tr>
                            <tr>
                              <td>Religión:</td>
                              <td><b>{{$religion_en}}</b></td>
                            </tr>
                      </table>
                    </div>
  
                    <div class="row g-3">
                      <button id="valpedido" data-bs-dismiss="modal" style="border-radius: 60px 60px 60px 60px;" class="btn btn-pre">Enviar Información</button>
                    </div>
  
                   </div>
                </div>
              </div>
            </div>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="modal-footer">
  
          <button type="button" class="btn btn-secondary" style="border-radius: 60px 60px 60px 60px;" data-bs-dismiss="modal">Regresar</button>
          
        </div>
      </div>
    </div>
  </div>
  <style>
    .carousel-control-prev-icon, .carousel-control-next-icon {
    filter: invert(108%);
  }
  </style>