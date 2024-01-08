<div class=" h-[76px] flex justify-around items-center font-lexend ">
    {{-- log --}}
    <div class="flex items-center gap-4">
        <img src="{{asset('svg/menu.svg')}}" class=" w-6 h-6 block md:hidden" alt="menuSvg">
        <img src="{{ asset('svg/Logo.svg') }}" alt="logo">
    </div>

    {{-- search --}}
    <div class="hidden md:block">
        <input type="search" value="" placeholder="Search"
            class=" text-base font-normal text-[#C8C9CB] border-[#F4F4F4] md:pl-2 md:px-40 md:py-2 lg:pl-5 lg:px-56 lg:py-4 border rounded-3xl">
    </div>

    {{-- your account and cartlist --}}
    <div>
        <p>Your Account</p>
        <img src="{{asset('')}}" alt="cartIcon">
    </div>
</div>
