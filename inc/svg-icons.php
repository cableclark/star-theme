<?php

function close_icon_svg () {
    return "<svg viewBox='0 0 57.93 56.87' class='search-x'><title>Ex</title><g id='Layer_2' data-name='Layer 2'><g id='Layer_1-2' data-name='Layer 1'><line x1='3.06' y1='2' x2='55.93' y2='54.87'/><line x1='54.87' y1='2' x2='2' y2='54.87'/></g></g></svg>";
}                

function search_icon_svg () {
    if (!is_front_page()) {
        $className= "search-icon--white";
    }
    else {
        $className= "";
    }
    
    return  "<svg id='svg8' viewBox='0 0 160.66 150.33' version='1.1' class='search-icon $className'><title id='title2'>Search Icon</title><g transform='matrix(0.95450003,0,0,0.95095233,11.397964,8.2185484)' data-name='Layer 2' id='Layer_2'><g data-name='Layer 1' id='Layer_1-2'><path id='path4' d='M 145.84,135 96.12,89.41 a 54.37,54.37 0 1 0 -3.38,3.68 l 49.73,45.59 a 2.5,2.5 0 0 0 3.37,-3.69 z m -91.4,-29.11 a 51.44,51.44 0 1 1 51.44,-51.44 51.5,51.5 0 0 1 -51.44,51.43 z' /></g><ellipsery='52.196182'rx='52.002178' cy='53.840672' cx='54.696373' id='path16'/></g></svg>
    ";
}     
