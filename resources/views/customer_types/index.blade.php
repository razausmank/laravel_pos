<x-master>

    <x-flash />

    <x-cards.basic-card title="Customer Type" subtitle="List of all the types of Customers" button_link="customertype.create" button_text="New Customer Type">
        <table class="table table-bordered table-hover table-checkable dataTable dtr-inline" style="width:100%" id="customer_types_table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customer_types as $customer_type)
                    <tr >
                        <td>{{ $customer_type->name }}</td>
                        <td>{{ $customer_type->description }}</td>
                        <td>{{ $customer_type->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('customertype.edit' , $customer_type) }}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                <i class="la la-edit"></i>
                            </a>

                            <form action="{{ route('customertype.destroy', $customer_type) }}" method="POST">
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
