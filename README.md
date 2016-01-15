# ganymed

Ganymed is a framework for php-based webapps. The core components are in the [ganymed-components](https://github.com/swengorschewski/ganymed-components) repository.
It is not maintained at the moment and should not be used in production environments.

To get started you need to have [composer](https://getcomposer.org/).
First clone this repositry to a destination of your choice and invoke `composer install` in the root folder of your cloned project.

After that you need to create a `.env.php` config file in the project root. A working example is stored as `.env.example.com`. You can just rename this file.

Navigate to the public folder in your project root and run `php -S localhost:8000` to test it. If You visit `localhost:8000` You should see a page with the ganymed headline.
