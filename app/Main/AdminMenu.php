<?php

namespace App\Main;

class AdminMenu
{
    /**
     * List of side menu items.
     *<li>
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public static function menu()
    {
        return [
            'users' => [
                'icon' => 'home',
                'route_name' => 'error-page',
                'params' => [
                    'layout' => 'admin-menu'
                ],
                'title' => 'Users',
            ],
            'stages' => [
                'icon' => 'home',
                'route_name' => 'stages.page',
                'params' => [
                    'layout' => 'admin-menu'
                ],
                'title' => 'Stages',
            ],
            'levels' => [
                'icon' => 'home',
                'route_name' => 'levels.page',
                'params' => [
                    'layout' => 'admin-menu'
                ],
                'title' => 'Levels',
            ],
            'courses' => [
                'icon' => 'home',
                'route_name' => 'courses.list',
                'params' => [
                    'layout' => 'admin-menu'
                ],
                'title' => 'Courses',
            ]
        ];
    }
}
