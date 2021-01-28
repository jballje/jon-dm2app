@extends('layout')

@section('content')


<head>
  <!--
      ******Not Needed Take Out******
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
-->
        <style>
        .container {
            max-width: 500px;
        }
        dl, ol, ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }
    </style>
</head>

<body>

  <!--  <div class="container"> -->
    <h1 class="text-left mx-sm-3 mb-2">Mailing List Upload</h1>
        <form class="form-horizontal" action="{{route('fileUpload')}}" method="post" enctype="multipart/form-data">
              @csrf
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{ $message }}</strong>
            </div>
          @endif

          @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
          @endif

            <div class="form-group mx-sm-3 mb-2">
                <label for="mailing_name">Mailing Name:</label>
                <input type="text" name="mailing_name" class="form-control" id="mailing_name">
            </div>
           
            <div class="form-group mx-sm-3 mb-2">
                <label for="mailing_date">Mailing Date:</label>
                <input type="date" name="mailing_date" class="form-control" id="mailing_date">
            </div>
    
            <div class="form-group mx-sm-3 mb-2">
                <labelfor="chooseFile">Mailing List:</label>
                <input type="file" name="file" class="form-control-file " id="chooseFile">
            </div>

            <div class="form-group mx-sm-3 mb-2">
            <button type="submit" name="submit" class="btn btn-primary mb-2">Upload Files</button>
            </div>
        </form>
    </div>

</body>


@stop