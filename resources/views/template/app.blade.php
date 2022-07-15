<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Gestão de produtos - PayLivre</title>
</head>

<body>

    <div class="container w-75 p-3">

        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">

                <div class="collapse navbar-collapse text-uppercase" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Produtos</a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        @yield('content')

    </div>

</body>

</html>
