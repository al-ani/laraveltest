<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{--
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    --}}
    <title>Ayman</title>
</head>

<body>

    <div class="container">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @yield('content')

    </div>

    <style>
        .container {
            width: 1000px;
            margin: 0 auto;
            font-size: 20px
        }

        .post-card,
        .post-form {
            background: red;
            display: flex;
            padding: 30px;
            margin-bottom: 10px;
            border: black solid;
            align-content: stretch;
            width: 100%;
        }

        .post-title,
        .post-name,
        .post-action {
            flex: 0 0 33%;
        }

        .post-action {
            display: flex;
            flex-direction: row;
            position: relative;
            justify-content: center;
        }
        .post-title-header{
            font-size: 24px;
            margin-bottom: 10px;
            font-weight: bold
        }
        .post-title-content{

            margin-bottom: 30px;
        }

        .author-id, .post-title-date{
            color: rgb(93 80 80);
        }

        .post-action-content {
            position: absolute;
            bottom: 0px;
            display: flex;
            flex-direction: row;
        }

        .post-name {
            display: flex;
            flex-direction: column;
        }
        .post-delete{
            background: none;
            border: none;
            color: blue;
            font-family:"Times New Roman";
            font-size: 20px;
            padding:0px 20px;
        }
        .post-update{
            text-decoration:none
        }

        .post-form {
            padding: 30px;
            border: black solid;
            background: rgb(207 226 243);
            align-content: stretch;
            flex-direction: column;
        }

        .form-group {
            align-self: stretch;
            display: flex;
            width: 100%;
            margin-bottom: 5px
        }

        label,
        input,
        .button-submit {
            flex: 0 0 33%;
            height: 30px;
        }

        select,
        .button-submit {
            background: blue;
            color: white;
            flex: 0 0 33.7%;
        }

        select {
            background: white;
            color: black;
        }

    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    {{-- <script
        src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script> --}}
</body>

</html>
