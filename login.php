<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body{
            font-family: kanit;
        }
    </style>
</head>

<body style="background-color: darkgrey;">
    <div class="container ">
        <div class="row justify-content-center align-items-center vh-100">
            <div class="col-md-6 col-xl-4">
                <div class="bg-white p-4 shadow rounded">
                    <H1 class="text-center mb-4" style="font-size: 5rem;"><i class="bi bi-person-bounding-box"></i></H1>
                    <form action="check.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text"name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-2">
                            <input type="password"name="password" class="form-control" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div class="d-grid mt-5">
                        <button type="submit" class="btn btn-primary btn-lg">login</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>
<?php
