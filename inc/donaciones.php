
<div id="central-content">

<br> <br> <br> <br>
    <div class="MascotaLover">
      <h1 class="display-4">DONACIONES</h1>
      <p class="lead">Visitas, aportes, donaciones, son algunas de las actividades que realizamos.</p>
      <hr class="my-4">
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/code.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
    

    <div class="row" >
      <div class="col-1">

      </div>
      <div class="col-10">
          
  <div id="idcarrusel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#idcarrusel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#idcarrusel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#idcarrusel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#idcarrusel" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a href="tienda.html"> 
          <img src="img/adopta_3.jpg" class="d-block w-100 " alt="Tienda"> </a>
          <div class="carousel-caption d-none d-md-block">
            <h5 >ADOPTA</h5>
            <p>Ellos merecen un hogar</p>
          </div>
        </div>

        <div class="carousel-item">
          <a href="nosotros.html"> 
          <img src="img/donacion_3.jpg" class="d-block w-100 " alt="nosotros"> </a>
          <div class="carousel-caption d-none d-md-block">
            <h5>AYUDA A UN CANINO</h5>
            <p>Te invitamos a operativo canino</p>
          </div>
        </div>

        <div class="carousel-item">
          <a href="donaciones.html"> 
          <img src="img/donacion_4.jpg" class="d-block w-100 " alt="donaciones"></a>
          <div class="carousel-caption d-none d-md-block ">
            <h5>Aportes y donaciones</h5>
            <p>Todas estas donacines contribuyen con un mismo fin el de ver a nuestras mascotas felices.</p>
          </div>
        </div>

        <div class="carousel-item">
          <a href="contacto.html"> 
          <img src="img/donacion_5.jpg" class="d-block w-100 " alt="contactaremos"> </a>
          <div class="carousel-caption d-none d-md-block ">
            <h5>Registrate y contactanos</h5>
            <p>Puedes hacerte socio y entrar a los distintos talleres de ayuda y colaboracion</p>
          </div>
        </div>



      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#idcarrusel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Atras</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#idcarrusel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </div>
  <div class="col-1"></div>
  </div>
    

  <hr class="my-4">

  
    <!--    DONACIONES    -->

           
                <div class="donaciones">
                <h1 class="titulo-donaciones">DONACIONES</h1>  
                  <div class="col-12">
                  <form class="row g-3">
                        
                        <div class="col-md-6">
                        <label for="inputnombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputnombre" required minlength="3" maxlength="30" pattern="[A-Za-z]+">
                        </div>
                        <div class="col-md-6">
                        <label for="inputapellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" id="inputapellido" required minlength="3" maxlength="30" pattern="[A-Za-z]+">
                        </div>
                        <div class="col-md-6">
                        <label for="inputTelefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="inputTelefono" placeholder="9 1234 5678" required pattern="^[9|8|7|6|5]\d{8}$">
                        </div>
                        <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="tucorreo@dominio.cl" required>
                        </div>
                        <div class="col-md-6">
                        <label for="inputCity" class="form-label">Ciudad</label>
                        <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="col-md-6">
                        <label for="inputState" class="form-label">Comuna</label>
                        <select id="inputState" class="form-select">
                        <option selected>Elegir...</option>
                        <option>La Florida</option>
                        <option>Maipú</option>
                        <option>Santiago Centro</option>
                        <option>Pudahuel</option>
                        <option>Otro</option>
                        </select>
                        </div>
                        <div class="col-md-6">
                            <label for="inputDonacion" class="form-label">Monto a donar</label>
                        
                        <div class="input-group mb-3">
                            <span class="input-group-text">$</span>
                            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-text">Pesos</span>
                        </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputState" class="form-label">Metodo de pago</label>
                            <select id="inputState" class="form-select">
                            <option selected>Elegir...</option>
                            <option>Credito</option>
                            <option>Debito</option>
                            <option>Cuenta Corriente</option>
                            <option>Transferencia Bancaria</option>

                            </select>
                        </div>
                        <div class="col-12">
                            <label for="inputComentario" class="form-label">Comentario</label>
                            <textarea class="form-control" id="inputComentario" maxlength="140" rows="5"></textarea>
                        </div>


                        <div class="col-12">
                        <br>
                        <button type="submit" class="btn btn-primary">DONAR</button>
                        </div>
                  </form>
                  </div>
                 
            </div>
</div>