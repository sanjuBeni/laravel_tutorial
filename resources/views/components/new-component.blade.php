<div>
    <p><b>This is my <i>New Component</i>.</b></p>
{{-- <p><b>{{$name1}}</b></p>

@foreach ($fruits as $item)
    {{$item}}
@endforeach --}}

<p>{{$slot}}</p>

<h2>Inner Slot : {{$innerSlot}}</h2>

</div>