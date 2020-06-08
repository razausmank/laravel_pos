<x-master>

    <x-cards.basic-card title="New Product" subtitle="A new world order blah blah ">

        <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

                <div class="form-group">
                    <label>Category Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="Enter Product Category name"/>
                    <x-form.form_field_error field="name" />
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea type="text" name="description" class="form-control form-control-solid"  placeholder="Enter Product Category Description"></textarea>
                    <x-form.form_field_error field="description" />
                </div>

                <div class="form-group">
                    <label>Barcode:</label>
                    <input type="text" name="barcode" class="form-control form-control-solid"  placeholder="Enter Product Barcode" />
                    <x-form.form_field_error field="barcode" />
                </div>

                <div class="form-group">
                    <label>Price:</label>
                    <input type="number" step="0.01" name="price" class="form-control form-control-solid"  placeholder="Enter Product Price" />
                    <x-form.form_field_error field="price" />
                </div>

                <div class="form-group">
                    <label>Quantity:</label>
                    <input type="number"  name="quantity" class="form-control form-control-solid"  placeholder="Enter Product Quantity" />
                    <x-form.form_field_error field="quantity" />
                </div>

                <div class="form-group">
                    <label>Product Category:</label>
                    <select name="product_category_id" id="product_category_select" class="form-control form-control-solid">
                        @foreach ($product_categories as $product_category )
                            <option value="{{ $product_category->id }}"> {{ $product_category->name }} </option>
                        @endforeach
                    </select>
                    <x-form.form_field_error field="product_category_id" />
                </div>



                <div class="form-group">
                    <label>Upload an Image:</label>
                    <input type="file" name="image" class="form-control form-control-solid">
                    <x-form.form_field_error field="image" />
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
        </form>

    </x-cards.basic-card>

</x-master>
