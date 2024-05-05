<?php


namespace App\classes;


class Blog
{
    public $blogs = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => 'This is blog title one',
                'description' => 'This is blog title one description',
                'image' => 'assets/img/1.jpg',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is blog title two',
                'description' => 'This is blog title two description',
                'image' => 'assets/img/2.jpg',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is blog title three',
                'description' => 'This is blog title three description',
                'image' => 'assets/img/3.jpg',
            ],
            3 => [
                'id' => 4,
                'title' => 'This is blog title four',
                'description' => 'This is blog title four description',
                'image' => 'assets/img/4.jpg',
            ],

        ];
    }

    public function getAllBlog()
    {
        return $this->blogs;
    }

}