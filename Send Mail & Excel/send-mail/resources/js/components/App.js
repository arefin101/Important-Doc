import React, { Component , Fragment} from 'react';
import ReactDOM from 'react-dom';
import './style.css';
import logo from './logo.png';
import tn from './tn.jpg';
import './slick/slick.css';
import './slick/slick-theme.css';
import './slick/slick.min.js';
import './custom.js';

export default class App extends Component {
    render() {
        return (
            // start topbar
 <div>
     {/* <!-- start topbar --> */}
    <div className="topbar">
        <div className="container">
            <div className="row">
                <div className="col-lg-4 col-md-6">
                    <div className="tobar-left">
                        <ul className="topbar-menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms</a></li>
                            {/* <li><a href="#" style="background:red;margin-left:6px;"><i className="fa fa-shopping-cart" style="color:#fff;"></i> 0</a></li> */}
                        </ul>
                    </div>
                </div>
                <div className="col-lg-5 col-md-6">
                    <div className="topbar-middle">
                        <div className="topbar-social">
                            <ul className="social-menu">
                                <li><a href="#"><i className="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i className="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i className="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i className="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div className="usericon">
                            <a href="#"><i className="fa fa-user"></i></a>
                        </div>
                    </div>
                </div>
                <div className="col-lg-3 col-md-6">
                    <div className="topbar-right">
                        <form action="">
                            <input type="text" placeholder="Search"/>
                            <button className="search-btn"><i className="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/* <!-- end top bar --> */}

    {/* <!-- start topbar brand --> */}
    <div className="topbar-brand">
        <div className="container">
            <div className="row">
                <div className="col-lg-4 col-md-6">
                    <div className="brand-left">
                        <a href="#"><img src="" alt=""/></a>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6">
                    <div className="brand-middle">
                        <a href="#" className="brand"><img src={logo}  alt="" /></a>
                        <h4 >Tuesday, January 19, 2021</h4>
                    </div>
                </div>
                <div className="col-lg-4 col-md-6">
                    <div className="brand-right">
                        <a href="#"><img src="" alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/* <!-- end topbar brand --> */}

    {/* <!-- start navbar --> */}
    
            <header className="headernav">
                <div className="container">
                    <div className="headernav-area">
                        <nav>
                            <ul className="nav">
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a>
                                    <ul>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Resume</a>
                                    <ul>
                                        <li><a href="#">item a lonng submenu</a></li>
                                        <li><a href="#">item</a>
                                            <ul>
                                                <li><a href="#">Ray</a></li>
                                                <li><a href="#">Veronica</a></li>
                                                <li><a href="#">Bushy</a></li>
                                                <li><a href="#">Havoc</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Download</a></li>
                                <li><a href="#">Rants</a>
                                    <ul>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                        <li><a href="#">item</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </nav>
                        <div className="language"><a href="#">English</a></div>
                    </div>
                </div>
            </header>

    {/* <!-- end navbar --> */}

    {/* <!-- stasrt top category slider --> */}
    <div className="topcategory">
        <div className="container">
            <div className="topcategory-area">
                <ul className="topcategory-slider">
                    {/* <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category -->
                    <!-- start single category --> */}
                    <li className="topsingle-category">
                        <a href="#">
                            <img src={tn} alt=""/>
                            <div className="topsingle-title">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            </div>
                        </a>
                    </li>
                    {/* <!-- end single category --> */}
                </ul>
            </div>
        </div>
    </div>
    {/* <!-- end top category slider --> */}

    
    {/* <!-- start mobile nav button --> */}
    <div className="mobilenav">
        <div className="container">
            <div className="mobile-nav">
                <div className="mobile-left"><i className="fa fa-bars opennav"></i></div>
                <div className="language"><a href="#">English</a></div>
            </div>
            {/* <!-- start mobile nav menu --> */}
            <div className="sidebar" id="mysidebar">
                <button className="closenav">&times;</button>
                {/* <!-- start sidebar menu --> */}
                <ul className="sidebar-menu">
                    <li className="listone">
                        <a href="#" className="menuone">
                            <span className="title">Home</span>
                            <span className="arrow"><i className="fa fa-sort-down"></i></span>
                        </a>
                        <ul className="sidebar-accrodion">
                            <li><a href="#">User</a></li>
                            <li><a href="#">Add news</a></li>
                            <li><a href="#">help</a></li>
                        </ul>
                    </li>
                    <li className="listtwo">
                        <a href="#" className="menutwo">
                            <span className="title">About</span>
                            <span className="arrow"><i className="fa fa-sort-down"></i></span>
                        </a>
                        <ul className="sidebar-accrodion">
                            <li><a href="#">User</a></li>
                            <li><a href="#">Add news</a></li>
                            <li><a href="#">help</a></li>
                        </ul>
                    </li>
                    <li className="listthree">
                        <a href="#" className="menuthree">
                            <span className="title">Service</span>
                            <span className="arrow"><i className="fa fa-sort-down"></i></span>
                        </a>
                        <ul className="sidebar-accrodion">
                            <li><a href="#">User</a></li>
                            <li><a href="#">Add news</a></li>
                            <li><a href="#">help</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span className="title">Contact</span>
                            <span className="arrow"><i className="fa fa-sort-down"></i></span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span className="title">Help</span>
                            <span className="arrow"><i className="fa fa-sort-down"></i></span>
                        </a>
                    </li>
                </ul>
                {/* <!-- end sidebar menu --> */}
            </div>
            {/* <!-- end mobile nav menu --> */}
        </div>
    </div>
    {/* <!-- end mobile nav button --> */}
      

    {/* <!-- start breaking news --> */}
    <div className="container">
        <div className="row">
            <div className="col-md-12">
                <div className="brk-area">
                    <div className="brk-title"><strong>Breaking News:</strong></div>
                    <div className="brk-slider">
                        <div className="brk-tem">
                            <p>Lorem ipsum dolor sit amet, consectetur</p>
                        </div>
                        <div className="brk-tem">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div className="brk-tem">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div className="brk-tem">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                        <div className="brk-tem">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/* <!-- end breaking news --> */}
    
  
    {/* <!-- top news strat --> */}
    <div className="topnews">
        <div className="container">
            <div className="row">
                <div className="col-md-6 tn-left">
                    <div className="row tn-slider">
                        <div className="col-md-6">
                            <div className="tn-single">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">
                                        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="tn-single">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">
                                        <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-6 tn-right">
                    <div className="row">
                        <div className="col-md-6">
                            <div className="tn-image">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur.</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="tn-image">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur.</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="tn-image">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur.</a>
                                </div>
                            </div>
                        </div>
                        <div className="col-md-6">
                            <div className="tn-image">
                                <img src={tn} alt=""/>
                                <div className="tn-title">
                                    <a href="#">Lorem ipsum dolor sit amet, consectetur.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/* <!-- end top news --> */}


    {/* <!-- start main content div --> */}
    <div class="main-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <h2 class="page-title">Just a Sample Heading</h2>
                    <div class="page-author">
                        <span class="post-author">Newspaper<a href="#"></a></span>
                        <span class="post-date">Jan 16, 2021<a href="#"></a></span>
                    </div>
                    <div class="page-image">
                        <a href="#"><img src={tn} alt=""/></a>
                    </div>
                    <div class="page-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam ipsa reiciendis, voluptate similique possimus. Voluptatem natus, aliquid et inventore placeat libero saepe eaque. Deleniti maxime eveniet corporis doloribus, id atque, non minus ratione accusantium at nam necessitatibus. Veritatis, doloribus, in, vel aperiam, illo commodi officia ex saepe et nisi odio.</p>
                        <a href="#" class="readmore">Read more <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    {/* <!-- start popular news area --> */}
                    <div class="popularnews">
                        <div class="popularnews-heading">
                            <h3>Popular News</h3>
                        </div>
                        {/* <!-- start popular slider --> */}
                        <ul class="popularnews-slider">
                            {/* <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Top Health news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod maiores quasi suscipit?</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Test sport news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>All Popular News here</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Test sport news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Test sport news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Test sport news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item -->
                            <!-- popular slider item --> */}
                            <li class="popularnews-items">
                                <a href="#">
                                    <img src={tn} alt=""/>
                                    <div class="popularnews-title">
                                        <h4>Test sport news</h4>
                                    </div>
                                </a>
                            </li>
                            {/* <!-- end popular slider item --> */}
                        </ul>
                        {/* <!-- end popular slider --> */}
                    </div>
                    {/* <!-- end popular news area --> */}
                </div>
            </div>
        </div>
    </div>
    {/* <!-- end main content div --> */}

    

</div>    





 

        );
    }
}