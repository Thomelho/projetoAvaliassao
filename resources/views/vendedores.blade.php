
@foreach ($vendedores as $vendedor)
  <div>
    {{$vendedor->nomeVen}} 
    {{$vendedor->matriculaVen}} 
    {{$vendedor->comissaoVen}}
  </div>
@endforeach