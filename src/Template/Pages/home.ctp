<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = '.:PAN Manitos:.';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    
   <?= $this->Html->css('font-awesome.min.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <!--<?= $this->Html->css('animate.min.css') ?>
    <?= $this->Html->css('bootstrap-datepicker.min.css') ?>-->
    <?= $this->Html->css('style.css') ?>
    
    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <!-- <?= $this->Html->script('bootstrap-datepicker.min.js') ?>
    <?= $this->Html->script('custom.js') ?> -->
</head>
<body class="home">

<?php
    $usuario = $this->request->session()->read('Auth.User.role');

        if ($usuario == 'ejecutivo'){
            echo $this->element('menu/menu_executive', ['usuario' =>  $usuario]);
        }elseif ($usuario == 'Trabajo social') {
            echo $this->element('menu/menu_fichasocial', ['usuario' =>  $usuario]); 
        } 
        else{
            //exit;
            echo $this->element('menu/invitado', ['usuario' =>  $usuario]); 
        }
    //pr($UserReports); //exit;
    /*if( $usuario == 'trabajo social'){

        echo $this->element('menu/trabajo_social', ['usuario' =>  $usuario]); 
    } elseif( $usuario == 'equipo tecnico'){
        echo $this->element('menu/menu_equipo', ['usuario' =>  $usuario]); 

    } elseif( $usuario == 'admin'){
        echo $this->element('menu/menu_admin', ['usuario' =>  $usuario]); 

    } elseif (!$usuario) {
        echo $this->element('menu/invitado', ['usuario' =>  $usuario]); 
    }*/
?>
<p class="text-center" >
     
     <br/><br/><br/><br/>
     <?php echo $this->Html->image('adepi.png', ['class' => 'adepi','style'=>'max-width:100%;']); ?>
</p>

    

</body>
</html>
