<div>
   @if($op!="" && $op==0)
    @include('estados.info1')
    @elseif($op!="" && $op==1)
    @include('estados.info2')
   @else
   @include('validar')
   @endif
</div>
