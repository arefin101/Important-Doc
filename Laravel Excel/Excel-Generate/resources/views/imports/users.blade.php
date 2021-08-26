<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="margin:20% 20% 20%">
        <form action="/users/import" method="post" enctype="multipart/form-data">
            @csrf
            <div class="alert-success">
                {{session('success')}}
            </div>
            @if(isset($errors) && $errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif

            @if(session()->has('failures'))

                <table class="table table-danger">
                    <tr>
                        <th>Row</th>
                        <th>Attribute</th>
                        <th>Errors</th>
                        <th>Value</th>
                    </tr>
                    @foreach(session()->get('failures') as $error)
                    <tr>
                        <td>{{ $error->row() }}</td>
                        <td>{{ $error->attribute() }}</td>
                        <td>
                            <ul>
                                @foreach($error->errors() as $e)
                                    <li>{{ $e }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            {{ $error->values()[$error->attribute()] }}
                        </td>
                    </tr>
                @endforeach
                </table>
            @endif
            <input type="file" name="import">
            <input type="submit" class="btn btn-primary">
        </form>
    </div>  
</body>
</html>