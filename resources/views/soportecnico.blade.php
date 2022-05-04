<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/banner-web.jpg') }}" alt="First slide">
    </div>
</section>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-3">
            <div class="title">
                <h1 class="fs-1" style="color: #3a3e7b" data-aos="fade-up">SOPORTE TÉCNICO</h1>

                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-tools" viewBox="0 0 16 16">
                    <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                  </svg>
                <br>
                <br>

                <span style="color:black">Si desea solicitar algún tipo de soporte técnico, por favor ingrese la siguiente información, y en la brevedad posible nos comunicaremos.</span>
            </div>
            </div>

            

    <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
    @csrf
    @method('GET')
    <form method="post">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="name" style="color: #3a3e7b" data-aos="fade"><b>Nombre del Alumno</b></label><br>
            <div>
                <input class="form-control input100" id="nombre" name="nombre" type="text" class="validate" required>
                <span></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="lastname" style="color: #3a3e7b" data-aos="fade"><b>CUI del Alumno</b></label>
            <input class="form-control me-2 input100" id="apellido" name="apellido" type="text" class="validate" required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="email" style="color: #3a3e7b" data-aos="fade"><b>Grado</b></label><br>
            <input class="form-control me-2 input100"id='email'name="email"type="email"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="number" style="color: #3a3e7b" data-aos="fade"><b>Sección</b></label><br>
            <input class="form-control me-2 input100"id='telefono'name="telefono"type="tel"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
        </div>
        <div class="col-md-12">
            <label for="message" style="color: #3a3e7b" data-aos="fade"><b>Descripción del problema</b></label><br>
            <textarea class="form-control me-2 input100"id="mensaje" rows="50" name="mensaje"data-length="240"></textarea>
        </div>
        <input type="submit"class="btn btn-outline-success input100"onclick="enviarFormulario()"value="Enviar">
        <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
    </div>
 
    </form>
</div>
         </div>
     </div>