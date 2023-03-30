<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome!</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/about.css">
</head>
<body>
    {{-- NavBar --}}
    <div class="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
            <a href="/home"><img src="asset/logo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/home">Home.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About.</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact.</a>
                </li>
            </div>
            </div>
        </nav>
    </div>

</body>
</html>
