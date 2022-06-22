<div>
   @if($op!="" && $op==0)
    @include('estados.info1')
    @elseif($op!="" && $op==1)
    @include('estados.info2')
    @elseif($op!="" && $op==2)
    @include('estados.info2_1')
    @elseif($op!="" && $op==3)
    @include('estados.info3')
    @elseif($op!="" && $op==4)
    @include('estados.info4')
    @elseif($op!="" && $op==5)
    @include('estados.info5')
    @elseif($op!="" && $op==6)
    @include('estados.info6')
    @elseif($op!="" && $op==7)
    @include('estados.info7')
   @else
   @include('validar')
   @endif
</div>
