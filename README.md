<h1>PHP OOP and Laravel Assignment</h1>

    <h2>Overview</h2>
    <p>
        This repository contains solutions for three tasks demonstrating Object-Oriented Programming (OOP) in PHP and a simple To-Do CRUD module using Laravel with Blade view rendering.
    </p>

    <h2>Tasks</h2>

    <h3>Task 1: Class Inheritance</h3>
    <p><strong>Objective:</strong></p>
    <p>Create classes to represent geometric shapes, including circles and rectangles, and implement methods for calculating their areas.</p>
    <p><strong>Implementation:</strong></p>
    <ul>
        <li><strong>Base Class <code>Shape</code>:</strong>
            <ul>
                <li>Contains a <code>name</code> property and a method <code>getName()</code> to return the shape's name.</li>
            </ul>
        </li>
        <li><strong>Derived Class <code>Circle</code>:</strong>
            <ul>
                <li>Inherits from <code>Shape</code>.</li>
                <li>Adds a <code>radius</code> property.</li>
                <li>Implements the <code>getArea()</code> method to calculate the area of the circle using the formula <code>π * r²</code>.</li>
            </ul>
        </li>
        <li><strong>Derived Class <code>Rectangle</code>:</strong>
            <ul>
                <li>Inherits from <code>Shape</code>.</li>
                <li>Adds <code>width</code> and <code>height</code> properties.</li>
                <li>Implements the <code>getArea()</code> method to calculate the area of the rectangle using the formula <code>width * height</code>.</li>
            </ul>
        </li>
    </ul>

    <h3>Task 3: Encapsulation</h3>
    <p><strong>Objective:</strong></p>
    <p>Design a class to manage employee data, demonstrating encapsulation by setting and getting employee salaries securely.</p>
    <p><strong>Implementation:</strong></p>
    <ul>
        <li><strong>Class <code>Employee</code>:</strong>
            <ul>
                <li>Contains private properties <code>name</code> and <code>salary</code>.</li>
                <li>Uses a constructor to initialize these properties.</li>
                <li>Provides methods <code>getSalary()</code> and <code>setSalary()</code> to access and modify the salary with validation (ensuring the salary is not negative).</li>
                <li>Includes a method <code>getName()</code> to access the employee's name.</li>
            </ul>
        </li>
    </ul>

    <h3>Task 5: To-Do Module (Mandatory)</h3>
    <p><strong>Objective:</strong></p>
    <p>Develop a simple To-Do CRUD (Create, Read, Update, Delete) module using the Laravel Framework with Blade view rendering.</p>
    <p><strong>Implementation:</strong></p>
    <ul>
        <li><strong>Setup Laravel:</strong>
            <ul>
                <li>Install Laravel and set up the environment file.</li>
            </ul>
        </li>
        <li><strong>Create the To-Do Model and Migration:</strong>
            <ul>
                <li>Define the <code>todos</code> table with columns for <code>title</code> and <code>completed</code>.</li>
            </ul>
        </li>
        <li><strong>Develop CRUD Operations:</strong>
            <ul>
                <li>Implement controllers and routes for creating, reading, updating, and deleting To-Do items.</li>
            </ul>
        </li>
        <li><strong>Blade View Rendering:</strong>
            <ul>
                <li><strong>Views:</strong> Create Blade templates for displaying the To-Do list, and forms for adding and editing To-Do items.</li>
                <li><strong>Controller:</strong> Handle CRUD operations and pass data to the Blade views.</li>
            </ul>
        </li>
    </ul>

    <h3>Usage Instructions:</h3>
    <ol>
        <li><strong>Clone the Repository:</strong>
            <pre><code>git clone &lt;repository-url&gt;</code></pre>
        </li>
        <li><strong>Navigate to the Project Directory:</strong>
            <pre><code>cd &lt;repository-directory&gt;</code></pre>
        </li>
        <li><strong>Install Dependencies:</strong>
            <pre><code>composer install</code></pre>
            <pre><code>npm install</code></pre>
        </li>
        <li><strong>Run Laravel Migrations:</strong>
            <pre><code>php artisan migrate</code></pre>
        </li>
        <li><strong>Start the Laravel Development Server:</strong>
            <pre><code>php artisan serve</code></pre>
        </li>
        <li><strong>Access the Application:</strong>
            <p>Open your web browser and navigate to <a href="http://localhost:8000">http://localhost:8000</a> to interact with the To-Do module.</p>
        </li>
    </ol>