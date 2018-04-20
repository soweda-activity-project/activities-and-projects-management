<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('css/fontawesome-free-5.0.4/web-fonts-with-css/css/fontawesome.css') }}" rel="stylesheet">-->

    <link href="{{asset('css/megamenu.css')}}" rel="stylesheet">


    <!--<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>-->

     <!-- CSS reset -->
     <!-- Resource style

        <link rel="stylesheet" href="{{ asset('breadcrumbs-and-multistep-indicator/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('breadcrumbs-and-multistep-indicator/css/style.css') }}">
      -->


    <style>

        #playground-container {
            height: 500px;
            overflow: hidden !important;
            -webkit-overflow-scrolling: touch;
        }
        body, html{
            height: 100%;
            /*background-repeat: no-repeat;
            background:url(https://i.ytimg.com/vi/4kfXjatgeEU/maxresdefault.jpg);*/
            font-family: 'DejaVu Oxygen', sans-serif;
            background-size: cover;
        }



        h1.title {
            font-size: 50px;
            font-family: 'Passion One', cursive;
            font-weight: 400;
        }

        hr{
            width: 10%;
            color: #fff;
        }

        .form-group{
            margin-bottom: 15px;
        }

        label{
            margin-bottom: 15px;
        }

        input,
        input::-webkit-input-placeholder {
            font-size: 15px;
            padding-top: 3px;
        }

        .main-login{
            background-color: #fff;
            /* shadows and rounded borders */
            -moz-border-radius: 2px;
            -webkit-border-radius: 2px;
            border-radius: 2px;
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

        }
        .form-control {
            height: auto!important;
            padding: 8px 12px !important;
        }
        .input-group {
            -webkit-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
            -moz-box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
            box-shadow: 0px 2px 5px 0px rgba(0,0,0,0.21)!important;
        }
        #button {
            border: 1px solid #ccc;
            margin-top: 28px;
            padding: 6px 12px;
            color: #666;
            text-shadow: 0 1px #fff;
            cursor: pointer;
            -moz-border-radius: 3px 3px;
            -webkit-border-radius: 3px 3px;
            border-radius: 3px 3px;
            -moz-box-shadow: 0 1px #fff inset, 0 1px #ddd;
            -webkit-box-shadow: 0 1px #fff inset, 0 1px #ddd;
            box-shadow: 0 1px #fff inset, 0 1px #ddd;
            background: #f5f5f5;
            background: -moz-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #f5f5f5), color-stop(100%, #eeeeee));
            background: -webkit-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -o-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: -ms-linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            background: linear-gradient(top, #f5f5f5 0%, #eeeeee 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5f5f5', endColorstr='#eeeeee', GradientType=0);
        }
        .main-center{
            margin-top: 30px;
            margin: 0 auto;
            /*max-width: 400px;*/
            padding: 10px 40px;
            background: #4ad363;
            color: #FFF;
            text-shadow: none;
            -webkit-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
            -moz-box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);
            box-shadow: 0px 3px 5px 0px rgba(0,0,0,0.31);

        }
        span.input-group-addon i {
            color: #4ad363;
            font-size: 17px;
        }

        .login-button{
            margin-top: 5px;
        }

        .login-register{
            font-size: 11px;
            text-align: center;
        }

    </style>

    <!--  Footer style -->
    <style>
        footer{
            color: white;
        }
        footer a{
            color: #bfffff;
        }
        footer a:hover{
            color: white;
        }

        .footer-bottom{
            background: #349056;
            padding: 2em;
        }
        .footer-top{
            background: #349056;
        }
        .footer-middle{
            background: #349056;
            padding-top: 2em;
            color: white;
        }
        /**Sub Navigation**/
        .subnavigation-container{
            background: #349056;
        }
        .subnavigation .nav-link{
            color: white;
            font-weight: bold;
        }
        .subnavigation-container{
            text-align: center;
        }
        .subnavigation-container .navbar{
            display: inline-block;
            margin-bottom: -6px; /* Inline-block margin offffset HACK -Gilron */
        }
        .col-subnav a{
            padding: 1rem 1rem;
            color: white;
            font-weight: bold;
        }
        .col-subnav .active{
            border-top:5px solid orange;
            background: white;
            color: black;
        }
    </style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-success">
    <h1><a class="navbar-brand" href="#">SOWEDA</a></h1>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{asset('img/soweda1.jpg')}}" alt="soweda1" class="img-fluid"/>
                            <h1 style="color: orangered;">SOWEDA 1 </h1>
                            <p>
                                You need to add position:static to the
                                        that's above the dropdown menu. T
                                his will make your dropdown menu go full width.
                                And then to get it to collapse properly, change the .col-6
                                that you are using in the dropdown to be .col-md-6 and that should fix it.
                            </p>
                        </div>

                        <div class="col-md-3">
                            <img src="{{asset('img/soweda2.jpg')}}" alt="soweda2" class="img-fluid"/>
                            <h1 style="color: orangered;">SOWEDA 2 </h1>
                            <p>
                                You need to add position:static to the
                                that's above the dropdown menu. T
                                his will make your dropdown menu go full width.
                                And then to get it to collapse properly, change the .col-6
                                that you are using in the dropdown to be .col-md-6 and that should fix it.
                            </p>
                        </div>

                        <div class="col-md-3">
                            <img src="{{asset('img/soweda3.jpg')}}" alt="soweda3" class="img-fluid"/>
                            <h1 style="color: orangered;">SOWEDA 3 </h1>
                            <p>
                                You need to add position:static to the
                                that's above the dropdown menu. T
                                his will make your dropdown menu go full width.
                                And then to get it to collapse properly, change the .col-6
                                that you are using in the dropdown to be .col-md-6 and that should fix it.
                            </p>
                        </div>

                        <div class="col-md-3">
                            <img src="{{asset('img/soweda4.jpg')}}" alt="soweda4" class="img-fluid"/>
                            <h1 style="color: orangered;">SOWEDA 4 </h1>
                            <p>
                                You need to add position:static to the
                                that's above the dropdown menu. T
                                his will make your dropdown menu go full width.
                                And then to get it to collapse properly, change the .col-6
                                that you are using in the dropdown to be .col-md-6 and that should fix it.
                            </p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('notification-management')}}">Notification</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

   <!-- <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>-->

    <br>

    <div class=" over-carousel">


        <div class="row">
                @yield('content')
        </div>

        <br>



        <div class="row" style="position: relative; left: 0px; bottom: 0px;">

            <div class="col-md-12">
                @section('footer')

                    <footer class="mainfooter" role="contentinfo">
                        <div class="footer-top p-y-2">
                            <div class="container-fluid">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="footer-title text-xs-center">
                                            <h4 class="p-b-1">Contact Us</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Council</div>
                                        </div>
                                    </div><!--col-md-2-->
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Social Media</div>
                                        </div>
                                    </div><!--col-md-2-->
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Boards and Committees</div>
                                        </div>
                                    </div><!--col-md-2-->
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Departments</div>
                                        </div>
                                    </div><!--col-md-2-->
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Staff</div>
                                        </div>
                                    </div><!--col-md-2-->
                                    <div class="col-md-2">
                                        <div class="card card-primary">
                                            <div class="card-header">Fire and Police</div>
                                        </div>
                                    </div><!--col-md-2-->
                                </div>
                            </div>
                        </div>
                        <div class="footer-middle">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6">
                                        <!--Column1-->
                                        <div class="footer-pad">
                                            <h4>Address</h4>
                                            <address>
                                                <ul class="list-unstyled">
                                                    <li>
                                                        City Hall<br>
                                                        212  Street<br>
                                                        Lawoma<br>
                                                        735<br>
                                                    </li>
                                                    <li>
                                                        Phone: 0
                                                    </li>
                                                </ul>
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Column1-->
                                        <div class="footer-pad">
                                            <h4>Popular Services</h4>
                                            <ul class="list-unstyled">
                                                <li><a href="#"></a></li>
                                                <li><a href="#">Payment Center</a></li>
                                                <li><a href="#">Contact Directory</a></li>
                                                <li><a href="#">Forms</a></li>
                                                <li><a href="#">News and Updates</a></li>
                                                <li><a href="#">FAQs</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Column1-->
                                        <div class="footer-pad">
                                            <h4>Website Information</h4>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Website Tutorial</a></li>
                                                <li><a href="#">Accessibility</a></li>
                                                <li><a href="#">Disclaimer</a></li>
                                                <li><a href="#">Privacy Policy</a></li>
                                                <li><a href="#">FAQs</a></li>
                                                <li><a href="#">Webmaster</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-6">
                                        <!--Column1-->
                                        <div class="footer-pad">
                                            <h4>Popular Departments</h4>
                                            <ul class="list-unstyled">
                                                <li><a href="#">Parks and Recreation</a></li>
                                                <li><a href="#">Public Works</a></li>
                                                <li><a href="#">Police Department</a></li>
                                                <li><a href="#">Fire</a></li>
                                                <li><a href="#">Mayor and City Council</a></li>
                                                <li>
                                                    <a href="#"></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <!--Footer Bottom-->
                                        <p class="text-xs-center">&copy; Copyright 2016 - City of USA.  All rights reserved.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>

                @show
            </div>

        </div>

    </div>





    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('img/soweda1.jpg')}}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/soweda2.jpg')}}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/soweda3.jpg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/soweda4.jpg')}}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('img/soweda5.jpg')}}" alt="Third slide">
        </div>
    </div>

    <br>
   <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->
