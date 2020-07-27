
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Formulario de Contato</title>

        @if(count($errors) != 0) 
            @foreach ($errors->all() as $erro)
                <p class="alert alert-danger text-center">{{$erro}}</p>
            @endforeach
        @endif

        @if(session('success'))
             <p class="alert alert-success text-center">{{session('success')}}</p>
        @endif

        @if(session('error'))
             <p class="alert alert-danger text-center">{{session('error')}}</p>
        @endif
    </head>
    <body>
        <div class="container">
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="myfiles/netShowMe.png" alt="" width="100" height="100">
                <h2>Formulário de Contato</h2>        
                <form class="form" method="POST" action="/send" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class="field" name="name" placeholder="Nome">
                    <input class="field" name="email" placeholder="E-mail">
                    <input class="field" name="phone" placeholder="Telefone">
                    <input type="file" id="file" name="file" placeholder="Arquivo">
                    <textarea class="field" name="message" placeholder="Digite sua mensagem aqui"></textarea>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>  
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2017-2020 Company Name</p>
            <ul class="list-inline">
                  <li class="list-inline-item"><a href="#">Privacy</a></li>
                  <li class="list-inline-item"><a href="#">Terms</a></li>
                  <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
      </footer>
    </body>
</html>

<style type="text/css">
    .btn-primary {
        color: #fff;
        background-color: #F0025A;
        border-color: #F0025A;
    }
    body{font-family: Arial, Helveticam sans-seeif}
    .content{display:felx;justify-content: center}
    .contato{width: 100%;max-width: 500px}
    .form{display: flex;flex-direction: column}
    .field{padding: 10px;margin-bottom: 15px;border: 1px solid #DDD;border-radius: 5px;font-family: Arial, Helveticam sans-seeif;font-size: 16px;}
    textarea{height: 150px;}
</style>
