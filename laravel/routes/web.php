<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
  return view('about', ['name' => 'Aldi Pratama', 'title' => 'About Page']);
});

Route::get('/posts', function () {
  return view('posts', ['title' => 'Posts Page', 'posts' => [
    [
      'id' => 1,
      'slug' => 'judul-artikel-1',
      'title' => 'Judul Artikel 1',
      'author' => 'Aldi Pratama',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veniam et quam!
            Commodi voluptatem esse
            aperiam, accusantium iusto iste. Vel ut rem eius quis accusamus voluptates blanditiis, eligendi enim
            nesciunt?'
    ],
    [
      'id' => 2,
      'slug' => 'judul-artikel-2',
      'title' => 'Judul Artikel 2',
      'author' => 'Aldi Pratama',
      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, nam dolore!
            Repellat perspiciatis eveniet quae eaque deleniti, voluptatibus distinctio dolor minus totam, aut corporis
            recusandae eum non, pariatur similique voluptate.'
    ],
  ]]);
});

Route::get('/posts/{slug}', function ($slug) {
  $posts = [
    [
      'id' => 1,
      'slug' => 'judul-artikel-1',
      'title' => 'Judul Artikel 1',
      'author' => 'Aldi Pratama',
      'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti veniam et quam!
            Commodi voluptatem esse
            aperiam, accusantium iusto iste. Vel ut rem eius quis accusamus voluptates blanditiis, eligendi enim
            nesciunt?'
    ],
    [
      'id' => 2,
      'slug' => 'judul-artikel-2',
      'title' => 'Judul Artikel 2',
      'author' => 'Aldi Pratama',
      'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Pariatur, nam dolore!
            Repellat perspiciatis eveniet quae eaque deleniti, voluptatibus distinctio dolor minus totam, aut corporis
            recusandae eum non, pariatur similique voluptate.'
    ],
  ];

  $posts = Arr::first($posts, function ($post) use ($slug) {
    return $post['slug'] == $slug;
  });

  return view('post', ['title' => 'Single Post', 'post' => $posts]);
});

Route::get('/contact', function () {
  return view('contact', ['title' => 'Contact Page']);
});
