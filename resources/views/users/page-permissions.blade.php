<x-master>
    <x-cards.basic-card title="{{ $user->first_name }}'s Page Permissions" subtitle="">
        <form action="{{ route('user.update_page_permissions', $user) }}" method="POST" id="page_permission_form">
        @csrf
            <div id="kt_tree_3" class="tree-demo">
            </div>

            <div class="mt-5">
                <button type="reset"  id="page_permission_js_tree_form_reset" class="btn btn-secondary mr-5" >Reset</button>
                <button type="submit"  id="page_permission_js_tree_form_submit" class="btn btn-primary ">Submit</button>
            </div>

        </form>

    </x-cards.basic-card>
</x-master>


<script>

    $('#page_permission_js_tree_form_submit').on('click', function(e){

    e.preventDefault();

        var data = JSON.stringify( $('#kt_tree_3').jstree(true).get_json('#', {flat:true}) ) ;

        $.ajax({
               type: 'POST',
               url: $('#page_permission_form').attr('action')  ,
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


    $('#page_permission_js_tree_form_reset').on('click', function(e){
        location.reload();

    });

    $('#kt_tree_3').jstree({
	"plugins": ["wholerow", "checkbox", "types"],
	"core": {
	    "themes": {
	        "responsive": false
	    },

        "data" : {!! $pages !!}
	},
	"types": {
	    "default": {
	        "icon": "fa fa-folder text-warning"
	    },
	    "file": {
	        "icon": "fa fa-file  text-warning"
	    }
	},
});
</script>
