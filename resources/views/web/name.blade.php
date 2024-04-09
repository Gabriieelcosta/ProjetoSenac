<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title></title>
</head>
<body>
  <h1>Mensagem</h1>
  <p>Esta é a primeira mensagem enviada.</p>

  {{-- Auxilio do chatgpt --}}

  <p><strong>Nome: </strong>{{ isset($data['name']) ? $data['name'] : '' }}</p>

  <p><strong>Telefone: </strong>{{ isset($data['telefone']) ? $data['telefone'] : '' }}</p>

  <p><strong>Email: </strong>{{ isset($data['email']) ? $data['email'] : '' }}</p>

  <p><strong>Mensagem: </strong>{{ isset($data['mensagem']) ? $data['mensagem'] : '' }}</p>


  {{-- <p><strong>Nome </strong>{{ $data['name']}}</p>
  <p><strong>Telefone </strong>{{ $data['telefone']}}</p>
  <p><strong>Email </strong>{{ $data['email']}}</p>
  <p><strong>Mensagem </strong>{{ $data['mensagem']}}</p> --}}
</body>
</html>