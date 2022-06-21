<?php

namespace App\View\Components\Home;

use Illuminate\View\Component;
use Illuminate\Support\Arr;

class Portfolio extends Component
{
    public array $items = [];

    public array $tabs = [];


    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->items = [
            [
                'category' => ['Laravel', 'Tailwind.css', 'WordPress'],
                'title' => 'Full Stack app with Laravel, Tailwindcss and WordPress',
                'image' => url('/img/wordpress.png'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
            [
                'category' => ['Wordpress', 'PHP'],
                'title' => 'Full Stack e-commerce app with Wordpress and PHP ',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
            [
                'category' => ['HTML','CSS', 'Javascript'],
                'title' => 'Full Stack app with HTML,CSS and Javascript',
                'image' => url('/img/HCJ.png'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
            [
                'category' => ['PHP'],
                'title' => 'PHP MVC Framework',
                'image' => url('/img/php-mvc-framework.png'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
            [
                'category' => ['PHP','Laravel'],
                'title' => 'Rest API with Laravel and Sanctum',
                'image' => url('/img/laravel-rest-api.png'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
            [
                'category' => ['Bootstrap'],
                'title' => 'Full Stack app with Laravel, Botstrap',
                'image' => url('/img/bootstrap.png'),
                'github' => 'https://github.com/kutukeys/laravel-vue-survey'
            ],
        ];

        $this->tabs =array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that  represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
