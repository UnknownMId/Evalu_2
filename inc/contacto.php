
<div id="central-content">
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/code.js"> </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
<br>
<br>
<br>
<br>
    <div class="MascotaLover">
      <h1 class="display-4">CONTACTANOS</h1>
      <p class="lead">Aqui puedes dejar tus datos para contactarte con nosotros.</p>
      <hr class="my-4">
    </div>
  
    <!--    CONTACTO    -->
            <div class="contacto">
                <h1 class="titulo-contacto">CONTACTA CON NOSOTROS</h1>
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
                          <label >Indique su genero</label>
                          <div id='formulario'></div>
                          <div id='comunas' ></div>
        
                        </div>
                        <div class="col-12">
                        <label for="inputComentario" class="form-label">Comentario</label>
                        <textarea class="form-control" id="inputComentario" maxlength="140" rows="5"></textarea>
                        </div>
                        <label for="inputComentario" class="form-label">Indique su genero</label>
                       
                        <div class="col-12">
                              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-m">
                                        <input type="radio" name="gender" value="hombre" autocomplete="off"> Masculino
                                    </label>
                                    <label class="btn btn-m">
                                        <input type="radio" name="gender" value="mujer" autocomplete="off"> Femenino
                                    </label>
                                    <label class="btn btn-m active">
                                        <input type="radio" name="gender" value="mujer" autocomplete="off"> Otro
                                    </label>
                                </div>
                        <div class="col-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                  </form>
                  </div>
                  <br>
            </div>
</div>