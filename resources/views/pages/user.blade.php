<x-header data="User Header" />
<h4>User Page</h4>
{{-- {{$x = 3}} --}}

@if(count($users) === 1)
<h4>Value is : {{count($users)}}</h4>
@elseif(count($users) === 2)
<h4>Value is : {{count($users)}}</h4>
@elseif(count($users) === 3)
<h4>Value is : {{count($users)}}</h4>
@else
<h4>Not a Number</h4>
@endif

{{-- {{count($users)}} --}}

@foreach($users as $value)
<p>{{$value}}</p>
@endforeach

<?php echo 123 ?>
<?=  "str" ?>
@php
 echo "data"   
@endphp

<x-footer/>