</div>







<script src="{{asset('js/jquery.js')}}"></script>
<!--<script src="{{asset('js/jquery.validate.min.js')}}"></script>-->
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap3-typeahead.min.js')}}"></script>
<!-- <script src="{{asset('breadcrumbs-and-multistep-indicator/js/modernizr.js')}}"></script> Modernizr -->



<script>
    //$("form").validate();
    //$("#applicationform").validate();

    $(document).ready(function () {
        /*$('#followupmodal').on('shown.bs.modal', function (e) {
            // do something...
        });*/

        $(function () {
            $('[data-toggle="popover"]').popover(
                {
                    container: 'body'
                }
            )
        });

        _id = null;

        $('.details').click(function (e) {
            e.preventDefault();
            _id = e.target()
            $(this).popover({
            });

            /*if($('.popover').hasClass('in')){
                $(this).popover('hide');
            }
            else {
                $(this).attr('data-content','Cannot proceed with Save while Editing a row.');
                $(this).popover('show');
            }*/

            return false;
        });

        $('.details').popover({
            title: "Header",
            //content: "<div>dBlabla</div>",
            animation: true,
            container:'body',
            content: function (ceci) {

                return "<div>Blabla " + ceci + "</div>";
            },
            html:true,
            placement:'right',
            offset:10,
        });
    });

