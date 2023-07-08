@extends('layouts.master')
@section('conteudo')
<style>
    body {
      background-image: url('heroimage.png');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
    }
    
    .conteudo {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 20px;
      border-radius: 5px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="conteudo">
    <h1>Bem-vindo à minha sessão</h1>
    <p>Aqui está o conteúdo da minha sessão.</p>
  </div>
</body>
@endsection
