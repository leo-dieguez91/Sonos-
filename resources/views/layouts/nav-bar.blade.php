<header class="header-main fixed-top"> <!-- fixed-top -->
  <div class="header-sup ">

    <div class="row justify-content-between">
      <div class="align-items-start col-1 col-lg-6">
        <div class="col-6">
          <nav class="navbar navbar-expand-lg p-0">
            <div class="collapse navbar-collapse">

              <a href="/"><img src="image/logosm.png" alt="logosm" >  </a>

              <ul class="navbar-nav mt-2">
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/faq">Acerca de Sonos!</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link decoracion-borde" href="/#QuienesSomos">Quienes Somos</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Calendario</a>
                </li>
              </ul>

            </div>
          </nav>

        </div>


        <div class="nav-mobie">
          <div id="mySidenav" class="sidenav">
            <a href="index.php"><img src="image/logosm.png" alt="logosm"></a>
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a class="nav-link" href="bienvenido.php">Home</a>
            <a href="/faq">Acerca de Sonos!</a>
            <a href="/#QuienesSomos">Quienes Somos</a>
            <a href="#">Grupos</a>
            <a href="#">Calendario</a>
            <a href="#">Ciudades</a>
          </div>
          <span class="ion-navicon-round"style="font-size:1.8em;cursor:pointer;line-height:55px;color:black " onclick="openNav()"></span>
        </div>
      </div>

        <div class="col-10 col-lg-5 p-1">
          <form class="col-lg-12" method="post">
            <div class="form-inline ">
              <div class="col-10 col-sm-9 col-md-8 col-lg-8 p-0 ml-lg-auto">
                <div class="input-group mr-2 ">

                    <input type="text" name="email" class="form-control mr-2 col-7" id="inlineFormInputName2" placeholder="Email" value="" data-toggle="tooltip" title="">
                    <!-- <span class="errores2">?></span> -->

                    <input type="password" name="pass" class="form-control col-5" id="inlineFormInputName2" placeholder="Contraseña" value="" data-toggle="tooltip" title="">
                    <!-- <span class="errores2">?></span> -->

                </div>
              </div>
              <button type="submit" class="btn btn-sm ml-1 pl-2 pr-2 hidden-xs" style="font-size: 0.6em;font-weight:bold;" name="login"> <span class="ion-log-in"></span> Ingresar </button>
              <button type="submit" class="btn btn-sm button-small ml-2 p-0 px-2"style="font-size: 0.7em;font-weight:bold;" name="login"> <span class="ion-log-in"></span></button>
            </div>
            <div class="form-check ajusteleft">
              <label class="form-check-label" style="font-size: 0.7em; color:black;"><input class="form-check-input" type="checkbox" name="recordar">Recordarme</label>
              <a href="#" class="ml-1 ml-sm-5">¿Olvidaste tu contraseña?</a>
            </div>
          </form>
        </div>
    </div>
  </div>
</header>

<!-- boton top -->
<button onclick="topFunction()" id="top-button" title="Go to top" class="fa fa-arrow-up"></button>


<script>
// cuando scrolea para abajo aparece el boton
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("top-button").style.display = "block";
  } else {
    document.getElementById("top-button").style.display = "none";
  }
}

// cuando se hace click al boton sube para arriba
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "270px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}



$('[data-toggle="tooltip"]').tooltip('show');
</script>
