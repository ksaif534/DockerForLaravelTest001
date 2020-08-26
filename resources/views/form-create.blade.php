<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Form Data Processing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="row mt-2 pt-2">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h3>Simple HTML Form</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('forms.store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="User Name">User Name</label>
                            <input type="text" name="username" class="form-control" placeholder="Enter Text">
                        </div>
                        <div class="form-group">
                            <label for="Email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="Phone">Phone</label>
                            <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Enter Password">
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" value="Save Data" class="btn btn-outline-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
