<x-master>

    <x-cards.basic-card title="Pages Hierarchy" subtitle="This is how pages are arranged etc .">

        <form action="{{ route('page.update_page_hierarchy') }}" method="POST" id="js_tree_form">
        @csrf
        @method('POST')
            <input type="hidden" name="page_hierarchy_json" value='{!! $pages !!}'  >
            <input type="hidden" name="page_hierarchy_csrf_token" value="{{ csrf_token() }}">
            <div id="kt_tree_5" class="tree-demo my-5">
            </div>

            <div class="mt-5">
                <button type="reset"  id="page_hierarchy_js_tree_form_reset" class="btn btn-secondary mr-5" >Reset</button>
                <button type="submit"  id="page_hierarchy_js_tree_form_submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>

    </x-cards.basic-card>



</x-master>

