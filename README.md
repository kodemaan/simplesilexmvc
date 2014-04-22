Silex MVC Implementation
=========

The point of this repository is to create a simple MVC implementation of Silex

Getting Started
----

- Checkout this Repo
- Install composer (https://getcomposer.org)
- Run the following command in root of repo *composer.phar install*
- Ensure web server is pointing at the /web folder, and not the / folder
- Enjoy!

Layout
----
/app/ - Contains all the configuration files for Databases, Twig, Routes, etc.

/src/ - Contains all user generated bundles

/vendor/ - Contains all composer installed bundles

/src/Acme/ - Contains test controllers and Views directory

/web/ - Contains Silex runner and any public facing files (css,js)

To Do
----

- Make Models Directory
- Make Views directory