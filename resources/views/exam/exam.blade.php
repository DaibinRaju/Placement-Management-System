<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">


    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <!-- <link rel="stylesheet" href="/assets/css/examstyle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="/assets/css/jquery.min.js"></script> -->
    <!-- <script src="/assets/css/bootstrap.min.js"></script> 
   <link rel="stylesheet" href="/assets/css/style.css"> -->



    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 450px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            padding-top: 20px;
            background-color: #f1f1f1;
            height: 100%;
        }

        /* Set black background color, white text and some padding */
        footer {
            background-color: #555;
            color: white;
            padding: 15px;
        }

        .feather {
            font-family: 'feather' !important;
            speak: none;
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }



        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }

            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar" style="background-color:#f1f1f1;padding: 15px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <h2><a>{{$exam->name}}</a></h2>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <form method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-lg btn-danger">End exam</button>
                        </form>
                    </li>
                    <li>&nbsp;&nbsp;</li>
                    <li><button type="button" class="btn btn-lg btn-success">Time remaining:<span id="demo"></span></button></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid text-center">
        <div class="row content">

            <div class="col-sm-2 sidenav">
                <h4>Sections</h4>
                <ul class="nav nav-pills nav-stacked">
                    @foreach($exam->section as $section)
                    <li class="{{$section->id==$qsec[$current_q]? "active":""}}"><a href="#section1">{{$section->name}}</a></li>
                    @endforeach
                </ul><br>


            </div>
            <div class="col-sm-8 text-left">
                <form method="post">
                    <div>
                        <h1>Question: <span id="no">{{$current_q+1}}</span></h1>
                        <hr>
                        <br />
                        <div>{!!$question->question!!}</div>

                        <br />
                        @csrf
                        <div class="list-group">
                            @foreach($answer as $answer)
                            <a class="list-group-item">
                                <label class="radio-inline">
                                    <input type="radio" value="{{$answer->id}}" name="answer"><span id="op1">{{$answer->option}}</span>
                                </label>
                            </a>
                            @endforeach
                        </div>
                    </div>
                    <nav>
                        <ul class="nav navbar-nav navbar-right pagination pagination-lg">
                            <li class="page-item">
                                <button type="reset" class="btn btn-lg btn-primary"><span>Clear seletion</span></button>
                            </li>
                            <li class="page-item">
                                <button type="submit" name="skip" class="btn btn-lg btn-primary"><span>Skip</span></button>
                            </li>
                            <li class="page-item">
                                <button type="submit" name="response" class="btn btn-lg btn-primary"><span>Submit</span></button>
                            </li>

                        </ul>
                    </nav>
                </form>
            </div>
            <div class="overflow-auto col-sm-2 sidenav">
                <div class="col-sm-12" id="navigation">
                    @for($i=0;$i<$q_count;++$i)
                        @if($qsec[$i]==$qsec[$current_q])
                            @if($qst[$i]==-1)
                            <button type="button" class="col-sm-4 btn  btn-icon btn-danger"><span class="glyphicon glyphicon-ban-circle"></span>{{1+$i}}</button>
                            @elseif($qst[$i]==0)
                            <button type="button" class="col-sm-4 btn  btn-icon btn-info"><span class="glyphicon glyphicon-eye-close"></span>{{1+$i}}</button>
                            @else
                            <button type="button" class="col-sm-4 btn  btn-icon btn-success"><span class="glyphicon glyphicon-ok-circle"></span>{{1+$i}}</button>
                            @endif
                        @endif
                    @endfor




                    

                    <!-- <button type="button" class="col-sm-4 btn  btn-icon btn-info"><span class="glyphicon glyphicon-eye-close"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-info"><span class="glyphicon glyphicon-eye-close"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-info"><span class="glyphicon glyphicon-eye-close"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-info"><span class="glyphicon glyphicon-eye-close"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-warning"><span class="glyphicon glyphicon glyphicon-flag"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-success"><span class="glyphicon glyphicon-ok-circle"></span>1</button>
                    <button type="button" class="col-sm-4 btn  btn-icon btn-danger"><span class="glyphicon glyphicon-ban-circle"></span>1</button> -->
                </div>

            </div>
        </div>

    </div>
    </div>

    <div class="sidenav container-fluid text-center">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

    </div>
    <!-- 
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer> -->

</body>
<script>
    // Set the date we're counting down to
    var countDownDate = new Date("May 29, 2020 22:02:00").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("demo").innerHTML = /*days + "d " +*/ hours + "h " +
            minutes + "m " + seconds + "s ";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>



</html>