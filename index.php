<?php
include('connect.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Add Country</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 50%;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
        }

        .mb-3 {
            margin-bottom: 15px;
        }

        label {
            font-weight: bold;
        }

        select,
        input[type='text'] {
            width: 100%;
            padding: 8px;
            margin-top: 6px;
            margin-bottom: 12px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-primary {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <h2>Add Country</h2>
        <form id="countryForm" method="post">
            <div class="mb-3">
                <label for="countryName">Country Name:</label>
                <input type="text" id="countryName" name="countryName">
            </div>
            <button type="submit" class="btn btn-primary">Add Country</button>

        </form>
    </div>

</body>

</html>