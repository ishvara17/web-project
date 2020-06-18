<?php
$alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";


switch($alert) {
    case "no-email" :
        echo '<div class="alert alert-info mt-5 mb-5" role="alert">
        U heeft geen e-mailadres ingevuld, probeer het opnieuw.
      </div>';
      header("Refresh: 4; ./index.php?content=register");
    break;
    case "emailexists" :
        echo '<div class="alert alert-info mt-5 mb-5" role="alert">
        Het door u ingevulde e-mailadres bestaat al, probeer het opnieuw met een ander e-mailadres.
      </div>';
      header("Refresh: 4; ./index.php?content=register");
    break;
    case "register-error" :
        echo '<div class="alert alert-danger mt-5 mb-5" role="alert">
        Er is iets foutgegaan bij het registratieproces, probeer het opnieuw of neem contact op met de klantenservice.
      </div>';
      header("Refresh: 4; ./index.php?content=register");
    break;
    case "register-success" :
        echo '<div class="alert alert-success mt-5 mb-5" role="alert">
        U bent succesvol geregistreerd, u ontvangt een mail met daarin een activatielink.
      </div>';
      header("Refresh: 4; ./index.php?content=login");
    break;
    case "" :
        echo '';
    break;
    case "" :
        echo '';
    break;
    case "" :
        echo '';
    break;
    default:
    header("Location: ./index.php?content=home");
    break;
}



?>