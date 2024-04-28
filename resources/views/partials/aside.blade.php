<aside class="bg-transparent fixed z-20 top-0 bottom-0 w-[280px]
    overflow-hidden border-r border-dashed border-grayPOS-3
    transition-width duration-200 ease-linear">
    <div class="w-full flex flex-col">
        <div class="h-[74px] flex items-center px-6 py-4">
            <a href="{{ route('dashboard') }}"
                class="text-bluePOS-1 text-2xl font-semibold capitalize">
                Swalayan
            </a>
        </div>

        <div class="h-[calc(100vh-74px)] flex flex-col gap-4">
            @include('sections.aside.user')

            <ul>
                <li>
                    <a href=""></a>
                </li>
            </ul>
        </div>
    </div>
</aside>