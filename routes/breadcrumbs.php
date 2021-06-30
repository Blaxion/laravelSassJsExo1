<?php
// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('/', function ($trail) {
    $trail->push('Home', url('/'));
});

// Home
Breadcrumbs::for('/welcome', function ( $trail) {
    $trail->parent('/');
    $trail->push('Welcome', url('/welcome'));
});

// Home > Blog
Breadcrumbs::for('/about', function (BreadcrumbTrail $trail) {
    $trail->parent('/');
    $trail->push('About', url('/about'));
});

// Home > Blog
Breadcrumbs::for('/services', function (BreadcrumbTrail $trail) {
    $trail->parent('/');
    $trail->push('Services', url('/services'));
});






