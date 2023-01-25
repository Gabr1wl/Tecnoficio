
<!-- PHP INCLUDES -->

<?php

    include "connect.php";
    include "Includes/templates/header.php";
    include "Includes/templates/navbar.php";

?>


    <section id="about" class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about_content" style="text-align: center;">
                        
                        <h2>Tecnoficio</h2>
                        <img src="Design/images/suitcase.png" alt="logo" style="width:200px">
                        <p style="color: #777">
                        Tecnoficio es un servicio web donde todos pueden solicitar servicios y estos serán atendidos a domicilio, solo debes hacer tu solicitud y automáticamente uno de nuestros asociados estará en la puerta de tu casa.
                        </p>
                       
                    </div>
                </div>
                <div class="col-md-6  d-none d-md-block">
                    <div class="about_img" style = "overflow:hidden">
                        <img class="about_img_1" src="Design/images/bodas.jpg" alt="about-1">
                        <img class="about_img_2" src="Design/images/café2.jpg" alt="about-2">
                        <img class="about_img_3" src="Design/images/educacion.jpg" alt="about-3">
                    </div>
                </div>
            </div>
        </div>

        <div style="padding:0px 100px; border:0px solid none">
        <details style="background:#eee; border-radius:7px; padding:10px 20px; margin-bottom:10px;">
            <summary>¿Te imaginas?</summary>
            <p style="padding:0px 30px">
            Imagina que un día tu médico de cabecera te queda mal porque tuvo algo que hacer o se encuentra fuera de casa y no puede atenderte, en Tecnoficio puedes encontrar una cantidad de médicos certificados que estarán a la espera de tu solicitud con un solo click.
            </p>
        </details>
        <details style="background:#eee; border-radius:7px; padding:10px 20px; margin-bottom:10px;">
            <summary>Todo desde la comidad de tu hogar</summary>
            <p style="padding:0px 30px">
            ¡Así es! Solo necesitas una conexión a internet, un dispositivo móvil, una tablet o una computadora. ¡Así de simple, solo una solicitud con tu servicio deseado, tu nombre, tu dirección y listo! 
            </p>
        </details>
    </div>
    </section>
    

    <br><br>
    
  

    <?php include "Includes/templates/footer.php"; ?>