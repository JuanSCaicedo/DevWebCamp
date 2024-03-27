<aside class="dashboard__sidebar">
    <nav class="dashboard__menu">

        <div class="dashboard__item">
            <a href="/admin/dashboard"
                class="dashboard__enlace <?php echo pagina_actual('/dashboard') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-house dashboard__icono dashboard__icon"></i>
                <span class="dashboard__menu-texto dashboard__text">
                    Inicio
                </span>
            </a>
        </div>

        <div class="dashboard__item">
            <a href="/admin/ponentes"
                class="dashboard__enlace <?php echo pagina_actual('/ponentes') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-microphone dashboard__icono dashboard__icon"></i>
                <span class="dashboard__menu-texto dashboard__text">
                    Ponentes
                </span>
            </a>
        </div>

        <div class="dashboard__item">
            <a href="/admin/eventos"
                class="dashboard__enlace <?php echo pagina_actual('/eventos') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-calendar dashboard__icono dashboard__icon"></i>
                <span class="dashboard__menu-texto dashboard__text">
                    Eventos
                </span>
            </a>
        </div>

        <div class="dashboard__item">
            <a href="/admin/registrados"
                class="dashboard__enlace <?php echo pagina_actual('/registrados') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-users dashboard__icono"></i>
                <span class="dashboard__menu-texto dashboard__text">
                    Registrados
                </span>
            </a>
        </div>

        <div class="dashboard__item">
            <a href="/admin/regalos"
                class="dashboard__enlace <?php echo pagina_actual('/regalos') ? 'dashboard__enlace--actual' : ''; ?>">
                <i class="fa-solid fa-gift dashboard__icono dashboard__icon"></i>
                <span class="dashboard__menu-texto dashboard__text">
                    Regalos
                </span>
            </a>
        </div>
    </nav>
</aside>