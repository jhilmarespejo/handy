<!-- menu invitado-->
<div role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
        <?php echo $this->Html->image('logo.png', ['class' => 'logo1']); ?>
        <?php echo $this->Html->image('adepi.png', ['class' => 'logo2']); ?>
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
                    
                    <li>
                        <?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-list-alt']).'Reportes', ['controller' => 'Index','action' => 'reports'], array('escape'=>false) ); ?>
                    </li>
                    <?php
                     if( $usuario ) {                         
                        ?>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-users']).'Cerrar sesión', ['controller' => 'Users','action' => 'logout'], array('escape'=>false) ); ?></li>
                    <?php } else { ?>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-in']).'Iniciar sesión', ['controller' => 'Users','action' => 'login'], array('escape'=>false) ); ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <br/><br/>
    <div class="alert-success text-right">
        <i class="fa fa-user"></i> Bienvenido usuario  <?php echo (isset($usuario)) ? $usuario : ' Invitado'; ?>
    </div>
    <br/><br/>

    