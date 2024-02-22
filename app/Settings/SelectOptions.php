<?php

namespace App\Settings;

class SelectOptions
{
    
    public static function postStatus()
    {
        return [
            1 => 'Em análise',
            2 => 'Bloqueado',
            3 => 'Postado',
        ];
        
    }
}

