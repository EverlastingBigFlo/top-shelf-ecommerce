<div class=" font-lexend h-14">

    <div
        class="hidden w-[80%] md:text-[12px] lg:text-base md:flex justify-around items-center list-none  m-auto font-light">
        <li>
            Shop All
        </li>

        <li>
            <div class="group relative">
                <!-- Trigger button -->
                <button class="inline-flex items-center">
                    <span>Flower</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#"
                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            1</a></li>
                    <li><a href="#" class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            2</a></li>
                    <li><a href="#"
                            class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            3</a></li>
                </ul>
            </div>
        </li>
        <li>
            Edibles
        </li>
        <li>
            <div class="group relative">
                <!-- Trigger button -->
                <button class="inline-flex items-center">
                    <span>Concentrates</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#"
                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            1</a></li>
                    <li><a href="#"
                            class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option 2</a></li>
                    <li><a href="#"
                            class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            3</a></li>
                </ul>
            </div>
        </li>
        <li>
            Mushrooms
        </li>
        <li>
            <div class="group relative">
                <!-- Trigger button -->
                <button class="inline-flex items-center">
                    <span>Promotions/Bundles</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#"
                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            1</a></li>
                    <li><a href="#"
                            class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option 2</a></li>
                    <li><a href="#"
                            class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            3</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="group relative">
                <!-- Trigger button -->
                <button class="inline-flex items-center">
                    <span>Support</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#"
                            class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            1</a></li>
                    <li><a href="#"
                            class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option 2</a></li>
                    <li><a href="#"
                            class="rounded-b bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap">Option
                            3</a></li>
                </ul>
            </div>
        </li>
        <li>
            Rewards
        </li>
        <li>
            Blog
        </li>
    </div>

        {{-- search --}}
        <div class="md:hidden flex gap-4 items-center justify-center">
            <input type="search" value="" placeholder="Search"
                class=" text-base font-normal text-[#C8C9CB] border-[#F4F4F4] pl-4  py-2 sm:pl-4 sm:px-40 sm:py-2 border rounded-3xl">
                <button>
                <img src="{{asset('svg/Button.svg')}}" alt="search icon">
    
                </button>
        </div>
</div>
