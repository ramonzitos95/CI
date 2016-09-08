<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo; ?></title>
</head>
<body>
<h1>Formulario de Cadastro</h1>
<p> Envie uma mensagem</p>
    <?php
//        If($formerror == TRUE):
//            echo '<p>'.$formerror.'</p>';
//        endif;
        
        echo form_open('pagina/cadastrar')."<br>";
        echo form_label('Seu Email: ', 'email')."<br>";
        echo form_input('email', set_value('email'))."<br>";
        echo form_label('Nome: ', 'nome')."<br>";
        echo form_input('nome', set_value('nome'))."<br>";
        echo form_label('Senha: ', 'Senha')."<br>";
        echo form_input('senha', set_value('assunto'))."<br>";
        echo form_label('Repita a Senha: ', 'senha')."<br>";
        echo form_input('senha2', set_value('senha'))."<br>";
        echo form_submit('enviar', 'Enviar Mensagem >>', array('class' => 'botao'));
        echo form_close();
    ?>
<p>esta é a pagina de Cadastro</p>

</body>
</html>