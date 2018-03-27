<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo getSystemConfiguration("empresa"); ?> :: <?php echo (isset($page_title) ? $page_title : $title_for_layout); ?></title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->element('fmw_includes');
        echo $this->element('js_vars');
        echo $this->Html->css('fmw/animate');
        echo $this->Html->css('fmw/fmw');
        echo $this->Html->css('fmw/generic');
        echo $this->Html->css('app');
        echo $this->Html->script('funciones_app');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="header" class="navbar"> 
            <div class="container-fluid header">
                <div class="col-sm-9">
                    <?php echo $this->element('menu'); ?>
                </div> 
                <div class="col-sm-3 pt2">
                    <?php echo $this->element('user_info'); ?>
                </div> 
                <?php
                if (isset(AppConfig::$array['push_server']['enabled']) && AppConfig::$array['push_server']['enabled']):
                    echo $this->element('notifications');
                endif;
                ?>
            </div>  
        </div>
        <div id="container" class="container-fluid">
            <div id="content">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->fetch('content'); ?>
            </div>
        </div>
        <div id="footer">
            <div class="container-fluid">
                <?php echo getSystemConfiguration("footer"); ?> | v<?php echo getSystemConfiguration("version"); ?>
            </div>         
        </div>
        <?php //echo $this->element('sql_dump'); ?>
        <?php if (isset(AppConfig::$array['site']['ajax']['loading']) && AppConfig::$array['site']['ajax']['loading']): ?>
        <div class="loadingAjax">
            <i class="fa fa-cog fa-spin"></i>
            <div><?php echo AppConfig::$array['site']['ajax']['loading']; ?></div>
        </div>
        <?php endif; ?>
    </body>
</html>
