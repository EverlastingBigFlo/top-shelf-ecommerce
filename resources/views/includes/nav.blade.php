<div class=" h-[76px] flex justify-around items-center font-lexend ">
    {{-- log --}}
    <div class="flex items-center gap-4">
        <img src="{{asset('svg/menu.svg')}}" class=" w-6 h-6 block md:hidden" alt="menuSvg">
        <img src="{{ asset('svg/Logo.svg') }}" class=" w-28 h-28 sm:w-36 sm:h-36 md:h-44 md:w-44" alt="logo">
    </div>

    {{-- search --}}
    <div class="hidden md:flex gap-4 items-center">
        <input type="search" value="" placeholder="Search"
            class=" text-base font-normal text-[#C8C9CB] border-[#F4F4F4] md:pl-2 md:px-40 md:py-2 lg:pl-5 lg:px-56 lg:py-4 border rounded-3xl">
            <button>
            <img src="{{asset('svg/Button.svg')}}" alt="search icon">

            </button>
    </div>

    {{-- your account and cartlist --}}
    <div class="flex items-center gap-4 ">
        <p class=" text-xs md:text-base">Your Account</p>
        <p class=" text-base">|</p>
        <div>
        <img src="{{asset('svg/bag-2.png')}}" alt="cartIcon">
        <div class="bg-[#EB2606] w-6 h-6 rounded-full text-white absolute my-[-14px] mx-3">
            <center>0</center>
        </div>
    </div>
    </div>
</div>

@push('scripts')
    <script src="{{asset('asset/js/script.js')}}" defer></script>
@endpush