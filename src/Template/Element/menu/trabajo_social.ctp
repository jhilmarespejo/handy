<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span> 
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="#"> <i class="fa fa-file"></i>Nuevo registro</a></li>
                    <li><a href="#"> <i class="fa fa-book"></i> Registros anteriores </a></li>
                    <li><a href="#"> <i class="fa fa-bank"></i> Centros infantiles </a></li>
                     <li><a href="#"> <i class="fa fa-list-alt"></i> Reportes </a></li>
                     <li><a href="#"> <i class="fa fa-wrench"></i> Otros instrumentos </a></li>
                    <?php
                     if( $usuario ) {                         
                        ?>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-users']).'Cerrar sesión', ['controller' => 'Users','action' => 'logout'], array('escape'=>false) ); ?></li>
                    <?php } else { ?>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-users']).'Iniciar sesión', ['controller' => 'Users','action' => 'login'], array('escape'=>false) ); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>