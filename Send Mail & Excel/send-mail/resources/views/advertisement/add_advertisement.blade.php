
<section class="main-div mydiv">
<div class="main-wrapper">
        <div class="main-border">
            <div class="grid">
                <form  method="post" action="{{ route('advertisement.store') }}" enctype="multipart/form-data">
                @csrf 
                    <div class="form-header myheader">
                        <h4><b>Submit New Ads</b></h4>
                        <!-- <a href="url"> <button type="button" class="btn btn-success list">Ads List</button></a> -->
                       
                    </div>
                    <hr>
                    <div class="form-middle">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Page</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_page" name="ad_page">
                                <option>Select</option>
                                <option value="1">Home Page(1)</option>
                                <option value="2">Category Page(2)</option>
                                <option value="3">News Details Page(3)</option>
                                <option value="4">Side Page(4)</option>
                                <option value="5">Category View(5)</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Ads Position</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_position" name="ad_position">
                                <option>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Ads Type</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_type" name="ad_type">
                                <option>Select</option>
                                <option value="1">Google Ad(1)</option>
                                <option value="2">Image Ad(2)</option>
                                </select>
                             
                            </div> 
                            <label for=""><b>Ads Image</b></label><br>
                            <input name="image" id="image" type="file"><br><br>
                          
                    </div>
                    <div class="submit-area">
                        <div class="btn-center">
                            <input type="submit" value="Save" class="btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
       

