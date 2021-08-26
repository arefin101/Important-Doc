<section class="main-div">
<div class="main-wrapper">
        <div class="main-border">
            <div class="grid">
                <form  method="post" action="{{ route('fundamental.store') }}" enctype="multipart/form-data">
                @csrf 
                    <div class="form-header">
                        <h4>Add Fundamental</h4>
                    </div>
                    <div class="form-middle">
                        <div class="form-input">
                          

                            <label for="fundamental_title">Fundamental Title</label>
                            <input name="fundamental_title" id="fundamental_title" type="text"><br><br>

                            <label for="image">Fundamental Image</label>
                            <input name="image" id="image" type="file"><br><br>

                            <label for="date">Published Date</label>
                            <input name="date" id="date" type="date"><br><br>
                        </div>
                        <label for="fundamental_news">Fundamental News</label><br>
                        <textarea name="fundamental_news" id="editor" rows="10" cols="80">
                        </textarea>
                    </div>
                    <div class="submit-area">
                        <div class="btn-center">
                            <input type="submit" value="Publish" class="btn-primary">
                            <input type="button" value="Cancel" class="btn-danger">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        </section>
       
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript">
  CKEDITOR.replace( 'editor' );
        
  $('#fundamental').on('change', function(){
    var id = $(this).val();
    $.getJSON("/executive_editor/store/" +id , function(data){
        // Assumed subcategory is id of another select
        var subcat = $('#subcategory').empty();
        $.each(data, function(k,value){
            $('#subcategory').append('<option value="'+value.id+'">'+value.sub_category_name+'</option>');
        });
    });
});
</script>
