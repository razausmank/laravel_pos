<x-master>

    <x-cards.basic-card title="New Product Category" subtitle="A new world order blah blah ">

        <form action="{{ route('productcategory.update' , $productcategory ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

                <div class="form-group">
                    <label>Category Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="Enter Product Category name" value="{{ $productcategory->name }}"/>
                    <x-form.form_field_error field="name" />
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <textarea type="text" name="description" class="form-control form-control-solid"  placeholder="Enter Product Category Description" > {{ $productcategory->description }} </textarea>
                    <x-form.form_field_error field="description" />
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
