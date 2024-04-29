<div class="h-full flex mr-auto">
    <ul class="flex items-center gap-1">
        <li>
            <x-button.menu-btn
                id="asideBtn"
                type="button"
                :onclick="null"
                :addClass="null"
                icon="{{ svg('iconsax-two-menu-1') }}">
            </x-button.menu-btn>
        </li>

        <li>
            <form action="" 
                method="post"
                class="relative">
                @csrf
                <input 
                    name="searchMenu"
                    type="text"
                    placeholder="Search..."
                    class="w-[200px] appearance-none rounded-lg pl-10 pr-3 py-[0.75rem]
                        text-sm text-blackPOS-2
                        border border-solid border-grayPOS-3
                        transition-all duration-300 ease-in-out
                        hover:bg-grayPOS-2
                        focus:border-bluePOS-1 focus-within:bg-grayPOS-2 focus:w-[400px]
                        focus-within:outline-none focus-within:outline-0">

                <span class="absolute z-[1] top-1/2 left-3 -translate-y-1/2 w-5">
                    <x-iconsax-bul-search-normal />
                </span>
            </form>
        </li>
    </ul>
</div>