

@foreach ($info as $rs)
    @if($rs->nombre =="Anthony")
        <p> {{$rs->nombre}} el es</p> 
    @else
        <p> {{$rs->nombre}}</p>
    @endif

    @empty($rs->descripcion)
        <p>La descripcion esta vacio</p>
    @endempty

@endforeach

