//services (read more)
let more = document.querySelectorAll(".more-service");
for (let i=0; i<more.length; i++){
    more[i].addEventListener('click', function(){
        more[i].parentNode.classList.toggle('active')
    })
}

var i = 0;
function read(){
    if (!i){
        document.getElementById("readMore").style.
            display='inline';
        document.getElementById('read').innerHTML="Read less";
        i=1;      
    }
    else{
        document.getElementById('readMore').style.
            display='none';
        document.getElementById('read').innerHTML="Read more";
        i=0;
    }
}

var i = 0;
function read2(){
    if (!i){
        document.getElementById("readMore2").style.
            display='inline';
        document.getElementById('read2').innerHTML="Read less";
        i=1;      
    }
    else{
        document.getElementById('readMore2').style.
            display='none';
        document.getElementById('read2').innerHTML="Read more";
        i=0;
    }
}

var i = 0;
function read3(){
    if (!i){
        document.getElementById("readMore3").style.
            display='inline';
        document.getElementById('read3').innerHTML="Read less";
        i=1;      
    }
    else{
        document.getElementById('readMore3').style.
            display='none';
        document.getElementById('read3').innerHTML="Read more";
        i=0;
    }
}