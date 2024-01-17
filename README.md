# TaskManager
Simple PHP web application where user can view, create (add) and delete tasks!

## Prerequisites
 - [PHP^7.4](https://www.php.net/downloads.php)
 - [MySQL](https://www.mysql.com/downloads/)
 - [Bootstrap](https://getbootstrap.com/docs/5.3/getting-started/introduction/)

## Features

- **View Tasks:** Display a list of tasks with ID, task name, task description, and creation date.

- **Create Task:** Add a new task with a task name and description.

- **Delete Task:** Remove a task from the list.

## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/ramonagolsta/TaskManager.git
  
2. Configure the database:
 - Create a MySQL database named task_manager.
 - Create a table named tasks with this structure:
   - **id** auto-incremented
   - **task_name** VARCHAR
   - **task_description** TEXT
   - **created_at** DATETIME
     
3. Update the database connection details in your PHP files (e.g., create.php, delete.php, index.php).
   
3. Open the project in your web server environment:

   ```bash
    php -S localhost:8000

# Database Structure:
This command allows you to export database structure without any data:

    ```bash
    mysqldump -u user -h localhost --no-data -p database > database.sql
  
# Video Demonstration

https://github.com/ramonagolsta/TaskManager/assets/138066563/8320649f-4a31-4dc7-a993-78eefa9dd0cc

# Additional Notes
 - Code Separation: for maintainability the PHP logic and HTML are separated. The views directory contains HTML files, while PHP files handle backend logic.

 - Success Messages: Success messages for task creation and deletion are displayed using Bootstrap alerts. They are stored in PHP sessions.

 - Input Validation: Task creation includes input validation to ensure task names and descriptions are at least 3 characters long. Users receive error messages for invalid inputs.
