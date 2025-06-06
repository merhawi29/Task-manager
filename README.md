# Task Manager API

A simple REST API for managing tasks built with Laravel.

## Features

- Create, read, update, and delete tasks
- Mark tasks as completed
- Input validation
- RESTful API endpoints
- Simple HTML documentation page

## Requirements

- PHP 8.1 or higher
- Composer
- MySQL 5.7 or higher

## Quick Start

1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   ```
3. Copy the environment file:
   ```bash
   cp .env.example .env
   ```
4. Generate application key:
   ```bash
   php artisan key:generate
   ```
5. Configure your MySQL database in `.env` file:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_manager
   DB_USERNAME=root
   DB_PASSWORD=
   ```
6. Create the MySQL database:
   ```sql
   CREATE DATABASE task_manager;
   ```
7. Run migrations:
   ```bash
   php artisan migrate
   ```
8. Start the development server:
   ```bash
   php artisan serve
   ```

## API Documentation

Visit `http://localhost:8000` to see the API documentation page.

### Available Endpoints

1. **Get All Tasks**
   ```
   GET /api/tasks
   ```
   Returns a list of all tasks

2. **Create a New Task**
   ```
   POST /api/tasks
   ```
   Required fields:
   - title (string)

   Optional fields:
   - description (string)

3. **Mark Task as Completed**
   ```
   PUT /api/tasks/{id}
   ```
   Required fields:
   - completed (boolean)

4. **Delete a Task**
   ```
   DELETE /api/tasks/{id}
   ```

## Testing the API

You can test the API using tools like Postman or curl. Here are some example requests:

1. Create a task:
   ```bash
   curl -X POST http://localhost:8000/api/tasks \
     -H "Content-Type: application/json" \
     -d '{"title": "Complete project", "description": "Finish the task manager API"}'
   ```

2. Get all tasks:
   ```bash
   curl http://localhost:8000/api/tasks
   ```

3. Mark a task as completed:
   ```bash
   curl -X PUT http://localhost:8000/api/tasks/1 \
     -H "Content-Type: application/json" \
     -d '{"completed": true}'
   ```

4. Delete a task:
   ```bash
   curl -X DELETE http://localhost:8000/api/tasks/1
   ```

## Project Structure

- `app/Models/Task.php` - Task model
- `app/Http/Controllers/TaskController.php` - API endpoints
- `database/migrations/` - Database schema
- `routes/api.php` - API routes
- `resources/views/welcome.blade.php` - API documentation page

## Error Handling

The API includes validation for:
- Required fields
- Data types
- Field lengths

All errors are returned in JSON format with appropriate HTTP status codes.

## Contributing

Feel free to submit issues and enhancement requests!
