<x-master>
    <x-cards.basic-card title="All Pages" subtitle="List of all pages">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Url</th>
                    <th>Description</th>
                    <th>Sort Order</th>
                    <th>Parent Page Id</th>
                    <th>Created At</th>
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
                    </tr>
                @endforeach
            </tbody>
        </table>

        </ul>

    </x-cards.basic-card>

</x-master>
