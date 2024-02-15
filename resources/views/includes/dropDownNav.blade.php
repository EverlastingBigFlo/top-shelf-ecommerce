<div class=" font-lexend h-14">

    <div
        class="hidden w-[80%] md:text-[12px] lg:text-base md:flex justify-around items-center list-none  m-auto font-light">
        <li>
            Shop All
        </li>

        <li>
            <div class="group relative ">
                <!-- Trigger button -->
                <button class="dropBtn">
                    <span>Flower</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block w-32">
                    <li><a href="#" class="rounded-t options">Option
                            1</a></li>
                    <li><a href="#" class="options">Option
                            2</a></li>
                    <li><a href="#" class="rounded-b options">Option
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
                <button class="dropBtn">
                    <span>Concentrates</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#" class="rounded-t options">Option
                            1</a></li>
                    <li><a href="#" class="options">Option 2</a></li>
                    <li><a href="#" class="rounded-b options">Option
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
                <button class="dropBtn">
                    <span>Promotions/Bundles</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block">
                    <li><a href="#" class="rounded-t options">Option
                            1</a></li>
                    <li><a href="#" class="options">Option 2</a></li>
                    <li><a href="#" class="rounded-b options">Option
                            3</a></li>
                </ul>
            </div>
        </li>
        <li>
            <div class="group relative">
                <!-- Trigger button -->
                <button class="dropBtn">
                    <span>Support</span>
                    <img src="{{ asset('svg/arrow-down.svg') }}" alt="arrow down icon">
                </button>

                <!-- Dropdown content -->
                <ul class="hidden absolute group-hover:block w-32">
                    <li><a href="#" class="rounded-t options">Option
                            1</a></li>
                    <li><a href="#" class="options">Option 2</a></li>
                    <li><a href="#" class="rounded-b options">Option
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
            <img src="{{ asset('svg/Button.svg') }}" alt="search icon">

        </button>
    </div>
</div>
