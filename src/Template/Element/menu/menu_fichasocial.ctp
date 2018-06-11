<!-- <div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
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
              <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Registro de la ficha social', ['controller' => 'FrmNino','action' => 'index'], array('escape'=>false) ); ?></li>
            </ul>
        </div>
</div> -->

<div role="navigation" class="navbar navbar-inverse"> 
    <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle collapsed">
            <span class="sr-only">Toggle navigation</span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span> 
            <span class="icon-bar"></span>
        </button>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
             <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-child"></i> Niños<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Registro de la ficha social', ['controller' => 'FrmNino','action' => 'index'], array('escape'=>false) ); ?></li>
                    <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'FrmNino','action' => 'reports'], array('escape'=>false) ); ?></li>
                </ul>
            </li>

        <?php
         if( $usuario ) {                         
            ?>
            <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-out']).'Cerrar sesión', ['controller' => 'Users','action' => 'logout'], array('escape'=>false) ); ?></li>
        <?php } else { ?>
            <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-out']).'Iniciar sesión', ['controller' => 'Users','action' => 'login'], array('escape'=>false) ); ?></li>
        <?php } ?>
        </ul>
    </div>
</div>