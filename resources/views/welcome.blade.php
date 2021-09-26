<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="/front/style.css">
    <title>Project name</title>
</head>

<body>
<section class="wrapper">
    <div class="container">
        <div class="row">
            <div class="offset-md-6 col-md-6 h100 pt-44 vh-center">

                    <div class="form_div" id="form_div">
                        <h1 class="welcome">Welcome to Project name</h1>
                        <p class="write-name">Please write your email</p>
                        <form action="{{route('event.form')}}" method="post">
                            @csrf
                        <div>
                            <input class="form-control name" type="email" required name="email" placeholder="Email">
                        </div>
{{--                        <div class="input-group mb-3 select">--}}
{{--                            <select class="form-control custom-select" required name="category" id="inputGroupSelect01">--}}
{{--                                <option value="">-- category list --</option>--}}
{{--                                <option value="1">Webinar - April 6th</option>--}}
{{--                                <option value="2">Webinar - May 4th</option>--}}
{{--                                <option value="3">Webinar - June 1th</option>--}}
{{--                                <option value="4">Webinar - Sep 7th</option>--}}
{{--                            </select>--}}
{{--                        </div>--}}

                        @if(Session::has('message'))
                            <div class="text-center">
                                <button disabled class="add-check">{{Session::get('message')}}</button>
                            </div>
                        @endif
                        <div class="m-v text-center">
                            <button type="submit" class="downloadMaterial">
                                <i class="far fa-arrow-circle-down" id="downloadbtn"></i>
                            </button>
                        </div>
                        <p class="downloadMaterial-text">Download Material</p>
                        </form>

                    </div>
                <div class="thankyou-div nonedisplay" id="thank-div">
                    <div class="text-center">
                        <i class="fas fa-thumbs-up"></i>
                    </div>
                    <p class="thank">Thank you</p>
                    <p class="downloading">for downloading</p>
                    <div class="text-center">
                        <a href="/" class="downloadMaterial">
                            <i class="fas fa-redo-alt"></i>
                        </a>
                    </div>
                    <p class="start-again">Start again</p>
                </div>


            </div>
        </div>
    </div>
</section>
</body>
<script src="/front/js.js"></script>

</html>
