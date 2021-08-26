<!DOCTYPE html>
<html lang="en">

<head>
    <title>new project</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    
    <!-- newly added -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>
    <!-- ------- -->

    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    
</head>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
@include('layouts.side_nav')
    <header>
        <div class="brand">
            <a href="#">thevoice24.com</a>
        </div>
        <nav>
            <div class="user">
                <!-- <span class="quicklink"><a href="#">quicklink</a></span> -->
                <!-- <span class="date" id="datetime"></span> -->
                <span id='ct5' style="color:white;"></span>
                <i class="fa fa-user"></i>
                <span class="username"> {{ Auth::user()->name }}</span>
                <i class="fa fa-caret-down usericon"></i>
            </div>
                <ul class="userpanel">
                    <li><a href="{{ route('logout') }}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                        
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                       </form>
                     </li>
                    <li><a href="#">setting</a></li>
                    <li><a href="#">setting</a></li>
                </ul>
        </nav>
    </header>
    @yield('cont')
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
    <script>
        $(document).ready(function() {
            $(".accordion").click(function() {
                $(".panel1").toggleClass("active");
            });
            $(".accordion1").click(function() {
                $(".panel2").toggleClass("active");
            });
            $(".accordion2").click(function() {
                $(".panel3").toggleClass("active");
            });
            $(".accordion3").click(function() {
                $(".panel4").toggleClass("active");
            });
            $(".accordion4").click(function() {
                $(".panel5").toggleClass("active");
            });

            $(".accordion5").click(function() {
                $(".panel6").toggleClass("active");
            });
            $(".accordion6").click(function() {
                $(".panel7").toggleClass("active");
            });
            $(".usericon").click(function() {
                $(".userpanel").toggleClass("active");
            });

            $(".sidebar .panel ul li a").click(function() {
                $(".sidebar .panel ul li a").removeClass("bgclick");
                $(this).addClass("bgclick");
            });
        });
        // var dt = new Date();
        // document.getElementById("datetime").innerHTML =dt.toLocaleDateString();
        // document.getElementById("datetime").innerHTML = (("0"+dt.getDate()).slice(-2)) +"."+ (("0"+(dt.getMonth()+1)).slice(-2)) +"."+ (dt.getFullYear()) +" "+ (("0"+dt.getHours()).slice(-2)) +":"+ (("0"+dt.getMinutes()).slice(-2));
        function display_ct5() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

        var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear(); 
        x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() + ":" + ampm;
        document.getElementById('ct5').innerHTML = x1;
        display_c5();
        }
        function display_c5(){
        var refresh=1000; // Refresh rate in milli seconds
        mytime=setTimeout('display_ct5()',refresh)
        }
        display_c5()
	</script>
</body>

</html>
