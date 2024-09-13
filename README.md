PHP OOP and Laravel Assignment
Overview
This repository contains solutions for three tasks demonstrating Object-Oriented Programming (OOP) in PHP and a simple To-Do CRUD module using Laravel with Blade view rendering.

Tasks
Task 1: Class Inheritance
Objective:
Create classes to represent geometric shapes, including circles and rectangles, and implement methods for calculating their areas.

Implementation:

Base Class Shape:

Contains a name property and a method getName() to return the shape's name.
Derived Class Circle:

Inherits from Shape.
Adds a radius property.
Implements the getArea() method to calculate the area of the circle using the formula π * r².
Derived Class Rectangle:

Inherits from Shape.
Adds width and height properties.
Implements the getArea() method to calculate the area of the rectangle using the formula width * height.



Task 3: Encapsulation
Objective:
Design a class to manage employee data, demonstrating encapsulation by setting and getting employee salaries securely.

Implementation:

Class Employee:
Contains private properties name and salary.
Uses a constructor to initialize these properties.
Provides methods getSalary() and setSalary() to access and modify the salary with validation (ensuring the salary is not negative).
Includes a method getName() to access the employee's name.


Task 5: To-Do Module (Mandatory)
Objective:
Develop a simple To-Do CRUD (Create, Read, Update, Delete) module using the Laravel Framework with Blade view rendering.

Implementation:

Setup Laravel:
Install Laravel and set up the environment file.

Create the To-Do Model and Migration:
Define the todos table with columns for title and completed.

Develop CRUD Operations:
Implement controllers and routes for creating, reading, updating, and deleting To-Do items.

Blade View Rendering:
Views:
Create Blade templates for displaying the To-Do list, and forms for adding and editing To-Do items.
Controller:
Handle CRUD operations and pass data to the Blade views.
Usage Instructions:

Clone the Repository:
Copy code
git clone <repository-url>

Navigate to the Project Directory:
Copy code
cd <repository-directory>

Install Dependencies:
composer install
npm install

Run Laravel Migrations:
php artisan migrate

Start the Laravel Development Server:
php artisan serve

Access the Application:
Open your web browser and navigate to http://localhost:8000 to interact with the To-Do module.
