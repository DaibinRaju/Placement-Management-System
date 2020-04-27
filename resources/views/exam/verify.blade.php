<!DOCTYPE html>
<html lang="en">
<head>
    <title>SJCET PMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="icon" href="/assets/images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <div class="auth-wrapper">
        <div class="auth-content text-center">
            <div class="card">
                <div class="row align-items-center ">
                    <div class="col-md-12">
                        <img src="/assets/images/exam.png" alt="Exam" class="img-fluid" align="center">
                        <div class="card-body">
                            <h4 class="mb-3 f-w-400">Online Examination</h4>
                            <form method="post">
                                @csrf
                                <div class="input-group mb-4">
                                    <input type="password" name="password" class="form-control" placeholder="Exam password">
                                </div>
                                <button type="submit" name="submit" class="btn btn-block btn-primary mb-4 rounded-pill">Continue</button>
                                <p class="mb-0 text-muted">Go to <a href="login" class="f-w-400">Exams</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
            <title></title>
            <defs></defs>
            <path id="feel-the-wave" d="M 0 104.88898181006573 C 153.84616666666665 120.51824747112404 153.84616666666665 120.51824747112404 307.6923333333333 112.70361464059488 C 461.53849999999994 104.88898181006573 461.53849999999994 104.88898181006573 615.3846666666666 150.21139522814903 C 769.2308333333333 195.53380864623233 769.2308333333333 195.53380864623233 923.077 129.56840911189417 L 923.077 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, 4)"></path>
        </svg>
        <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
            <title></title>
            <defs></defs>
            <path id="feel-the-wave-two" d="M 0 82.09279434991181 C 92.30770000000001 131.38247649626447 92.30770000000001 131.38247649626447 184.61540000000002 106.73763542308811 C 276.92310000000003 82.09279434991181 276.92310000000003 82.09279434991181 369.23080000000004 120.19755893561984 C 461.53850000000006 158.30232352132785 461.53850000000006 158.30232352132785 553.8462 100.12820734860519 C 646.1538999999998 41.954091175882496 646.1538999999998 41.954091175882496 738.4616000000001 79.84602313786269 C 830.7693000000004 117.73795509984288 830.7693000000004 117.73795509984288 923.077 113.28755566974512 L 923.077 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, .3)"></path>
        </svg>
        <svg width="100%" height="250px" version="1.1" xmlns="http://www.w3.org/2000/svg" class="wave bg-wave">
            <title></title>
            <defs></defs>
            <path id="feel-the-wave-three" d="M 0 73.18743940313098 C 115.38462500000001 96.41626720105967 115.38462500000001 96.41626720105967 230.76925000000003 84.80185330209532 C 346.153875 73.18743940313098 346.153875 73.18743940313098 461.53850000000006 72.35855739264815 C 576.9231250000001 71.5296753821653 576.9231250000001 71.5296753821653 692.30775 66.39842928470843 C 807.692375 61.26718318725162 807.692375 61.26718318725162 923.0770000000001 72.35855739264815 L 923.0770000000001 735.385 L 0 735.385 Z" fill="rgba(72, 134, 255, .2)"></path>
        </svg>
    </div>
    <script src="/assets/js/vendor-all.min.js"></script>
    <script src="/assets/js/plugins/bootstrap.min.js"></script>
    <script src="/assets/js/waves.min.js"></script>
    <script src="/assets/js/pages/TweenMax.min.js"></script>
    <script src="/assets/js/pages/jquery.wavify.js"></script>
    <script>
        $('#feel-the-wave').wavify({
            height: 100,
            bones: 3,
            amplitude: 90,
            color: 'rgba(72, 134, 255, 4)',
            speed: .25
        });
        $('#feel-the-wave-two').wavify({
            height: 70,
            bones: 5,
            amplitude: 60,
            color: 'rgba(72, 134, 255, .3)',
            speed: .35
        });
        $('#feel-the-wave-three').wavify({
            height: 50,
            bones: 4,
            amplitude: 50,
            color: 'rgba(72, 134, 255, .2)',
            speed: .45
        });
    </script>
</body>
</html>