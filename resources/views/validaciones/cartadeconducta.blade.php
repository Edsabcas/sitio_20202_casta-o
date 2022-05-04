<style>
  * {
    box-sizing: border-box;
  }
  
  body {
    background-color: #f1f1f1;
  }
  
  #regForm {
    background-color: #ffffff;
    margin: 100px auto;
    font-family: Roboto;
    padding: 40px;
    width: 70%;
    min-width: 300px;
  }
  
  h1 {
    text-align: center;
    color: #272725;
    border: none;
    padding: 10px 20px;
    font-size: 25px;
    font-family: Roboto;
    cursor: pointer;
  }
  
  h4 {
    text-align: left;
    color: #272725;
    border: none;
    font-size: 16px;
    font-family: Roboto;
    cursor: pointer;
  }
  h6 {
    text-align: left;
    color: #272725;
    border: none;
    font-size: 14px;
    font-family: Roboto;
    cursor: pointer;
  }
  
  input {
    padding: 10px;
    width: 100%;
    font-size: 17px;
    font-family: Roboto;
    border: 1px solid #aaaaaa;
  }
  
  /* Mark input boxes that gets an error on validation: */
  input.invalid {
    background-color: #ffdddd;
  }
  
  /* Hide all steps by default: */
  .tab {
    display: none;
  }
  
  button {
    background-color: #a4cb39;
    color: #ffffff;
    border: none;
    padding: 10px 20px;
    font-size: 17px;
    font-family: Roboto;
    cursor: pointer;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  #prevBtn {
    background-color: #bbbbbb;
  }
  
  /* Make circles that indicate the steps of the form: */
  .step {
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbbbbb;
    border: none;
    border-radius: 50%;
    display: inline-block;
    opacity: 0.5;
  }
  
  .step.active {
    opacity: 1;
  }
  
  /* Mark the steps that are finished and valid: */
  .step.finish {
    background-color: #a4cb39;
  }
  </style>
  
  
  <section class="slider_section">
    <div id="main_slider" class="carousel slide banner-main" data-ride="carousel">
             <img class="first-slide" src="{{ asset('images/a.jpg') }}" alt="First slide">
    </div>  
    <form id="regForm" action="/valr" method="post" enctype="multipart/form-data" >
    <div class="form-row" >
      @csrf
    <!-- One "tab" for each step in the form: -->  
    <h2 style="text-align:center;">Solicitud Carta de Conducta</h2>
    <span class="text-black" style="font-size: 15px; color:#2e117e;" style="text-align:center;">Datos del estudiante requeridos:</span>
    <div class="form-group col-xs-12">
        <label for="email"  style="font-size: 15px; color:#0a0a0a;">No. de CUI:</label><br>
        <input class="form-control me-2 input100"id='text'name="gestion"type="number"class="validate"required>
    </div>

    <div class="form-group col-xs-12">
        <label for="email"  style="font-size: 15px; color:#0a0a0a;">Grado: </label><br>
        <input class="form-control me-2 input100"id='text'name="dpi_encargado"type="text"class="validate" required>
    </div>

    <div class="form-group col-xs-12">
        <label for="email"  style="font-size: 15px; color:#0a0a0a;">Nombre Completo del estudiante: </label><br>
        <input class="form-control me-2 input100"id='text'name="dpi_encargado"type="text"class="validate" required>
    </div>

    <div class="form-group col-xs-12">
      <label for="email"  style="font-size: 15px; color:#0a0a0a;">Fecha de nacimiento del alumno: </label><br>
      <input class="form-control me-2 input100"id='text'name="dpi_encargado"type="date"class="validate" required>
  </div>

<div class="form-row">
  <span class="text-black" style="font-size: 15px; color:#2e117e;" style="text-align:center;">Datos del encargado requeridos:</span>
  <div class="form-group col-xs-12">
      <label for="email"  style="font-size: 15px; color:#0a0a0a;">No. de DPI:</label><br>
      <input class="form-control me-2 input100"id='text'name="gestion"type="number"class="validate"required>
  </div>

  <div class="form-group col-xs-12">
      <label for="email"  style="font-size: 15px; color:#0a0a0a;">Nombre Completo del encargado: </label><br>
      <input class="form-control me-2 input100"id='text'name="dpi_encargado"type="text"class="validate" required>
  </div>

  <div class="form-group col-xs-12">
    <label for="email"  style="font-size: 15px; color:#0a0a0a;">Fecha de nacimiento del encargado: </label><br>
    <input class="form-control me-2 input100"id='text'name="dpi_encargado"type="date"class="validate" required>
</div>

  
      </div>
    <div style="overflow:auto;">
      <div style="float:right;">
        <button type="submit" id="nextBtn" onclick="nextPrev(1)">Validar</button>
      </div>
    </div>
    <!-- Circles which indicates the steps of the form: -->
    <div style="text-align:center;margin-top:40px;">
      <span class="step"></span>
    </div>
  </form>
  
  <section>
  <script>
  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab
  
  function showTab(n) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
      document.getElementById("nextBtn").innerHTML = "Validar";
    } else {
      document.getElementById("nextBtn").innerHTML = "Siguiente";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
  }
  
  function nextPrev(n) {
    // This function will figure out which tab to display
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
      // ... the form gets submitted:
      document.getElementById("regForm").submit();
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }
  
  function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {
        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false
        valid = false;
      }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }
  
  function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
  }
  </script>
  
  <script type="text/css">
      .card[data-color="green"] .category {
             color: #92ac56;
         }
      </script>

