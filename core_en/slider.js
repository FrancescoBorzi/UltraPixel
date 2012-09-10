function fadeout(name, all)
{
    var object=document.getElementById(name);
    setTimeout('document.getElementById("'+name+'").style.opacity="1";', 200);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.9";', 300);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.8";', 400);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.7";', 500);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.6";', 600);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.5";', 700);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.4";', 800);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.3";', 900);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.2";', 1000);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.1";', 1100);
    if (all==0) { setTimeout('document.getElementById("'+name+'").style.display="none";', 1100); }
}

function fadein(name, all)
{
    setTimeout('document.getElementById("'+name+'").style.opacity="0.2";', 100);
    if (all==0) { setTimeout('document.getElementById("'+name+'").style.display="block";', 100); }
    setTimeout('document.getElementById("'+name+'").style.opacity="0.2";', 200);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.3";', 300);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.4";', 400);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.5";', 500);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.6";', 600);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.7";', 700);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.8";', 800);
    setTimeout('document.getElementById("'+name+'").style.opacity="0.9";', 900);
    setTimeout('document.getElementById("'+name+'").style.opacity="1";', 1000);
}

var start=setInterval("inizia();", 5000);

var divs=1;
function inizia()
{
    fadeout(divs, 0);
    divs++;
    if(document.getElementById(divs)==null)
    {
        divs=1;
    }
    fadeout(divs-1, 0);
    setTimeout("fadein("+divs+", 0)", 1300);
}