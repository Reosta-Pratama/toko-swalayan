<nav class="flex flex-col pb-[10px] overflow-y-auto">
    @foreach (config("nav") as $list => $value)
        @foreach ($value as $item)
            <ul>
                <li class="px-[23px] py-[10px] mx-[10px] uppercase
                    text-iconPOS text-[11px] font-semibold leading-[1.66]">
                    {{ $item['title'] }}
                </li>
                <li class="mx-[10px]">
                    @foreach ($item['list'] as $subItem)
                        <a href="{{ $subItem['href'] }}"
                            class="flex items-center gap-[15px] px-5 py-[14px] rounded-[8px]
                                duration-300 ease-linear hover:bg-grayPOS-1/10
                                @if((Request::path() === '/' && Request::path() == ltrim($subItem['href'], '')) || (Request::path() == ltrim($subItem['href'], '/')))
                                    bg-bluePOS-1/10
                                @endif
                                
                                @if((Request::path() === '/' && Request::path() == ltrim($subItem['href'], '')) || (Request::path() == ltrim($subItem['href'], '/')))
                                    text-bluePOS-1
                                @else
                                    text-grayPOS-1
                                @endif">
                            <span class="w-6 h-6">
                                @include('sections.aside.icon')
                            </span>

                            <span class="flex flex-1 capitalize text-[14px]">
                                {{ $subItem['name'] }}
                            </span>
                        </a>
                    @endforeach
                </li>
            </ul>
        @endforeach
    @endforeach
</nav>