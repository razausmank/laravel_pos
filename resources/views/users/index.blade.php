<x-master>
    <x-cards.basic-card title="All users" subtitle="List of all users" button_link="user.create" button_text="New User">
        <table class="table table-bordered table-hover table-checkable dataTable dtr-inline" style="width:100%" id="users_table">

            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>User Type</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->usertype  ?  $user->usertype->name  : '---'}}</td>
                        <td>{{ $user->created_at->diffForHumans() }}</td>
                        <td class="d-flex">
                            <a href="{{ route('user.page_permissions' , $user) }}" class="btn btn-sm btn-clean btn-icon" title="Page Permissions">
                                <i class="la la-cog"></i>
                            </a>

                            <a href="{{ route('user.edit' , $user) }}" class="btn btn-sm btn-clean btn-icon" title="Edit">
                                <i class="la la-edit"></i>
                            </a>

                            <form action="{{ route('user.destroy', $user) }}" method="POST">
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
