<?php

Route::get('/', function()
{
    return View::make('modules.blog.blog-roll');
});

Route::get('/admin', function()
{
    return View::make('modules.admin.index');
});