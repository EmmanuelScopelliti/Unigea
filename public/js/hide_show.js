function show_hide_sidebar (){
    var sidebar = document.getElementById("sideBar");
    var button = document.getElementById("sideButton");
    var info = document.getElementById("header_main");
    var icon = document.getElementById("icon");
    var footer = document.getElementById("footer");
    var size = sidebar.offsetWidth;
    var med_screen = 285/1.5;
    var small_screen = 285/2;

    if (sidebar.style.display === "none"){

        console.log(size);
        
        sidebar.style.display = "block";

        icon.classList.add("fa-xmark");
        icon.classList.add("spinner_open");
        icon.classList.remove("fa-bars");
        icon.classList.remove("spinner_close");

        if(size === med_screen){
            info.style.left = med_screen.toString() + "px";
            info.style.width = "calc(100% - "+ med_screen.toString +"px)";
        }
        else if(size === small_screen){
            info.style.left = small_screen.toString() + "px";
            info.style.width = "calc(100% - "+ small_screen.toString +"px)";
        }
        else {
            info.style.left = "295px";
            info.style.width = "calc(100% - 295px)";
        }

        button.classList.remove("hide");
        button.classList.add("show");
        button.setAttribute("aria-expanded", "true");

        footer.style.width = "calc(100% - 285px)";
    } else {
        sidebar.style.display = "none";

        icon.classList.remove("fa-xmark");
        icon.classList.remove("spinner_open");
        icon.classList.add("fa-bars");
        icon.classList.add("spinner_close");

        info.style.left = "0";
        info.style.width = "100%";

        button.classList.remove("show");
        button.classList.add("hide");
        button.setAttribute("aria-expanded", "false");

        footer.style.width = "100%";
    }
}