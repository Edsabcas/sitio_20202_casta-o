
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


 <div class="choose_bg" class="et_pb_text_inner">
    <div class="container-max-widths">
        <div style="max-width:450px;" class="mx-auto d-block">
            <div id="main_slider" class="carousel center">
            <img src="{{ asset('images/img.21.jpg')}}" class="rounded">
            </div>
        </div>
    </div>
  </div>
            
        </div>
        </div>
    </div>


<style>
    label{
        color: rgb(0, 0, 0);
    }
</style>

  <!-- service -->

<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row enjoy3-css3"  style="border-radius: 60px 60px 60px 60px;">
            <div class="col-md-7 offset-md-3">
            <div class="title">
                <br>
                <br>
                <h1 class="fs-1" style="color:rgb(61, 67, 155) "><b>PARA MÁS INFORMACIÓN</b> </h1>	
                <span style="color:black;">
                    <i> No dude en comunicarse con nosotros llenando los siguientes campos; y en la brevedad posible nos estaremos comunicando.</i>
                   </span>
            </div>
            </div>

    <form action="email/contactar" method="POST" style= "float:right; max-width:5000px; margin-top: -7px;" class="formulario formulario-eliminar">
    @csrf
    @method('GET')
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="nombre"> <b>Nombre</b> </label><br>
            <div class="wrap-input100">
                <input  style="border-radius: 60px 60px 60px 60px;" class="form-control"id="nombre"name="nombre"type="text"class="validate"required>
                <span class="focus-input100"></span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="apellido"> <b>Apellido</b> </label>
            <input style="border-radius: 60px 60px 60px 60px;" class="form-control me-2"id='apellido'name='apellido'type="text"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="email"> <b>Email</b> </label><br>
            <input style="border-radius: 60px 60px 60px 60px;" class="form-control me-2"id='email'name="email"type="email"class="validate"required>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <option></option>
            <label for="apellido"> <b>Telefono</b> </label><br>
            <input style="border-radius: 60px 60px 60px 60px;" class="form-control me-2 "id='telefono'name="telefono"type="tel"pattern="[0-9]{​​​​​10}​​​​​"class="validate"required>
        </div>
        <div class="col-md-12">
            <label for="textarea1"> <b>Mensaje</b> </label><br>
            <textarea style="border-radius: 30px 30px 30px 30px;" class="form-control me-2 "id="mensaje" rows="5" name="mensaje"data-length="240"></textarea>
        </div>
        <input style="border-radius: 60px 60px 60px 60px;" type="submit"class="btn btn-outline-success" onclick="enviarFormulario()"value="Enviar">
        <p style= "float:right; max-width:5000px; margin-top: -7px;"class="green-text"id="enviado"></p>
    </div>
    <br>
    <br>
    <br>
    </form>
</div>
         </div>
     </div>

