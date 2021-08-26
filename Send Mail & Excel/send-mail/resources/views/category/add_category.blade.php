<div class="main-wrapper" >
       
       <div class="main-div">
          
           <div class="table-content">
                       
           <form method="post" action="{{ route('category.store') }}">
           @csrf
                <div class="container">
                    <p>Add New Category From here.</p>
                    <hr>

                    <label for="category" style="font-size:20px;margin-right:10px">category : </label>
                    <input type="text" placeholder="Enter category name" name="category" id="category" required>
                    </br>
                    </br>
                    <button type="submit" class="registerbtn btn btn-primary">Save</button>
                </div>
            </form>
           </div>
   </div>   
</div>