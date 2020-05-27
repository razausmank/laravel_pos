<x-master>
    <x-cards.basic-card title="Update Page" subtitle="Yo man this was hard">

        <form action="{{ route('page.update', $page) }}" method="POST">
        @csrf
        @method('PATCH')


            <div class="card-body">
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control form-control-solid"  placeholder="Enter page name" value="{{ $page->name }}" />
                    <x-form_field_error field="name" />

                </div>

                <div class="form-group">
                    <label>URL:</label>
                    <input type="text" name="url" class="form-control form-control-solid"  placeholder="Enter page url" value="{{ $page->url }}"/>
                    <x-form_field_error field="url" />

                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control form-control-solid"  placeholder="Enter page Description" value="{{ $page->description }}"/>
                    <x-form_field_error field="description" />

                </div>

                <div class="form-group">
                    <label>Sort Order:</label>
                    <input type="number" name="sort_order" class="form-control form-control-solid"  placeholder="Enter page Sort Order" value="{{ $page->sort_order }}"/>
                    <x-form_field_error field="sort_order" />

                </div>



                <div class="form-group">
                    <label>Parent Page :</label>
                    <select name="parent_page_id" id="parent_page_select" class="form-control form-control-solid">
                        <option value {{ $page->parent_page_id ? '' : 'selected'}} >No Parent Page</option>
                        {{-- page_x because i already have a variable with name page  --}}
                        @foreach ($pages as $page_x)
                            <option value="{{ $page_x->id }}" {{ $page->parent_page_id == $page_x->id ? 'selected' : '' }}> {{ $page_x->name }} </option>
                        @endforeach
                    </select>
                    <x-form_field_error field="parent_page_id" />

                </div>



            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button type="reset" class="btn btn-secondary">Cancel</button>
            </div>

        </form>

    </x-cards.basic-card>

</x-master>
