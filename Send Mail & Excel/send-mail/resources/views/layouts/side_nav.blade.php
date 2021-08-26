<!DOCTYPE html>
<html lang="en">

<head>
    <title>new project</title>
    <meta charset="utf-8">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    
    
</head>

<body>
    <div class="main-wrapper">
        <div class="sidebar">
            <div class="dashbord accordion">
                <i class="fa fa-bars"></i>
                Dashboard
            </div>
            <div class="panel panel1">
                <ul>
                    <li>
                        <a href="{{ route('home') }}"> Home </a>
                    </li> 
                    <li>
                        <a href="{{ route('executive_editor.index') }}">User </a>
                    </li>  
                </ul>
            </div>
                 
            <div class="dashbord accordion1">
                    <i class="fa fa-file"></i>
                    News
                </div>
                <div class="panel panel2">
                    <ul>
                        <li>
                            <a href="{{ route('news.index') }}">Add News</a>
                        </li>
                        <li>
                            <a href="{{ route('news.index2') }}">News List</a>
                        </li>
                    </ul>
                </div>
                 
                <div class="dashbord accordion2">
                    <i class="fa fa-file"></i>
                    Category
                </div>
                <div class="panel panel3">
                    <ul>
                        <li>
                            <a href="{{ route('category.index') }}">Add category</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index1') }}">Category List</a>
                        </li>
                        <li>
                            <a href="{{ route('category.index2') }}">Add Sub Category</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="dashbord accordion3">
                    <i class="fa fa-file"></i>
                   Interview
                </div>
                <div class="panel panel4">
                    <ul>
                       
                        <li>
                            <a href="{{ route('interview.index') }}">Add Interview</a>
                        </li>
                        <li>
                            <a href="{{ route('interview.index2') }}">Interview List</a>
                        </li>
                    </ul>
                </div>
                <div class="dashbord accordion4">
                    <i class="fa fa-file"></i>
                    Editorial
                </div>
                <div class="panel panel5">
                    <ul>
                        <li>
                            <a href="{{ route('editorial.index') }}">Add Editorial</a>
                        </li>
                        <li>
                            <a href="{{ route('editorial.list') }}">Editorial List</a>
                        </li>
                       
                    </ul>
                </div>
             
                <div class="dashbord accordion5">
                    <i class="fa fa-file"></i>
                    Press Release
                </div>
                <div class="panel panel6">
                    <ul>
                        <li>
                            <a href="{{ route('pressrelease.index') }}">Add PressRelease</a>
                        </li>
                        <li>
                            <a href="{{ route('fundamental.index') }}">Add Fundamental</a>
                        </li>
                       
                    </ul>
                </div>
                <div class="dashbord accordion6">
                    <i class="fa fa-file"></i>
                   Advertisement
                </div>
                <div class="panel panel7">
                    <ul>
                        <li>
                            <a href="{{ route('advertisement.index') }}">New Advertise</a>
                        </li>
                        <li>
                            <a href="{{ route('advertisement.index2') }}">Archive</a>
                        </li>
                       
                    </ul>
                </div>
    </div>
   

</body>

</html>
