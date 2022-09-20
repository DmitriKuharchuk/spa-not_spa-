<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title></title>
</head>
<body>
<div id="app">
    <app></app>
</div>

<script src="{{ mix('js/vendor.js') }}"></script>
<script src="{{ mix('js/manifest.js') }}"></script>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
<style lang="scss">
    body{
        margin: 0px;
    }
    .whois{
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        background-color: rgb(105, 105, 113);
        min-height: 100vh;
        margin: 0px;
    }
    .whois__form{
        display: flex;
        margin: 0px;
        padding: 0px 30px;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 600px;
        height: 400px;
        background-color: #fff;
        color: rgba(0,0,0,.87);
        border-radius: 10px;
        outline: none;
        text-decoration: none;
        transition-property: box-shadow,opacity;
        overflow-wrap: break-word;
        position: relative;
        white-space: normal;
    }

    .whois__header{
        text-align: center;
        font-family: Roboto,serif;
        font-style: normal;
        font-weight: 600;
        font-size: 24px;
        line-height: 24px;
        width: 100%;
        color: #383838;
    }

    .whois__input{
        font-size: 16px;
        border: 1px solid #8f8f8f;
        width: 100%;
        height: 30px;
        border-radius: 12px!important;
        background-color: transparent;
        padding: 0px 36px;
    }

    .whois__button{
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        padding: 12px 36px;
        width: 328px;
        height: 44px;
        background: #2FA4FF;
        border-radius: 12px;
        font-family: 'Roboto';
        font-style: normal;
        font-weight: 700;
        font-size: 16px;
        line-height: 20px;
        text-align: center;
        color: #FFFFFF;
        cursor: pointer;
        border: 0px;
    }

    .whois__error{
        font-family: Roboto,serif;
        font-style: normal;
        font-weight: 600;
        font-size: 10px;
        line-height: 24px;
        width: 100%;
        color: red;
    }

    .whois__form__result{
        display: flex;
        margin: 0px;
        padding: 0px 30px;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        width: 100%;
        background-color: #fff;
        color: rgba(0,0,0,.87);
        border-radius: 10px;
        outline: none;
        text-decoration: none;
        transition-property: box-shadow,opacity;
        overflow-wrap: break-word;
        position: relative;
        white-space: normal;
    }

</style>
