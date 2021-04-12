<?php

namespace App\Models\Traits;
use Illuminate\Support\Facades\App;

trait Translatable
{

    public function __($originfieldName){
        $locale = App::getLocale() ?? $this->defaultLocale;
        if ($locale === 'ro') {
            $fieldName = $originfieldName . '_ro';
        } else {
            $fieldName = $originfieldName;
        }

        if ($locale ==='ro' && (is_null($this->$fieldName) || empty($this->$fieldName))){
            return $this->$originfieldName;
        }

        return $this->$fieldName;
    }

}
