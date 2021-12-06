<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Gestion de commits</title>
    <script src="{{asset('js/script.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
          crossorigin="anonymous" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
        <h1 class="btn-success">Gestion de commits</h1>
            <div class="col-sm-6  mb-5 mt-5 ">
                                @yield('content')
                            </div>
                            <div class="col-sm-6">
                                @yield('infoRepo')
                            </div >
                    <div class="row-cols-4">
                    <footer class="text-lg text-blue-200" >
                        <p class="copyright">
                            &copy; {{ date("Y")   }} ESI_HEB, Inc.
                        </p>

                    </footer>
                </div>
</body>
<script>
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
</script>

</html>
