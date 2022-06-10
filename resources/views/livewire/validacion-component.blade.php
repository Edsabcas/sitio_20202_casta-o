<div>
   @if($op!="" && $op==0)
    @include('estados.info1')
    @elseif($op!="" && $op==1)
    @include('estados.info2')
    @elseif($op!="" && $op==2)
    @include('estados.info2_1')
    @elseif($op!="" && $op==3)
    @include('estados.info3')
   @else
   @include('validar')
   @endif
</div>
