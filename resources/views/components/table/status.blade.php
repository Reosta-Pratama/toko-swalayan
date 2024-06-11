<span 
    class="@if ($status == "In Stock") bg-[#eaf6f2] text-[#2ca87f]
        @else bg-[#fce9e9] text-[#dc2626] @endif
        rounded-md text-xs font-medium leading-[1]
        px-[.8em] py-[.45em]">
    {{ $status }}
</span>