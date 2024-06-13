<a href="{{ $href }}" 
    class="flex justify-center items-center 
        w-8 h-8 rounded-xl
        text-[#5b6b79]
        duration-300 ease-in-out
        @if ($type == "detail")
           hover:bg-[#eff0f2]
           hover:text-[#5b6b79]
        @elseif ($type == "edit")
           hover:bg-[#eaf6f2]
           hover:text-[#2ca87f]
        @else
            hover:bg-[#fce9e9]
            hover:text-[#dc2626]
        @endif">
    <span class="w-5 h-5 stroke-2">
        {{ $icon }}
    </span>
</a>