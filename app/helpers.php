<?php
// fonction va me permettre de retourner le titre de la page si elle existe sinon on passe une chaine vide
if(!function_exists('page_title')){
    function page_title($title){
        $base_title='laracarte - list of artisant';
        return empty($title) ? $base_title : sprintf("%s | %s",$title,$base_title);
       /*  ;
        if($title===''){
            return $base_title;
        }else{
            return $title . ' | '.$base_title;
        } */
    }
}
// retourner la route qui est active (la classe active)
if(!function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active':'';
    }
}
    
    