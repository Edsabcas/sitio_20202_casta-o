
  <h2 class="card-title" style="color:#3a3e7b;" data-aos="fade-up">
    Ingrese la siguiente información importante para continuar con su proceso de inscripción</h2>

    
      
   
   <div wire:ignore.self class="accordion" id="accordionPanelsStayOpenExample">
    <div style="border-radius: 60px 60px 60px 60px;" class="accordion-item">
      <h2 style="border-radius: 60px 60px 60px 60px;" class="accordion-header" id="panelsStayOpen-headingOne">
        <button class="accordion-button" type="button" style="background-color:#d6e7a6; border:6px solid #a4cb39; border-radius: 60px 60px 60px 60px;" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
            <h4 class="font-weight-bolder">
                DATOS VARIOS
              </h4>
            </button>
      </h2>
      
      <div  wire:ignore.self id="panelsStayOpen-collapseOne" style="border-radius: 60px 60px 60px 60px;" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
        <div  wire:ignore.self class="accordion-body" style="border-radius: 60px 60px 60px 60px;">
          <div class="tab">
            <label for="exampleInputPassword1" class="form-label">¿Tiene hermanos en colegio?</label>
            <center>
            <div style="width: 12rem;">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" wire:click="confirmar_hermano('1')">
                <label class="form-check-label" for="flexRadioDefault1">
                  Si
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" wire:click="confirmar_hermano('0')">
                <label class="form-check-label" for="flexRadioDefault1">
                  No
                </label>
              </div>
            </div>
        </center>
              @if($confi==1)
            @error('gradoin') 
            <div class="alert alert-danger d-flex align-items-center" role="alert">
              <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
              
                <span>Debe seleccionar un grado</span>
               </div> @enderror
            
            <ul class="list-group" style="border-radius: 60px 60px 60px 60px;">
              @foreach($grados as $grado)
              <li class="list-group-item list-group-item-action"  for="flexRadioGrado{{$grado->ID_GR}}">
                <input class="form-check-input me-1" type="radio" wire:click='insertar_grados_hermanos("{{$grado->ID_GR}}","{{$grado->GRADO}}")' name="grado" value="{{$grado->ID_GR}}" aria-label="..." id="flexRadioGrado{{$grado->ID_GR}}">
                <label class="form-check-label" for="flexRadioGrado{{$grado->ID_GR}}" style="font-size: 15px; color:#000000;">
              {{$grado->GRADO}}
                </label>
              </li>
              
              @endforeach
            
            </ul>
            @endif  
            <h3>{{$grados_selecionados}},</h3>
           <div class="mb-3">
               <input type="number" wire:model="año_ingreso">
           </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  
      
  
   
  <hr>
  <style type="text/css">
  
  
   .card-big-shadow {
       max-width: 550px;
       position: relative;
   }
  
   .coloured-cards .card {
       margin-top: 30px;
   }
  
   .card[data-radius="none"] {
       border-radius: 0px;
   }
   .card {
       border-radius: 8px;
       box-shadow: 0 2px 2px rgba(204, 197, 185, 0.5);
       background-color: #FFFFFF;
       color: #252422;
       margin-bottom: 20px;
       position: relative;
       z-index: 1;
   }
  
  
   .card[data-background="image"] .title, .card[data-background="image"] .stats, .card[data-background="image"] .category, .card[data-background="image"] .description, .card[data-background="image"] .content, .card[data-background="image"] .card-footer, .card[data-background="image"] small, .card[data-background="image"] .content a, .card[data-background="color"] .title, .card[data-background="color"] .stats, .card[data-background="color"] .category, .card[data-background="color"] .description, .card[data-background="color"] .content, .card[data-background="color"] .card-footer, .card[data-background="color"] small, .card[data-background="color"] .content a {
       color: #FFFFFF;
   }
   .card.card-just-text .content {
       padding: 20px 20px;
       text-align: left;
   }
   .card .content {
       padding: 20px 20px 10px 20px;
   }
   .card[data-color="blue"] .category {
       color: #7a9e9f;
   }
  
   .card .category, .card .label {
       /* font-size: 14px; */
       margin-bottom: 0px;
   }
   .card-big-shadow:before {
       background-image: url("http://static.tumblr.com/i21wc39/coTmrkw40/shadow.png");
       background-position: center bottom;
       background-repeat: no-repeat;
       background-size: 100% 100%;
       bottom: -12%;
       content: "";
       display: block;
       left: -12%;
       position: absolute;
       right: 0;
       top: 0;
       z-index: 0;
   }
   h4, .h4 {
       font-size: 1.5em;
       font-weight: 600;
       line-height: 1.2em;
   }
   h6, .h6 {
       font-size: 0.9em;
       font-weight: 600;
       text-transform: uppercase;
   }
   .card .description {
       font-size: 16px;
       color: #66615b;
   }
   .content-card{
       margin-top:30px;
   }
   a:hover, a:focus {
       text-decoration: none;
   }
  
   /======== COLORS ===========/
   .card[data-color="blue"] {
       background: #b8d8d8;
   }
   .card[data-color="blue"] .description {
       color: #506568;
   }
  
   .card[data-color="green"] {
       background: #d5e5a3;
   }
   .card[data-color="green"] .description {
       color: #60773d;
   }
   .card[data-color="green"] .category {
       color: #92ac56;
   }
  
   .card[data-color="yellow"] {
       background: #ffe28c;
   }
   .card[data-color="yellow"] .description {
       color: #b25825;
   }
   .card[data-color="yellow"] .category {
       color: #d88715;
   }
  
   .card[data-color="brown"] {
       background: #d6c1ab;
   }
   .card[data-color="brown"] .description {
       color: #75442e;
   }
   .card[data-color="brown"] .category {
       color: #a47e65;
   }
  
   .card[data-color="purple"] {
       background: #baa9ba;
   }
   .card[data-color="purple"] .description {
       color: #3a283d;
   }
   .card[data-color="purple"] .category {
       color: #5a283d;
   }
  
   .card[data-color="orange"] {
       background: #ff8f5e;
   }
   .card[data-color="orange"] .description {
       color: #772510;
   }
   .card[data-color="orange"] .category {
       color: #e95e37;
   }
   </style>
  
  
  </div>
  </div>