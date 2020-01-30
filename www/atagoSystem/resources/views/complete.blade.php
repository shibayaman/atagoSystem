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
           .common-header {
               
               position:relative;
               background-color:black;
               max-width:100%;
               height:10em;

           }
           
           .complete-title {

               position:absolute;
               top:30px;
               font-size:50px;
               color:white;
               left:40%;
           }

           .complete-bread ul {

            display:flex;
            list-style-type:none;

           }

           .complete-bread li a {
               padding:5px;
               color:blue;
               font-size:16px;
           }

           .complete-bread li:after {
               content:'>';
               margin-left:10px;
               margin-right:10px;
               color:black;
               font-weight:bold;
           }

           .complete-bread li:last-child:after {
               content:"";
           }

           .complete {
               text-align:center;
               border-style:solid;
               width:1000px;
               align:center;
               margin:0 auto;
           }

           #logo {
               position:relative;
               top:15px;
           }
           

           .common-footer {
               position:relative;
               bottom:0;
               width:100%;
               height:5em;
               background-color:black;
           }
        </style>

          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
          <script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>
    </head>
    <body>
        
           
        <div id = "complete-example"></div>
        <script src="{{asset('/js/accountapp.js')}}"></script>

    <footer class="common-footer">
        <a href="/emplogin" className="emp" id="emp">企業の方はこちら</a>
                
    <footer>

    </body>
</html>