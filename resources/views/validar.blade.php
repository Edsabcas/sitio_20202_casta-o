<section class="slider_section">
  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
           <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
  </div>
  @isset($var)
  @if(empty($myvar))
  <script>
 window.alert('Datos no encontrados');
  </script>
@endif
  @endisset

<div class="contact">
  <div class="container">
      <div class="row">
          <div class="col-md-7 offset-md-3">
          <div class="title">
              <h1 class="fs-1" style="color: #3a3e7b" data-aos="fade-up">VALIDACIÓN PROCESO PRE-INSCRIPCIÓN</h1>

              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
              </svg>
              <br>
              <br>

              <span style="color:black">Ingresa los datos requeridos y valida el proceso de la Pre-Inscripción.</span>
          </div>
          </div>

          

  <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
  @csrf
  @method('GET')
  <form method="post">
  <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="name" style="color: #3a3e7b" data-aos="fade"><b>No. Gestión</b></label><br>
          <div>
              <input class="form-control input100 rounded-pill" id="nombre" name="nombre" type="text" class="validate" required>
              <span></span>
          </div>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="lastname" style="color: #3a3e7b" data-aos="fade"><b>DPI</b></label>
          <input class="form-control me-2 input100 rounded-pill" id="apellido" name="apellido" type="text" class="validate" required>
      </div>
      <div class="col-md-12">
          <option></option>
          <label for="date" style="color: #3a3e7b" data-aos="fade"><b>Fecha Nacimiento Encargado</b></label><br>
          <input class="form-control me-2 input100 rounded-pill"id='email'name="email"type="email"class="validate"required>
      </div>
      <input type="submit"class="btn btn-outline-success input100 rounded-pill" onclick="nextPrev(1)"value="Enviar">
      <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
  </div>

  </form>
</div>
       </div>
   </div>
  

