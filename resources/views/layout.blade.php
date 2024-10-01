<!-- resources/views/layout.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel CRUD Application')</title>
    <!-- Add some basic styling -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        header h1 {
            margin: 0;
        }

        nav {
            text-align: center;
            margin: 10px 0;
        }

        nav a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        nav a:hover {
            color: #007bff;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            background-color: #333;
            color: white;
        }

        /* Form Styling */
        .form-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
        }

        textarea.form-input {
            height: 150px;
            resize: vertical;
        }

        .btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .alert {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

        /* General styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        /* Posts Page */
        .post-actions {
            margin-bottom: 20px;
            text-align: right;
        }

        .create-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .create-btn:hover {
            background-color: #0056b3;
        }

        .posts-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .post-card {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .post-card h2 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .author {
            font-size: 14px;
            color: #888;
            margin-bottom: 15px;
        }
        .from-time {
            font-size: 14px;
            color: #888;
            text-align: end
        }

        .content {
            font-size: 16px;
            margin-bottom: 20px;
        }

        /* Action Buttons */
        .post-buttons {
            display: flex;
            gap: 10px;
        }

        .btn {
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 14px;
            text-decoration: none;
            text-align: center;
        }

        .edit-btn {
            background-color: #28a745;
            color: white;
        }

        .edit-btn:hover {
            background-color: #218838;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            cursor: pointer;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }

        .pagination .page-item {
            margin: 0 5px;
        }

        .pagination .page-link {
            display: inline-block;
            padding: 8px 12px;
            font-size: 14px;
            color: #007bff;
            border: 1px solid #ddd;
            border-radius: 5px;
            text-decoration: none;
        }

        .pagination .page-link:hover {
            background-color: #007bff;
            color: white;
        }

        .pagination .active .page-link {
            background-color: #007bff;
            color: white;
            border: 1px solid #007bff;
        }
        .post-details {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 800px;
        }

        .post-details h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .post-details .author {
            font-size: 16px;
            color: #888;
            margin-bottom: 15px;
        }

        .post-details .content {
            font-size: 18px;
            margin-bottom: 20px;
            line-height: 1.6;
        }

        .post-actions {
            margin-top: 20px;
            text-align: right;
        }

        .back-btn {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
        }

        .back-btn:hover {
            background-color: #0056b3;
        }

  
    </style>
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Post CRUD Application</h1>
    </header>

    <!-- Navigation -->
    <nav>
        <a href="{{ route('posts.index') }}">Home</a>
        <a href="{{ route('posts.create') }}">Create Post</a>
    </nav>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>


</body>

</html>
