<?php

    require 'admin/backend/connection.php';

    $sql = "SELECT * FROM lots_table"; 
    $query = $connection->prepare($sql); 
    $query->execute();
    $lots = $query->fetchAll(PDO::FETCH_OBJ);
    
?>

<!doctype html>
<html class="no-js" lang="en" style="scroll-behavior: smooth;">
<head>
    <title>Aria</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Búho Solutions">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="description" content="Privada de 99 Lotes Residenciales, rodeada de naturaleza, amenidades y acceso controlado. Ubicada al norte de la ciudad de Mérida en Cholul con cercanía a las mejores Universidades, Escuelas,Hospitales y Plazas comerciales. Crea una vida tranquila y familiar con contacto natural sin salir de la ciudad. Lotes residenciales desde 240 m2 hasta 325 m2">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="landing/images/logos/logo-white.svg">
    <link rel="apple-touch-icon" href="landing/images/logos/logo-white.svg">
    <link rel="apple-touch-icon" sizes="72x72" href="landing/images/logos/logo-white.svg">
    <link rel="apple-touch-icon" sizes="114x114" href="landing/images/logos/logo-white.svg">
    <!-- style sheets and font icons -->
    <link rel="stylesheet" type="text/css" href="landing/css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="landing/css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="landing/css/style.css" />
    <link rel="stylesheet" type="text/css" href="landing/css/responsive.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="landing/rs-plugin/css/settings.css" type="text/css">
    <link rel="stylesheet" href="landing/css/rev-settings.css" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" />
    <!-- Toast -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css"/>
    <!-- Alpine -->
    <script defer src="https://unpkg.com/alpinejs@3.9.1/dist/cdn.min.js"></script>
