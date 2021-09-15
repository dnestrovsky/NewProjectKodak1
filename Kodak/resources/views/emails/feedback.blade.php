<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width"/>

    <style type="text/css">

        * {
            margin: 0;
            padding: 0;
            font-size: 100%;
            font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
            line-height: 1.65; }

        img {
            max-width: 100%;
            margin: 0 auto;
            display: block; }

        body,
        .body-wrap {
            width: 100% !important;
            height: 100%;
            background: #f8f8f8; }

        a {
            color: #71bc37;
            text-decoration: none; }
        a:hover {
            text-decoration: underline; }

        .text-center {
            text-align: center; }

        .text-right {
            text-align: right; }

        .text-left {
            text-align: left; }

        .button {
            display: inline-block;
            color: white;
            background: #71bc37;
            border: solid #71bc37;
            border-width: 10px 20px 8px;
            font-weight: bold;
            border-radius: 4px; }
        .button:hover {
            text-decoration: none; }

        h1, h2, h3, h4, h5, h6 {
            margin-bottom: 20px;
            line-height: 1.25; }

        h1 {
            font-size: 32px; }

        h2 {
            font-size: 28px; }

        h3 {
            font-size: 24px; }

        h4 {
            font-size: 20px; }

        h5 {
            font-size: 16px; }

        p, ul, ol {
            font-size: 16px;
            font-weight: normal;
            margin-bottom: 20px; }

        .container {
            display: block !important;
            clear: both !important;
            margin: 0 auto !important;
            max-width: 580px !important; }
        .container table {
            width: 100% !important;
            border-collapse: collapse; }
        .container .masthead {
            padding: 80px 0;
            background: #71bc37;
            color: white; }
        .container .masthead h1 {
            margin: 0 auto !important;
            max-width: 90%;
            text-transform: uppercase; }
        .container .content {
            background: white;
            padding: 30px 35px; }
        .container .content.footer {
            background: none; }
        .container .content.footer p {
            margin-bottom: 0;
            color: #888;
            text-align: center;
            font-size: 14px; }
        .container .content.footer a {
            color: #888;
            text-decoration: none;
            font-weight: bold; }
        .container .content.footer a:hover {
            text-decoration: underline; }


    </style>
</head>
<body>
<table class="body-wrap">
    <tr>
        <td class="container">

            <!-- Message start -->
            <table>
                <tr>
                    <td align="center" class="masthead">

                        <h1>Новое сообщение</h1>

                    </td>
                </tr>
                <tr>
                    <td class="content">

                        <p>{{ $data->message }}</p>

                        <table>
                            <tr>
                                <td align="center">
                                    <p>
                                        <a href="https://palitra-kodak.site/" class="button">Перейти на сайт</a>
                                    </p>
                                </td>
                            </tr>
                        </table>

                        <p><strong>Имя:</strong> {{ $data->name }}</p>
                        <p><strong>Почта:</strong> {{ $data->email }}</p>
                        <p><strong>Номер телефона:</strong> {{ $data->phone }}</p>

                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <tr>
        <td class="container">

            <!-- Подвал письма -->
            <table>
                <tr>
                    <td class="content footer" align="center">
                        <p>Sent by <a href="https://palitra-kodak.site/">palitra-kodak</a></p>
                        <p><a href="mailto:">noreply@palitra-kodak.site</a> | <a href="#">Почтовый ящик уведомлений</a></p>
                    </td>
                </tr>
            </table>

        </td>
    </tr>
</table>
</body>
</html>
