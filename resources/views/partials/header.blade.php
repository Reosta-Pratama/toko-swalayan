<header class="bg-[rgba(248,249,250,0.7)] text-grayPOS-1 backdrop-blur-[7px]
    fixed z-20 left-[280px] right-0 
    transition-width duration-200 ease-linear">
    <div class="h-[74px] flex px-[25px]">
        {{-- Menu Left --}}
        @include('sections.header.menuLeft')
        
        {{-- Menu Right --}}
        @include('sections.header.menuRight')
    </div>
</header>