</head>
<body data-mobile-nav-style="classic" x-data="handlerContact()">
    <!-- start header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-client header-light fixed-top navbar-boxed header-reverse-scroll">
            <div class="container-fluid nav-header-container">
                <div class="col-5 col-lg-2 ps-lg-0 me-auto me-lg-0" style="width: 250px; height: auto; ">
                    <a class="navbar-brand" href="index.php">
                        <img src="landing/images/logos/logo.svg" alt="" class="default-logo">
                        <img src="landing/images/logos/logo.svg" alt="" class="alt-logo">
                        <img src="landing/images/logos/logo.svg" class="mobile-logo float-left" alt="">
                    </a>
                </div>
            </div>
        </nav>
    </header>
    <section id="Distribución" class="big-section bg-light-gray wow animate__fadeIn">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="row justify-content-lg-center">

                    <div class="col-12 col-lg-6 col-sm-8 text-lg-center lg-margin-4-rem-bottom md-margin-3-rem-bottom xs-margin-5-rem-bottom wow animate__fadeIn">
                    </div>
                </div>
            </div>
            <div class="row  border-width-1px border-color-medium-gray">
                <div class="col-12 p-0 tab-style-07">
                    <!-- start tab navigation -->
                    <img loading="lazy" src="landing/images/lotes-residenciales.jpg" alt="Lotes Residenciales Aria">
                    <!-- end tab navigation -->
                </div>
            </div>
    </section>

    <!-- start section -->
    <section id="cotizador" class="big-section2 border-color-medium-gray wow animate__fadeIn margin-four-top">
        <div id="container_imagen" class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">Cotiza la disponibilidad de tu lote</h5>
                </div>
                <div class="col-12 margin-four-bottom">
                    <div class="text-center">
                        Disponible<span class="color-option option-1"></span>
                        Apartado<span class="color-option option-2"></span>
                        No Disponible<span class="color-option option-3"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 mx-auto text-center img-svg" >
                <!-- SVG -->
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 560.86 228.67" class="cotizador-svg3"><defs><style>.cls-1{fill:none;stroke:#1d1d1b;stroke-miterlimit:10;stroke-width:0.25px;}</style></defs><g id="Capa_2" data-name="Capa 2"><g id="Capa_1-2" data-name="Capa 1">
                    <path 
                    @click="getLotById(<?php echo $lots[98]->id; ?>)"
                    data-available="<?php echo $lots[98]->available; ?>"
                    data-area="<?php echo $lots[98]->area; ?>"
                    data-number="<?php echo $lots[98]->number; ?>"
                    id="lot-<?php echo $lots[98]->id; ?>"
                    class="cls-1" d="M35.17,4.28C39.39-3.5,49.54,2,49.54,2V32.5l-14.37-4Z"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[97]->id; ?>)"
                    data-available="<?php echo $lots[97]->available; ?>"
                    data-area="<?php echo $lots[97]->area; ?>"
                    data-number="<?php echo $lots[97]->number; ?>"
                    id="lot-<?php echo $lots[97]->id; ?>"
                    class="cls-1" 
                    points="63.92 36.19 49.55 32.5 49.55 2.04 63.92 5.6 63.92 36.19"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[96]->id; ?>)"
                    data-available="<?php echo $lots[96]->available; ?>"
                    data-area="<?php echo $lots[96]->area; ?>"
                    data-number="<?php echo $lots[96]->number; ?>"
                    id="lot-<?php echo $lots[96]->id; ?>"
                    class="cls-1" 
                    points="78.29 40.15 63.92 36.19 63.92 5.6 78.29 9.42 78.29 40.15"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[95]->id; ?>)"
                    data-available="<?php echo $lots[95]->available; ?>"
                    data-area="<?php echo $lots[95]->area; ?>"
                    data-number="<?php echo $lots[95]->number; ?>"
                    id="lot-<?php echo $lots[95]->id; ?>"
                    class="cls-1" 
                    points="92.67 12.85 92.67 43.97 78.29 40.15 78.29 9.42 92.67 12.85"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[94]->id; ?>)"
                    data-available="<?php echo $lots[94]->available; ?>"
                    data-area="<?php echo $lots[94]->area; ?>"
                    data-number="<?php echo $lots[94]->number; ?>"
                    id="lot-<?php echo $lots[94]->id; ?>"
                    class="cls-1" 
                    points="107.17 17.46 92.67 12.85 92.67 43.97 107.17 47.66 107.17 17.46"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[93]->id; ?>)"
                    data-available="<?php echo $lots[93]->available; ?>"
                    data-area="<?php echo $lots[93]->area; ?>"
                    data-number="<?php echo $lots[93]->number; ?>"
                    id="lot-<?php echo $lots[93]->id; ?>"
                    class="cls-1" 
                    points="121.81 21.02 107.17 17.46 107.17 47.66 121.81 51.35 121.81 21.02"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[92]->id; ?>)"
                    data-available="<?php echo $lots[92]->available; ?>"
                    data-area="<?php echo $lots[92]->area; ?>"
                    data-number="<?php echo $lots[92]->number; ?>"
                    id="lot-<?php echo $lots[92]->id; ?>"
                    class="cls-1" 
                    points="135.65 54.65 121.81 51.35 121.81 21.02 135.65 24.19 135.65 54.65"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[91]->id; ?>)"
                    data-available="<?php echo $lots[91]->available; ?>"
                    data-area="<?php echo $lots[91]->area; ?>"
                    data-number="<?php echo $lots[91]->number; ?>"
                    id="lot-<?php echo $lots[91]->id; ?>"
                    class="cls-1" 
                    points="149.76 58.74 135.65 54.65 135.65 24.19 149.76 28.15 149.76 58.74"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[90]->id; ?>)"
                    data-available="<?php echo $lots[90]->available; ?>"
                    data-area="<?php echo $lots[90]->area; ?>"
                    data-number="<?php echo $lots[90]->number; ?>"
                    id="lot-<?php echo $lots[90]->id; ?>"
                    class="cls-1" 
                    points="164.14 62.43 149.76 58.74 149.76 28.15 164.14 31.97 164.14 62.43"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[89]->id; ?>)"
                    data-available="<?php echo $lots[89]->available; ?>"
                    data-area="<?php echo $lots[89]->area; ?>"
                    data-number="<?php echo $lots[89]->number; ?>"
                    id="lot-<?php echo $lots[89]->id; ?>"
                    class="cls-1" 
                    points="178.64 65.86 164.14 62.43 164.14 31.97 178.64 35.66 178.64 65.86"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[88]->id; ?>)"
                    data-available="<?php echo $lots[88]->available; ?>"
                    data-area="<?php echo $lots[88]->area; ?>"
                    data-number="<?php echo $lots[88]->number; ?>"
                    id="lot-<?php echo $lots[88]->id; ?>"
                    class="cls-1" 
                    points="193.02 69.82 178.64 65.86 178.64 35.66 193.02 39.35 193.02 69.82"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[87]->id; ?>)"
                    data-available="<?php echo $lots[87]->available; ?>"
                    data-area="<?php echo $lots[87]->area; ?>"
                    data-number="<?php echo $lots[87]->number; ?>"
                    id="lot-<?php echo $lots[87]->id; ?>"
                    class="cls-1" 
                    points="207.52 73.77 193.02 69.82 193.02 39.35 207.52 43.18 207.52 73.77"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[86]->id; ?>)"
                    data-available="<?php echo $lots[86]->available; ?>"
                    data-area="<?php echo $lots[86]->area; ?>"
                    data-number="<?php echo $lots[86]->number; ?>"
                    id="lot-<?php echo $lots[86]->id; ?>"
                    class="cls-1" 
                    points="221.76 77.33 207.52 73.77 207.52 43.18 222.42 47.66 221.76 77.33"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[85]->id; ?>)"
                    data-available="<?php echo $lots[85]->available; ?>"
                    data-area="<?php echo $lots[85]->area; ?>"
                    data-number="<?php echo $lots[85]->number; ?>"
                    id="lot-<?php echo $lots[85]->id; ?>"
                    class="cls-1" 
                    points="235.87 81.03 221.76 77.33 222.42 47.66 236.93 50.83 235.87 81.03"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[84]->id; ?>)"
                    data-available="<?php echo $lots[84]->available; ?>"
                    data-area="<?php echo $lots[84]->area; ?>"
                    data-number="<?php echo $lots[84]->number; ?>"
                    id="lot-<?php echo $lots[84]->id; ?>"
                    class="cls-1" 
                    points="250.25 84.98 235.87 81.03 236.93 50.83 251.17 54.65 250.25 84.98"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[83]->id; ?>)"
                    data-available="<?php echo $lots[83]->available; ?>"
                    data-area="<?php echo $lots[83]->area; ?>"
                    data-number="<?php echo $lots[83]->number; ?>"
                    id="lot-<?php echo $lots[83]->id; ?>"
                    class="cls-1" 
                    points="264.49 88.81 250.25 84.98 251.17 54.65 265.15 58.08 264.49 88.81"/>
                    <!-- end 99 a 84 -->
                    <!-- lotes 83 a 68 -->
                    <polygon 
                    @click="getLotById(<?php echo $lots[82]->id; ?>)"
                    data-available="<?php echo $lots[82]->available; ?>"
                    data-area="<?php echo $lots[82]->area; ?>"
                    data-number="<?php echo $lots[82]->number; ?>"
                    id="lot-<?php echo $lots[82]->id; ?>"
                    class="cls-1" 
                    points="265.15 120.19 264.49 88.81 250.25 84.98 250.25 115.97 265.15 120.19"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[81]->id; ?>)"
                    data-available="<?php echo $lots[81]->available; ?>"
                    data-area="<?php echo $lots[81]->area; ?>"
                    data-number="<?php echo $lots[81]->number; ?>"
                    id="lot-<?php echo $lots[81]->id; ?>"
                    class="cls-1" 
                    points="235.87 111.62 235.87 81.03 250.25 84.98 250.25 115.97 235.87 111.62"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[80]->id; ?>)"
                    data-available="<?php echo $lots[80]->available; ?>"
                    data-area="<?php echo $lots[80]->area; ?>"
                    data-number="<?php echo $lots[80]->number; ?>"
                    id="lot-<?php echo $lots[80]->id; ?>"
                    class="cls-1" 
                    points="221.76 107.79 221.76 77.33 235.87 81.03 235.87 111.62 221.76 107.79"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[79]->id; ?>)"
                    data-available="<?php echo $lots[79]->available; ?>"
                    data-area="<?php echo $lots[79]->area; ?>"
                    data-number="<?php echo $lots[79]->number; ?>"
                    id="lot-<?php echo $lots[79]->id; ?>"
                    class="cls-1" 
                    points="207.52 73.77 207.52 104.23 221.76 107.79 221.76 77.33 207.52 73.77"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[78]->id; ?>)"
                    data-available="<?php echo $lots[78]->available; ?>"
                    data-area="<?php echo $lots[78]->area; ?>"
                    data-number="<?php echo $lots[78]->number; ?>"
                    id="lot-<?php echo $lots[78]->id; ?>"
                    class="cls-1" 
                    points="193.02 100.28 193.02 69.82 207.52 73.77 207.52 104.23 193.02 100.28"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[77]->id; ?>)"
                    data-available="<?php echo $lots[77]->available; ?>"
                    data-area="<?php echo $lots[77]->area; ?>"
                    data-number="<?php echo $lots[77]->number; ?>"
                    id="lot-<?php echo $lots[77]->id; ?>"
                    class="cls-1" 
                    points="178.64 96.58 178.64 65.86 193.02 69.82 193.02 100.28 178.64 96.58"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[76]->id; ?>)"
                    data-available="<?php echo $lots[76]->available; ?>"
                    data-area="<?php echo $lots[76]->area; ?>"
                    data-number="<?php echo $lots[76]->number; ?>"
                    id="lot-<?php echo $lots[76]->id; ?>"
                    class="cls-1" 
                    points="164.14 62.43 164.14 93.03 178.64 96.58 178.64 65.86 164.14 62.43"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[75]->id; ?>)"
                    data-available="<?php echo $lots[75]->available; ?>"
                    data-area="<?php echo $lots[75]->area; ?>"
                    data-number="<?php echo $lots[75]->number; ?>"
                    id="lot-<?php echo $lots[75]->id; ?>"
                    class="cls-1" 
                    points="149.76 58.74 149.76 88.81 164.14 93.03 164.14 62.43 149.76 58.74"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[74]->id; ?>)"
                    data-available="<?php echo $lots[74]->available; ?>"
                    data-area="<?php echo $lots[74]->area; ?>"
                    data-number="<?php echo $lots[74]->number; ?>"
                    id="lot-<?php echo $lots[74]->id; ?>"
                    class="cls-1" 
                    points="135.65 54.65 135.65 85.9 149.76 88.81 149.76 58.74 135.65 54.65"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[73]->id; ?>)"
                    data-available="<?php echo $lots[73]->available; ?>"
                    data-area="<?php echo $lots[73]->area; ?>"
                    data-number="<?php echo $lots[73]->number; ?>"
                    id="lot-<?php echo $lots[73]->id; ?>"
                    class="cls-1" 
                    points="121.81 51.35 121.81 81.68 135.65 85.9 135.65 54.65 121.81 51.35"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[72]->id; ?>)"
                    data-available="<?php echo $lots[72]->available; ?>"
                    data-area="<?php echo $lots[72]->area; ?>"
                    data-number="<?php echo $lots[72]->number; ?>"
                    id="lot-<?php echo $lots[72]->id; ?>"
                    class="cls-1" 
                    points="107.17 47.66 107.17 78.39 121.81 81.68 121.81 51.35 107.17 47.66"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[71]->id; ?>)"
                    data-available="<?php echo $lots[71]->available; ?>"
                    data-area="<?php echo $lots[71]->area; ?>"
                    data-number="<?php echo $lots[71]->number; ?>"
                    id="lot-<?php echo $lots[71]->id; ?>"
                    class="cls-1" 
                    points="92.67 43.97 92.67 74.56 107.17 78.39 107.17 47.66 92.67 43.97"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[70]->id; ?>)"
                    data-available="<?php echo $lots[70]->available; ?>"
                    data-area="<?php echo $lots[70]->area; ?>"
                    data-number="<?php echo $lots[70]->number; ?>"
                    id="lot-<?php echo $lots[70]->id; ?>"
                    class="cls-1" 
                    points="78.29 40.15 78.29 69.82 92.67 74.56 92.67 43.97 78.29 40.15"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[69]->id; ?>)"
                    data-available="<?php echo $lots[69]->available; ?>"
                    data-area="<?php echo $lots[69]->area; ?>"
                    data-number="<?php echo $lots[69]->number; ?>"
                    id="lot-<?php echo $lots[69]->id; ?>"
                    class="cls-1" 
                    points="63.92 36.19 63.92 65.86 78.29 69.82 78.29 40.15 63.92 36.19"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[68]->id; ?>)"
                    data-available="<?php echo $lots[68]->available; ?>"
                    data-area="<?php echo $lots[68]->area; ?>"
                    data-number="<?php echo $lots[68]->number; ?>"
                    id="lot-<?php echo $lots[68]->id; ?>"
                    class="cls-1" 
                    points="49.55 32.5 49.55 62.43 63.92 65.86 63.92 36.19 49.55 32.5"/>
                    <path 
                    @click="getLotById(<?php echo $lots[67]->id; ?>)"
                    data-available="<?php echo $lots[67]->available; ?>"
                    data-area="<?php echo $lots[67]->area; ?>"
                    data-number="<?php echo $lots[67]->number; ?>"
                    id="lot-<?php echo $lots[67]->id; ?>"
                    class="cls-1" 
                    d="M35.17,28.54V56a5.57,5.57,0,0,0,4.09,4.29l10.28,2.17V32.5Z"/>
                    <!-- end 68 -->
                    <!-- lotes 67 a 48 -->
                    <polygon 
                    @click="getLotById(<?php echo $lots[66]->id; ?>)"
                    data-available="<?php echo $lots[66]->available; ?>"
                    data-area="<?php echo $lots[66]->area; ?>"
                    data-number="<?php echo $lots[66]->number; ?>"
                    id="lot-<?php echo $lots[66]->id; ?>"
                    class="cls-1" 
                    points="0.16 64.67 5.9 93.03 19.35 97.38 19.35 68.63 0.16 64.67"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[65]->id; ?>)"
                    data-available="<?php echo $lots[65]->available; ?>"
                    data-area="<?php echo $lots[65]->area; ?>"
                    data-number="<?php echo $lots[65]->number; ?>"
                    id="lot-<?php echo $lots[65]->id; ?>"
                    class="cls-1" 
                    points="35.17 73.77 19.35 68.63 19.35 97.38 35.17 101.73 35.17 73.77"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[64]->id; ?>)"
                    data-available="<?php echo $lots[64]->available; ?>"
                    data-area="<?php echo $lots[64]->area; ?>"
                    data-number="<?php echo $lots[64]->number; ?>"
                    id="lot-<?php echo $lots[64]->id; ?>"
                    class="cls-1" 
                    points="49.55 77.33 35.17 73.77 35.17 101.73 49.55 105.49 49.55 77.33"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[63]->id; ?>)"
                    data-available="<?php echo $lots[63]->available; ?>"
                    data-area="<?php echo $lots[63]->area; ?>"
                    data-number="<?php echo $lots[63]->number; ?>"
                    id="lot-<?php echo $lots[63]->id; ?>"
                    class="cls-1" 
                    points="63.92 81.03 49.55 77.33 49.55 105.49 63.92 109.44 63.92 81.03"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[62]->id; ?>)"
                    data-available="<?php echo $lots[62]->available; ?>"
                    data-area="<?php echo $lots[62]->area; ?>"
                    data-number="<?php echo $lots[62]->number; ?>"
                    id="lot-<?php echo $lots[62]->id; ?>"
                    class="cls-1" 
                    points="78.29 85.18 63.92 81.03 63.92 109.44 78.29 113.4 78.29 85.18"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[61]->id; ?>)"
                    data-available="<?php echo $lots[61]->available; ?>"
                    data-area="<?php echo $lots[61]->area; ?>"
                    data-number="<?php echo $lots[61]->number; ?>"
                    id="lot-<?php echo $lots[61]->id; ?>"
                    class="cls-1" 
                    points="92.67 88.81 78.29 85.18 78.29 113.4 92.67 117.16 92.67 88.81"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[60]->id; ?>)"
                    data-available="<?php echo $lots[60]->available; ?>"
                    data-area="<?php echo $lots[60]->area; ?>"
                    data-number="<?php echo $lots[60]->number; ?>"
                    id="lot-<?php echo $lots[60]->id; ?>"
                    class="cls-1" 
                    points="107.17 92.23 92.67 88.81 92.67 117.16 107.17 121.51 107.17 92.23"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[59]->id; ?>)"
                    data-available="<?php echo $lots[59]->available; ?>"
                    data-area="<?php echo $lots[59]->area; ?>"
                    data-number="<?php echo $lots[59]->number; ?>"
                    id="lot-<?php echo $lots[59]->id; ?>"
                    class="cls-1" 
                    points="121.02 96.58 107.17 92.23 107.17 121.51 121.81 124.9 121.02 96.58"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[58]->id; ?>)"
                    data-available="<?php echo $lots[58]->available; ?>"
                    data-area="<?php echo $lots[58]->area; ?>"
                    data-number="<?php echo $lots[58]->number; ?>"
                    id="lot-<?php echo $lots[58]->id; ?>"
                    class="cls-1" 
                    points="135.65 129.42 121.81 124.9 121.02 96.58 135.65 99.55 135.65 129.42"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[57]->id; ?>)"
                    data-available="<?php echo $lots[57]->available; ?>"
                    data-area="<?php echo $lots[57]->area; ?>"
                    data-number="<?php echo $lots[57]->number; ?>"
                    id="lot-<?php echo $lots[57]->id; ?>"
                    class="cls-1" 
                    points="149.76 132.59 135.65 129.42 135.65 99.55 150.49 102.58 149.76 132.59"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[56]->id; ?>)"
                    data-available="<?php echo $lots[56]->available; ?>"
                    data-area="<?php echo $lots[56]->area; ?>"
                    data-number="<?php echo $lots[56]->number; ?>"
                    id="lot-<?php echo $lots[56]->id; ?>"
                    class="cls-1" 
                    points="164.14 137.13 149.76 132.59 150.49 102.58 164.93 106.67 164.14 137.13"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[55]->id; ?>)"
                    data-available="<?php echo $lots[55]->available; ?>"
                    data-area="<?php echo $lots[55]->area; ?>"
                    data-number="<?php echo $lots[55]->number; ?>"
                    id="lot-<?php echo $lots[55]->id; ?>"
                    class="cls-1" 
                    points="178.64 141.29 164.14 137.13 164.93 106.67 178.64 110.83 178.64 141.29"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[54]->id; ?>)"
                    data-available="<?php echo $lots[54]->available; ?>"
                    data-area="<?php echo $lots[54]->area; ?>"
                    data-number="<?php echo $lots[54]->number; ?>"
                    id="lot-<?php echo $lots[54]->id; ?>"
                    class="cls-1" 
                    points="193.02 144.26 178.64 141.29 178.64 110.83 193.81 114.19 193.02 144.26"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[53]->id; ?>)"
                    data-available="<?php echo $lots[53]->available; ?>"
                    data-area="<?php echo $lots[53]->area; ?>"
                    data-number="<?php echo $lots[53]->number; ?>"
                    id="lot-<?php echo $lots[53]->id; ?>"
                    class="cls-1" 
                    points="207.52 148.61 193.02 144.26 193.81 114.19 207.52 118.15 207.52 148.61"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[52]->id; ?>)"
                    data-available="<?php echo $lots[52]->available; ?>"
                    data-area="<?php echo $lots[52]->area; ?>"
                    data-number="<?php echo $lots[52]->number; ?>"
                    id="lot-<?php echo $lots[52]->id; ?>"
                    class="cls-1" 
                    points="221.76 151.97 207.52 148.61 207.52 118.15 221.76 121.51 221.76 151.97"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[51]->id; ?>)"
                    data-available="<?php echo $lots[51]->available; ?>"
                    data-area="<?php echo $lots[51]->area; ?>"
                    data-number="<?php echo $lots[51]->number; ?>"
                    id="lot-<?php echo $lots[51]->id; ?>"
                    class="cls-1" 
                    points="235.87 156.12 221.76 151.97 221.76 121.51 235.87 126.06 235.87 156.12"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[50]->id; ?>)"
                    data-available="<?php echo $lots[50]->available; ?>"
                    data-area="<?php echo $lots[50]->area; ?>"
                    data-number="<?php echo $lots[50]->number; ?>"
                    id="lot-<?php echo $lots[50]->id; ?>"
                    class="cls-1" 
                    points="250.25 160.28 235.87 156.12 235.87 126.06 251.17 129.42 250.25 160.28"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[49]->id; ?>)"
                    data-available="<?php echo $lots[49]->available; ?>"
                    data-area="<?php echo $lots[49]->area; ?>"
                    data-number="<?php echo $lots[49]->number; ?>"
                    id="lot-<?php echo $lots[49]->id; ?>"
                    class="cls-1" 
                    points="265.15 164.23 250.25 160.28 251.17 129.42 265.15 133.38 265.15 164.23"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[48]->id; ?>)"
                    data-available="<?php echo $lots[48]->available; ?>"
                    data-area="<?php echo $lots[48]->area; ?>"
                    data-number="<?php echo $lots[48]->number; ?>"
                    id="lot-<?php echo $lots[48]->id; ?>"
                    class="cls-1" 
                    points="280.25 168.19 265.15 164.23 265.15 133.38 280.25 137.13 280.25 168.19"/>
                    <path 
                    @click="getLotById(<?php echo $lots[47]->id; ?>)"
                    data-available="<?php echo $lots[47]->available; ?>"
                    data-area="<?php echo $lots[47]->area; ?>"
                    data-number="<?php echo $lots[47]->number; ?>"
                    id="lot-<?php echo $lots[47]->id; ?>"
                    class="cls-1" 
                    d="M296.47,172.54l-16.22-4.35V137.13l11.87,3.17s4.35,1,4.35,4.94Z"/>
                    <!-- end 48 -->
                    <!-- lotes 17 a 1 -->
                    <path 
                    @click="getLotById(<?php echo $lots[16]->id; ?>)"
                    data-available="<?php echo $lots[16]->available; ?>"
                    data-area="<?php echo $lots[16]->area; ?>"
                    data-number="<?php echo $lots[16]->number; ?>"
                    id="lot-<?php echo $lots[16]->id; ?>"
                    class="cls-1" 
                    d="M310.71,57.42V86.3s-.4,3.23,5.14,4.48l10.29,3.7V62.17Z"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[15]->id; ?>)"
                    data-available="<?php echo $lots[15]->available; ?>"
                    data-area="<?php echo $lots[15]->area; ?>"
                    data-number="<?php echo $lots[15]->number; ?>"
                    id="lot-<?php echo $lots[15]->id; ?>"
                    class="cls-1" 
                    points="341.57 65.93 326.14 62.17 326.14 94.47 341.57 98.5 341.57 65.93"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[14]->id; ?>)"
                    data-available="<?php echo $lots[14]->available; ?>"
                    data-area="<?php echo $lots[14]->area; ?>"
                    data-number="<?php echo $lots[14]->number; ?>"
                    id="lot-<?php echo $lots[14]->id; ?>"
                    class="cls-1" 
                    points="356.6 69.68 341.57 65.93 341.57 98.5 356.6 102.58 356.6 69.68"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[13]->id; ?>)"
                    data-available="<?php echo $lots[13]->available; ?>"
                    data-area="<?php echo $lots[13]->area; ?>"
                    data-number="<?php echo $lots[13]->number; ?>"
                    id="lot-<?php echo $lots[13]->id; ?>"
                    class="cls-1" 
                    points="371.24 73.77 356.6 69.68 356.6 102.58 371.24 106.47 371.24 73.77"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[12]->id; ?>)"
                    data-available="<?php echo $lots[12]->available; ?>"
                    data-area="<?php echo $lots[12]->area; ?>"
                    data-number="<?php echo $lots[12]->number; ?>"
                    id="lot-<?php echo $lots[12]->id; ?>"
                    class="cls-1" 
                    points="385.87 77.33 371.24 73.77 371.24 106.47 385.87 110.83 385.87 77.33"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[11]->id; ?>)"
                    data-available="<?php echo $lots[11]->available; ?>"
                    data-area="<?php echo $lots[11]->area; ?>"
                    data-number="<?php echo $lots[11]->number; ?>"
                    id="lot-<?php echo $lots[11]->id; ?>"
                    class="cls-1" 
                    points="400.51 81.03 385.87 77.33 385.87 110.83 400.51 114.58 400.51 81.03"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[10]->id; ?>)"
                    data-available="<?php echo $lots[10]->available; ?>"
                    data-area="<?php echo $lots[10]->area; ?>"
                    data-number="<?php echo $lots[10]->number; ?>"
                    id="lot-<?php echo $lots[10]->id; ?>"
                    class="cls-1" 
                    points="415.15 84.98 400.51 81.03 400.51 114.58 415.15 118.15 415.15 84.98"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[9]->id; ?>)"
                    data-available="<?php echo $lots[9]->available; ?>"
                    data-area="<?php echo $lots[9]->area; ?>"
                    data-number="<?php echo $lots[9]->number; ?>"
                    id="lot-<?php echo $lots[9]->id; ?>"
                    class="cls-1" 
                    points="429.79 88.81 415.15 84.98 415.15 118.15 429.79 122.69 429.79 88.81"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[8]->id; ?>)"
                    data-available="<?php echo $lots[8]->available; ?>"
                    data-area="<?php echo $lots[8]->area; ?>"
                    data-number="<?php echo $lots[8]->number; ?>"
                    id="lot-<?php echo $lots[8]->id; ?>"
                    class="cls-1" 
                    points="444.23 92.3 429.79 88.81 429.79 122.69 444.23 127.25 444.23 92.3"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[7]->id; ?>)"
                    data-available="<?php echo $lots[7]->available; ?>"
                    data-area="<?php echo $lots[7]->area; ?>"
                    data-number="<?php echo $lots[7]->number; ?>"
                    id="lot-<?php echo $lots[7]->id; ?>"
                    class="cls-1" 
                    points="459.06 95.96 444.23 92.3 444.23 127.25 459.06 131 459.06 95.96"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[6]->id; ?>)"
                    data-available="<?php echo $lots[6]->available; ?>"
                    data-area="<?php echo $lots[6]->area; ?>"
                    data-number="<?php echo $lots[6]->number; ?>"
                    id="lot-<?php echo $lots[6]->id; ?>"
                    class="cls-1" 
                    points="473.7 99.58 459.06 95.96 459.06 131 473.7 134.96 473.7 99.58"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[5]->id; ?>)"
                    data-available="<?php echo $lots[5]->available; ?>"
                    data-area="<?php echo $lots[5]->area; ?>"
                    data-number="<?php echo $lots[5]->number; ?>"
                    id="lot-<?php echo $lots[5]->id; ?>"
                    class="cls-1" 
                    points="487.94 103.84 473.7 99.58 473.7 134.96 487.94 138.72 487.94 103.84"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[4]->id; ?>)"
                    data-available="<?php echo $lots[4]->available; ?>"
                    data-area="<?php echo $lots[4]->area; ?>"
                    data-number="<?php echo $lots[4]->number; ?>"
                    id="lot-<?php echo $lots[4]->id; ?>"
                    class="cls-1" 
                    points="502.18 108.03 487.94 103.84 487.94 138.72 502.18 142.87 502.18 108.03"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[3]->id; ?>)"
                    data-available="<?php echo $lots[3]->available; ?>"
                    data-area="<?php echo $lots[3]->area; ?>"
                    data-number="<?php echo $lots[3]->number; ?>"
                    id="lot-<?php echo $lots[3]->id; ?>"
                    class="cls-1" 
                    points="517.02 111.65 502.18 108.03 502.18 142.87 517.02 146.83 517.02 111.65"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[2]->id; ?>)"
                    data-available="<?php echo $lots[2]->available; ?>"
                    data-area="<?php echo $lots[2]->area; ?>"
                    data-number="<?php echo $lots[2]->number; ?>"
                    id="lot-<?php echo $lots[2]->id; ?>"
                    class="cls-1" 
                    points="531.65 115.46 517.02 111.65 517.02 146.83 531.65 150.78 531.65 115.46"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[1]->id; ?>)"
                    data-available="<?php echo $lots[1]->available; ?>"
                    data-area="<?php echo $lots[1]->area; ?>"
                    data-number="<?php echo $lots[1]->number; ?>"
                    id="lot-<?php echo $lots[1]->id; ?>"
                    class="cls-1" 
                    points="546.69 119.15 531.65 115.46 531.65 150.78 546.69 154.84 546.69 119.15"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[0]->id; ?>)"
                    data-available="<?php echo $lots[0]->available; ?>"
                    data-area="<?php echo $lots[0]->area; ?>"
                    data-number="<?php echo $lots[0]->number; ?>"
                    id="lot-<?php echo $lots[0]->id; ?>"
                    class="cls-1" 
                    points="560.73 123.35 546.69 119.15 546.69 154.84 560.73 158.1 560.73 123.35"/>
                    <!-- end 17 a 1 -->
                    <!-- lotes 18 a 32 -->
                    <polygon 
                    @click="getLotById(<?php echo $lots[17]->id; ?>)"
                    data-available="<?php echo $lots[17]->available; ?>"
                    data-area="<?php echo $lots[17]->area; ?>"
                    data-number="<?php echo $lots[17]->number; ?>"
                    id="lot-<?php echo $lots[17]->id; ?>"
                    class="cls-1" 
                    points="341.57 112.41 342.36 142.87 356.6 146.83 356.6 115.46 341.57 110.63 341.57 112.41"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[18]->id; ?>)"
                    data-available="<?php echo $lots[18]->available; ?>"
                    data-area="<?php echo $lots[18]->area; ?>"
                    data-number="<?php echo $lots[18]->number; ?>"
                    id="lot-<?php echo $lots[18]->id; ?>"
                    class="cls-1" 
                    points="371.24 150.78 356.6 146.83 356.6 115.46 371.24 120.19 371.24 150.78"/><polygon 
                    @click="getLotById(<?php echo $lots[19]->id; ?>)"
                    data-available="<?php echo $lots[19]->available; ?>"
                    data-area="<?php echo $lots[19]->area; ?>"
                    data-number="<?php echo $lots[19]->number; ?>"
                    id="lot-<?php echo $lots[19]->id; ?>"
                    class="cls-1" 
                    points="385.87 154.84 371.24 150.78 371.24 120.19 385.87 124.9 385.87 154.84"/><polygon 
                    @click="getLotById(<?php echo $lots[20]->id; ?>)"
                    data-available="<?php echo $lots[20]->available; ?>"
                    data-area="<?php echo $lots[20]->area; ?>"
                    data-number="<?php echo $lots[20]->number; ?>"
                    id="lot-<?php echo $lots[20]->id; ?>"
                    class="cls-1" 
                    points="400.51 159.09 385.87 154.84 385.87 124.9 400.51 128.73 400.51 159.09"/><polygon 
                    @click="getLotById(<?php echo $lots[21]->id; ?>)"
                    data-available="<?php echo $lots[21]->available; ?>"
                    data-area="<?php echo $lots[21]->area; ?>"
                    data-number="<?php echo $lots[21]->number; ?>"
                    id="lot-<?php echo $lots[21]->id; ?>"
                    class="cls-1" 
                    points="415.15 162.85 400.51 159.09 400.51 128.73 415.15 133.12 415.15 162.85"/><polygon 
                    @click="getLotById(<?php echo $lots[22]->id; ?>)"
                    data-available="<?php echo $lots[22]->available; ?>"
                    data-area="<?php echo $lots[22]->area; ?>"
                    data-number="<?php echo $lots[22]->number; ?>"
                    id="lot-<?php echo $lots[22]->id; ?>"
                    class="cls-1" 
                    points="429.79 166.81 415.15 162.85 415.15 133.12 429.79 136.34 429.79 166.81"/><polygon 
                    @click="getLotById(<?php echo $lots[23]->id; ?>)"
                    data-available="<?php echo $lots[23]->available; ?>"
                    data-area="<?php echo $lots[23]->area; ?>"
                    data-number="<?php echo $lots[23]->number; ?>"
                    id="lot-<?php echo $lots[23]->id; ?>"
                    class="cls-1" 
                    points="444.23 171.35 429.79 166.81 429.79 136.34 444.23 140.69 444.23 171.35"/><polygon 
                    @click="getLotById(<?php echo $lots[24]->id; ?>)"
                    data-available="<?php echo $lots[24]->available; ?>"
                    data-area="<?php echo $lots[24]->area; ?>"
                    data-number="<?php echo $lots[24]->number; ?>"
                    id="lot-<?php echo $lots[24]->id; ?>"
                    class="cls-1" 
                    points="459.06 174.91 444.23 171.35 444.23 140.69 459.06 144.45 459.06 174.91"/><polygon 
                    @click="getLotById(<?php echo $lots[25]->id; ?>)"
                    data-available="<?php echo $lots[25]->available; ?>"
                    data-area="<?php echo $lots[25]->area; ?>"
                    data-number="<?php echo $lots[25]->number; ?>"
                    id="lot-<?php echo $lots[25]->id; ?>"
                    class="cls-1" 
                    points="473.7 178.87 459.06 174.91 459.06 144.45 473.7 148.21 473.7 178.87"/><polygon 
                    @click="getLotById(<?php echo $lots[26]->id; ?>)"
                    data-available="<?php echo $lots[26]->available; ?>"
                    data-area="<?php echo $lots[26]->area; ?>"
                    data-number="<?php echo $lots[26]->number; ?>"
                    id="lot-<?php echo $lots[26]->id; ?>"
                    class="cls-1" 
                    points="487.94 182.83 473.7 178.87 473.7 148.21 487.94 152.17 487.94 182.83"/><polygon 
                    @click="getLotById(<?php echo $lots[27]->id; ?>)"
                    data-available="<?php echo $lots[27]->available; ?>"
                    data-area="<?php echo $lots[27]->area; ?>"
                    data-number="<?php echo $lots[27]->number; ?>"
                    id="lot-<?php echo $lots[27]->id; ?>"
                    class="cls-1" 
                    points="502.18 186.78 487.94 182.83 487.94 152.17 502.18 155.73 502.18 186.78"/><polygon 
                    @click="getLotById(<?php echo $lots[28]->id; ?>)"
                    data-available="<?php echo $lots[28]->available; ?>"
                    data-area="<?php echo $lots[28]->area; ?>"
                    data-number="<?php echo $lots[28]->number; ?>"
                    id="lot-<?php echo $lots[28]->id; ?>"
                    class="cls-1" 
                    points="517.02 190.74 502.18 186.78 502.18 155.73 517.02 160.28 517.02 190.74"/><polygon 
                    @click="getLotById(<?php echo $lots[29]->id; ?>)"
                    data-available="<?php echo $lots[29]->available; ?>"
                    data-area="<?php echo $lots[29]->area; ?>"
                    data-number="<?php echo $lots[29]->number; ?>"
                    id="lot-<?php echo $lots[29]->id; ?>"
                    class="cls-1" 
                    points="531.65 194.5 517.02 190.74 517.02 160.28 531.65 164.43 531.65 194.5"/><polygon 
                    @click="getLotById(<?php echo $lots[30]->id; ?>)"
                    data-available="<?php echo $lots[30]->available; ?>"
                    data-area="<?php echo $lots[30]->area; ?>"
                    data-number="<?php echo $lots[30]->number; ?>"
                    id="lot-<?php echo $lots[30]->id; ?>"
                    class="cls-1" 
                    points="546.69 198.65 531.65 194.5 531.65 164.43 546.69 168.19 546.69 198.65"/><polygon 
                    @click="getLotById(<?php echo $lots[31]->id; ?>)"
                    data-available="<?php echo $lots[31]->available; ?>"
                    data-area="<?php echo $lots[31]->area; ?>"
                    data-number="<?php echo $lots[31]->number; ?>"
                    id="lot-<?php echo $lots[31]->id; ?>"
                    class="cls-1" 
                    points="560.73 202.41 546.69 198.65 546.69 168.19 560.73 172.34 560.73 202.41"/>
                    <!-- end 18 a 32 -->
                    <!-- lotes 47 a 33 -->
                    <polygon 
                    @click="getLotById(<?php echo $lots[46]->id; ?>)"
                    data-available="<?php echo $lots[46]->available; ?>"
                    data-area="<?php echo $lots[46]->area; ?>"
                    data-number="<?php echo $lots[46]->number; ?>"
                    id="lot-<?php echo $lots[46]->id; ?>"
                    class="cls-1" 
                    points="341.57 173.23 356.6 177.39 356.6 146.83 342.36 142.87 341.57 173.23"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[45]->id; ?>)"
                    data-available="<?php echo $lots[45]->available; ?>"
                    data-area="<?php echo $lots[45]->area; ?>"
                    data-number="<?php echo $lots[45]->number; ?>"
                    id="lot-<?php echo $lots[45]->id; ?>"
                    class="cls-1" 
                    points="371.24 181.54 356.6 177.39 356.6 146.83 371.24 150.78 371.24 181.54"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[44]->id; ?>)"
                    data-available="<?php echo $lots[44]->available; ?>"
                    data-area="<?php echo $lots[44]->area; ?>"
                    data-number="<?php echo $lots[44]->number; ?>"
                    id="lot-<?php echo $lots[44]->id; ?>"
                    class="cls-1" 
                    points="385.87 185.3 371.24 181.54 371.24 150.78 385.87 154.84 385.87 185.3"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[43]->id; ?>)"
                    data-available="<?php echo $lots[43]->available; ?>"
                    data-area="<?php echo $lots[43]->area; ?>"
                    data-number="<?php echo $lots[43]->number; ?>"
                    id="lot-<?php echo $lots[43]->id; ?>"
                    class="cls-1" 
                    points="400.51 189.35 385.87 185.3 385.87 154.84 400.51 159.09 400.51 189.35"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[42]->id; ?>)"
                    data-available="<?php echo $lots[42]->available; ?>"
                    data-area="<?php echo $lots[42]->area; ?>"
                    data-number="<?php echo $lots[42]->number; ?>"
                    id="lot-<?php echo $lots[42]->id; ?>"
                    class="cls-1" 
                    points="415.15 193.11 400.51 189.35 400.51 159.09 415.15 162.85 415.15 193.11"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[41]->id; ?>)"
                    data-available="<?php echo $lots[41]->available; ?>"
                    data-area="<?php echo $lots[41]->area; ?>"
                    data-number="<?php echo $lots[41]->number; ?>"
                    id="lot-<?php echo $lots[41]->id; ?>"
                    class="cls-1" 
                    points="429.79 197.46 415.15 193.11 415.15 162.85 429.79 166.81 429.79 197.46"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[40]->id; ?>)"
                    data-available="<?php echo $lots[40]->available; ?>"
                    data-area="<?php echo $lots[40]->area; ?>"
                    data-number="<?php echo $lots[40]->number; ?>"
                    id="lot-<?php echo $lots[40]->id; ?>"
                    class="cls-1" 
                    points="444.23 201.03 429.79 197.46 429.79 166.81 444.23 171.35 444.23 201.03"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[39]->id; ?>)"
                    data-available="<?php echo $lots[39]->available; ?>"
                    data-area="<?php echo $lots[39]->area; ?>"
                    data-number="<?php echo $lots[39]->number; ?>"
                    id="lot-<?php echo $lots[39]->id; ?>"
                    class="cls-1" 
                    points="459.06 205.18 444.23 201.03 444.23 171.35 459.06 174.91 459.06 205.18"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[38]->id; ?>)"
                    data-available="<?php echo $lots[38]->available; ?>"
                    data-area="<?php echo $lots[38]->area; ?>"
                    data-number="<?php echo $lots[38]->number; ?>"
                    id="lot-<?php echo $lots[38]->id; ?>"
                    class="cls-1" 
                    points="473.7 209.33 459.06 205.18 459.06 174.91 473.7 178.87 473.7 209.33"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[37]->id; ?>)"
                    data-available="<?php echo $lots[37]->available; ?>"
                    data-area="<?php echo $lots[37]->area; ?>"
                    data-number="<?php echo $lots[37]->number; ?>"
                    id="lot-<?php echo $lots[37]->id; ?>"
                    class="cls-1" 
                    points="487.94 212.89 473.7 209.33 473.7 178.87 487.94 182.83 487.94 212.89"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[36]->id; ?>)"
                    data-available="<?php echo $lots[36]->available; ?>"
                    data-area="<?php echo $lots[36]->area; ?>"
                    data-number="<?php echo $lots[36]->number; ?>"
                    id="lot-<?php echo $lots[36]->id; ?>"
                    class="cls-1" 
                    points="502.18 217.44 487.94 212.89 487.94 182.83 502.18 186.78 502.18 217.44"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[35]->id; ?>)"
                    data-available="<?php echo $lots[35]->available; ?>"
                    data-area="<?php echo $lots[35]->area; ?>"
                    data-number="<?php echo $lots[35]->number; ?>"
                    id="lot-<?php echo $lots[35]->id; ?>"
                    class="cls-1" 
                    points="517.02 221.79 502.18 217.44 502.18 186.78 517.02 190.74 517.02 221.79"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[34]->id; ?>)"
                    data-available="<?php echo $lots[34]->available; ?>"
                    data-area="<?php echo $lots[34]->area; ?>"
                    data-number="<?php echo $lots[34]->number; ?>"
                    id="lot-<?php echo $lots[34]->id; ?>"
                    class="cls-1" 
                    points="531.65 225.55 517.02 221.79 517.02 190.74 531.65 194.5 531.65 225.55"/>
                    <polygon 
                    @click="getLotById(<?php echo $lots[33]->id; ?>)"
                    data-available="<?php echo $lots[33]->available; ?>"
                    data-area="<?php echo $lots[33]->area; ?>"
                    data-number="<?php echo $lots[33]->number; ?>"
                    id="lot-<?php echo $lots[33]->id; ?>"
                    class="cls-1" 
                    points="546.69 228.52 531.65 225.55 531.65 194.5 546.69 198.65 546.69 228.52"/>
                    <path 
                    @click="getLotById(<?php echo $lots[32]->id; ?>)"
                    data-available="<?php echo $lots[32]->available; ?>"
                    data-area="<?php echo $lots[32]->area; ?>"
                    data-number="<?php echo $lots[32]->number; ?>"
                    id="lot-<?php echo $lots[32]->id; ?>"
                    class="cls-1" 
                    d="M560.73,225.55V202.41l-14-3.76v29.87S559.35,228.72,560.73,225.55Z"/>
                </g></g></svg>
            </div>
        </div>
    </section>
    
    <!-- start section -->
    
    <br><br>
    <!-- start footer -->
    <!-- Start modal -->
    <div class="modal fade" id="modal-lots" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <img 
                                loading="lazy"
                                src="landing/images/logos/Recurso-2.svg"
                                class="img-fluid mb-3 w-200px" 
                                alt="Logo Boreana" 
                                width="180" 
                            />
                        </div>
                        <div class="col-6" style="text-align: right;">
                            <a @click="closeModal()">
                                <i class="ti-close"></i>
                            </a>
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center text-center">
                        <div class="col-6 custom-border-right">
                            <p class="custom-font-size text-center">
                                Área Total en (m<sup>2</sup>):  <span x-text="lot.area"></span>
                            </p>
                        </div>
                        <div class="col-6">
                            <p class="custom-font-size text-center">
                                Numero de Lote:  <span x-text="lot.number"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 18 meses 15%: <span x-text="lot.price_18_15"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 18 meses 25%: <span x-text="lot.price_18_25"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 18 meses 30%: <span x-text="lot.price_18_30"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 24 meses 15%: <span x-text="lot.price_24_15"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 24 meses 25%: <span x-text="lot.price_24_25"></span>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Enganche 24 meses 30%: <span x-text="lot.price_24_30"></span>
                            </p>
                        </div>
                    </div>
                    <p x-show="lot.available === 1" class="custom-font-size text-center">
                    Este lote se encuentra <strong>Disponible</strong>, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 2" class="custom-font-size text-center">
                    Este lote se encuentra <strong>Apartado</strong>, sin embargo, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 3" class="custom-font-size text-center">
                        Lo sentimos! Este lote ya fue <strong>Vendido</strong> , sin embargo, para mayor información acerca de nuestros lotes, favor de comunicarse vía Whatsapp con uno de nuestros asesores. ¡Gracias!
                    </p>
                    <div class="d-grid justify-content-center">
                        <a href="https://wa.link/0x9ty3" class="btn btn-client" target="_blank"><i class="fab fa-instagram"></i> Whatssap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <footer class="padding-six-tb xs-padding-thirteen-tb bg-client pb-4">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-12 col-lg-4 col-md-6 order-1 order-lg-1 text-center text-md-end">
                    <div id="img" class="social-icon-style-12 margin-20px-bottom justify-content-center">
                        <img class="margin-15px-bottom" src="landing/images/logos/Recurso-2.svg" alt="" style="width: 80%;">
                    </div>
                    <div class="social-icon-style-12">
                        <ul class="extra-small-icon light">
                            <li><a class="facebook" href="https://www.facebook.com/AriaResidencialMID/" target="_blank"><i class="fab fa-facebook"></i></a></li>
                            <li><a class="instagram" href="https://www.instagram.com/aria.residencial/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-lg-8 order-2 order-lg-2 text-center text-lg-start last-paragraph-no-margin md-margin-25px-top">
                    <p class="text-client">Privada de 99 Lotes Residenciales, rodeada de naturaleza, amenidades y acceso controlado. <br>
                    Ubicada al norte de la ciudad de Mérida en Cholul con cercanía a las mejores Universidades, Escuelas,Hospitales y Plazas comerciales. Crea una vida tranquila y familiar con contacto natural sin salir de la ciudad. <br>
                    Lotes residenciales desde 240 m2 hasta 325 m2</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col justify-content-center text-center">
                    <p class="text-client">
                    <a href="admin/index.php" class="mx-2"><i class="fas fa-user text-client"></i></a>&copy; Aria 2023 <span id="currentYear"></span> – Desarrollado por <a href="https://www.buho-solutions.com/" target="_blank" class="text-decoration-line-bottom  text-client font-weight-500">Búho Solutions</a></p>

                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    <!-- javascript -->
    <script type="text/javascript" src="landing/js/jquery.min.js"></script>
    <script type="text/javascript" src="landing/js/theme-vendors.min.js"></script>
    <script type="text/javascript" src="landing/js/main.js"></script>
    <script type="text/javascript" src="landing/js/contact.js"></script>

    <!-- revolution slider -->
    <script type="text/javascript" src="landing/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="landing/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!-- Popover -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <!-- Toast -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- App -->
    <script type="text/javascript" src="landing/js/app.js"></script>
</body>
</html>