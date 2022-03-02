var coll = document.getElementById("btn-1");
var coll_2 = document.getElementById("btn-2");
var coll_3 = document.getElementById("btn-3");

var arr = document.getElementById("info-icon");
var arr_2 = document.getElementById("info-icon-2");
var arr_3 = document.getElementById("info-icon-3");

var content = document.getElementById("content-1");
var content_2 = document.getElementById("content-2");
var content_3 = document.getElementById("content-3");

var expand_all = document.getElementById("expand-icon");

var active;

function collapse_1(){
    coll.classList.toggle("active");
    if (content.style.display === "block"){
        content.style.display = "none";
    }
    else {
        content.style.display = "block";
    }
    arr.classList.toggle("fa-caret-right");
    arr.classList.toggle("fa-caret-down");
    expand_all.classList.toggle("fa-caret-right");
    expand_all.classList.toggle("fa-caret-down");
}
function collapse_2(){
    coll_2.classList.toggle("active");
    if (content_2.style.display === "block"){
        content_2.style.display = "none";
    }
    else {
        content_2.style.display = "block";
    }
    arr_2.classList.toggle("fa-caret-right");
    arr_2.classList.toggle("fa-caret-down");
    expand_all.classList.toggle("fa-caret-right");
    expand_all.classList.toggle("fa-caret-down");
}
function collapse_3(){
    coll_3.classList.toggle("active");
    if (content_3.style.display === "block"){
        content_3.style.display = "none";
    }
    else {
        content_3.style.display = "block";
    }
    arr_3.classList.toggle("fa-caret-right");
    arr_3.classList.toggle("fa-caret-down");
    expand_all.classList.toggle("fa-caret-right");
    expand_all.classList.toggle("fa-caret-down");
}
