<?php
/**
 * Has Plugin
 */
function mpt_has_plugin($plugin){
    $plugins = array(
        'acf'       => 'acf',
    );
    
    foreach($plugins as $pl => $class){
        if($plugin != $pl)
            continue;
        
        return class_exists($class);
    }
    
    return true;
}

/**
 * Parse Args Récursif
 */
if(!function_exists('wp_parse_args_recursive')){
    function wp_parse_args_recursive(&$a, $b){
        $a = (array) $a;
        $b = (array) $b;
        $result = $b;
        
        foreach($a as $k => &$v){
            if (is_array($v) && isset($result[$k])){
                $result[$k] = wp_parse_args_recursive($v, $result[$k]);
            }else{
                $result[$k] = $v;
            }
        }
        
        return $result;
    }
}