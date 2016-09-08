<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bookstore, Free Template, templatemo</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="<?php echo base_url ('assets/css/templatemo_style.css'); ?>" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/ddsmoothmenu.css'); ?> "/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/painel.css'); ?> "/>

</head>


    <div class="linha">
        <div class="coluna col3">&nbsp;</div>
        <div class="coluna col6">
            <h2><?php echo $h2 ?></h2>
            <?php
                if($msg = get_msg()) {
                    echo '<div class="msg-box">' . $msg . '</div>';
                }
                echo form_open();
                echo form_label('Nome para login', 'login')."<br>";
                echo form_input('Login: ', set_value('login'), array('autofocus' => 'autofocus'))."<br>";
                echo form_label('Email do administrador do site: ', 'email')."<br>";
                echo form_input('email', set_value('login'))."<br>";
                echo form_label('Senha: ', 'senha')."<br>";
                echo form_password('senha', set_value('senha'))."<br>";
                echo form_label('Repita a Senha: ', 'senha')."<br>";
                echo form_password('senha', set_value('senha'))."<br>";
                echo form_submit('Enviar', 'Salvar Dados', array('class' => 'botao'));
                echo form_close();
            ?>
        </div>
        <div class="coluna col3">&nbsp;</div>
    </div>


</body>
</html>