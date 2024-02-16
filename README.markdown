# Serendipity - A reliable, secure & extensible PHP blog

[Serendipity](https://s9y.org) is a PHP-powered weblog engine that gives the user an easy way to maintain a blog. While the default package is designed for the casual blogger, Serendipity offers an expandable framework with the power for professional applications.

![Serendipity Example](https://www.onli-blogging.de/uploads/s9y_example.png)

## Work In Progress - COMPOSER MOVE

IMPORTANT: This branch is work in progress. This is an experiment to shift
the project structure towards "usual" composer project defaults:

* project root only contains core project files
* public is the document root with the PHP files
* src instead of include
* vendor instead of bundled-libs
* move serendipity_config.inc.php to src/

If you've used Serendipity from GIT before, you need to ideally point your document
root to the `public/` subdirectory (or your browser), because the root of
this repository is no longer the root for our PHP files.

Also you need to now run `composer install` yourself, the libraries will no
longer be container within our repository.

Everything in this repository might not run at all while being worked on.
You should not use this GIT branch, if you don't know what's going on. :-)

(Use GIT `main` in that case)

## Concept

The basic idea is:

* DDEV provides a simple and central way for developers/contributors to spin-up a Serendipity installation with all requirements. Just do "ddev start" and it should give you a URL to work with inside a Docker container. Comes with PHP, MySQL, Composer and all.
* "bundled-libs" should get emptied from ALL foreign dependencies. Our own libraries, patched ones, or custom files may remain there.
* Foreign dependencies at best should use the vendor/ common location
  * However: This might create trouble for plugins and other codes that require files from bundled-libs/
  * Ideally, if the core does all the autoloading/including/requiring, then we technically should be able to move that
  * We need to search for the string "bundled-libs" in external plugins and see how big of an impact this would be
  * If all fails, we can change composer.json and set `config.vendor-dir` to `bundled-libs` (then our "custom" code needs to get moved to a different directory, i.e. "deps", "build" or something like that)
* The idea is that the `public` documentroot only contain stub files (index.php, serendipity_admin.php, ...)
* The former "include/" directory should be moved to something like `src`. Those files are only included and should not be contained in the document root
* This should allow us to later let projects use composer to require Serendipity. Our files would then be included from `vendor/serendipity/s9y`
* This means we need a variable like S9Y_DATA_PATH that points to either `./src` (for developers and GIT-repo-users) OR `./vendor/serendipity/s9y/src` (composer users) for further includes
* Storage directories (that are not accessed via HTTP) should also be outside the `public` directory (`templates_c`, `sql`, `lang`, `docs`). Those directory references also need abstraction, ideally using S9Y_DATA_PATH and then '{S9Y_DATA_PATH}/../templates_c}' to resolve the locations for both the usage scenarios (GIT and composer)
* Later on we want linting, static code analysis as part of a CI pipeline (GitHub workflows)
* We also want automatic dependency checks for composer.lock updates
* The release process should be performed via GitHub workflow, do the packaging and asset-building automatically (what `bundled-libs/create_release.sh` does now)
* If all of this works, we can also use a CI pipeline to build "official" Docker images. These would then just mount the data storages (`uploads`, `templates_c`, additional plugin storage directory, serendipity_config_local.inc.php) and fetch the rest from our official image. That would then allow easy updates by switching the container. Only "user generated data" like the mentioned files and directories need to be mounted and outside the container. The docker images could maybe even be based off the DDEV containers so that we don't necessarily create our own Dockerfile. Then again a simple Dockerfile with Nginx/Apache+PHP+Database will not be hard, either.
* Maybe we can utilize dotenv `.env` files to specify directory locations, that could also be evaluated by the Docker container.
* Ideally, plugins could be distinct composer packages and be require-able. The core plugins can remain in this mono-repo. We can create subtree splits for the core plugins so that these can be required. CI will auto-populate the subtree split repositories. Our current "additional_plugins" repository would also be a seperate monorepo with subtree splits for each single plugin
* That would make spartacus obsolete; composer uses can use the composer platform to manage the plugins. For users without composer, we can make our CI build .zip archives for each plugin, which could be downloaded. Also the single-url github download would still be an option for this "Spartacus legacy-mode"
* To make plugins work, we can create a "serendipity-composer-installer" composer plugin that registers a composer type "serendipity-plugin". That installer could then perform code migrations, maybe create needed symlinks (to the "custom_plugins" directory, so that these are symlinked from vendor/serendipity/plugin-xxx)
* The same would be applicable to themes, just the directory is something else, and its own monorepo
* Path references in existing plugins will be a problem. We can change anything in a new core release, but not for existing plugins. That would either be a (very harshly) breaking change, or we may need something like hot-patched proxy classes. So that we import legacy plugins, introspect/Statical analyize a file, do replacements of paths, save the modified file in a temporary-proxy-folder, and actually load the plugins from there and not their real location. This would involve some sort of caching and automatic-regeneration of course, so that plugin updates will always use the recent versions of a file, and not a possibly outdated proxy class. This could be fun, actually.
* Migration for current users will be harder, because they will definitely need to move around directories/files. This needs to be as easy as possible.
* Once we have composer integration up and running, we can provide our own Symfony Console scripts for actions like "reset smarty cache", "perform DB migrations", "create empty database", "export/import database"

## TODO:

* Adapt changes from bundled-libs/ vs vendor/
* Adapt changes from include/ to src/
* Create basic ddev setup
* Find remaining bundled-libs as composer packages and put them into vendor/
* Adapt changes in code for root-dir-level templates_c, uploads, sql and
other core directories
* Verify s9y_include_path and the original "shared installation" (this is what should enable us to use composer, because it already hat some S9Y_DATA_PATH etc. moves).
