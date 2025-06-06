<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager API</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
        }
        .endpoint {
            background-color: #f8f9fa;
            padding: 15px;
            margin: 10px 0;
            border-radius: 4px;
            border-left: 4px solid #3498db;
        }
        .method {
            font-weight: bold;
            color: #3498db;
        }
        .url {
            color: #2c3e50;
            font-family: monospace;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Task Manager API</h1>
        <p>The API is running successfully! Here are the available endpoints:</p>

        <div class="endpoint">
            <span class="method">GET</span>
            <span class="url">/api/tasks</span>
            <p>Returns all tasks</p>
        </div>

        <div class="endpoint">
            <span class="method">POST</span>
            <span class="url">/api/tasks</span>
            <p>Create a new task</p>
            <p>Required fields: title (string)</p>
            <p>Optional fields: description (string)</p>
        </div>

        <div class="endpoint">
            <span class="method">PUT</span>
            <span class="url">/api/tasks/{id}</span>
            <p>Mark a task as completed</p>
            <p>Required fields: completed (boolean)</p>
        </div>

        <div class="endpoint">
            <span class="method">DELETE</span>
            <span class="url">/api/tasks/{id}</span>
            <p>Delete a task</p>
        </div>
    </div>
</body>
</html>
