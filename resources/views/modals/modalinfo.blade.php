

<!-- Modal -->
<div wire:ignore.self id="valinfo" class="modal fade" role="dialog" tabindex="-1" aria-labelledby="valinfo" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center" id="staticBackdropLabel1">Validar Datos</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="carouselExampleInterval" class="carousel slide" data-bs-touch="false" data-bs-interval="false" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" >
                <div class="card text-dark bg-light mb-10" style="max-width: 50rem;">
                  <div class="card-header text-center">Grado de Pre-inscripción: </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table text-center">
                        <thead>
                          
                        </thead>
                        <tbody>
                          <th>Grado:</th>
                          <th>
                            <b>{{$gradoin}}</b>
                          </th>
                        </tbody>
                      </table>
                    </div>
                    
                    </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card text-dark bg-light mb-10" style="max-width: 50rem;">
                  <div class="card-header text-center"> <b>Datos Estudiante</b> </div>
                  <div class="card-body">
                    <h5 class="card-title text-center">Validar información</h5>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          
                        </thead>
                        <tbody>
                          <th></th>
                          <th></th>
                          
                          <tr>
                            <td>
                              Nombre: 
                            </td>
                            <td>
                              <b> {{$nombre_es}}</b>
                            </td>
                          </tr>
                            <tr>
                              <td>
                                Fecha Nacimiento:
                              </td>
                              <td>
                                <b>{{$f_nacimiento_es}} </b> 
                              </td>
                            </tr>
                            <tr>
                              <td> Genero:</td>
                              <td> <b>  {{$genero}}</b> </td>
                            </tr>
                            <tr>
                              <td>CUI:</td>
                              <td> <b>{{$cui_es}}</b> </td>
                            </tr>
                            <tr>
                              <td>Codigo Estudiante (Mineduc):</td>
                              <td><b>{{$codigo_pe_es}}</b> </td>
                            </tr>
                            <tr>
                              <td>  Nacionalidad:</td>
                              <td> <b>{{$nac_es}} </b> </td>
                            </tr>
                            <tr>
                              <td>Lugar De Nacimiento: </td>
                              <td> <b>{{$lug_nac_es}}</b></td>
                            </tr>
                            <tr>
                              <td>Celular:</td>
                              <td> <b>{{$cel_es}}</b> </td>
                            </tr>
                            <tr>
                              <td>Direccion:</td>
                              <td>   <b>{{$direccion_es}}  </b></td>
                            </tr>
                            <tr>
                              <td>  Religion: </td>
                              <td><b>{{$religion_es}} </b></td>
                            </tr>
                      </table>
                    </div>
                   
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="card text-dark bg-light mb-10" style="max-width: 50rem;">
                  <div class="card-header text-center"> <b>Datos Encargado</b></div>
                  <div class="card-body">
                    <h5 class="card-title text-center">Validar información</h5>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          
                        </thead>
                        <tbody>
                          <th></th>
                          <th></th>
                          
                          <tr>
                            <td>
                              Nombre Completo: 
                            </td>
                            <td>
                              <b> {{$nombre_en}}</b>
                            </td>
                          </tr>
                            <tr>
                              <td>
                                Fecha Nacimiento:
                              </td>
                              <td>
                                <b>{{$fnacimiento_en}} </b> 
                              </td>
                            </tr>
                            <tr>
                              <td> DPI:</td>
                              <td> <b>  {{$dpi_en}}</b> </td>
                            </tr>
                            <tr>
                              <td>Extendido en:</td>
                              <td> <b>{{$extentido_en}}</b> </td>
                            </tr>
                            <tr>
                              <td>Estado Civil:</td>
                              <td><b>{{$es_civil_en}}</b> </td>
                            </tr>
                            <tr>
                              <td>Direccion de residencia:</td>
                              <td> <b>{{$direccion_en}} </b> </td>
                            </tr>
                            <tr>
                              <td>Tel. Casa:</td>
                              <td> <b>{{$tel_casa_en}}</b> </td>
                            </tr>
                            <tr>
                              <td>Celular:</td>
                              <td>   <b>{{$cel_en}}  </b></td>
                            </tr>
                            <tr>
                              <td>Correo Electronico: </td>
                              <td><b>{{$correo_en}} </b></td>
                            </tr>
                            <tr>
                              <td>Religión: </td>
                              <td><b>{{$religion_en}} </b></td>
                            </tr>
                      </table>
                    </div>
  
                    <div class="row g-3">
                      <button id="valpedido" data-bs-dismiss="modal" class="btn btn-warning">Enviar Información</button>
                    </div>
  
                   </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="modal-footer">
  
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
          
        </div>
      </div>
    </div>
  </div>
  <style>
    .carousel-control-prev-icon, .carousel-control-next-icon {
    filter: invert(108%);
  }
  </style>