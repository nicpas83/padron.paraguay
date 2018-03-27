<?php
$this->Html->script("fmw/jquery-jvectormap-2.0.2.min.js", array('inline' => false));
$this->Html->script("dashboard/comunas.js", array('inline' => false));
$this->Html->script('dashboard/massimple', array('inline' => false));
$this->Html->css('dashboard_massimple', array('inline' => false));
$this->Html->css("fmw/jquery-jvectormap-2.0.2.css", array('inline' => false));
?>

<div class="row mt25">
    <p class="ml20 text-success">Actualizado al: <span id="fecha_actualizacion"></span></p>
    <div class="col-lg-4">
        <div class="widget panel m0">
            <!-- panel body -->
            <div class="panel-body p0">
                <div class="chart" id="gaudge_total" style="height:200px;"></div>
            </div>
            <div class="panel-body p0">
                <ul class="nav nav-section nav-justified text-center">
                    <li>
                        <div class="section">
                            <span class="text-muted">Entregas</span>
                            <h4 class="nm" id="entregas_total"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section text-danger">
                            <span>Pendiente</span>
                            <h4 class="nm" id="pendientes_total"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <span class="text-muted">Total</span>
                            <h4 class="nm" id="total_total"></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="widget panel m0">
            <!-- panel body -->
            <div class="panel-body p0">
                <div class="chart" id="gaudge_exo" style="height:200px;"></div>
            </div>
            <div class="panel-body p0">
                <ul class="nav nav-section nav-justified text-center">
                    <li>
                        <div class="section">
                            <span class="text-muted">Entregas</span>
                            <h4 class="nm" id="entregas_exo"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section text-danger">
                            <span>Pendiente</span>
                            <h4 class="nm" id="pendientes_exo"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <span class="text-muted">Total</span>
                            <h4 class="nm" id="total_exo"></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="widget panel m0">
            <div class="panel-body p0">
                <div class="chart" id="gaudge_enacom" style="height:200px;"></div>
            </div>
            <div class="panel-body p0">
                <ul class="nav nav-section nav-justified text-center">
                    <li>
                        <div class="section">
                            <span class="text-muted">Entregas</span>
                            <h4 class="nm" id="entregas_enacom"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section text-danger">
                            <span>Pendiente</span>
                            <h4 class="nm" id="pendientes_enacom"></h4>
                        </div>
                    </li>
                    <li>
                        <div class="section">
                            <span class="text-muted">Total</span>
                            <h4 class="nm" id="total_enacom"></h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row mt30">
    <div class="col-lg-12">
        <div class="widget panel m0">
            <div class="panel-body p0">
                <div class="chart" id="meses" style="height:275px;"></div>
            </div>
        </div>
    </div>
</div>