
<ul>
@foreach ($data as $item)
<li>
    {{$item['email']}}
</li> 
{{-- {{print_r($item)}}     --}}
@endforeach
</ul>