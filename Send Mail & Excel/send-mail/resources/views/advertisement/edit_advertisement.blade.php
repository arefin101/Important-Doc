
<section class="main-div mydiv">
<div class="main-wrapper">
        <div class="main-border">
            <div class="grid">
                <form  method="post" action="{{ route('advertisement.edit_advertisement') }}" enctype="multipart/form-data">
                @csrf 
                    <div class="form-header myheader">
                        <h4><b>Submit New Ads</b></h4>
                        <!-- <a href="url"> <button type="button" class="btn btn-success list">Ads List</button></a> -->
                       
                    </div>
                    <hr>
                    <div class="form-middle">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Page</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_page" name="ad_page" data-validate="required">
                                <option value = "">Select</option>

                                <option value = "Home Page" {{ $advertisement->ad_page == "Home Page" ? 'selected' : ''}}>Home Page</option>

                                <option value = "Category Page" {{ $advertisement->ad_page == "Category Page" ? 'selected' : ''}}>Category Page</option>

                                <option value = "News Details Page" {{ $advertisement->ad_page == "News Details Page" ? 'selected' : ''}}>News Details Page</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Ads Position</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_position" name="ad_position" data-validate="required">
                                <option>Select</option>
                                <option value = "1" {{ $advertisement->ad_position == 1 ? 'selected' : ''}}>1</option>
                                <option value = "2" {{ $advertisement->ad_position == 2 ? 'selected' : ''}}>2</option>
                                <option value = "3" {{ $advertisement->ad_position == 3 ? 'selected' : ''}}>3</option>
                                <option value = "4" {{ $advertisement->ad_position == 4 ? 'selected' : ''}}>4</option>
                                <option value = "5" {{ $advertisement->ad_position == 5 ? 'selected' : ''}}>5</option>
                                <option value = "6" {{ $advertisement->ad_position == 6 ? 'selected' : ''}}>6</option>
                                <option value = "7" {{ $advertisement->ad_position == 7 ? 'selected' : ''}}>7</option>
                                <option value = "8" {{ $advertisement->ad_position == 8 ? 'selected' : ''}}>8</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"><b>Ads Type</b></label>
                                <select class="form-control" id="exampleFormControlSelect1 ad_type" name="ad_type">
                                <option>Select</option>
                                <option value = "Google Ad" {{ $advertisement->ad_type == "Google Ad" ? 'selected' : ''}}>Google Ad</option>
                                <option value = "Image Ad" {{ $advertisement->ad_type == "Image Ad" ? 'selected' : ''}}>Image Ad</option>
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
       

