<main class="pagina">
    <h2 class="pagina__heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="pagina__descripcion">Tu Boleto - Te recomendamos almacenarlo, puedes compartirlo en redes sociales.</p>

    <div <?php aos_animacion(); ?> class="boleto-virtual">
        <div class="boleto boleto--<?php echo strtolower($registro->paquete->nombre); ?> boleto--acceso">
            <div class="boleto__contenido">
                <h4 class="boleto__logo">&#60;DevWebCamp/></h4>
                <p class="boleto__plan"><?php echo $registro->paquete->nombre; ?></p>
                <p class="boleto__nombre"><?php echo $registro->usuario->nombre . " " . $registro->usuario->apellido; ?></p>
            </div>

            <p class="boleto__codigo"><?php echo '#' . $registro->token;?></p>
        </div>
    </div>
</main>

<?php
$js = true; // Define la variable $js con el valor true si es necesario
?>