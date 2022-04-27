
@isset($var)
@if(empty($myvar))
<script>
window.alert('Datos enviados exitosamente, favor validar su correo.');
</script>
@endif
@endisset


@isset($mensaje1)
@if(empty($myvar))
<script>
window.alert('Se envio su confirmación de pago, vuelva a validar su gestión.');
</script>
@endif
@endisset

@isset($mensaje2)
@if(empty($myvar))
<script>
window.alert('No se logro actualizar los datos, vuelva a intentar en breve.');
</script>
@endif
@endisset

@isset($mensaje3)
@if(empty($myvar))
<script>
window.alert('Se envia comprobante de manera correcta, vuelva a validar su gestion.');
</script>
@endif
@endisset

<section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
    </div>

 </section>
  <div class="choose_bg">
    <div class="container">
       <div class="row">
          <div class="col-md-7 offset-md-3">
       <section class="slider_section">
          <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
                   <img class="fifth-slide" src="{{ asset('images/b1.jpg')}}" alt="First slide">
             </div>

          </div>

       </section>
  </div>
 </div>
</div>
</div>

<style>
    label{
        color: #000;
    }
</style>

  <!-- service -->

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-7 offset-md-3">
            <div class="title">
                <h2>Más información<strong class="black"></strong></h2>
                <span style="color:black">Si necesita conocernos, porfavor ingrese la siguiente informacion, y en la brevedad posible nos comunicaremos.</span>
            </div>
            </div>

    <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;"class="formulario formulario-eliminar">
    @csrf
    @method('GET')
    <form method="post">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="nombre">Nombre</label><br>
            <div class="wrap-input100">
                <input class="form-control input100"id="nombre"name="nombre"type="text"class="validate"required>
                <span class="focus-input100"></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="apellido">Apellido</label>
            <input class="form-control me-2 input100"id='apellido'name='apellido'type="text"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="email">Email</label><br>
            <input class="form-control me-2 input100"id='email'name="email"type="email"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="apellido">Telefono</label><br>
            <input class="form-control me-2 input100"id='telefono'name="telefono"type="tel"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
        </div>
        <div class="col-md-12">
            <label for="textarea1">Mensaje</label><br>
            <textarea class="form-control me-2 input100"id="mensaje" rows="50" name="mensaje"data-length="240"></textarea>
        </div>
        <input type="submit"class="btn btn-outline-success input100"onclick="enviarFormulario()"value="Enviar">
        <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
    </div>
 
    </form>
</div>
         </div>
     </div>

