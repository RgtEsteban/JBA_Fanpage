<!--Navbar-->
<?php
 $serverPath = "http://".$_SERVER["HTTP_HOST"]."/Projet_bootstrap_jojo";
?>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $serverPath;?>/index.php">
			  <img src="<?php echo $serverPath;?>/image/Logo_jojo.png" width="100" height="50" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?php echo $serverPath;?>/index.php">Accueil <span class="sr-only"></span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Personnages
                        </a>
                        <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarDarkDropdownMenuLink">
                          <li><a class="dropdown-item" href="<?php echo $serverPath;?>/page/protagoniste.php">Protagoniste</a></li>
                          <li><a class="dropdown-item" href="<?php echo $serverPath;?>/page/antagonistes.php">Antagoniste</a></li>
                        </ul>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $serverPath;?>/page/carte.php">Carte</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $serverPath;?>/page/Parties.php">Autres Parties</a>
                    </li>
                </ul>
                <form action="<?php echo $serverPath;?>/page/php/inscription.php">
                    <button class="btn btn-dark ms-lg-3" id="button-color" type="submit">Login</button>
                </form>
            </div>
        </div>
    </nav>