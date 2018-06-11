
<!--<div>
    <?//php echo $this->Html->image('logo.png', ['class' => 'logo1']); ?>
    <?//php echo $this->Html->image('adepi.png', ['class' => 'logo2']); ?>
</div>-->
<!-- <nav role="navigation" class="navbar navbar-default">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Logotipo</a>
        </div>
 
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#">Acerca de</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
</nav>-->

<!-- <div role="navigation" class="navbar navbar-inverse navbar-fixed-top"> -->
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bank"></i> Centros Infantiles<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Cim','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Cim','action' => 'reports'], array('escape'=>false) ); ?></li>
                         <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Editar', ['controller' => 'Cim','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-child"></i> Niños<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Registro rápido', ['controller' => 'FrmNino','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Ficha social', ['controller' => 'fichasocial','action' => 'index'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'FrmNino','action' => 'reports'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Editar', ['controller' => 'FrmNino','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-heartbeat"></i> C. Signos Vitales<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'CuadroSignosVitales','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'CuadroSignosVitales','action' => 'reports'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Editar', ['controller' => 'CuadroSignosVitales','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-users"></i> Personal<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Personal','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Personal','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Editar', ['controller' => 'Personal','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> Bienes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Activos','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Activos','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-money"></i> Aportes<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Ingreso de aportes monetarios / no monetarios', ['controller' => 'Aportes','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Control mensual de  gastos de aportes de padres', ['controller' => 'Aportes','action' => 'gastos'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Control mensual de  gastos no monetarios', ['controller' => 'Aportes','action' => 'gastosNm'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Aportes','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cubes"></i> Alimentos<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-cart-plus']).'Ingreso ', ['controller' => 'Alimentos','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-cart-arrow-down']).'Saldos', ['controller' => 'Alimentos','action' => 'saldos'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Alimentos','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-mortar-board"></i> Modelo de Calidad<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Modelo','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Modelo','action' => 'reports'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-line-chart"></i> Comité de Calidad<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Cdc','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Cdc','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cogs"></i> Planes de Mejoramiento<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Pdm','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Pdm','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-search-plus"></i> Seguimiento Comité de Calidad<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Nuevo registro', ['controller' => 'Spdm','action' => 'add'], array('escape'=>false) ); ?></li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Reportes', ['controller' => 'Spdm','action' => 'reports'], array('escape'=>false) ); ?></li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-plus"></i> Usuarios<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Agregar ', ['controller' => 'Users','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Editar', ['controller' => 'Users','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li> 
                <li> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart"></i> Evaluación<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Agregar datos', ['controller' => 'Evaluacion','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-edit']).'Listar', ['controller' => 'Evaluacion','action' => 'index'], array('escape'=>false) ); ?>
                        </li>
                    </ul>
                </li>
                <li> 
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-file-text-o"></i> Memorándums<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-table']).'Agregar datos', ['controller' => 'Memos','action' => 'add'], array('escape'=>false) ); ?>
                        </li>
                       
                    </ul>
                </li>
                <?php
                 if( $usuario ) {                         
                    ?>
                    <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-out']).'Cerrar sesión', ['controller' => 'Users','action' => 'logout'], array('escape'=>false) ); ?></li>
                <?php } else { ?>
                    <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-sign-out']).'Iniciar sesión', ['controller' => 'Users','action' => 'login'], array('escape'=>false) ); ?></li>
                <?php } ?>
 <!-- <li><?php echo $this->Html->link( $this->Html->tag('i', '&nbsp;', ['class' => 'fa fa-file-text-o']).'Memos', ['controller' => 'Memos','action' => 'add'], array('escape'=>false) ); ?></li> -->
                
           </ul>
        </div>
    <!--</div>-->
</div>

<div class="alert-success ">
    <span class="text-left"><b>Módulo de administración</b></span>
        <?php $username = $this->request->session()->read('Auth.User.username');   ?>
    <span class="pull-right"><i class="fa fa-user"></i> Bienvenido usuario  <b><?php echo $username; ?></b></span>    
</div>
     
    
    