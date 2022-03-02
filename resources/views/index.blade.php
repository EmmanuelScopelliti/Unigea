<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Univerity Services">
        <meta name="author" content="Enio Lila">
        <meta name="keywords" content="university, University, moodle, unigea moodle">
        <meta name="content-language" content="it">
        <title>Unigea</title>

        <link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/arrow.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">
        <!-- <link rel="stylesheet" href="{{ URL::asset('css/phone-style.css') }}" type="text/css"> -->

        <!-- jQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Fa Icons -->
        <script src="https://kit.fontawesome.com/5a694ab3af.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
        crossorigin="anonymous">
        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" 
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" 
        crossorigin="anonymous"></script>
    </head>
    <body>
        <button id="to_top_btn">
            <i class="toTopButton arrow up" alt="arrows"></i>
        </button>
        <nav class="navbar fixed-top navbar-light bg-faded navbar-static-top navbar-expand moodle-has-zindex">
            <div class="container navbar-nav">
                <div class="inline-block mr-3" data-region="drawer-toggle">
                    <button onClick="show_hide_sidebar ()" id="sideButton" aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 hide" data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                        <i class="icon spinner_open fa-solid fa-xmark" id="icon" aria-hidden="true" style="color:white"></i>
                        <span class="sr-only">Pannello laterale</span>
                        <span aria-hidden="true"> </span>
                        <span aria-hidden="true"> </span>
                        <span aria-hidden="true"> </span>
                    </button>
                </div>
                <ul class="nav navbar-nav ml-auto">
                    <div class="d-none d-lg-block"> </div>
                    <li class="nav-item"> </li>
                    <li class="nav-item d-flex aligh-items-center">
                        <div class="usermenu">
                            <?php
                                session_start();
                                if (Session::has('name')) {
                                    echo "
                                    <div class=action-menu moodle-actionmenu nowrap-items d-inline id=action-menu-1 data-enhance=moodle-core-actionmenu>
                                        <div class=menubar d-flex id=action-menu-1-menubar role=menubar>
                                            <div class=action-menu-trigger>
                                                <div class=dropdown>
                                                    <a href=# tabindex=0 class=d-inline-block  dropdown-toggle icon-no-margin id=action-menu-toggle-1 aria-label=User menu data-toggle=dropdown role=button aria-haspopup=true aria-expanded=false aria-controls=action-menu-1-menu>                                                      
                                                        <span class=userbutton>
                                                            <span class=usertext mr-1>$_SESSION[name]</span>
                                                            <span class=avatars>
                                                                <span class=avatar current>
                                                                    <img src=https://ole.unibz.it/pluginfile.php/165855/user/icon/boost/f2?rev=2040386 class=userpicture width=35 height=35 alt=>
                                                                </span>
                                                            </span>
                                                        </span>    
                                                        <b class=caret> </b>
                                                    </a>
                                                    <div class=dropdown-menu dropdown-menu-right menu  align-tr-br id=action-menu-1-menu data-rel=menu-content aria-labelledby=action-menu-toggle-1 role=menu data-align=tr-br>
                                                        <a href=# class=dropdown-item menu-action role=menuitem data-title=mymoodle,admin aria-labelledby=actionmenuaction-1>
                                                            <i class=icon fa fa-tachometer fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-1>Dashboard</span>
                                                        </a>
                                                        <div class=dropdown-divider role=presentation>
                                                            <span class=filler>&nbsp;</span>
                                                        </div>
                                                        <a href=# class=dropdown-item menu-action role=menuitem data-title=profile,moodle aria-labelledby=actionmenuaction-2>
                                                            <i class=icon fa fa-user fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-2>Profile</span>
                                                        </a>
                                                        <a href=# class=dropdown-item menu-action role=menuitem data-title=grades,grades aria-labelledby=actionmenuaction-3>
                                                            <i class=icon fa fa-table fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-3>Grades</span>
                                                        </a>
                                                        <a href=# class=dropdown-item menu-action role=menuitem data-title=messages,message aria-labelledby=actionmenuaction-4>
                                                            <i class=icon fa fa-comment fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-4>Messages</span>
                                                        </a>
                                                        <a href=# class=dropdown-item menu-action role=menuitem data-title=preferences,moodle aria-labelledby=actionmenuaction-5>
                                                            <i class=icon fa fa-wrench fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-5>Preferences</span>
                                                        </a>
                                                        <div class=dropdown-divider role=presentation>
                                                            <span class=filler>&nbsp;</span>
                                                        </div>
                                                        <a href=/signout class=dropdown-item menu-action role=menuitem data-title=logout,moodle aria-labelledby=actionmenuaction-6>
                                                            <i class=icon fa fa-sign-out fa-fw aria-hidden=true></i>
                                                            <span class=menu-action-text id=actionmenuaction-6>Log out</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>";
                                }
                                else{
                                    echo "<span class=login>Non sei collegato. 
                                    (<a href=/login class=login-link>Login</a>)
                                    </span>";
                                }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="aside show" id="sideBar">
            <div id="nav-drawer" data-region="drawer" class="d-print-none moodle-has-zindex " aria-hidden="false" tabindex="-1">
                <nav class="list-group" aria-label="Site">
                    <ul>
                        <li>
                            <a class="list-group-item list-group-item-action active active_tree_node" href="/">
                                <div class="ml-0">
                                    <div class="media">
                                            <span class="media-left">
                                                <i class="icon fa fa-home fa-fw" aria-hidden="true"></i>
                                            </span>
                                        <span class="media-body font-weight-bold">Home</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="list-group-item list-group-item-action" href="/dashboard" data-key="myhome" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="home">
                                <div class="ml-0">
                                    <div class="media">
                                            <span class="media-left">
                                                <i class="icon fa fa-tachometer fa-fw " aria-hidden="true"></i>
                                            </span>
                                        <span class="media-body ">Dashboard</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="list-group-item list-group-item-action" href="/month" data-key="calendar" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="60" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                                <div class="ml-0">
                                    <div class="media">
                                            <span class="media-left">
                                                <i class="icon fa fa-calendar fa-fw " aria-hidden="true"></i>
                                            </span>
                                        <span class="media-body ">Calendar</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="list-group-item list-group-item-action" href="/files" data-key="privatefiles" data-isexpandable="0" data-indent="0" data-showdivider="0" data-type="70" data-nodetype="0" data-collapse="0" data-forceopen="0" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="1">
                                <div class="ml-0">
                                    <div class="media">
                                            <span class="media-left">
                                                <i class="icon fa fa-file-o fa-fw " aria-hidden="true"></i>
                                            </span>
                                        <span class="media-body ">Private files</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="list-group-item files" data-key="mycourses" data-isexpandable="1" data-indent="0" data-showdivider="0" data-type="0" data-nodetype="1" data-collapse="0" data-forceopen="1" data-isactive="0" data-hidden="0" data-preceedwithhr="0" data-parent-key="home">
                                <div class="ml-0">
                                    <div class="media">
                                            <span class="media-left">
                                                <i class="icon fa fa-graduation-cap fa-fw " aria-hidden="true"></i>
                                            </span>
                                        <span class="media-body">My courses</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="header" id="header_main">
            <div class="card card-head-size">
                <div class="card-body"> 
                    <h1 class="card-title">
                        <i class="fas fa-building"></i>&nbsp;Unigea&nbsp;<em>[THE LOGO GOES HERE]</em>
                    </h1>
                </div>
            </div>
            <div class="main" id="main">
                <div id="info" class="card info-card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                            Proin euismod efficitur diam, quis molestie felis suscipit at. 
                            Quisque sit amet varius arcu, sed volutpat urna. 
                            Sed facilisis pharetra ante, vel finibus quam consequat in. 
                            Donec a ultrices magna. 
                            Morbi euismod finibus purus eget condimentum. 
                            Aenean metus quam, faucibus ut bibendum eu, placerat quis odio. 
                            Curabitur eget volutpat augue. Pellentesque ultrices.
                        </p>
                        <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Sed malesuada sit amet elit ut fringilla. Etiam sit.
                        </p>
                        <div class="space"></div>
                        <?php
                            if (Session::has('name')) 
                            {
                                echo "<div class=box py-3 d-flex justify-content-center>
                                    <div class=simplesearchform>
                                        <form method=get action=search.link.php autocomplete=off accept-charset=UTF-8 class=mform form-inline simplesearchform>
                                            <input type=hidden name=areaids value=core_course-curse>
                                            <div class=input-group>
                                                <label for=searchinput>
                                                    <span class=sr-only>Search courses</span>
                                                </label>
                                                <input type=text class=form-control id=searchinput placeholder=Search courses aria-label=Search courses name=q data-region=input autocomplete=off value>
                                                <div class=input-group-append>
                                                    <button class=btn btn-primary search-icon type=submit>
                                                        <i class=icon fas fa-search fa fw aria-hidden=true></i>
                                                        <span class=sr-only>Search courses</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>";
                            }
                        ?>
                        <div id="frontpage_category-names">
                            <h2>Course categories</h2>
                            <div class="course_category_tree clearfix frontpage_category-names">
                                <div class="collapsible-actions">
                                    <button class="expand-all right" id="axpand-all" onclick="collapse_1(), collapse_2(), collapse_3()">
                                    <i class="fa-solid fa-caret-right expand-icon" id="expand-icon"></i>
                                        <a href="#" class="collapsexpand aabtn">Expand all</a>
                                    </button>
                                </div>
                                <div class="course_content" id="content">
                                    <div class="subcategories" id="subcategories">
                                        <div class="category with_children loaded collapsed" id="category" data-categoryid="13" data-depth="1" data-showcourses="5" data-type="0" aria-expanded="false">
                                            <div class="info one" id="info">
                                                <h3 class="categoryname aabtn" id="name">
                                                    <button class="collapsible" id="btn-1" onClick="collapse_1()">
                                                        <i class="fa-solid fa-caret-right info-icon" id="info-icon"></i>
                                                        <a href="/course1">
                                                            Course 1
                                                        </a>
                                                    </button>
                                                </h3>
                                                <div class="content-1" id="content-1">
                                                   <p class="lead description-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Aenean et diam nulla. 
                                                        Vivamus vestibulum lectus quis sapien tempor, ut sagittis ex condimentum. 
                                                        Suspendisse vel cursus lacus. 
                                                        Proin tempor sem id mi tempus interdum. 
                                                        In porta, purus nec cursus consectetur, erat velit luctus arcu, 
                                                        et ultrices elit erat vel elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info two" id="info">
                                                <h3 class="categoryname aabtn" id="name">
                                                    <button class="collapsible" id="btn-2" onClick="collapse_2()">
                                                        <i class="fa-solid fa-caret-right info-icon" id="info-icon-2"></i>
                                                        <a href="/course2">
                                                            Course 2
                                                        </a>
                                                    </button>
                                                </h3>
                                                <div class="content-2" id="content-2">
                                                    <p class="lead description-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Aenean et diam nulla. 
                                                        Vivamus vestibulum lectus quis sapien tempor, ut sagittis ex condimentum. 
                                                        Suspendisse vel cursus lacus. 
                                                        Proin tempor sem id mi tempus interdum. 
                                                        In porta, purus nec cursus consectetur, erat velit luctus arcu, 
                                                        et ultrices elit erat vel elit.
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="info three" id="info">
                                                <h3 class="categoryname aabtn" id="name">
                                                    <button class="collapsible" id="btn-3" onClick="collapse_3()">
                                                        <i class="fa-solid fa-caret-right info-icon" id="info-icon-3"></i>
                                                        <a href="/course3">
                                                            Course 3
                                                        </a>
                                                    </button>
                                                </h3>
                                                <div class="content-3" id="content-3">
                                                    <p class="lead description-text">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                                        Aenean et diam nulla. 
                                                        Vivamus vestibulum lectus quis sapien tempor, ut sagittis ex condimentum. 
                                                        Suspendisse vel cursus lacus. 
                                                        Proin tempor sem id mi tempus interdum. 
                                                        In porta, purus nec cursus consectetur, erat velit luctus arcu, 
                                                        et ultrices elit erat vel elit.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
                <div id="calendar" class="card calendar-card">
                    <div class="card-body">
                        <h5 class="card-title">Calendario</h5>
                        <span class="loading-icon icon-no-margin" hidden="true">
                            <i class="icon fa fa-circle-o-notch fa-spin fa-fw" 
                            title="Caricamento in corso" aria-label="Caricamento in corso"></i>
                        </span>
                        <table class="minicalendar calendartable">
                            <caption class="calendar-controls">
                                <!--<a href="#" class="arrow_link previous" title="Previous month" data-year="2022" data-month="1">
                                    <span class="arrow">◄</span>
                                </a>-->
                                <h5 class="calendar"> 
                                    <a href="/calendar" title="Questo mese">February 2022</a>
                                </h5>
                                <!--<a href="#" class="arrow-link next" data-year="2022" data-month="3">
                                    <span class="arrow">►</span>
                                </a>-->
                            </caption>
                            <thead>
                                <tr>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Domenica</span>
                                        <span aria-hidden="true">Dom</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Lunedì</span>
                                        <span aria-hidden="true">Lun</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Martedì</span>
                                        <span aria-hidden="true">Mar</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Mercoledì</span>
                                        <span aria-hidden="true">Mer</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Giovedì</span>
                                        <span aria-hidden="true">Gio</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Venerdì</span>
                                        <span aria-hidden="true">Ven</span>
                                    </th>
                                    <th class="header text-xs-center">
                                        <span class="sr-only">Sabato</span>
                                        <span aria-hidden="true">Sab</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr data-region="month-view-week">
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">1</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">2</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">3</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">4</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">5</span>
                                    </td>
                                </tr>
                                <tr>
                                <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">6</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">7</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">8</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">9</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">10</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">11</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">12</span>
                                    </td>
                                </tr>
                                <tr>
                                <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">13</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">14</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">15</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">16</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">17</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">18</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">19</span>
                                    </td>
                                </tr>
                                <tr>
                                <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">20</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">21</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">22</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">23</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">24</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">25</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">26</span>
                                    </td>
                                </tr>
                                <tr>
                                <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">27</span>
                                    </td>
                                    <td class="day text-center">
                                        <span class="sr-only">Nessun evento, Tuesday 1 February</span>
                                        <span aria-hidden="true">28</span>
                                    </td>
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="dayblank">&nbsp;</td>
                                    <td class="dayblank">&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
        <footer class="footer" id="footer">
            <div class="container">
                <div class="logininfo">
                    <?php
                        if (Session::has('name')) {
                            echo "
                            You are logged in as 
                            <a href=/user title=View profile>$_SESSION[name]</a>
                            (<a href=/signout>Log out</a>)";
                        }
                        else {
                            echo "<span class=login>Non sei collegato. 
                                (<a href=/login class=login-link>Login</a>)
                            </span>";
                        }
                    ?>
                </div>
                <div class="logo-section">
                    <div class="homelink">
                        <a href="/" class="home white-link">
                            <i class="fa-solid fa-building logo"></i>
                            &nbsp;Unigea&nbsp;<em>[THE LOGO GOES HERE]</em>
                        </a>
                    </div>
                    <div class="moodlelink right">
                        <a href="http://moodle.org" class="d-inline-block aalink white-link" target="_blank">
                            <img class="logo" src="{{ URL::asset('images/moodle.png') }}" alt="Moodle Logo">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!---------------------------------->
        <script src="{{ URL::asset('js/toTop.js') }}" type="text/javascript"></script>
        <!--<script src="{{ URL::asset('js/animation.js') }}" type="text/javascript"></script>-->
        <script src="{{ URL::asset('js/hide_show.js') }}" type="text/javascript"></script>
        <script src="{{ URL::asset('js/collapsible.js') }}" type="text/javascript"></script>
    </body>
</html>