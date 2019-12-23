# Tinman MVC
So I was bored one day and decided to play around with Laravel, then I got a better idea - why don't I just try and create my own 
PHP framework to better understand how my beloved Laravel works. And that's what I did. I created a simple OOP PHP MVC framework 
that I could use to bootstrap a few simple applications that don't need the overhead of Laravel.

## Installation
Simply clone the repo `https://github.com/mr-tackie/tinmanmvc.git` and you're good to go.

## Usage
First off define all global variables in the `config/config.php` file. You might need to edit the `.htaccess` file in the root 
folder of the framework to match your application's URL. 

Routing works as `http://yourdomain.com/[controller]/[function]/[data]`. So let's say you want to a route to fetch all posts. After
creating your post model and controller, define a function in the posts controller (eg. index) that fetches all posts and returns a 
view. Now the url for this will be `https://yourdomain.com/posts/index` or `https://yourdomain.com/posts` (because I set the default
function of each controller to index - so make sure all your controllers have at least an index function)

## Notes
This is a framework for very simple applications for now or a bootstrap for a larger application. Might extend it to be a bit more robust.
