<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Laravel</title>
  <!-- jquery cdn file -->
  <script src="{{asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}"></script>
    <!-- slick js cdn -->
    <script src="{{asset('slick/slick.min.js')}}"></script>
    <!-- bootstrap js cdn file -->
    <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
    <!-- custom js file -->
    <script src="{{asset('custom.js')}}"></script>
    
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="{{asset('css/app.css')}}" rel="stylesheet"/>
        <!-- Styles -->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap css cdn file -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <!-- slick css -->
    <link rel="stylesheet" href="{{asset('slick/slick.css')}}">

    <link rel="stylesheet" href="{{asset('slick/slick-theme.css')}}">
    <!-- main css file -->
    <link rel="stylesheet" href="{{asset('allcss/style.css')}}">
   
    </head>
    <body onload=display_ct();>
    <!-- start scrolltop btn -->
    
        <!-- start topbar -->
        <div class="topbar">
            <div class="container topwrap">
                <div class="row topbar-wrapper">
                    <div class="col-lg-4 col-md-6">
                        <div class="tobar-left">
                            <ul class="topbar-menu">
                                <li><a href="#">প্রথম পাতা</a></li>
                                <li><a href="#">অন্যান্য</a></li>
                                <li><a href="#">শর্তবলি</a></li>
                                <li><a href="#" style="background:red;margin-left:6px;"><i class="fa fa-shopping-cart" style="color:#fff;"></i> 0</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="topbar-middle">
                            <div class="topbar-social">
                                <ul class="social-menu">
                                    <li><a href="#" class="ftop"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="ttop"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="ltop"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" class="itop"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                            <div class="usericon">
                                <a href="#"><i class="fa fa-user fauser"></i></a>
                                <div class="user-form">
                                    <form action="#">
                                        <div class="formsingle">
                                            <label for="">Username</label>
                                            <input type="text" name="username">
                                        </div>
                                        <div class="formsingle">
                                            <label for="">Password</label>
                                            <input type="text" name="username">
                                        </div>
                                        <div class="formsingle">
                                            <div class="checkboxgrid">
                                                <div><input type="checkbox"></div>
                                                <div><span>Remember Me</span></div>
                                            </div>
                                        </div>
                                        <div class="formsingle">
                                            <input type="submit" value="Log In">
                                        </div>
                                        <a href="#">Forget Password?</a>
                                        <hr>
                                        <a href="#">Create Account</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="topbar-right">
                            <form action="">
                                <input type="text" placeholder="Search">
                                <button class="search-btn"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end top bar -->

        <!-- start topbar brand -->
        <div class="topbar-brand">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="brand-left">
                            <a href="#"><img src="/img/topbarads2.gif" alt="Ad1"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="brand-middle">
                            <a href="{{ route('newsportal.welcome') }}" class="brand"><img src="/img/logonews.jpg" alt="asif"></a>
                            <h4 class="brand-date"><span id="displayDateTime"></span></h4>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="brand-right">
                            <a href="#"><img src="/img/bngla.webp" alt="Ad2"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end topbar brand -->

        <!-- start navbar -->
        <div class="header-area">
            <div class="container header-wrapper2">
                <nav class="headernav">
                    <ul class="main-menu">
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">সারাদেশ<i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                            
                            @foreach($user3 as $var)
                                <li><a href="{{ route('newsportal.category_view',$var->id) }}">{{$var->sub_category_name}}</a></li>
                                
                                <!-- <li><a href="#">Sub Item 2 <i class="fa fa-angle-right"></i></a>
                                    <ul class="secsub-menu">
                                        <li><a href="#">sub items</a></li>
                                        <li><a href="#">sub items</a></li>
                                        <li><a href="#">sub items</a></li>
                                    </ul>
                                </li> -->
                                @endforeach
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">সমগ্র নিউজ</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a></li>
                                <li><a href="#">Sub Item 3</a></li>
                                <li><a href="#">Sub Item 4</a></li>
                                <li><a href="#">Sub Item 5</a></li>
                                <li><a href="#">Sub Item 6</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">ব্যবসা ও বাণিজ্য</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">রাজনীতি</a>
                            <ul class="sub-menu">
                            @foreach($subc7 as $var7)
                            <li><a href="{{ route('newsportal.category_view',$var7->id) }}">{{$var7->sub_category_name}}</a></li>
                             @endforeach 
                            </ul>
                        </li>
                      
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">আন্তর্জাতিক</a>
                            <ul class="sub-menu">
                            @foreach($subc5 as $var5)
                            <li><a href="{{ route('newsportal.category_view',$var5->id) }}">{{$var5->sub_category_name}}</a></li>
                             @endforeach 
                            </ul>
                        </li>
                      
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">খেলাধুলা</a>
                            <ul class="sub-menu">
                            @foreach($subc6 as $var6)
                            <li><a href="{{ route('newsportal.category_view',$var6->id) }}">{{$var6->sub_category_name}}</a></li>
                             @endforeach 
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">বিনোদন</a>
                            <ul class="sub-menu">
                            @foreach($subc8 as $var8)
                            <li><a href="{{ route('newsportal.category_view',$var8->id) }}">{{$var8->sub_category_name}}</a></li>
                             @endforeach 
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">ভিডিও</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a></li>
                            </ul>
                        </li>
                        <!-- <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">শিল্প ও সাহিত্য</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a></li>
                            </ul>
                        </li> -->
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">জনপ্রিয়</a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu-parent">
                            <a href="#" class="mainmenu-link">More <i class="fa fa-angle-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="#">Sub Item 1</a></li>
                                <li><a href="#">Sub Item 2</a>
                                </li>
                                <li><a href="#">Sub Item 3</a></li>
                                <li><a href="#">Sub Item 4</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="language">
                      Edition: <strong>English </strong><i class="fa fa-angle-down"></i>
                        <ul class="language-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">বাংলা</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end navbar -->

        <!-- stasrt top category slider -->
        <div class="topcategory">
            <div class="container">
                <div class="topcategory-area">
                    <ul class="topcategory-slider">
                        <!-- start single category -->
                        @foreach($user as $var)
                        <li class="topsingle-category">
                            <a href="#">
                                <img src="/news/{{$var->image}}" alt="">
                                <div class="topsingle-title">
                                    <p>{{$var->news_title}}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <!-- end top category slider -->


        <!-- start mobile nav button -->
        <div class="mobilenav">
            <div class="container">
                <div class="mobile-nav">
                    <div class="mobile-left"><i class="fa fa-bars opennav"></i></div>
                </div>
                <!-- start mobile nav menu -->
                <div class="sidebar" id="mysidebar">
                    <button class="closenav">&times;</button>
                    <!-- start sidebar menu -->
                    <ul class="sidebar-menu">
                        <li class="listone">
                            <a href="javascript:void(0);" class="menuone">
                                <span class="title">Home</span>
                                <span class="arrow"><i class="fa fa-sort-down"></i></span>
                            </a>
                            <ul class="sidebar-accrodion">
                                <li><a href="#">User</a></li>
                                <li><a href="#">Add news</a></li>
                                <li><a href="#">help</a></li>
                            </ul>
                        </li>
                        <li class="listtwo">
                            <a href="javascript:void(0);" class="menutwo">
                                <span class="title">About</span>
                                <span class="arrow"><i class="fa fa-sort-down"></i></span>
                            </a>
                            <ul class="sidebar-accrodion">
                                <li><a href="#">User</a></li>
                                <li><a href="#">Add news</a></li>
                                <li><a href="#">help</a></li>
                            </ul>
                        </li>
                        <li class="listthree">
                            <a href="javascript:void(0);" class="menuthree">
                                <span class="title">Service</span>
                                <span class="arrow"><i class="fa fa-sort-down"></i></span>
                            </a>
                            <ul class="sidebar-accrodion">
                                <li><a href="#">User</a></li>
                                <li><a href="#">Add news</a></li>
                                <li><a href="#">help</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="title">Contact</span>
                                <span class="arrow"><i class="fa fa-sort-down"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <span class="title">Help</span>
                                <span class="arrow"><i class="fa fa-sort-down"></i></span>
                            </a>
                        </li>
                    </ul>
                    <!-- end sidebar menu -->
                </div>
                <!-- end mobile nav menu -->
            </div>
        </div>
        <!-- end mobile nav button -->

        <!-- start breaking news -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brk-area">
                        <div class="brk-title"><strong>Breaking News:</strong></div>
                                <ul class="brk-slider">
                                    <!-- <ul class="topcategory-slider">
                                    start single category 
                                    @foreach($user as $var)
                                    <li class="topsingle-category">
                                        <a href="#">
                                            <img src="/news/{{$var->image}}" alt="">
                                            <div class="topsingle-title">
                                                <p>{{$var->news_title}}</p>
                                            </div>
                                        </a>
                                    </li>
                                    @endforeach
                                     </ul> -->
                                     @foreach($user2 as $var)
                                    <li class="brk-item">
                                        <strong>{{$var->news_title}}.</strong>
                                     </li>
                                    <!-- <div class="brk-item">
                                        <strong>Lorem ipsum dolor sit amet, consectetur .</strong>
                                    </div>
                                    <div class="brk-item">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</strong>
                                    </div>
                                    <div class="brk-item">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipis.</strong>
                                    </div>
                                    <div class="brk-item">
                                        <strong>Lorem ipsum dolor sit amet, consectetur adipisicing.</strong>
                                    </div> -->
                                    @endforeach
                               </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end breaking news -->
        <script type="text/javascript">
  var today = new Date();
  var day = today.getDay();
  var month = today.getMonth();
  var daylist = ["Sunday","Monday","Tuesday","Wednesday ","Thursday","Friday","Saturday"];
  var monthlist = ["January","February","March","April ","May","June","July"];
  var date = today.getDate()+'-'+(monthlist[month])+'-'+today.getFullYear();
//   var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  var dateTime = date;
   
  document.getElementById("displayDateTime").innerHTML = daylist[day] +','+ dateTime;
 
  </script>
</body>
</html>
