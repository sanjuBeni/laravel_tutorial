@include('first.first')
<h1>This is about us page</h1>


<h3>{{$name}}</h3>

{{-- This is comment in blade --}}

@isset($name)
    <h2>Name is exit</h2>
@endisset

@if(count($fruits) > 0)

@foreach ($fruits as $item)
    <p>{{$item}}</p>
@endforeach

@endif

{{-- <x-new-component name1="Sanjay Beniwal" :fruits="$fruits"/> --}}

<x-new-component> <x-slot name="innerSlot">
    This is inner element of slot</x-slot> This is slot of <b>New Component</b>.
</x-new-component>

<x-message-box name="This is message box component">
    This is without inline component.
    and all file is used inside the class component.
    <x-slot name="slotName">This is inner slot</x-slot>
</x-message-box>