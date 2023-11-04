@props(['active'=>false])
@php
    //    var_dump($active);
       $classes = 'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500';
       if ($active) {
           $classes =  'block text-left px-3 text-sm leading-6 hover:bg-blue-500 focus:bg-blue-500 bg-blue-500';
       }
@endphp
<a {{ $attributes(['class'=> $classes])}}>
    {{$slot}}
</a>
