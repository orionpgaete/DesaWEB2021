<?php 

    require 'includes/funciones.php';
    $inicio = true;
    incluirTemplate('header');
?>
    <!--contenido personal-->
    <section class="hero">
        <div class="contenido-hero">
            <h2 class="titulo" >Analisis, Diseño y Desarrollo de Aplicaciones WEB</h2>
            <div class="ubicacion">
                <p>
                  <span style="font-size: 48px; color: Dodgerblue;">
                    <i class="fas fa-bullseye"></i>
                  </span>
                 Temuco, Chile</p>                
            </div>
            <a class="boton" href="contacto.html">Contactar</a>
                     
        </div>
    </section>

<main class="contenedor sombra">
    <!--contenido servicios-->
    <div class="servicios">
        <section class="servicio">
            <h3>Diseño WEB</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff;">
                    <i class="fab fa-html5"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                Quos saepe commodi et nisi dolorem aspernatur sit, velit recusandae. Non harum facere quibusdam vel dolorum nobis ducimus debitis commodi ad! Harum!</p>
       </section>
       <section class="servicio">
            <h3>Aplicaciones Moviles</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff;">
                    <i class="fas fa-robot"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab reprehenderit quidem non maiores odio? Minus, pariatur voluptas dolorem earum nisi, 
                harum autem perferendis sed vel ex velit, nobis cumque nesciunt?</p>
        </section>
        <section class="servicio">
            <h3>E-Commerce</h3>
            <div class="iconos">
                <span style="font-size: 40px; color: #fff">
                    <i class="fas fa-dumpster"></i>
                  </span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore quasi, deserunt et nulla aperiam sint alias. Officia, 
                sunt veritatis. Distinctio maiores veniam modi aliquid eaque! Reiciendis porro nobis saepe quibusdam.</p>

                <div>
                <iframe width='640' height='360' src='https://roundme.com/embed/787636/2484658' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </section>
        </div>
</main>
    <!--Formulario de Contactos-->
    <div>
        <h2>Contacto</h2>
            <form action="#" method="POST">
                <div>
                    <label>Nombre</label>
                    <input type="text" name="nombre" placeholder="Nombre" required>
                    
                    <label>Telefono</label>
                    <input type="tel" name="Telefono" placeholder="Telefono" required>
                    
                    <label>Correo Electronico</label>
                    <input type="mail" name="email" placeholder="email" required>

                    <label>Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
                </div>    
                <div>
                    <input type="submit" value="Enviar">
                </div>
            </form>
    </div>

<?php
    incluirTemplate('footer');
?>