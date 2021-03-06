<?php

class DvsLanguage extends Eloquent
{
    protected $table = 'dvs_languages';

    public function pages()
    {
        return $this->hasMany('DvsPage', 'language_id');
    }

    public function getNameAttribute()
    {
		return $this->regional_human_name ?: $this->human_name;
    }
}