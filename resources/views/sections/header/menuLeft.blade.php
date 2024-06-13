<div class="h-full flex mr-auto">
    <ul class="flex items-center gap-1">
        <li>
            <x-button.menu-btn
                id="asideBtn"
                type="button"
                :addClass="null"
                icon="{{ svg('iconsax-two-menu-1') }}">
            </x-button.menu-btn>
        </li>

        <li>
            <form action="" 
                method="post"
                class="relative">
                @csrf
                <x-input.input-search
                    id="searchMenu"
                    name="searchMenu"
                    placeholder="Search Menu..."
                    addClass="pl-10 pr-3 focus:w-[400px]"
                />
                
                <span class="absolute z-[1] top-1/2 left-3 -translate-y-1/2 w-5">
                    <x-iconsax-bul-search-normal />
                </span>
            </form>
        </li>
    </ul>
</div>