
@foreach ($clientes as $cliente)
  <div>
    {{$cliente->nameCli}} 
    {{$cliente->cpfCli}} 
    {{$cliente->emailCli}}
  </div>
@endforeach