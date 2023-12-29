# Serendipity - A reliable, secure & extensible PHP blog

[Serendipity](https://s9y.org) is a PHP-powered weblog engine that gives the user an easy way to maintain a blog. While the default package is designed for the casual blogger, Serendipity offers an expandable framework with the power for professional applications.

![Serendipity Example](https://www.onli-blogging.de/uploads/s9y_example.png)

## Work In Progress

IMPORTANT: This branch is work in progress. This is an experiment to shift
the project structure towards "usual" composer project defaults:

* project root only contains core project files
* public is the document root with the PHP files
* src instead of include
* vendor instead of bundled-libs

If you've used Serendipity from GIT before, you need to ideally point your document
root to the `public/` subdirectory (or your browser), because the root of
this repository is no longer the root for our PHP files.

Also you need to now run `composer install` yourself, the libraries will no
longer be container within our repository.

Everything in this repository might not run at all while being worked on.
You should not use this GIT branch, if you don't know what's going on. :-)

(Use GIT `main` in that case)

## TODO:

* Adapt changes from bundled-libs/ to vendor/
* Adapt changes from include/ to src/
* Find remaining bundled-libs as composer packages and put them into vendor/
* Adapt changes in code for root-dir-level templates_c, uploads, sql and
other core directories