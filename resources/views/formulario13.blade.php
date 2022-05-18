<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/form.png') }}" alt="First slide">
    </div>
 </section>

 @if($mensaje!=null)
 <div class="alert alert-success" role="alert">
    Se ha enviado su información
  </div>

 @elseif($mensaje2!=null)
 <div class="alert alert-danger" role="alert">
    Vuelva a intentar luego.
  </div>
 @else
 <div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-3">
            <div class="title">

                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                  </svg>
                  <br>
                  <br>

                <span class="fs-3" style="color:#3a3e7b">Padres de familia nos estamos preparando para el ciclo 2023 y su opinión es importante.</span>
            </div>
            </div>

            

    <form wire:submit.prevent='' style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
    <div class="row">
        <div class="mb-3">
            <option></option>
            <label for="name" style="color: #3a3e7b"><b>¿Qué grado cursará su hijo en el ciclo 2023?</b></label><br>
            <br>
            <div>
                <span></span>
                <div class="row">
                    <div class="col-md">
                      <div class="tab">
                            
                        @error('gradoin') 
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                          
                            <span>Debe de seleccionar</span>
                           </div> @enderror
        
                        <ul class="list-group ">
                          <li class="list-group-item list-group-item-action"  for="flexRadioGrado01">
                            <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="PRE-KÍNDER" aria-label="..." id="flexRadioGrado01">
                            <label class="form-check-label" for="flexRadioGrado01" style="font-size: 15px; color:#000000;">
                            PRE-KÍNDER
                            </label>
                            
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="KINDER" aria-label="..."  id="flexRadioGrado02">
                            <label class="form-check-label" for="flexRadioGrado02" style="font-size: 15px; color:#000000;">
                              KÍNDER
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1" type="radio" wire:model="gradoin" value="PREPARATORIA" aria-label="..."  id="flexRadioGrado03">
                            <label class="form-check-label" for="flexRadioGrado03" style="font-size: 15px; color:#000000;">
                              PREPARATORIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1" type="radio"  wire:model="gradoin"  value="PRIMERO PRIMARIA" aria-label="..."  id="flexRadioGrado1">
                            <label class="form-check-label" for="flexRadioGrado1" style="font-size: 15px; color:#000000;">
                              PRIMERO PRIMARIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1" type="radio"   wire:model="gradoin" value="SEGUNDO PRIMARIA" aria-label="..."  id="flexRadioGrado2">
                            <label class="form-check-label" for="flexRadioGrado2" style="font-size: 15px; color:#000000;">
                              SEGUNDO PRIMARIA
                              </label>
                            
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1" type="radio"  wire:model="gradoin" value="TERCERO PRIMARIA" aria-label="..."  id="flexRadioGrado3">
                            <label class="form-check-label" for="flexRadioGrado3" style="font-size: 15px; color:#000000;">
                              TERCERO PRIMARIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="CUARTO PRIMARIA" aria-label="..."  id="flexRadioGrado4">
                            <label class="form-check-label" for="flexRadioGrado4" style="font-size: 15px; color:#000000;">
                              CUARTO PRIMARIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio"  wire:model="gradoin" value="QUINTO PRIMARIA" aria-label="..."  id="flexRadioGrado5">
                            <label class="form-check-label" for="flexRadioGrado5" style="font-size: 15px; color:#000000;">
                              QUINTO PRIMARIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="SEXTO PRIMARIA" aria-label="..."  id="flexRadioGrado6">
                            <label class="form-check-label" for="flexRadioGrado6" style="font-size: 15px; color:#000000;">
                              SEXTO PRIMARIA
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="SEPTIMO" aria-label="..."  id="flexRadioGrado7">
                            <label class="form-check-label" for="flexRadioGrado7" style="font-size: 15px; color:#000000;">
                              SÉPTIMO
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="OCTAVO" aria-label="..."  id="flexRadioGrado8">
                            <label class="form-check-label" for="flexRadioGrado8" style="font-size: 15px; color:#000000;">
                              OCTAVO
                              </label>
                          
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio" wire:model="gradoin" value="NOVENO" aria-label="..."  id="flexRadioGrado9">
                            <label class="form-check-label" for="flexRadioGrado9" style="font-size: 15px; color:#000000;">
                              NOVENO
                              </label>
                            
                          </li>
                          <li class="list-group-item list-group-item-action">
                            <input class="form-check-input me-1"  type="radio"  wire:model="gradoin" value="BACHILLERATO" aria-label="..."  id="flexRadioGrado10">
                            <label class="form-check-label" for="flexRadioGrado10" style="font-size: 15px; color:#000000;">
                              BACHILLERATO
                              </label>
                          
                          </li>
                        </ul>
                       
                    </div>
                 
                      </div>
                    </div>
            </div>
        </div>
        <div class="mb-3">
            <option></option>
            <label for="lastname" style="color: #3a3e7b">
                <b>¿Cómo prefiere que sus hijos estudien el ciclo escolar 2023?</b></label>
                <br>
                <br>
                <li class="list-group-item list-group-item-action">
                 
                    <input class="form-check-input me-1"  type="radio" wire:model="tipo" value="Presencial" aria-label="..."  id="flexRadioGradopre">
                    <label class="form-check-label" for="flexRadioGradopre" style="font-size: 15px; color:#000000;">
                        Presencial 
                      </label>
                    
                  </li>
                  <li class="list-group-item list-group-item-action">
                    <input class="form-check-input me-1"  type="radio"  wire:model="tipo" value="Virtual" aria-label="..."  id="flexRadioGradvir">
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

        @if($pre!=null && $pre==1)
        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                
                Si las clases fueran presenciales, ¿está anuente a cumplir con las medidas de seguridad y salud de los alumnos colaborando con las normas del colegio?
            </b></label><br>
            <br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="pre_cumplir" value="Si" aria-label="..."  id="si1">
                <label class="form-check-label" for="si1" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="pre_cumplir" value="No" aria-label="..."  id="no1">
                <label class="form-check-label" for="no1" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('pre_cumplir') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>

        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                ¿Está consciente que la responsabilidad de enviar y cumplir con las medidas de seguridad es estrictamente del padre de familia?
            </b></label><br>
            <br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="pre_medidas" value="Si" aria-label="..."  id="si2">
                <label class="form-check-label" for="si2" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="pre_medidas" value="No" aria-label="..."  id="no2">
                <label class="form-check-label" for="no2" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('pre_medidas') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>

        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                ¿Está informado que todos los implementos de protección ante el COVID-19 (mascarilla, careta y gel anti-bacterial) necesarios para el alumno deben proveerlos el padre de familia?

            </b></label><br>
            <br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="pre_imple" value="Si" aria-label="..."  id="si3">
                <label class="form-check-label" for="si3" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="pre_imple" value="No" aria-label="..."  id="no3">
                <label class="form-check-label" for="no3" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('pre_imple') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>

        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                ¿De ser las clases presenciales, necesitaría de bus escolar?
            </b></label><br>
            <br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="pre_bus" value="Si" aria-label="..."  id="si4">
                <label class="form-check-label" for="si4" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="pre_bus" value="No" aria-label="..."  id="no4">
                <label class="form-check-label" for="no4" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('pre_bus') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>

        @if($pre_bus!=null && $pre_bus=="Si")
        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                <br>
                ¿Para que zona o sector necesitaría el servicio de bus escolar? </b></label><br>
            <input class="form-control me-2 input100 rounded-pill" id='email' wire:model="pre_zona"type="text"class="validate"required>
        </div>
        @error('pre_zona') 
        <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          
            <span>Debe de seleccionar</span>
           </div> @enderror
        @endif



        @elseif($pre!=null && $pre==2)
    
        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                <br>
                Si las clases continúan virtuales, ¿Cuénta con el equipo necesario y la conexión de internet adecuada?
            </b></label><br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="virtual_cone" value="Si" aria-label="..."  id="si5">
                <label class="form-check-label" for="si5" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="virtual_cone" value="No" aria-label="..."  id="no5">
                <label class="form-check-label" for="no5" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('virtual_cone') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>
        <div class="mb-3">
            <option></option>
            <label for="email" style="color: #3a3e7b" ><b>
                ¿Está anuente a continuar con el horario de 7:30 a 13:30 Hrs.?
            </b></label><br>
            <br>
             <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio" wire:model="virtual_horario" value="Si" aria-label="..."  id="si6">
                <label class="form-check-label" for="si6" style="font-size: 15px; color:#000000;">
                    Si 
                  </label>
                
              </li>
              <li class="list-group-item list-group-item-action">
                <input class="form-check-input me-1"  type="radio"  wire:model="virtual_horario" value="No" aria-label="..."  id="no7">
                <label class="form-check-label" for="no7" style="font-size: 15px; color:#000000;">
                  No
                  </label>
              
              </li>
              @error('virtual_horario') 
              <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                
                  <span>Debe de seleccionar</span>
                 </div> @enderror
        </div>

        @endif


        
          <div class="mb-3">
            <label for="message" style="color: #3a3e7b" ><b>Observaciones: </b></label><br>
            <br>
            <input class="form-control me-2 input100 rounded-pill" id='usuario' wire:model="observa" type="text" class="validate" required>
        </div>
        <input wire:click="enviar()" class="btn enjoy-css" value="Enviar">
    </div>
 
    </form>
</div>
         </div>
     </div>

     @endif