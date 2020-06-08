<x-master >

    <x-flash />

    <x-cards.basic-card title="All Pages" subtitle="List of all pages" button_link="page.create" button_text="New Page">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Description</th>
                    <th>Sort Order</th>
                    <th>Parent Page Id</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>{{ $page->name }}</td>
                        <td>{{ $page->url }}</td>
                        <td>{{ $page->description }}</td>
                        <td>{{ $page->sort_order }}</td>
                        <td>{{ $page->parent_page_id }}</td>
                        <td>{{ $page->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('page.edit' , $page) }}" class="btn btn-primary mr-2">Edit</a></td>
                        <td>
                            <form action="{{ route('page.destroy', $page) }}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger mr-2">Delete</button>
                            </form>

                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>



    </x-cards.basic-card>

</x-master>




