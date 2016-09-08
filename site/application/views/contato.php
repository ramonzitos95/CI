<!DOCTYPE html>
<html>
<head>
    <title><?php echo $titulo; ?></title>
</head>
<body>
<h1>Formulario de contato</h1>
    <p> Envie uma mensagem</p>
    <?php
        If($formerror):
            echo '<p>'.$formerror.'</p>';
        endif;
        echo form_open('pagina/contato')."<br>";
        echo form_label('Seu nome: ', 'nome')."<br>";
        echo form_input('nome', set_value('nome'))."<br>";
        echo form_label('Seu email: ', 'email')."<br>";
        echo form_input('email', set_value('email'))."<br>";
        echo form_label('Assunto: ', 'assunto')."<br>";
        echo form_input('assunto', set_value('assunto'))."<br>";
        echo form_label('Mensagem: ', 'mensagem')."<br>";
        echo form_input('mensagem', set_value('mensagem'))."<br>";
        echo form_submit('enviar', 'Enviar Mensagem >>', array('class' => 'botao'));
        echo form_close();
    ?>
<p>esta é a pagina de Contato</p>

</body>
</html>
