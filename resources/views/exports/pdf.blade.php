<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="fonts/Monotype_Corsiva.ttf" rel="stylesheet" type="text/css"/>
    <style>
        @font-face {
            font-family: 'monotype';
            font-style: normal;
            font-weight: 100;
            src: url('https://gsk-aamce.intermarkfileup.com/Monotype_Corsiva.ttf') format('truetype');
        }

        div {
            position: fixed;
            top: 155px;
            width: 100%;
            text-align: center;

            color: #1d386c;
        }
        h3 {
            font-size: 30px;
            font-weight: 200;
            padding-left: 70px;
            font-family: 'monotype', sans-serif;
        }
    </style>
</head>
<body>
<div>
    <h3>{{ucwords(strtolower($user->name)) ?? ''}}</h3>
</div>

<img src="{{public_path()}}/front/assets/1.jpg" alt="" width="100%">

</body>
</html>
