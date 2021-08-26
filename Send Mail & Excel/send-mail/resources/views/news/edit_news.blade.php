
<section class="main-div">
<div class="main-wrapper">
        <div class="main-border">
            <div class="grid">
                <form  method="post" action="{{ route('news.add_news') }}" enctype="multipart/form-data" style="padding-left:10px; padding-bottom:40px;">
                @csrf 
                    <div class="form-header">
                        <h4 style="padding-top:10px;">Edit News</h4>
                        <hr>
                    </div>
                    <div class="form-middle">
                <div style="margin-left:50px;">
                     <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                        <div class="fgrid-single">
                            <label style="display:block; font-weight:bold">
                               Select Category
                            </label>
                            <select  id="category"  name="category_id" data-validate="required" style="width:60%; border:1px solid#ccc; padding:5px 3px; border-radius:5px;">

                                <option>Select Category First</option>

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}" {{ (old('category_id') ? (old('category_id') == $category->id ? "selected" : "") : ($category->id == $news1->category_id ? "selected" : "")) }}>{{ $category->category_name }}</option>
    
                                @endforeach 
                         
                            </select>
                        </div>
                        <div class="fgrid-single">
                            <label style="display:block; font-weight:bold">
                               Select Sub Category
                            </label>
                            
                            <select class="input_type_focus" name="subcategory" id="subcategory" style="width:60%; border:1px solid #ccc; padding:5px 3px; border-radius:5px">
                               <option>Select Category First</option>

                                @foreach($sub_categories as $sub_category)

                                    <option value="{{ $sub_category->id }}" {{ (old('sub_category') ? (old('sub_category') == $sub_category->id ? "selected" : "") : ($sub_category->id == $news1->sub_category_id ? "selected" : "")) }}>{{ $sub_category->sub_category_name }}</option>

                                @endforeach  
                            </select>
                        </div>

                     </div>



                     <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                        <div class="fgrid-single" style="padding-top:15px;">
                            <label for="">Is it breaking news</label>
                            <input value="1" name="is_breaking" type="checkbox" <?php if(in_array("1",$nw)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:15px;">
                            <label for="">Is it Image news </label>
                            <input value="1" name="is_slider"type="checkbox" <?php if(in_array("1",$nw1)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:2px;">
                            <label for="">Is it Flash news </label>
                            <input value="1" name="is_image"type="checkbox" <?php if(in_array("1",$nw2)){ echo "checked='checked'";}?>><br><br>
                        </div>
                        <div class="fgrid-single" style="padding-top:2px;">
                            <label for="">Is it Main news </label>
                            <input value="1" name="is_main"type="checkbox" <?php if(in_array("1",$nw3)){ echo "checked='checked'";}?>><br><br>
                        </div>
                       
                     </div>



                    <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">

                        <div class="fgrid-single">
                            <label for="" style="display:block; font-weight:bold">Reporter Name</label>
                            <input name="reporter_name" value="{{ $news1->reporter_name }}" type="text" class="input_type_focus" style="width:60%; border:1px solid #ccc; padding:5px 3px; border-radius:5px"><br><br>
                        
                        </div>

                        <div class="fgrid-single">

                            <label for="" style="display:block; font-weight:bold">news title</label>
                            <input name="news_title" type="text" value="{{ $news1->news_title }}" class="input_type_focus" style="width:60%; border:1px solid #ccc; padding:5px 3px; border-radius:5px"><br><br>
                        
                        </div>

                    </div>
                  
                      <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                            <div class="fgrid-single">
                                <label for="" style="display:block; font-weight:bold">Image One</label>
                                <input name="image" id="image" class="input_type_focus" type="file" style="width:60%; border:1px solid #ccc; padding:4px 3px; border-radius:5px"  value="{{ $news1->image }}"><br><br>
                            </div>
                            <div class="fgrid-single">
                              <label for="caption" style="display:block; font-weight:bold">Image One Caption</label>
                              <input name="caption" id="caption" value="{{ $news1->caption }}" class="input_type_focus" type="text" style="width:60%; border:1px solid #ccc; padding:4px 3px; border-radius:5px"><br><br>
                            </div>
                            <!-- <div class="fgrid-single">
                                <label for="" style="display:block; font-weight:bold">image from gallery</label>
                                <button style="border:1px solid#ccc; padding:4px 6px; border-radius:5px; width:60%;">Browse Gallery</button>
                            </div> -->

                      </div>
                      <div class="fgrid-area" style="display:grid; grid-template-columns:repeat(2,1fr);">
                            <div class="fgrid-single">
                              <label for="" style="display:block; font-weight:bold">Image Two</label>
                              <input name="image2" id="image2" class="input_type_focus" type="file" style="width:60%; border:1px solid #ccc; padding:4px 3px; border-radius:5px"><br><br>
                            </div>
                            <div class="fgrid-single">
                              <label for="caption2" style="display:block; font-weight:bold">Image Two Caption</label>
                              <input name="caption2" id="caption2" value="{{ $news1->caption2 }}" class="input_type_focus" type="text" style="width:60%; border:1px solid #ccc; padding:4px 3px; border-radius:5px"><br><br>
                            </div>
                        </div>
                    
                </div>

                        <label for="editor" style="display:block; font-weight:bold;margin-left:10px;" >News Description</label><br>
                        <textarea name="news" id="editor" class="input_type_focus" rows="10" cols="80">{{ $news1->news }}
                        </textarea>
                    </div>
                    <div class="submit-area" style="padding-top:15px;">
                        <div class="btn-center">
                            <input type="submit" value="Update" class="btn-primary" style="padding:2px 12px; border-radius:5px;">
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
        
  $('#category').on('change', function(){
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
