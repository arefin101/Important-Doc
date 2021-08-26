
        <section class="main-div">
<div class="main-wrapper">
        <div class="main-border">
            <div class="grid">
                <form  method="post" action="{{ route('interview.store') }}" enctype="multipart/form-data" style="padding-left:10px; padding-bottom:40px;">
                @csrf 
                    <div class="form-header">
                        <h4 style="padding-top:10px;">Edit Interview</h4>
                        <hr>
                    </div>
                    <div class="form-middle">
                <div style="margin-left:50px;">
                    
                     <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                        <div class="fgrid-single" style="padding-top:15px;">
                            <label for="">Is it breaking news</label>
                            <input value="1" name="is_breaking" type="checkbox" <?php if(in_array("1",$in)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:15px;">
                            <label for="">Is it Image news </label>
                            <input value="1" name="is_slider"type="checkbox" <?php if(in_array("1",$in1)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:2px;">
                            <label for="">Is it Flash news </label>
                            <input value="1" name="is_image"type="checkbox" <?php if(in_array("1",$in2)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:2px;">
                            <label for="">Is it Main news </label>
                            <input value="1" name="is_main"type="checkbox" <?php if(in_array("1",$in3)){ echo "checked='checked'";}?>><br><br>
                        </div>
                     </div>

                    <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">

                        <div class="fgrid-single">
                            <label for="" style="display:block; font-weight:bold">Reporter Name</label>
                            <input name="reporter_name" type="text" value="{{ $interv1->reporter_name }}" class="input_type_focus" style="width:60%; border:1px solid #ccc; padding:5px 3px; border-radius:5px"><br><br>
                        
                        </div>

                        <div class="fgrid-single">

                            <label for="" style="display:block; font-weight:bold">Interview Title</label>
                            <input name="interview_title" id="interview_title" type="text" value="{{ $interv1->interview_title }}" class="input_type_focus" style="width:60%; border:1px solid #ccc; padding:5px 3px; border-radius:5px"><br><br>
                        
                        </div>

                    </div>



                     <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                        <div class="fgrid-single">
                        <label for="" style="display:block; font-weight:bold">Interview image</label>
                            <input name="image" id="image" class="input_type_focus" type="file" style="width:60%; border:1px solid #ccc; padding:4px 3px; border-radius:5px"><br><br>
                        </div>
                        <div class="fgrid-single">
                      
                            <label for="date" style="display:block; font-weight:bold">Published Date</label>
                            <input name="date" id="date" type="date" style="border:1px solid#ccc; padding:4px 6px; border-radius:5px; width:60%;">
                        </div>

                     </div>

                </div>

                        <label for="editor" style="display:block; font-weight:bold">News Description</label><br>
                        <textarea name="news" id="editor" class="input_type_focus" rows="10" cols="80">{{ $interv1->interview_news }}
                        </textarea>
                    </div>
                    <div class="submit-area" style="padding-top:15px;">
                        <div class="btn-center">
                            <input type="submit" value="Publish" class="btn-primary" style="padding:2px 12px; border-radius:5px;">
                            <input type="button" value="Cancel" class="btn-danger" style="padding:2px 12px; border-radius:5px;">
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
        
  $('#interview').on('change', function(){
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
