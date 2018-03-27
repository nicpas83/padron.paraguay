<?php
$this->Html->css('dashboard', array('inline' => false));
?>
<div class="diapositiva">
    <div class="row cabecera">
        <div class="col-sm-12 pt4 pb7">            
            <h2>
                <span class="subtitulo">San Lorenzo</span> 
                <span class="divisor">|</span> 
                <span class="titulo">Tablero de Control</span> 
            </h2>
        </div>
    </div>
    <div class="row cuerpo">
        <div class="pane-content">
            <div class="col-sm-4 link text-center mb30">
                <a href="<?php echo WWW; ?>pages/dashboard-socios" style="display: inline-block;">
                    <div class="circulo dgsdes go1 animated rubberBand"><i class="fa fa-users" aria-hidden="true"></i></div>
                    <h1 class="area">Socios</h1>
                    <p>Géneros, Categorías, Antigüedades, Rangos Etareos.</p>
                </a>
            </div>
            <div class="col-sm-4 link text-center mb30">
                <a href="<?php echo WWW; ?>pages/dashboard-cuota-social" style="display: inline-block;">
                    <div class="circulo dgdesc go1 animated rubberBand"><i class="fa fa-dollar" aria-hidden="true"></i></div>
                    <h1 class="area">Cuota Social</h1>
                    <p>Moras 3/6/12 Años, Socios Nuevos Mensuales y Anuales</p>
                </a> 
            </div>
            <div class="col-sm-4 link text-center mb30">
                <a href="<?php echo WWW; ?>pages/abonos" style="display: inline-block;">
                    <div class="circulo dgmepc go1 animated rubberBand"><i class="fa fa-ticket" aria-hidden="true"></i></div>
                    <h1 class="area">Abonos</h1>
                    <p>Sectores y Secciones del Estadio</p>
                </a>
            </div>
            <div class="col-sm-4 link text-center mt60">
                <a href="<?php echo WWW; ?>pages/dashboard-ingresos">
                    <div class="circulo cci animated rubberBand"><i class="fa fa-futbol-o" aria-hidden="true"></i></div>
                    <h1 class="area">Ingresos</h1>
                    <p>Ingresos a los Partidos</p>
                </a>
            </div>
            <div class="col-sm-4 link text-center mt60">
                <a href="<?php echo WWW; ?>pages/dashboard-geolocalizacion">
                    <div class="circulo resumen animated rubberBand"><i class="fa fa-globe" aria-hidden="true"></i></div>
                    <h1 class="area">Geolocalización</h1>
                    <p>Barrios, Localidades, Provincias, Países</p>

                </a>
            </div>
            <div class="col-sm-4 link text-center mt60">
                <a href="<?php echo WWW; ?>pages/dashboard-economia">
                    <div class="circulo roac animated rubberBand"><i class="fa fa-credit-card" aria-hidden="true"></i></div>
                    <h1 class="area">Medios de Pago</h1>
                    <p>Efectivo, Tipos de Tarjetas</p>
                </a>
            </div>
        </div>
    </div>
</div>