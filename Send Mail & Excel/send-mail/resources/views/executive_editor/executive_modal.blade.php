<!-- modal_ -->
<div class="modal-dialog" style="width: 60%;">
    <div class="modal-content">
        
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Variable Info</h4>
        </div>
        
        <div class="modal-body">
        
                   
                <input type="hidden" name="id" value="{{ $users->id }}">
                
                <div class="form-group">
                    <label class="col-sm-3 control-label">Name</label>            
                    <div class="col-sm-8">
                    <input type="text" value="{{ $users ->name }}" class="form-control"  name="from_id" data-validate="required" placeholder="usersiable name" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Score</label>            
                    <div class="col-sm-8">
                    <input type="text" value="{{ $users ->email }}" class="form-control"  name="to_phone" data-validate="required" placeholder="Variable Score" />
                    </div>
                </div>
              
        </div>
    </div>

</div>