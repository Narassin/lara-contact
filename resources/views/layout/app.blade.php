<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lar Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body class="bg-dark-subtle d-flex flex-nowrap">

    <div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark align-content-center text-center" style="width: 280px;">
        <a href="#" class="d-flex mb-3 mb-md-0 justify-content-center text-white text-decoration-none">
            <span class="fs-4">Lara Port</span>
        </a>
        <span class="fs-6">Storing your webserver port</span>
        <hr>

        @yield('content1')

    </div>

    @yield('content2')


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>