<section class="main-div">

    <div class="main-wrapper">

        <div class="main-border">

            <div class="grid">

                <table class="table table-bordered yajra-datatable">

                    <thead>

                        <tr>
                            <th>Sl. No.</th>
                            <th>Page</th>
                            <th>Ads Position</th>
                            <th>Ads Type</th>
                            <th>Ads Image</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                </table>

            </div>

        </div>

    </div>

</section>
<!-- Modal _ For_Edit_User -->
<div class="modal" id="EditArticleModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Published Advertisement</h4>
                            <button type="button" class="close" id="modelClose" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                <strong>Success!</strong>Advertisement has been published successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="EditArticleModalBody">
                              
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="SubmitEditArticleForm">Yes</button>
                            <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">No</button>
                        </div>
                    </div>
            </div>
    </div>
      

<!-- Delete_Moadal -->

<div class="modal" id="deleteModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Advertisement</h4>
                            <button type="button" class="close" id="modelClose1" data-dismiss="modal">&times;</button>
                        </div>
                        <!-- Modal body -->
                        <div class="modal-body">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="alert alert-success alert-dismissible fade show" role="alert" style="display: none;">
                                <strong>Success!</strong>Advertisement Has been Delete successfully.
                                <button type="button" class="close" data-dismiss="alert" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="deleteBody">
                              
                            </div>
                        </div>
                        <!-- Modal footer -->
                    
                        <div class="modal-footer">
                            <form>
                                @csrf
                                <input type="submit" class="btn btn-success" id="SubmitDeleteArticleForm" value="Yes">
                            
                            </form>
                            <button type="button" class="btn btn-danger modelClose" data-bs-dismiss="modal">No</button>
                        </div>
                    </div>
            </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js" ></script> -->
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" defer ></script>

<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        "order": [[ 0, "desc" ]],
        ajax: "{{ route('advertisement.index2') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'ad_page', name: 'ad_page'},
            {data: 'ad_position', name: 'ad_position'},
            {data: 'ad_type', name: 'ad_type'},
            {data: 'image', name: 'image'},
            {data: 'status', name: 'status'},
            {
            
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
   });
});
 // Modal_Show_Script_published
 $('#modelClose').on('click', function(){
            $('#EditArticleModal').hide();
        });
        var id;
        $('body').on('click', '#published', function(e) {
            // e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: '/executive_editor/archieve/' + id,
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                    // console.log(result);
                    $('#EditArticleModalBody').html(result.html);
                    $('#EditArticleModal').show();
                }
            });
        });

// Moadl_Edit_Script_published
        $('#SubmitEditArticleForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/executive_editor/archieve/published/'+id,
                method: 'POST',
                data: {
                
                    status: $('#status').val(),
                },
              
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('.datatable').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#EditArticleModal').hide();
                        }, 2000);
                    }
                }
            });
        });
  
         // Modal_Show_Script_For_Delete
         $('#modelClose1').on('click', function(){
            $('#deleteModal').hide();
        });
        var id;
        $('body').on('click', '#delete', function(e) {
            // e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: '/executive_editor/archieve/delete/' + id,
                method: 'GET',
                // data: {
                //     id: id,
                // },
                success: function(result) {
                  
                    $('#deleteBody').html(result.html);
                    $('#deleteModal').show();
                }
            });
        });

// Moadl__Script_For_Delete
        $('#SubmitDeleteArticleForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/executive_editor/delete/'+id,
                method: 'DELETE',
                data: {
                id: id,
                },
                success: function(result) {
                    if(result.errors) {
                        $('.alert-danger').html('');
                        $.each(result.errors, function(key, value) {
                            $('.alert-danger').show();
                            $('.alert-danger').append('<strong><li>'+value+'</li></strong>');
                        });
                    } else {
                        $('.alert-danger').hide();
                        $('.alert-success').show();
                        $('.datatable').DataTable().ajax.reload();
                        setInterval(function(){ 
                            $('.alert-success').hide();
                            $('#deleteModal').hide();
                        }, 2000);
                    }
                }
            });
        });
</script>




