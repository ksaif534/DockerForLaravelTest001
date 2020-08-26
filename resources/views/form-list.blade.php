<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Forms</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
        integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
</head>
<body>
    <div class="row mt-2 pt-2">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">

        </div>
        <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <div class="card">
                <div class="card-header text-center">
                    <h3>List of Form Data</h3>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-striped table-dark table-bordered table-fullwidth">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Location</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($formList as $formData)
                                <tr>
                                    <td>
                                        {{ $formData->id }}
                                    </td>
                                    <td>
                                        {{ $formData->user_name }}
                                    </td>
                                    <td>
                                        {{ $formData->email }}
                                    </td>
                                    <td>
                                        {{ $formData->phone }}
                                    </td>
                                    <td>
                                        {{ $formData->location }}
                                    </td>
                                    <td>
                                        <a href="{{ route('forms.show',$formData->id) }}" class="nav-link"><i class="fas fa-eye"></i></a>
                                        <a href="{{ route('forms.edit',$formData->id) }}"><i class="fas fa-pencil-alt"></i></a>
                                        <form action="{{ route('forms.delete',$formData->id) }}" method="POST" enctype="multipart/form-data">
                                            @method('DELETE')
                                            {{ csrf_field() }}
                                            <button class="btn btn-outline-danger" type="submit" name="submit"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
