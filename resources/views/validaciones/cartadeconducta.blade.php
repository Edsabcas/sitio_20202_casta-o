<section class="slider_section">
  <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
           <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
  </div>
</section>

<div class="contact">
  <div class="container">
      <div class="row">
          <div class="col-md-7 offset-md-3">
          <div class="title">
              <h1 class="fs-1" style="color: #3a3e7b" data-aos="fade-up">SOLICITUD CARTA DE CONDUCTA</h1>

              <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
              </svg>
              <br>
              <br>

              <span style="color:black">Si desea solicitar una carta de conducta de su hijo rellene el siguiente formulario.</span>
          </div>
          </div>

          

  <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
  @csrf
  @method('GET')
  <form method="post">
  <div class="row">
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <span class="text-black" style="font-size: 15px; color:#2e117e;" data-aos="fade">Datos del estudiante requeridos:</span>
          <option></option>
          <label for="name" style="color: #3a3e7b" data-aos="fade"><b>Nombre</b></label><br>
          <div>
              <input class="form-control input100" id="nombre" name="nombre" type="text" class="validate" required>
              <span></span>
          </div>
      </div>
      
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <br>
    
          <label for="lastname" style="color: #3a3e7b" data-aos="fade"><b>CUI</b></label>
          <input class="form-control me-2 input100" id="apellido" name="apellido" type="number" class="validate" required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="email" style="color: #3a3e7b" data-aos="fade"><b>Grado</b></label><br>
          <input class="form-control me-2 input100"id='email'name="email"type="text"class="validate"required>
      </div>
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
          <option></option>
          <label for="number" style="color: #3a3e7b" data-aos="fade"><b>fecha de nacimiento </b></label><br>
          <input class="form-control me-2 input100"id='telefono'name="telefono"type="date"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
      </div>
        
      <span class="text-black" style="font-size: 15px; color:#2e117e;" data-aos="fade">Datos del encargado requeridos:</span>
        
      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <option></option>
        <label for="name" style="color: #3a3e7b" data-aos="fade"><b>Nombre</b></label><br>
        <div>
            <input class="form-control input100" id="nombre" name="nombre" type="text" class="validate" required>
            <span></span>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
        <option></option>
        <label for="lastname" style="color: #3a3e7b" data-aos="fade"><b>DPI</b></label>
        <input class="form-control me-2 input100" id="apellido" name="apellido" type="number" class="validate" required>
    </div>
    <div class="col-md-12">
        <option></option>
        <label for="number" style="color: #3a3e7b" data-aos="fade"><b>Fecha de nacimiento </b></label><br>
        <input class="form-control me-2 input100"id='telefono'name="telefono"type="date"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
    </div>
    <input type="submit"class="btn btn-outline-success input100"onclick="enviarFormulario()"value="Enviar">
    <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
</div>





  </form>
</div>
       </div>
   </div>
