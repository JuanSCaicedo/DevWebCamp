<main class="auth">
    <h2 class="auth__heading">
        <?php echo $titulo; ?>
    </h2>
    <p class="auth__texto">Registrate en DevWebcamp</p>

    <?php
    require_once __DIR__.'/../templates/alertas.php';
    ?>

    <form method="POST" action="/registro" class="formulario">

        <div class="formulario__campo">
            <label for="nombre" class="formulario__label">Nombre</label>
            <input type="text" class="formulario__input" id="nombre" placeholder="Tu Nombre" name="nombre"
                value="<?php echo $usuario->nombre; ?>">
        </div>

        <div class="formulario__campo">
            <label for="apellido" class="formulario__label">Apellido</label>
            <input type="text" class="formulario__input" id="apellido" placeholder="Tu Apellido" name="apellido"
                value="<?php echo $usuario->apellido; ?>">
        </div>

        <div class="formulario__campo">
            <label for="email" class="formulario__label">Email</label>
            <input type="email" class="formulario__input" id="email" placeholder="Tu Email" name="email"
                value="<?php echo $usuario->email; ?>">
        </div>

        <div class="formulario__campo">
            <label for="password" class="formulario__label">Password</label>
            <input type="password" class="formulario__input" id="password" placeholder="Tu Password" name="password">
        </div>

        <div class="formulario__campo">
            <label for="password2" class="formulario__label">Repetir Password</label>
            <input type="password" class="formulario__input" id="password2" placeholder="Repetir Password"
                name="password2">
        </div>

        <?php
        require_once __DIR__.'/../templates/captcha.php';
        ?>

        <input type="submit" class="formulario__submit" value="Crear Cuenta">
    </form>

    <div class="acciones">
        <a href="/login" class="acciones__enlace">¿Ya tienes cuenta? Iniciar Sesión</a>
        <a href="/olvide" class="acciones__enlace">¿Olvidaste tu password?</a>
    </div>
</main>

<?php
$js = true; // Define la variable $js con el valor true si es necesario
?>
