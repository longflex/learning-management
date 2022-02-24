<?php

namespace App\Main;

class SideMenu
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
            'dashboard' => [
                'icon' => 'home',
                'route_name' => 'dashboard',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Dashboard',
            ],
            'profile' => [
                'icon' => 'box',
                'route_name' => 'update-profile',
                'params' => [
                    'layout' => 'side-menu-private'
                ],
                'title' => 'Profile',
            ],
            'courses' => [
                'icon' => 'inbox',
                'route_name' => 'courses',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Courses',
            ],
            'notice' => [
                'icon' => 'hard-drive',
                'route_name' => 'notification',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Notification',
            ],
            'history' => [
                'icon' => 'credit-card',
                'route_name' => 'history',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'History',
            ],
            'share' => [
                'icon' => 'message-square',
                'route_name' => 'share',
                'params' => [
                    'layout' => 'side-menu-private'
                ],
                'title' => 'Share',
            ],
            'groups' => [
                'icon' => 'file-text',
                'route_name' => 'groups',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Groups',
            ],
            'chats' => [
                'icon' => 'calendar',
                'route_name' => 'chat',
                'params' => [
                    'layout' => 'side-menu-private'
                ],
                'title' => 'Chat',
            ],
            'offers' => [
                'icon' => 'edit',
                'route_name' => 'offer',
                'params' => [
                    'layout' => 'side-menu-private'
                ],
                'title' => 'Offers',
            ],
            'help' => [
                'icon' => 'users',
                'route_name' => 'help',
                'params' => [
                    'layout' => 'side-menu'
                ],
                'title' => 'Help',
            ],
        ];
    }
}
