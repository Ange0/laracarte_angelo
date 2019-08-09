<?php
    function page_title($title){
        $base_title='laracarte - list of artisant';
        if($title===''){
            return $base_title;
        }else{
            return $title . ' | '.$base_title;
        }
    }