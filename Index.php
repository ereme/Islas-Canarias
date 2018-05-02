<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Islas Canarias</title>
  </head>
  <body>
    <header>
            <img src="imagenes/transme.jpg" alt="Transmediterranea" height="100px">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="#">Navbar</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                  </li>
                </ul>
              </div>
            </nav>
    </header>

    <div id="uno">
	    <div class="container">
		    <div class="row">
			    <div class="col">
				    <h1>Formulario</h1>
				    <form action="recibeformulario.php">
					    <div class="row">
						    <div class="col form-group">
                  <input name="Nombre" type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col form-group">
                  <input name="Apellidos" type="text" class="form-control" placeholder="Apellidos">
                </div>
              </div>
              <div class="row">
                <div class="col form-group">
                  <input name="Email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="col form-group">
                  <input name="Pwd" type="password" class="form-control" placeholder="Contraseña">
                </div>
              </div>
              <div class="row">
                <div class="col-md-3 form-group">
                  <input name="Edad" type="number" class="form-control" placeholder="Edad">
                </div>
                <div class="col-md-9 form-group" >
                  <select class="form-control" name="Nacionalidad"> 
                    <option value=""selected> Nacionalidad</option>
                    <option value="espana"> España</option>
                    <option value="portugal">Portugal</option>
                    <option value="holanda">Holanda</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-9">  Intereses
                  <div class="form-check"> 
                    <input class="form-check-input" name="Intereses[]" type="checkbox" value="informatica" id="informatica">
                    <label class="form-check-label" for="informatica">
                      Informática
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="Intereses[]" type="checkbox" value="biologia" id="biologia">
                    <label class="form-check-label" for="biologia">
                      Biología
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" name="Intereses[]" type="checkbox" value="empresas" id="empresas">
                    <label class="form-check-label" for="empresas">
                      Empresas
                    </label>
                  </div>
                </div>
                <div class="col-md-3"> Género
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Genero" id="varon" value="varon">
                    <label class="form-check-label" for="varon">
                      Varón
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="Genero" id="mujer" value="mujer">
                    <label class="form-check-label" for="mujer">
                      Mujer
                    </label>
                  </div>
                </div>
              </div>
              <div class="row form-group">
                <button type="submit" class="mx-auto btn btn-outline-primary">Enviar</button>
                <!-- mx-auto para centrar el botón -->
              </div>
            </form>
          </div>
          <div class="col align-self-center">
          <img src="imagenes/playa.jpg" alt="Playa" width = "100%" >
          </div>
        </div>
      </div>
    </div>
    <div id="dos"> 
      <img src="imagenes/paisaje2.jpg" alt="paisaje" width = "100%">
    </div>

    <div id="tres">
      <div class="container">
          <div class="row">
            <div class="col">
              <center> Texto </center>
            </div>
            <div class="col">
            <center> Texto </center>
            </div>
          </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
          <div class="row">
            <div class="col">
              <p> TRANSMEDITERRÁNEA SL </p>
              <p> Avenida de la guagua, 17 <br>
                  Isla de Tenerife <br>
                  10001- Islas Canarias
              </p>
            </div>
            <div class="col">
              <ol>
                <li>Hierro</li>
                <li>Gomera</li>
                <li>La Palma</li>
                <li>Tenerife</li>
                <li>Gran Canaria</li>
                <li>Fuerteventura</li>
                <li>Lanzarote</li>
              </ol>
            </div>
            <div class="col">
              <p> Paga con tarjeta<br>
              Pasarela de pago 100% segura
              </p>
            </div>
            <div class="col">
              <p> Para más información busca en  <a  href="http://google.es" target="_blank"> Google </a> <!-- "_blank" dirige a una nueva página y "_self" la abre en la misma página -->
              </p>
                </div>
          </div>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>