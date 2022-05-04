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
                <h1 class="fs-1" style="color: #3a3e7b">Restablecer Usuario</h1>

                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#a4cb39" class="bi bi-person-workspace" viewBox="0 0 16 16">
                    <path d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                    <path d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z"/>
                  </svg>
                <br>
                <br>

                <span style="color:black">Si desea restablecer su usuario, por favor ingrese la siguiente información, y en la brevedad posible nos comunicaremos.</span>
            </div>
            </div>

            

    <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
    @csrf
    @method('GET')
    <form method="post">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="name" style="color: #3a3e7b"><b>Nombre</b></label><br>
            <div>
                <input class="form-control input100" id="nombre" name="nombre" type="text" class="validate" required>
                <span></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="lastname" style="color: #3a3e7b"><b>CUI</b></label>
            <input class="form-control me-2 input100" id="apellido" name="apellido" type="text" class="validate" required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="email" style="color: #3a3e7b"><b>Grado</b></label><br>
            <input class="form-control me-2 input100"id='email'name="email"type="email"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="number" style="color: #3a3e7b"><b>Sección</b></label><br>
            <input class="form-control me-2 input100"id='telefono'name="telefono"type="tel"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
        </div>
        <div class="col-md-12">
            <label for="message" style="color: #3a3e7b"><b>Usuario</b></label><br>
            <input class="form-control me-2 input100" id='usuario' name="usuario" type="tel" class="validate" required>
        </div>
        <input type="submit"class="btn btn-outline-success input100"onclick="enviarFormulario()"value="Enviar">
        <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
    </div>
 
    </form>
</div>
         </div>
     </div>
