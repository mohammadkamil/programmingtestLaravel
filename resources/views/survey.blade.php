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


            <div class="" style="margin: 0% 0 0 5%">
                <div class="title m-b-md">
                    Survey
                </div>
            <form action="{{route('survey.submit')}}" method="POST">
                    @csrf
                    <p>1. What is your age group?</p>
                      <input type="radio" name="question1" value="1"> a. &lt;18 <br>
                      <input type="radio" name="question1" value="2"> b. 18 to 35<br>
                      <input type="radio" name="question1" value="3"> c. 35 to 60<br>
                      <input type="radio" name="question1" value="4"> d. 60 and above<br>


                    <p>2. What is your education level?</p>
                    <input type="radio" name="question2" value="1"> a. Secondary school and below <br>
                    <input type="radio" name="question2" value="2"> b. Diploma<br>
                    <input type="radio" name="question2" value="3"> c. Degree<br>
                    <input type="radio" name="question2" value="4"> d. Post graduate degree<br>
                    <p>3. What is your monthly income?</p>
                    <input type="radio" name="question3" value="1"> a. Less than RM 1000 <br>
                    <input type="radio" name="question3" value="2"> b. Between RM1000 to RM3000<br>
                    <input type="radio" name="question3" value="3"> c. Between RM3000 to RM5000<br>
                    <input type="radio" name="question3" value="4"> d. More than RM5000<br>

                    <p>4. Your gender :</p>
                    <input type="radio" name="question4" value="1"> a. Male <br>
                    <input type="radio" name="question4" value="2"> b. Female<br>


                      <input type="submit" value="Submit">
                    </form>
                {{-- <button value="Submit Survey" onclick="location.href='{{route('survey.submit')}}'"  >Submit</button> --}}


            </div>
        </div>
    </body>
</html>
