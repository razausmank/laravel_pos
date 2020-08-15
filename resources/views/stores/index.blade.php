<x-master>

    <x-flash />

    <x-cards.basic-card title="Store " subtitle="List of all the Stores" button_link="store.create" button_text="New Store">
        <table class="table table-bordered table-hover table-checkable dataTable dtr-inline" style="width:100%" id="stores_table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($stores as $store)
                    <tr >
                        <td>{{ $store->name }}</td>
                        <td>{{ $store->address }}</td>
                        <td>{{ $store->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('store.edit' , $store) }}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                <i class="la la-edit"></i>
                            </a>

                            <form action="{{ route('store.destroy', $store) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-clean btn-icon" title="Delete">
                                    <i class="la la-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        </ul>

    </x-cards.basic-card>

</x-master>
