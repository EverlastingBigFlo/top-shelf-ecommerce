@extends('layouts/layouts')


@section('content')
<div class="md:h-[45rem] h-[44rem] relative">
    <div class="absolute inset-0 w-full h-full bg-cover md:bg-contain" style="background-image: url('{{asset('svg/MaskGroup.svg')}}')"></div>
    <div class="absolute inset-0 w-full h-full bg-cover md:bg-contain" style="background-image: url('{{asset('img/Background.png')}}')"></div>
</div>

 
@endsection