</script>

<script type="text/javascript">
    $('.carousel').carousel({
        interval: 2000
    })
    </script>

<script type="text/javascript">
    $('#subdivisionLoader').hide();

    function loadSubdivision(valeur) {
        $.ajax({
            async:true,
            beforeSend:function(jqXHR, settings){
                $('#subdivisionLoader').show();
            },
            complete:function(jqXHR ,textStatus){
                $('#subdivisionLoader').hide();
            },
            dataType: "json",
            error:function(jqXHR, textStatus,errorThrown){
                $('#subdivisionLoader').hide();
            },
            url: 'http://localhost:8000/api/division/'+valeur+'/subdivision',
            data: '',
            success: function (data) {
                if(data != null && data.length>0){
                    var options_string = '';
                    for (var i=0 ; i<data.length; i++){
                        options_string += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }

                    $('#subdivision').html(options_string);
                    $('#subdivision').trigger('change');

                }
            }
        });//subdivisionLoader

        var options = document.getElementById('division').options;
        var option = null;
        for (var i=0; i<options.length; i++){
            if(options[i].value === document.getElementById('division').value){
                option = options[i];
                break;
            }
        }

        if (!(option === null)){
            //console.log(option.innerHTML);
            $('#divisionname').val(option.innerHTML);
        }

    }

    function setSubdivisionName(){
        var options = document.getElementById('subdivision').options;
        var option = null;
        for (var i=0; i<options.length; i++){
            if(options[i].value === document.getElementById('subdivision').value){
                option = options[i];
                break;
            }
        }

        if (!(option === null)){
            //console.log(option.innerHTML);
            $('#subdivisionname').val(option.innerHTML);
        }

    }


    if (!(document.getElementById('division') === null)){
        //alert('enter: \n' + document.getElementById('division'));
        loadSubdivision($('#division').val());
    }

</script>




<script>
    $('#village').typeahead({
        source: function (query, result) {
            $.ajax({
                url: "http://localhost:8000/api/division/"+$('#division').val()+"/subdivision/"+$('#subdivision').val()+"/village",
                data: 'query=' + query,
                dataType: "json",
                type: "get",
                success: function (data) {
                    result($.map(data, function (item) {
                        return item;
                    }));
                }
            });
        }
    });
</script>

<script type="text/javascript">
    $('#btn-followup').click(function () {
        var matricle = $('#matricle').val();
        var _token = document.getElementById('token-followup').getElementsByTagName('input')[0].value;
        //alert(matricle + "\n\n" + _token);
        $.ajax({
            async:true,
            beforeSend:function(jqXHR, settings){
                $('#folloupLoader').show();
            },
            complete:function(jqXHR ,textStatus){
                $('#folloupLoader').hide();
            },
            dataType: "json",
            error:function(jqXHR, textStatus,errorThrown){
                $('#folloupLoader').hide();
            },
            url: 'http://localhost:8000/api/activity/followup',
            data: 'matricle=' + matricle,
            success: function (data) {
                if(data != null && data.length>0){
                    data.push(data[0]);data.push(data[0]);data.push(data[0]);
                    data.push(data[0]);data.push(data[0]);data.push(data[0]);
                    data.push(data[0]);data.push(data[0]);data.push(data[0]);
                    //alert(JSON.stringify(data));
                    //
                    var object = JSON.parse(data[0]['object_json_version']);
                    $('#followupTitle').html(object['village'] + "  " + object['applicant'] + "  " + object['matricule']);
                    var str_html = '';
                    for (var i=0; i<data.length; i++){
                        if (/*data[i][''] === ''*/ i  <= 1){
                            str_html += '<li class="visited"><a href="#followupsteps">' + object['matricule'] + '</a></li>';
                        }else if(/*data[i][''] === ''*/i  === 2){
                            str_html += '<li class="current"><a href="#followupsteps">' + object['matricule'] + '</a></li>';
                        }else {
                            str_html += '<li class="current"><a href="#followupsteps">' + object['matricule'] + '</a></li>';
                        }
                    }

                    $('#followupsteps').html(str_html);
                    $('html, body').animate({
                        scrollTop: $("#followupresultcontent").offset().top
                    }, 2000);

                    //$('#followupmodal').modal('show');

                }
            }
        });
    });
</script>

</body>
</html>