<!doctype html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Univerity Services">
        <meta name="author" content="Enio Lila">
        <meta name="keywords" content="university, University, moodle, unigea moodle">
        <meta name="content-language" content="it">
        <title>Unigea</title>

        <link rel="stylesheet" href="{{ URL::asset('css/animation.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/arrow.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/login.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" type="text/css">

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
        <nav class="navbar fixed-top navbar-light bg-faded navbar-static-top navbar-expand moodle-has-zindex" id="header">
            <div class="container navbar-nav">
                <div class="inline-block mr-3" data-region="drawer-toggle">
                    <button aria-expanded="false" aria-controls="nav-drawer" type="button" class="btn nav-link float-sm-left mr-1 " data-action="toggle-drawer" data-side="left" data-preference="drawer-open-nav">
                        <i class="icon fas fa-bars" id="icon" aria-hidden="true" style="color:#1c355d"></i>
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
                                                        <a href=\signout class=dropdown-item menu-action role=menuitem data-title=logout,moodle aria-labelledby=actionmenuaction-6>
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
                                    echo "<span class=login>Non sei collegato.</span>";
                                }
                            ?>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="space"></div>
        <div id="page" class="container-fluid mt-0">
            <div class="row" id="page-content">
                <div class="col-12" id="region-main-box">
                    <div class="col-12" id="region-main">
                        <span class="notifications" id="user-notifications"></span>
                        <div role="main">
                            <span id="maincontent"></span>
                            <div class="my-1 my-sm-5"></div>
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-sm-8">
                                    <div class="card-deck">
                                        <div class="card text-justify">
                                            <h2 class="card-header text-center">
                                                <i class="fas fa-graduation-cap" aria-hidden="true"></i>    
                                                &nbsp; UniGea 
                                            </h2>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <b>
                                                        Studenti iscritti, Docenti, Guest, 
                                                        Tutor, Personale Amministrativo, 
                                                        Tecnico e Bibliotecario.
                                                    </b>
                                                </p>
                                                <p class="card-text" style="margin-bottom: 50px">
                                                    Effettuano l'accesso tramite il 
                                                    pulsante sottostante inserendo le 
                                                    credenziali fornite dall'università per 
                                                    l'accesso allo Sportello Internet/Wifi.
                                                </p>
                                                <h6 class="mt-2 pt-2">Autenticati su:</h6>
                                                <div class="potentialidplist">
                                                    <div class="potentialidp">
                                                        <a href="/" class="btn btn-primary btn-block">
                                                            <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                            &nbsp; myUniGea 
                                                        </a>
                                                    </div>
                                                </div>
                                                <p class="mt-2 pt-2 text-center">
                                                    <a href="/">
                                                        Hai dimenticato lo username o la password?
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="card text-justify">
                                            <h2 class="card-header text-center">
                                                <i class="fas fa-university" aria-hidden="true"></i>    
                                                &nbsp; Esterni 
                                            </h2>
                                            <div class="card-body">
                                                <p class="card-text">
                                                    <b>
                                                        Utenti Esterni non in possesso 
                                                        di email istituzionale UniGea.
                                                    </b>
                                                </p>
                                                <p class="card-text" style="margin-bottom: 50px">
                                                    Effettuano l'accesso attraverso le 
                                                    credenziali che sono state loro assegnate.
                                                </p>
                                                <form action="/" class="mt-3" method:"post" id="login">
                                                    <input type="hidden" name="anchor" id="anchor" value>
                                                    <script>
                                                        document.getElementById('anchor').value = location.hash;
                                                    </script>
                                                    <div class="form-group">
                                                        <label for="username" class="sr-only">Username</label>
                                                        <input id="username" class="form-control" type="text" name="username" value placeholder="Username" autocomplete="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="password" class="sr-only">Password</label>
                                                        <input id="password" class="form-control" type="password" name="password" value placeholder="Password" autocomplete="current-password">
                                                    </div>
                                                    <div class="loginerrors mt-3">
                                                        <!--<a href="#" class="accesshide" id="loginerrormessage">
                                                            La sessione è scaduta. Si prega di autenticarsi nuovamente.
                                                        </a>-->
                                                        <div class="alert alert-danger" role="alert">
                                                            La sessione è scaduta. Si prega di autenticarsi nuovamente.
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary btn-block mt-3" type="submit" id="loginbtn">
                                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                                        &nbsp; Login Esterni 
                                                    </button>
                                                </form>
                                                <div class="forgetpass mt-3 text-center">
                                                    <p>
                                                        <a href="#">Hai dimenticato lo username o la password?</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-md-center mt-2">
                                        <div class="col-md-10">
                                           <p class="mt-4 pt-2 text-center">
                                               Per informazioni su UniGea:&nbsp; 
                                               <a href="#">
                                                   <i class="fas fa-book" aria-hidden="true"></i>
                                                   &nbsp; Pagina guide utilizzo UniGea
                                               </a>
                                           </p>
                                           <p class="mt-4 pt-2 text-center">
                                               Per ricevere assistenza:&nbsp; 
                                               <a href="#">
                                                   <i class="fa fa-ticket" aria-hidden="true"></i>
                                                   &nbsp; Ticket UniGea Studenti
                                               </a>
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
                            echo "<span class=login>Non sei collegato.</span>";
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
                    <div class="moodlelink">
                        <a href="http://moodle.org" class="d-inline-block aalink white-link" target="_blank">
                            <img class="logo" src="{{ URL::asset('images/moodle.png') }}" alt="Moodle Logo">
                        </a>
                    </div>
                </div>
            </div>
        </footer>
        <!---------------------------------->
        <script src="/public/js/toTop.js"></script>
        <script src="/public/js/animation.js"></script>
    </body>
</html>