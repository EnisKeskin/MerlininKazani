<?php 

if(url(1)) {
    require view("konular");
}else {
    require view("index");  
}