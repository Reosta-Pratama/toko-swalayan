<table class="w-full max-w-full">
    <thead>
        <x-table.th 
            name="#"
            addClass="text-right"
        />
        <x-table.th 
            name="customer"
            addClass="text-left"
        />
        <x-table.th 
            name="code"
            addClass="text-left"
        />
        <x-table.th 
            name="date"
            addClass="text-left"
        />
        <x-table.th 
            name="total"
            addClass="text-end"
        />
        <x-table.th 
            name="paid"
            addClass="text-end"
        />
        <x-table.th 
            name="status"
            addClass="text-left"
        />
        <x-table.th 
            name="biller"
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
                    SL-00{{ $loop->index+1 }}
                </x-table.td>

                <x-table.td addClass="text-left">
                    {{ formatTanggal('2023-06-11') }}
                </x-table.td>

                <x-table.td addClass="text-end">
                    {{ formatRupiah($item['price']) }}
                 </x-table.td>

                <x-table.td addClass="text-end">
                    {{ formatRupiah($item['price']) }}
                </x-table.td>

                <x-table.td>
                    <x-table.status status="{{ $item['status'] }}"></x-table.status>
                </x-table.td>

                <x-table.td addClass="text-left">
                    <h2>{{ $item['category'] }}</h2>
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