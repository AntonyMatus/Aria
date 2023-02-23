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
    <meta name="description" content="Privada de 99 Lotes Residenciales, rodeada de naturaleza, amenidades y acceso controlado.
Ubicada al norte de la ciudad de Mérida en Cholul con cercanía a las mejores Universidades, Escuelas,Hospitales y Plazas comerciales. Crea una vida tranquila y familiar con contacto natural sin salir de la ciudad.
Lotes residenciales desde 240 m2 hasta 325 m2">
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
    <!-- start section -->
    
    <section id="cotizador" class="big-section2 border-color-medium-gray wow animate__fadeIn margin-four-top">
        <div id="container_imagen" class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center margin-2-rem-bottom lg-margin-5-rem-bottom md-margin-4-rem-bottom wow animate__fadeIn">
                    <h5 class="alt-font font-weight-700 text-center text-uppercase text-dark letter-spacing-minus-1px m-0 mb-3">Cotiza la disponibilidad de tu Smart Home</h5>
                </div>
                <div class="col-12 margin-four-bottom">
                    <div class="text-center">
                        Disponible<span class="color-option option-1"></span>
                        Apartado<span class="color-option option-2"></span>
                        No Disponible<span class="color-option option-3"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12  col-md-8 mx-auto text-center img-svg" >
            <!-- SVG -->
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
                                src="landing/images/logos/logo.svg"
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
                    <div class="row mb-3">
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Área Total en (m<sup>2</sup>): <span x-text="lot.area"></span> <br>
                            </p>
                        </div>
                        <div class="col-4">
                            <p class="custom-font-size">
                                Enganche (10%): <span x-text="lot.money_advance"></span> <br>
                            </p>
                        </div>
                        <div class="col-4 custom-border-right">
                            <p class="custom-font-size">
                                Precio Total: <span x-text="lot.total_price"></span>
                            </p>
                        </div>
                    </div>
                    <p x-show="lot.available === 1" class="custom-font-size text-center">
                        Para mayor información acerca de este smart home, favor de llenar el siguiente formulario y uno de nuestros asesores se pondrá en contacto a la brevedad posible. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 2" class="custom-font-size text-center">
                        Este smart home se encuentra <strong>Apartado</strong>, sin embargo, para mayor información acerca de nuestros smart homes, favor de llenar el siguiente formulario y uno de nuestros asesores se pondrá en contacto a la brevedad posible. ¡Gracias!
                    </p>
                    <p x-show="lot.available === 3" class="custom-font-size text-center">
                        Lo sentimos! Este smart home ya fue <strong>Vendido</strong> , sin embargo, nos puedes dejar tus datos y uno de nuestros asesores se comunicará contigo para compartirte información de nuestros smart homes disponibles.
                    </p>
                    <!-- <form @submit.prevent="onSubmitLotMail()" id="form-lot" x-show="lot.available === 1 || lot.available === 2">
                        <div class="row">
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="text" 
                                    name="first_name"
                                    placeholder="Nombre"
                                    x-model="contact_lot.first_name"
                                    required
                                />
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="text" 
                                    name="last_name" 
                                    placeholder="Apellido"
                                    x-model="contact_lot.last_name"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="email" 
                                    name="email"
                                    placeholder="Correo"
                                    x-model="contact_lot.email"
                                    required
                                />
                            </div>
                            <div class="form-group col-12 col-sm-6">
                                <input 
                                    type="number" 
                                    name="phone" 
                                    placeholder="Teléfono"
                                    x-model="contact_lot.phone"
                                    required
                                />
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <button type="submit" class="btn btn-client btn-box-shadow">
                                Enviar
                            </button>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->


    <footer class="padding-six-tb xs-padding-thirteen-tb bg-client pb-4">
        <div class="container">
            <div class="row align-items-center">
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


    <!-- start scroll to top -->

    <!-- <a class="btn-whatsapp-style-1 text-white" href="#" target="_blank">
        <i class="fab fa-whatsapp whatsapp-icon"></i>
    </a> -->
    <!-- end scroll to top -->
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
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/embed/v2.js"></script>
    <script>
        let formId = "1620aaaa-2183-4274-bb01-37ce65bbde4f";
        let portalId =  "23800252";
        let region = "na1";
     
        var newScript = document.createElement("script");
        var inlineScript = document.createTextNode("hbspt.forms.create({portalId:'"+portalId+"',formId:'"+formId+"',css:'', cssRequired: ''});");
        newScript.appendChild(inlineScript); 
        var target  = document.querySelector(".modal-body");
        target.appendChild(newScript);

    </script>
</body>

</html>