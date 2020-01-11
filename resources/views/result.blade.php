<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="">


            <div class="" style="margin-left: 5%;margin-bottom: 5%">
                <div class="title m-b-md">
                    Result
                </div>
                <p>1. Age Group</p>
                <div style="margin-left: 5%">

                    <p> a. &lt;18 (Total: {{$survey[0]['totalanswer1a']}} | {{ round($survey[0]['totalanswer1a']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> b. 18 to 35 (Total: {{$survey[0]['totalanswer1b']}} | {{ round($survey[0]['totalanswer1b']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> c. 35 to 60 (Total: {{$survey[0]['totalanswer1c']}} | {{ round($survey[0]['totalanswer1c']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> d. 60 and above (Total: {{$survey[0]['totalanswer1d']}} | {{ round($survey[0]['totalanswer1d']/$survey[0]['totalquestion1']*100) }}%)</p>
                </div>

                <p>2. Education Level</p>
                <div style="margin-left: 5%">
                    <p> a. Secondary school and below (Total: {{$survey[0]['totalanswer2a']}} | {{ round($survey[0]['totalanswer2a']/$survey[0]['totalquestion1']*100) }}%) </p>
                    <p> b. Diploma (Total: {{$survey[0]['totalanswer2b']}} | {{ round($survey[0]['totalanswer2b']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> c. Degree (Total: {{$survey[0]['totalanswer2c']}} | {{ round($survey[0]['totalanswer2c']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> d. Post graduate degree (Total: {{$survey[0]['totalanswer2d']}} | {{ round($survey[0]['totalanswer2d']/$survey[0]['totalquestion1']*100) }}%)</p></div>

                <p>3. Income Level</p>
                <div style="margin-left: 5%">
                    <p> a. Less than RM 1000 (Total: {{$survey[0]['totalanswer3a']}} | {{ round($survey[0]['totalanswer3a']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> b. Between RM1000 to RM3000 (Total: {{$survey[0]['totalanswer3b']}} | {{ round($survey[0]['totalanswer3b']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> c. Between RM3000 to RM5000 (Total: {{$survey[0]['totalanswer3c']}} | {{ round($survey[0]['totalanswer3c']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> d. More than RM5000 (Total: {{$survey[0]['totalanswer3d']}} | {{ round($survey[0]['totalanswer3d']/$survey[0]['totalquestion1']*100) }}%)</p>
                </div>
                <p>4. Gender</p>
                <div style="margin-left: 5%">
                    <p> a. Male (Total: {{$survey[0]['totalanswer4a']}} | {{ round($survey[0]['totalanswer4a']/$survey[0]['totalquestion1']*100) }}%)</p>
                    <p> b. Female (Total: {{$survey[0]['totalanswer4b']}} | {{ round($survey[0]['totalanswer4b']/$survey[0]['totalquestion1']*100) }}%)</p></div>

                <button value="Home" onclick="location.href='{{route('survey.home')}}'"  >Home</button>

            </div>
        </div>
    </body>
</html>
