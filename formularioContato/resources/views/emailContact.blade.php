<!DOCTYPE html>
<html>
<head>
    <title>Mensagem enviada pelo formulário de contato</title>
    <meta charset="utf-8">
    <style>
        body{
            width:510px;
            margin:0;
            padding:0 20px;
            font-family:"Raleway", sans-serif;
            font-size:12px;
        }
        h1{
            font-size:20px;
        }
        h2{
            font-size:16px;
        }
    </style>
</head>
<body>
<h1>
    Nova mensagem enviada pelo site
</h1>
<hr>
<p>
    <strong>Nome:</strong> {{$data->name}}<br>
    <strong>E-mail:</strong> {{$data->email}}<br>
    <strong>Mensagem:</strong><br> <?php echo nl2br($data->message); ?>
</p> 
<hr>
<div>
    <p>
        <a href="http://localhost:8000" title="Editora X">
        Empresa Fantasma LTDA.
        </a>
        <br>
        Av. Nova, 1265<br>
        Cidade Fantasma – CEP 74000-000<br>
        Goiânia – GO – Brasil<br>
        Tel.: +55 62 5252-2525
    </p>
</div>
</body>
</html>