<div role="navigation" class="navbar navbar-inverse"> 
    <!--<div class="container-fluid text-center">-->
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> Memorándums<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Agregar datos', ['controller' => 'Memos','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                       
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-child"></i> Niños<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'FrmNino','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-heartbeat"></i> C. Signos Vitales<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'CuadroSignosVitales','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bank"></i> Centros Infantiles<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Cim','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Personal<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Personal','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> Bienes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Activos','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i> Aportes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Aportes','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Alimentos<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Alimentos','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>

                <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-out']).'Cerrar sesión', ['controller' => 'Users','action' => 'logout'], array('escape'=>false) ); ?>
                </li>
           </ul>
        </div>
    <!--</div>-->
</div>
<div class="alert-success">
    <span class="text-left"> Sesión de administrativa</span>
    <span class="pull-right"><i class="fa fa-user"></i> Bienvenido</span>
</div>
<br/><br/>