<div class="main-wrapper" >
       
       <div class="main-div">
          
           <div class="table-content">
                       
           <form method="post" action="{{ route('category.create') }}">
            @csrf
                <div class="container">
                    <p>Add New Sub Category From here.</p>
                    <hr>
                    <label for="category" style="font-size:20px;margin-right:10px">Category Name : </label>
                    <select  id="section"  name="category_id" data-validate="required">
                         <option>Select Category First</option>
                         @foreach( $user as $var )
                         <option value="{{$var->id}}">{{$var->category_name}}</option>
                        @endforeach 
                      </select>
                    <br>
                    <br>
                    <label for="category" style="font-size:20px;margin-right:10px">Sub category Name : </label>
                    <input type="text" placeholder="Enter category name" name="sub_category_name" id="category" required>
                    </br>
                    </br>
                    <button type="submit" class="registerbtn btn btn-primary">Save</button>
                </div>
            </form>
           </div>
   </div>   
</div>