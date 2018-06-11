
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

$cakeDescription = '.: Pan Manitos ';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <?= $this->Html->css('font-awesome.min.css'); ?>
    <?= $this->Html->css('bootstrap.css'); ?>
    <?= $this->Html->css('animate.min.css'); ?>
    <?= $this->Html->css('bootstrap-datepicker.min.css'); ?>
    <?= $this->Html->css('style.css'); ?>

    <!-- <?//php echo $this->Html->css('base.css') ?>
    <?//php echo $this->Html->css('cake.css') ?> -->
    <!-------------------------->
    

    <?php 
        echo $this->Html->script('jquery.min.js');
        echo $this->Html->script('jquery.dataTables.js');
        echo $this->Html->script('jQuery.print.js');
        echo $this->Html->css('jquery.dataTables.css');
    
        echo $this->Html->script('bootstrap.min.js');
        echo $this->Html->script('bootstrap-datepicker.min.js');
        echo $this->Html->script('custom.js'); 
    ?>
</head>
<body>

    <?php
        $usuario = $this->request->session()->read('Auth.User.role');
        //echo '*****'; pr( $this->request->session()->read('Auth'));// exit;
        if( $usuario == 'ejecutivo'){
            echo $this->element('menu/menu_executive', ['usuario' =>  $usuario]); 
        } elseif( $usuario == 'admin' ){
            echo $this->element('menu/menu_admin', ['usuario' =>  $usuario]);

        } elseif( $usuario == 'reports' ) {
           echo $this->element('menu/menu_reports', ['usuario' =>  $usuario]);

        } elseif( !$usuario ) {
            echo $this->element('menu/invitado', ['usuario' =>  $usuario]);
        } elseif ( $usuario =='Trabajo social' ) {
            echo $this->element('menu/menu_fichasocial', ['usuario' =>  $usuario]);
            echo '<br/><br/>';
        }
    ?>

    <?php echo $this->Flash->render() ?>
    <div id="loading" class="text-center hidden">
         Procesando...
         <br/>
         <?php echo $this->Html->image('loading.gif', ['class' => 'indicator'])?>
         <br/><br/>
    </div>
    <div class="container clearfix">
    
    

        <?php echo  $this->fetch('content') ?>
    </div>

    <footer>
    </footer>

</body>
</html>