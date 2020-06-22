<x-master>
    <x-cards.basic-card title="User Type" subtitle="List of all the types of users" button_link="usertype.create" button_text="New User Type">
        <table class="table table-bordered table-hover table-checkable dataTable dtr-inline" style="width:100%" id="usertypes_table">

            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usertypes as $usertype)
                    <tr >
                        <td>{{ $usertype->name }}</td>
                        <td>{{ $usertype->description }}</td>
                        <td>{{ $usertype->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('usertype.edit' , $usertype) }}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                <i class="la la-edit"></i>
                            </a>

                            <form action="{{ route('usertype.destroy', $usertype) }}" method="POST">
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
