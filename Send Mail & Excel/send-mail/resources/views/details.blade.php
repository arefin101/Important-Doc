@include('static')
<div class="main-content">
            <div class="container">
              
                <h2 class="page-title" style="color:black"><b>{!!$news1[0]->news_title!!}</b></h2>
                           <div class="col-lg-12 col-md-12">
                                <div class="page-image">
                                <h4><i class="fa fa-pencil-square-o" aria-hidden="true"></i>{{$news1[0]->reporter_name}}</h4>
                                </div>
                               
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="page-image">
                                <p>প্রকাশ:{{$news1[0]->publish_date}}</p>
                                </div>
                               
                            </div>
                <div class="row">
                    <div class="col-lg-9 col-md-7">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="page-image">
                                    <a href="#"><img src="/news/{{$news1[0]->image}}" alt=""></a>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-content" style="padding-top:5px;text-align:center;">
                                    <p>{!! $news1[0]->caption !!}</p>
                                    </div>
                                 </div>
                                <div class="page-content">
                                    <!-- <p>{!! $news1[0]->news !!}</p> -->
                                           <?php
                                         
                                           $my_string = $news1[0]->news;
                                           $result1 = implode(' ', array_slice(explode(' ', $my_string), 0, 100))."\n";
                                              
                                            ?>
                                           {!! $result1!!}
                                </div>
                            </div>
                           
                            <div class="col-lg-12 col-md-12">
                                <div class="page-image">
                                    <a href="#"><img src="/news/{{$news1[0]->image2}}" alt=""></a>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="page-content" style="padding-top:5px;text-align:center;">
                                    <p>{!! $news1[0]->caption2 !!}</p>
                                    </div>
                                 </div>
                                <div class="page-content">
                                    <!-- <p>{!! $news1[0]->news !!}</p> -->
                                    <?php
                                               
                                                
                                     $my_string = $news1[0]->news;
                                    $result2 = implode(' ', array_slice(explode(' ', $my_string), 100, 100000))."\n";
                                               
                                     ?>
                                              {!!$result2!!}....
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('side2')
                </div>
            </div>
            
        </div>
        @include('footer')

                       