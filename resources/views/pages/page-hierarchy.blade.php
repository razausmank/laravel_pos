<x-master>

    <x-cards.basic-card title="Pages Hierarchy" subtitle="This is how pages are arranged etc .">

        <form action="{{ route('page.update_page_hierarchy') }}" method="POST" id="js_tree_form">
        @csrf
            <div id="kt_tree_5" class="tree-demo my-5">
            </div>

            <div class="mt-5">
                <button type="reset"  id="page_hierarchy_js_tree_form_reset" class="btn btn-secondary mr-5" >Reset</button>
                <button type="submit"  id="page_hierarchy_js_tree_form_submit" class="btn btn-primary ">Submit</button>
            </div>
        </form>

    </x-cards.basic-card>



</x-master>


<script>

    $('#page_hierarchy_js_tree_form_submit').on('click', function(e){

    e.preventDefault();

        var data = JSON.stringify( $('#kt_tree_5').jstree(true).get_json('#', {flat:true}) ) ;

        $.ajax({
               type: 'POST',
               url: $('#js_tree_form').attr('action'),
               data: {
                "_token": "{{ csrf_token() }}",
                "data" : data
               },
               success: function(data) {
                console.log(data);
                location.reload();
               }
           }).fail(function (jqXHR, textStatus, error) {
                            console.log(jqXHR);
                            console.log(textStatus);
                            console.log(error);

                        });;
    });


    $('#page_hierarchy_js_tree_form_reset').on('click', function(e){
        $('#kt_tree_5').jstree(true).refresh();
    });

    $("#kt_tree_5").jstree({
        "core": {

            "themes": {
                "responsive": false
            },
            // so that create works
            "check_callback": true,

            "data" : {!! $pages !!}

        },
        "types": {
            "default": {
                "icon": "fa fa-folder text-success"
            },
            "file": {
                "icon": "fa fa-file  text-success"
            }
        },
        "state": {
            "key": "demo2"
        },
        "plugins": ["dnd", "state", "types"]
    });

    </script>
