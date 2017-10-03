<?php

namespace App\Repositories;

use App\Models\Lang;
use InfyOm\Generator\Common\BaseRepository;
use Config, Cookie;

class LangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lang::class;
    }

    /**
     * Set locale language
     * @return string
     */
    public function store($input)
    {
        return $this->setLocale($input['code']);
    }
    
    public function setLocale($locale)
    {
        if (!in_array($locale, Config::get('translatable.locales'))) {
            $locale = Config::get('app.locale');
        }

        Cookie::queue('locale', $locale);

        return $locale;
    }

    /**
     * Get current locale language
     * @return string
     */
    public function getCurrent()
    {
        return \App::getLocale();
    }

    /**
     * Get language file content
     *
     * @param $name
     * @return array
     */
    public function getContent($name)
    {
        return Lang::get($name);
    }
}
