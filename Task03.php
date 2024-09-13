<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if($salary < 0) {
            throw new Exception("Salary cannot be negative!");
        }
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }
}

// Usage
try {
    $employee = new Employee("John Doe", 5000);
    echo $employee->getName() . "'s salary is: $" . $employee->getSalary() . "\n";

    $employee->setSalary(6000);
    echo "New salary is: $" . $employee->getSalary() . "\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>;
