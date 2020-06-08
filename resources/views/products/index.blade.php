<x-master>

    <x-flash />

    <x-cards.basic-card title="All Products" subtitle="List of all producs" button_link="product.create" button_text="New Product">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Barcode</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Product Category</th>
                    <th>Created At</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description ? $product->description : '---' }}</td>
                        <td>{{ $product->barcode ? $product->barcode : '---' }}</td>
                        <td>{{ $product->price  }}</td>
                        <td>{{ $product->quantity ? $product->quantity : '---' }}</td>
                        <td>{{ $product->product_category->name }}</td>


                        <td>{{ $product->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('product.edit' , $product) }}" class="btn btn-primary mr-2">Edit</a></td>
                        <td>
                            <form action="{{ route('product.destroy', $product) }}" method="POST">
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


    <x-cards.basic-card title="User's Profile Details">

        <x-form.form title="testing">
            <x-slot name="form_tag">
                <form action="#" method="POST">
                    @csrf
            </x-slot>

            <x-form.form_group label="Name" error="name ">
                <x-form.form_input type="date" />
            </x-form.form_group>

            <x-form.form_group label="Name" error="name ">
                <x-form.form_image_input />
            </x-form.form_group>
        </x-form>

    </x-cards.basic-card>

</x-master>

