<ul class="group flex items-center gap-2">
    {{-- Nav 1 --}}
    <li class="flex items-center gap-2
        text-blackPOS-2 last:opacity-75">
        <a href="{{ $href1 }}"
            class="capitalize text-[13px]
                transition duration-300 ease-in-out
                hover:text-bluePOS-1">
            {{ $nav1 }}
        </a>

        <span class="w-4">
            <x-iconsax-bul-arrow-right-3 />
        </span>
    </li>

    {{-- Nav 2 --}}
    <li class="flex items-center gap-2
        text-blackPOS-2 last:opacity-75">
        <a href="@if ($nav3 != null)
                {{ $href2 }}
            @else
                javascript:void(0)
            @endif"
            class="capitalize text-[13px]
                transition duration-300 ease-in-out
                hover:text-bluePOS-1">
            {{ $nav2 }}
        </a>

        @if ($nav3 != null)
            <span class="w-4">
                <x-iconsax-bul-arrow-right-3 />
            </span>
        @endif
    </li>
    
    {{-- Nav 3 --}}
    @if ($nav3 != null)
        <li class="flex items-center gap-2
            text-blackPOS-2 last:opacity-75">
            <a href="@if ($nav4 != null)
                    {{ $href3 }}
                @else
                    javascript:void(0)
                @endif"
                class="capitalize text-[13px]
                    transition duration-300 ease-in-out
                    hover:text-bluePOS-1">
                {{ $nav3 }}
            </a>

            @if ($nav4 != null)
                <span class="w-4">
                    <x-iconsax-bul-arrow-right-3 />
                </span>
            @endif
        </li>
    @endif
    
    {{-- Nav 4 --}}
    @if ($nav4 != null)
        <li class="flex items-center gap-2
            text-blackPOS-2 last:opacity-75">
            <a href="javascript:void(0)"
                class="capitalize text-[13px]
                    transition duration-300 ease-in-out">
                {{ $nav4 }}
            </a>
        </li>   
    @endif
</ul>