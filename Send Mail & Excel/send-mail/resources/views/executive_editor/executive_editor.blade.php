<div class="main-wrapper" >
       
        <div class="main-div">
           
            <div class="table-content">
                        
                <div class="container mt-5">               
                    <table class="table table-bordered yajra-datatable" >
                                <thead>
                                    <tr>
                                        <th >No</th>
                                        <th >Name</th>
                                        <th >Office Id</th>
                                        <th >Role</th>
                                        <th >Email</th>
                                    
                                        <th >Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                    </table>
                </div>
            </div>
    </div>   
</div>
<!-- Modal _ For_Edit_User -->
            <div class="modal" id="EditArticleModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Article Edit</h4>
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
                                <strong>Success!</strong>User Has been added successfully.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div id="EditArticleModalBody">
                                
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" id="SubmitEditArticleForm">Accept</button>
                            <!-- <button type="button" class="btn btn-danger modelClose" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
            </div>
    </div>
      


<!-- Script -->

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
        ajax: "{{ route('executive_editor.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'office_id', name: 'office_id'},
            {data: 'role', name: 'role'},
            {data: 'email', name: 'email'},
            {
            
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
   });
});
// Modal_Show_Script
$('#modelClose').on('click', function(){
            $('#EditArticleModal').hide();
        });
        var id;
        $('body').on('click', '#getEditArticleData', function(e) {
            // e.preventDefault();
            $('.alert-danger').html('');
            $('.alert-danger').hide();
            id = $(this).data('id');
            $.ajax({
                url: '/executive_editor/view/' + id,
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

// Moadl_Edit_Script
        $('#SubmitEditArticleForm').click(function(e) {
            e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/executive_editor/view/upadte/' + id,
                method: 'POST',
                data: {
                    is_active: $('#is_active').val(),
                    role: $('#role').val(),
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
</script>




