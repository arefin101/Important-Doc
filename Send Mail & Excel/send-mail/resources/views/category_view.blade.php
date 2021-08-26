  
  @include('static')
   <!-- start usa title category -->

   <!-- start main content div -->
   <div class="main-content">
            <div class="container">
                <div class="row">
                  
                    <div class="col-lg-9 col-md-7">
                       @foreach($cate_view as $var)
                            <div class="usa-tptitle">
                                <h2>{!!$var->sub_category_name!!}</h2>
                            </div>
                      
                           <h2 class="page-title" style="color:black"><b>{!!$var->news_title!!}</b></h2><br>
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-image">
                                    <p>প্রকাশ:{{$var->publish_date}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-image">
                                        <a href="#"> <img src="/news/{{$var->image}}" alt=""></a>
                                    </div>
                                </div>
                                <br>
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-content">
                                        
                                          <?php
                                                function limit_words($string, $word_limit)
                                                {
                                                    $words = explode(" ",$string);
                                                    return implode(" ", array_splice($words, 0, $word_limit));
                                                }
                                                $content = $var->news; 
                                               $news_limit = limit_words($content,80);
                                            ?>
                                           {!!$news_limit!!}....
                                       
                                        
                                   
                                        <a href="{{ route('newsportal.details',$var->news_title) }}">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                         @endforeach
                    </div> 
                    
                  
                    @include('side2')
                </div>
            </div>
        </div>
      <!-- start post box -->
        <div class="postboxt">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <!-- start postboxarea -->
                        <div class="row">
                        @foreach($cate_view2 as $var2)
                            <div class="col-lg-4 col-md-6">
                                <!-- start postbox single -->
                                <div class="postbox-single">
                                    <div class="postbox-img">
                                        <a href="#">
                                           
                                            <img src="/news/{{$var2->image}}" alt="my">
                                        
                                        </a>
                                    </div>
                                    <div class="postbox-content">
                                    <p>  
                                          <?php
                                               
                                               $content = $var->news; 
                                              $news_limit = limit_words($content,20);
                                            ?>
                                        
                                        {!!$news_limit!!}....
                                        
                                        </p>   

                                  

                                        <a href="{{ route('newsportal.details',$var2->news_title) }}">Read More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                                <!-- end postbox single -->
                            </div>
                            @endforeach
                         
                        </div>
                        <!-- end postboxarea -->
                    </div>
                     
                    <!-- post right -->
                    <div class="col-lg-3 col-md-4">
                    @foreach($cate_Ad_1 as $ad2)
                        <div class="postbx-ads">
                        <img src="/advertisement/{{$ad2->image}}" alt="ad2">
                        </div>
                     @endforeach
                   
                    </div>
                    <!-- end right -->

                </div>
            </div>
        </div>
        <!-- end post box -->
        <!-- end main content div -->

        <!-- start usa title category -->


        @include('footer')

        <!-- end usa title category -->