<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body{
            background-color: #5674b7;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-5">
            <form action="/admin/login" method="post">
                @csrf
                <div class="card shadow border-0">
                    <div class="p-3 text-center" style="color: #5674b7;">
                        <h3>
                            ADMIN LOGIN
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" name="username" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">
                                Password
                            </label>
                            <input type="text" name="password" placeholder="Password" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button class="btn btn-outline-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
