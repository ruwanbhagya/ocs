<!doctype html>
<html>
    <head>
        <!-- <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> -->

        <title>Public Complain System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color:#dbf0fd;
                /* color: #636b6f; */
                font-family: 'Raleway', sans-serif;
                /* font-weight: 100; */
                height: 100vh;
                margin: 0;
            }

            .full-height
            {
                height: 100vh;
            }          

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md 
            {
                margin-bottom: 30px;
            }

            /* .col-md-2{
               background-color:green;
            } */

            .col-md-12
            {
               /* text-align:center; */
               color:#3288e8;
               /* font-size:300px; */
               /* background-color:black; */
               padding:2%;
            }
           
            /* .col-md-4
            {
               text-align:center;
               color:white;
               font-weight:10px;
               background-color:black;
               padding:5%;
               border-radius:20px;              
            } */

            .col-md-3
            {
               text-align:center;
               font-size:16px;
               color:black;               
               font-weight:200px;
               background-color:#fff;
               padding:5%;
               border:0px solid;
               box-shadow: 2px 4px 4px  2px #bdc3c7;
               border-color:grey;
               border-radius:20px;
               margin-left:6%;               
            }           
            
            h1
            {
                text-align:center;
                /* font-weight: 400; */
                /* color:rgba(192, 57, 43,1.0); */
                text-shadow: 10px 2px 6px  rgba(149, 165, 166,1.0);
                /* color:white; */
            }
            h3
            {
                font-size:1.5rem;
                color:#dc3545;
                font-weight: 600;
                text-align:center;
                
            }

            .col-md-12
            {
                text-align:center;
                /* margin-left:250px */
            }

            
        </style>
    </head>
    <body>
        <!-- <div class="flex-center position-ref full-height"> -->

            <div class="container">
                <div class="row">
                        <!-- <div class="col-md-2" >
                        gbhgnghn
                        </div> -->
                        <div class="col-md-12">
                             <img src="{{asset('img/logo.png')}}" style="width:310px;height:100px">
                            <h1>Welcome To Western Province Council</h1>
                            <h3>Public Complain Management System </h3>
                        </div>
                        <!-- <div class="col-md-2">
                        hbdbhdbh
                        </div> -->
                </div>
            </div>

            <div class="container">
                <div class="row">
                        <!-- <div class="col-md-4" >
                        
                        </div> -->
                        <!-- <div class="col-md-12">
                            <p style="font-size:1rem;color:#dc3545;font-weight: 600;">The complain Management System of Western Province Council.</p>
                           
                        </div> -->
                        <!-- <div class="col-md-2">
                        hbdbhdbh
                        </div> -->
                </div>
            </div>

            <div class="container" style="margin-top:0.5%">
                <div class="row">
                    <div class="col-md-3" >
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-people" fill="#ff1a1a" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                        </svg>
                        <p style="font-family:Arial, Helvetica, sans-serif;font-size:0.9rem">If you are already registered in our site, Please click following link to login</p>                        
                        <button onclick="location.href='http://localhost:8000/login'" type="button" class="btn btn-primary" style="border-radius: 25px;width:120px;background-color:rgba(34, 156, 230,1.0)"><b>Login</b></button>
                    </div>
                    <div class="col-md-3">  
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-person-plus-fill" fill="#ff1a1a" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm7.5-3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            <path fill-rule="evenodd" d="M13 7.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0v-2z"/>
                        </svg> 
                        <p style="font-family:Arial, Helvetica, sans-serif;font-size:0.9rem">If you are not registered in our site, Please click following link to register.</p>  </br>                                              
                            <button onclick="location.href='http://localhost:8000/register'" type="button" class="btn btn-primary" style="border-radius: 25px;width:120px;background-color:rgba(34, 156, 230,1.0)"><b>Register</b></button>
                        </div>
                    <div class="col-md-3">      
                        <svg width="3em" height="3em" viewBox="0 0 16 16" class="bi bi-chat-square" fill="#ff1a1a" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h2.5a2 2 0 0 1 1.6.8L8 14.333 9.9 11.8a2 2 0 0 1 1.6-.8H14a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h2.5a1 1 0 0 1 .8.4l1.9 2.533a1 1 0 0 0 1.6 0l1.9-2.533a1 1 0 0 1 .8-.4H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                        </svg>
                        <p style="font-family:Arial, Helvetica, sans-serif;font-size:0.9rem;">If You are interested to do Manual Complain, Please click following link to details. </p>                                        
                        <button onclick="location.href='http://localhost:8000/info'" type="button" class="btn btn-primary" style="border-radius: 25px;width:120px;background-color:rgba(34, 156, 230,1.0)"><b>Manual</b></button>
                    </div>
                </div>
            </div>
            <!-- </div> -->
    </body>
</html>
