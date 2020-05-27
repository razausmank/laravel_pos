<x-master>
    <x-cards.basic-card title="User Type" subtitle="List of all the types of users">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usertypes as $usertype)
                    <tr >
                        <td>{{ $usertype->name }}</td>
                        <td>{{ $usertype->description }}</td>
                        <td>{{ $usertype->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('usertype.edit' , $usertype) }}" class="btn btn-primary mr-2">Edit</a></td>
                        <td>
                            <form action="{{ route('usertype.destroy', $usertype) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-2">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        </ul>

    </x-cards.basic-card>

</x-master>
