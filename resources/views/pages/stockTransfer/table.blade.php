<table class="w-full max-w-full">
    <thead>
        <x-table.th 
            name="#"
            addClass="text-right"
        />
        <x-table.th 
            name="from warehouse"
            addClass="text-left"
        />
        <x-table.th 
            name="to warehouse"
            addClass="text-left"
        />
        <x-table.th 
            name="no of products"
            addClass="text-end"
        />
        <x-table.th 
            name="quantity"
            addClass="text-end"
        />
        <x-table.th 
            name="ref number"
            addClass="text-end"
        />
        <x-table.th 
            name="created on"
            addClass="text-left"
        />
        <x-table.th 
            name="actions"
            addClass="text-center"
        />
    </thead>

    <tbody>
        @foreach (config('dummyProduct') as $index => $item)
            <tr class="group">
                <x-table.td addClass="text-end">
                    {{ $loop->index+1 }}
                </x-table.td>

                <x-table.td addClass="text-left">
                    <h2 class="font-semibold leading-[1.2]">{{ $item['category'] }}</h2>
                </x-table.td>

                <x-table.td addClass="text-left">
                    <h2 class="font-semibold leading-[1.2]">{{ $item['category'] }}</h2>
                </x-table.td>

                <x-table.td addClass="text-end">
                   {{ $item['qty'] }}
                </x-table.td>

                <x-table.td addClass="text-end">
                    {{ $item['qty'] }}
                 </x-table.td>

                 <x-table.td addClass="text-end">
                    #000{{ $loop->index+1 }}
                 </x-table.td>

                <x-table.td addClass="text-left">
                    {{ formatTanggal('2023-06-11') }}
                </x-table.td>

                {{-- Actions --}}
                <x-table.td>
                    <ul class="flex justify-around">
                        <li>
                            <x-table.actions
                                icon="{{ svg('iconsax-lin-eye') }}"
                                type="detail"
                                href=""/>
                        </li>
                        <li>
                            <x-table.actions
                                icon="{{ svg('iconsax-lin-edit-2') }}"
                                type="edit"
                                href=""/>
                        </li>
                        <li>
                            <x-table.actions
                                icon="{{ svg('iconsax-lin-trash') }}"
                                type="delete"
                                href=""/>
                        </li>
                    </ul>
                </x-table.td>
            </tr>
        @endforeach
    </tbody>
</table>