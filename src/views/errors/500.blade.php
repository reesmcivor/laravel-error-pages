<!DOCTYPE html>
<html>
    <head>
        <title>500 Internal Server Error</title>
        <style>
         body {
             font-family: Arial, sans-serif;
             background-color: #f2f2f2;
         }
        .container {
            margin: 100px auto ;
            max-width: 800px;
            padding: 50px;
            background-color: #333;
            box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
        }
        h1 {
            font-size: 26px;
            color: #FFF;
            font-weight: normal;
            margin-top: 50px;
            margin-bottom: 50px;
            text-align: center;
        }
        p {
            font-size: 18px;
            color: #EEE;

            padding: 0;
            margin: 0 0 10px 0;
            text-align: center;
        }
        a {
            color: #337ab7;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<div class="container">
    <img src="{{ config('laravel_error_pages.logo') }}" />
    <h1>500 Internal Server Error</h1>
    <p>Oops! Something went wrong on our end.</p>
    <p>We apologize for the inconvenience. Please try again later.</p>
    <p style="color:gray">Error Message: {{ $exception->getMessage() }}</p>
</div>
</body>
</html>
