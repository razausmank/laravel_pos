<x-master>

    <x-flash />

    <x-cards.basic-card title="All Product Stocks" subtitle="List of all product stocks" button_link="productstock.create" button_text="New Product Stock">
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
                @foreach ($product_categories as $product_category)
                    <tr>
                        <td>{{ $product_category->name }}</td>
                        <td>{{ $product_category->description }}</td>
                        <td>{{ $product_category->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('productcategory.edit' , $product_category) }}" class="btn btn-primary mr-2">Edit</a></td>
                        <td>
                            <form action="{{ route('productcategory.destroy', $product_category) }}" method="POST">
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
