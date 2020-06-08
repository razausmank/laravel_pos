<x-master>

    <x-cards.basic-card title="New Product Category" subtitle="A new world order blah blah ">

        <form action="{{ route('productcategory.store') }}" method="POST" enctype="multipart/form-data">
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



                <x-form_image_input component_id="kt_image_2" field_name="image" add_title="Change Profile Picture" remove_title="Remove Product Category Image">
                </x-form_image_input>

                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
        </form>

    </x-cards.basic-card>

</x-master>

<script>
    var avatar2 = new KTImageInput('kt_image_2');
</script>
