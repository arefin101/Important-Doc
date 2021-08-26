<section class="main-div">

    <div class="main-wrapper">

        <div class="main-border">
        <div class="row" style="padding-bottom:16px;">
                <div class="col-md-4">
                        <div class="card" style="background:#1a2035;">
                            <div class="card-body text-center">
                                <select style="background:#1a2035; width:100%; color:#fff; border:none; padding:10px 4px;" name="publisher_username" id="publisher_username" >
                                    <option value="" disabled selected>Filter by Publisher Name</option>
                                    @foreach($publisher as $pubr)
                                    <option value="{{$pubr}}">{{$pubr}}</option>
                                    @endforeach
                                </select>      
                            </div>
                        </div>
                </div>

                        <div class="col-md-4">
                            <div class="card" style="background:#1a2035;">
                                <div class="card-body text-center">
                                    <form>
                                           <select style="background:#1a2035; width:100%; color:#fff; border:none; padding:10px 4px;" name="reporter_name" id="reporter_name" >
                                                <option value="" disabled selected>Filter by Reporter Name</option>
                                                @foreach($reporterN as $repo)
                                                <option value="{{$repo}}">{{$repo}}</option>
                                                @endforeach
                                            </select>  
                                    </form>    
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card" style="background:#1a2035;">
                                <div class="card-body text-center">
                                    <form>
                                           <select style="background:#1a2035; width:100%; color:#fff; border:none; padding:10px 4px;" name="filter_status" id="filter_status" >
                                                <option value="" disabled selected>Filter by Status</option>
                                             
                                                <option value="published">Published</option>
                                                <option value="not_published">Not Published</option>
                                              
                                            </select>  
                                    </form>    
                                </div>
                            </div>
                        </div>
                </div>
            <div class="grid">

                <table class="table table-bordered yajra-datatable">

                    <thead>

                        <tr>
                            <th>Sl. No.</th>
                            <th>Reporter Name</th>
                            <th>Publisher Name</th>
                            <th>News title</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>

                    </thead>

                    <tbody>

                    </tbody>

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
                            <h4 class="modal-title">Published Article</h4>
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
                                <strong>Success!</strong>News Has been published successfully.
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
        responsive: true,
                    language: {
                            search: "_INPUT_",
                            searchPlaceholder: "Search records",
                        },
        ajax:{
                        url:"{{ route('news.index2') }}",
                        type: 'GET',
                      
                        data: function (d) {

                                if ($('#publisher_username').length) {
                                    d.publisher_username = $('#publisher_username').val();
                                }
                                if ($('#reporter_name').length) {
                                    d.reporter_name = $('#reporter_name').val();
                                }
                                if ($('#filter_status').length) {
                                    d.status = $('#filter_status').val();
                                }
                            }
                        
                   //  Filtering start      
             },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'reporter_name', name: 'reporter_name'},
            {data: 'publisher_username', name: 'publisher_username'},
            {data: 'news_title', name: 'news_title'},
            {data: 'status', name: 'status'},
            {
            
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
   });
      //  Filtering start
      $('select#publisher_username,select#reporter_name,select#filter_status').on(
                    'change',
                    function() {
                        table.ajax.reload();
                    }
                );
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
                url: '/executive_editor/news_list/' + id,
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
                url: '/executive_editor/news_list/published/'+id,
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
                url: '/executive_editor/news_list/delete/' + id,
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
                url: '/executive_editor/news_list/delete/'+id,
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




