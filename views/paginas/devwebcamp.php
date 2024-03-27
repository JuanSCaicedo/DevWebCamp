<main class="devwebcamp">
    <h2 class="devwebcamp__heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="devwebcamp__descripcion">Conoce la conferencia más importante de latinoamérica</p>

    <div class="devwebcamp__grid">

        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_devwebcamp.avif" type="image/avif">
                <source srcset="build/img/sobre_devwebcamp.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_devwebcamp.jpg"
                    alt="Imgen DevWebCamp">
            </picture>
        </div>

        <div class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">
                Sit amet consectetur adipisicing elit. A, vel optio ipsam corporis id placeat aliquam
                est architecto autem aut itaque laborum maiores earum, velit dolores consectetur voluptates repudiandae
                reiciendis. Sit amet consectetur adipisicing elit. A, vel optio ipsam corporis id placeat aliquam
                est architecto autem aut itaque laborum maiores earum, velit dolores consectetur voluptates repudiandae
                reiciendis.
            </p>
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">
                Autem aut itaque laborum maiores earum, velit dolores consectetur voluptates repudiandae
                reiciendis. Sit amet consectetur adipisicing elit. A, vel optio ipsam corporis id placeat aliquam
                est architecto autem aut itaque laborum maiores earum, velit dolores consectetur voluptates repudiandae
                reiciendis.
            </p>
        </div>

    </div>
</main>

<?php
$js = true; // Define la variable $js con el valor true si es necesario
?>