<div class="h-full flex ml-auto">
    <ul class="flex items-center gap-1">
        <li>
            <a href="{{ route('pos') }}"
                class="group h-11 
                    flex justify-center items-center rounded-lg px-6
                    border border-solid border-grayPOS-1/20
                    transition duration-300 ease-linear
                    hover:bg-bluePOS-1/10 hover:border-bluePOS-1/20">
                <span class="font-semibold
                    transition duration-300 ease-in-out
                    group-hover:scale-110 group-hover:text-bluePOS-1">
                    POS
                </span>
            </a>
        </li>
        
        <li>
            <x-button.menu-btn
                id="themeBtn"
                type="button"
                :onclick="null"
                :addClass="null"
                icon="{{ svg('iconsax-bul-sun-1') }}">
            </x-button.menu-btn>
        </li>
    </ul>
</div>