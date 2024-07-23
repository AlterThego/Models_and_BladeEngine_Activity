<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Models and Blade Engine

Instructions:

<b>1. Create a New Laravel Project:</b>
Create a New project called "Models_and_BladeEngine_Activity"

<b>2. Create Book Model</b>
Generate a Book model using Artisan command-line tool:
- This will create a Book.php file in the app/Models directory.
- add the following code inside the model:<br>
use HasFactory; <br>

<b>3. Database Migration:</b>
Generate a migration for the books table:
Edit the migration file to define the schema for the books table, including fields like id, isbn, title, author, description, etc. Run the migration to create the table in the database:
- id
- isbn
- title
- author
- description
- date_published

<b>4. Create Book Factory:</b>
- Generate a factory for the Book model using Artisan command-line tool:
This will create a BookFactory.php file in the database/factories directory.
- Edit the BookFactory.php file to define the fake data generation for the Book model. You can base it on the picture below:
- You then have to create 20 books;

<b>5. Creating Routes, Controllers and Views (Passing Data to Views):</b>
- Define routes in routes/web.php and BookController App/HTTP/Controllers/BookController.php to handle the display of books.
- Create a View that has header and footer using partials for the rendering of booklist.
- Make the list of the book in table format.
- Style the application with the use of TailwindCSS.
 

<b>Note:</b> You have to make your commits at the initial commit and commits for every update. You can pass your activity with the github link of your app.