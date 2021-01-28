Home  »  Laravel   »   Laravel 8 File Upload Tutorial: Validation + Store in Database
Laravel 8 File Upload Tutorial: Validation + Store in Database
Last updated on January 12, 2021 by Digamber
This is a step by step Laravel 8 File Upload tutorial with example, and In this tutorial, we will learn how to upload files in Laravel 8|7 with basic validation in MySQL database.
This tutorial will cover Laravel file uploading concepts:

Laravel project Installation
Route creation and configuration
Blade file creation
Database migration in Laravel
Implement validation on file uploading component
File uploading status via displaying messages
Allow uploading only specific file types. e.g .csv, .txt, .xlx, .xls, .pdf with file size limitation max upto 2MB
Storing an uploaded file in the database
If you are a beginner in Laravel development, you must check out our detailed tutorial on Building Laravel CRUD Web Application.

Table of Contents
File Upload in Laravel Example
Install Laravel Project
Connect to Database
Create File Model & Migrations
Create Routes
Create File Upload Controller
Create Blade File
Conclusion
File Upload in Laravel 8|7 Example
In this Laravel file upload example tutorial, we will generate two routes one for creating a form with getting method and another route for file uploading or post file upload data.

We develop a simple form using Bootstrap and its Form UI component.

It will allow us to choose a file that needs to be uploaded in the storage > public > uploads folder. We will also configure the database model and store the file path along with its name in the MySQL database.

Install Laravel Project
Open command-line tool and execute the following command to create a Laravel project from scratch.

composer create-project laravel/laravel --prefer-dist laravel-file-upload
Bash
Get into the freshly installed laravel project’s directory.

cd laravel-file-upload
Bash
Connect to Database
You can use MAMP or XAMPP as a local web server for uploading files to storage in laravel. Define a database name in MySQL and add the correct configuration in .env file.

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=
PL/SQL
Create File Model & Configure Migrations
Create a Model in laravel, It holds the data definition that interacts with the database.

php artisan make:model File -m
Bash
Next, open migration file for defining the table values in the database for storing the uploaded file’s information. Go to database/migrations/timestamp_create_files_table file and define the table values.

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('mailing_name')->nullable();
            $table->string('mailing_date')->nullable();
            $table->string('name')->nullable();
            $table->string('file_path')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('files');
    }
}