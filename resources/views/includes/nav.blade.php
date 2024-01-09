<div class=" h-[76px] flex justify-around items-center font-lexend ">
    {{-- log --}}
    <div class="flex items-center gap-2 sm:gap-4">
        <ul class="menu  text-white list-none pt-16 fixed -translate-y-[100%] transition-transform duration-700 top-0 left-0 right-0 bottom-0 z-[99] bg-black">
            <li><a class="menuItem" href="#">Home</a></li>
            <li><a class="menuItem" href="#">Profile</a></li>
            <li><a class="menuItem" href="#">About</a></li>
            <li><a class="menuItem" href="#">Contacts</a></li>
          </ul>
          <button class="hamburger block md:hidden">

            <i class="closeIcon material-icons hidden  absolute z-[100] top-0 left-0 p-6 text-white bi bi-x-square text-[2rem]"></i>
        <img src="{{asset('svg/menu.svg')}}" class="menuIcon w-6 h-6 cursor-pointer" alt="menuSvg">
    </button>
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
    <div class="flex items-center gap-2 sm:gap-4 ">
        <p class=" text-[10px] md:text-base">Your Account</p>
        <p class=" text-base">|</p>
        <div>
        <img src="{{asset('svg/bag-2.png')}}" alt="cartIcon">
        <div class="bg-[#EB2606] w-6 h-6 rounded-full text-white absolute my-[-14px] mx-3">
            <center>0</center>
        </div>
    </div>
    </div>
</div>

