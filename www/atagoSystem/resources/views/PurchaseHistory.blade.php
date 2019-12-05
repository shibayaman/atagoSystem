<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>mac</title>
        <link href="{{asset('/css/purchasehistory.css')}}" rel="stylesheet">
    </head>
    <body>
        {{-- <p>購入日</p>
        <span id="view_time"></span>

        <script type="text/javascript">
        document.getElementById("view_time").innerHTML = getNow();

        function getNow() {
            var now = new Date();
            var year = now.getFullYear();
            var mon = now.getMonth()+1;
            var day = now.getDate();

            var s = year + "年" + mon + "月" + day + "日";
            return s;
        }
        </script>
        <p>氏名</p> --}}

        <div id="root"></div>
        <script src="{{asset('/js/purchasehistory.js')}}"></script>
    </body>
</html>
