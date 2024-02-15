@extends('layouts/layouts')


@section('content')
<div class="md:h-[45rem] h-[44rem] relative">
    <div ><img src="{{asset('svg/MaskGroup.svg')}}" alt="background image" class="absolute inset-0 xxs:w-screen xxs:h-screen md:w-full bg-cover "></div>
    <div><img src="{{asset('img/Background.png')}}" alt="background image" class="absolute inset-0 xxs:w-screen md:w-full xxs:h-screen bg-cover"></div>
</div>

 
@endsection