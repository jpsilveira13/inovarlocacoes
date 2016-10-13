
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Área Login</title>

    <style type="text/css">
        * {
            -webkit-font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
        }

        html, body {
            height: 100%;
        }

        body {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            position: relative;
            background: -webkit-linear-gradient(315deg, rgba(36, 46, 77, 0.9), rgba(137, 126, 121, 0.9));
            background: linear-gradient(135deg, rgba(36, 46, 77, 0.9), rgba(137, 126, 121, 0.9));
            font-family: 'Roboto', helvetica, arial, sans-serif;
            font-size: 1.5em;
        }
        body:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAMAAAAp4XiDAAAAUVBMVEWFhYWDg4N3d3dtbW17e3t1dXWBgYGHh4d5eXlzc3OLi4ubm5uVlZWPj4+NjY19fX2JiYl/f39ra2uRkZGZmZlpaWmXl5dvb29xcXGTk5NnZ2c8TV1mAAAAG3RSTlNAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEBAQEAvEOwtAAAFVklEQVR4XpWWB67c2BUFb3g557T/hRo9/WUMZHlgr4Bg8Z4qQgQJlHI4A8SzFVrapvmTF9O7dmYRFZ60YiBhJRCgh1FYhiLAmdvX0CzTOpNE77ME0Zty/nWWzchDtiqrmQDeuv3powQ5ta2eN0FY0InkqDD73lT9c9lEzwUNqgFHs9VQce3TVClFCQrSTfOiYkVJQBmpbq2L6iZavPnAPcoU0dSw0SUTqz/GtrGuXfbyyBniKykOWQWGqwwMA7QiYAxi+IlPdqo+hYHnUt5ZPfnsHJyNiDtnpJyayNBkF6cWoYGAMY92U2hXHF/C1M8uP/ZtYdiuj26UdAdQQSXQErwSOMzt/XWRWAz5GuSBIkwG1H3FabJ2OsUOUhGC6tK4EMtJO0ttC6IBD3kM0ve0tJwMdSfjZo+EEISaeTr9P3wYrGjXqyC1krcKdhMpxEnt5JetoulscpyzhXN5FRpuPHvbeQaKxFAEB6EN+cYN6xD7RYGpXpNndMmZgM5Dcs3YSNFDHUo2LGfZuukSWyUYirJAdYbF3MfqEKmjM+I2EfhA94iG3L7uKrR+GdWD73ydlIB+6hgref1QTlmgmbM3/LeX5GI1Ux1RWpgxpLuZ2+I+IjzZ8wqE4nilvQdkUdfhzI5QDWy+kw5Wgg2pGpeEVeCCA7b85BO3F9DzxB3cdqvBzWcmzbyMiqhzuYqtHRVG2y4x+KOlnyqla8AoWWpuBoYRxzXrfKuILl6SfiWCbjxoZJUaCBj1CjH7GIaDbc9kqBY3W/Rgjda1iqQcOJu2WW+76pZC9QG7M00dffe9hNnseupFL53r8F7YHSwJWUKP2q+k7RdsxyOB11n0xtOvnW4irMMFNV4H0uqwS5ExsmP9AxbDTc9JwgneAT5vTiUSm1E7BSflSt3bfa1tv8Di3R8n3Af7MNWzs49hmauE2wP+ttrq+AsWpFG2awvsuOqbipWHgtuvuaAE+A1Z/7gC9hesnr+7wqCwG8c5yAg3AL1fm8T9AZtp/bbJGwl1pNrE7RuOX7PeMRUERVaPpEs+yqeoSmuOlokqw49pgomjLeh7icHNlG19yjs6XXOMedYm5xH2YxpV2tc0Ro2jJfxC50ApuxGob7lMsxfTbeUv07TyYxpeLucEH1gNd4IKH2LAg5TdVhlCafZvpskfncCfx8pOhJzd76bJWeYFnFciwcYfubRc12Ip/ppIhA1/mSZ/RxjFDrJC5xifFjJpY2Xl5zXdguFqYyTR1zSp1Y9p+tktDYYSNflcxI0iyO4TPBdlRcpeqjK/piF5bklq77VSEaA+z8qmJTFzIWiitbnzR794USKBUaT0NTEsVjZqLaFVqJoPN9ODG70IPbfBHKK+/q/AWR0tJzYHRULOa4MP+W/HfGadZUbfw177G7j/OGbIs8TahLyynl4X4RinF793Oz+BU0saXtUHrVBFT/DnA3ctNPoGbs4hRIjTok8i+algT1lTHi4SxFvONKNrgQFAq2/gFnWMXgwffgYMJpiKYkmW3tTg3ZQ9Jq+f8XN+A5eeUKHWvJWJ2sgJ1Sop+wwhqFVijqWaJhwtD8MNlSBeWNNWTa5Z5kPZw5+LbVT99wqTdx29lMUH4OIG/D86ruKEauBjvH5xy6um/Sfj7ei6UUVk4AIl3MyD4MSSTOFgSwsH/QJWaQ5as7ZcmgBZkzjjU1UrQ74ci1gWBCSGHtuV1H2mhSnO3Wp/3fEV5a+4wz//6qy8JxjZsmxxy5+4w9CDNJY09T072iKG0EnOS0arEYgXqYnXcYHwjTtUNAcMelOd4xpkoqiTYICWFq0JSiPfPDQdnt+4/wuqcXY47QILbgAAAABJRU5ErkJggg==);
            opacity: .3;
        }

        .login-form {
            width: 100%;
            padding: 2em;
            position: relative;
            background: rgba(0, 0, 0, 0.15);
        }

        .logo-img{

            background-size: cover;
            display: block;
            /* border-radius: 50%; */
            width: 350px;
            height: 151px;
            position: relative;
            background: url('/admin/images/logoteste.png');
            background-repeat: no-repeat;
            background-position: 50%;
        }
        .logo-img img{
            opacity: 0;
            filter: alpha(opacity=0);

        }

        .login-form:before {
            content: '';
            position: absolute;
            top: -2px;
            left: 0;
            height: 2px;
            width: 100%;
            background: -webkit-linear-gradient(left, #eec13f, #e0933e);
            background: linear-gradient(to right, #e0933e, #eec13f);
        }
        @media screen and (min-width: 600px) {
            .login-form {
                width: 50vw;
                max-width: 15em;
            }
        }

        .flex-row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 1em;
        }

        .lf--label {
            width: 2em;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #f5f6f8;
            cursor: pointer;
        }

        .lf--input {
            -webkit-box-flex: 1;
            -webkit-flex: 1;
            -ms-flex: 1;
            flex: 1;
            padding: 1em;
            border: 0;
            color: #8f8f8f;
            font-size: 1rem;
        }
        .lf--input:focus {
            outline: none;
            -webkit-transition: -webkit-transform .15s ease;
            transition: -webkit-transform .15s ease;
            transition: transform .15s ease;
            transition: transform .15s ease, -webkit-transform .15s ease;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .lf--submit {
            display: block;
            padding: 1em;
            width: 100%;
            background: -webkit-linear-gradient(left, #eec13f, #eec13f);
            background: linear-gradient(to right, #e0933e, #eec13f);
            border: 0;
            color: #fff;
            cursor: pointer;
            font-size: .75em;
            font-weight: 600;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.2);
        }
        .lf--submit:focus {
            outline: none;
            -webkit-transition: -webkit-transform .15s ease;
            transition: -webkit-transform .15s ease;
            transition: transform .15s ease;
            transition: transform .15s ease, -webkit-transform .15s ease;
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .lf--forgot {
            margin-top: 1em;
            color: #00d6b7;
            font-size: .65em;
            text-align: center;
        }

        ::-webkit-input-placeholder {
            color: #8f8f8f;
        }

        ::-moz-placeholder {
            color: #8f8f8f;
        }

        :-ms-input-placeholder {
            color: #8f8f8f;
        }

        ::placeholder {
            color: #8f8f8f;
        }
    </style>
</head>
<body>
<form  action="{{ url('/auth/login') }}"  method="POST" class='login-form'>
    {!! csrf_field() !!}
    <div class="logo-img"></div>
    <div class="flex-row">
        <label class="lf--label" for="username">
            <svg x="0px" y="0px" width="12px" height="13px">
                <path fill="#B1B7C4" d="M8.9,7.2C9,6.9,9,6.7,9,6.5v-4C9,1.1,7.9,0,6.5,0h-1C4.1,0,3,1.1,3,2.5v4c0,0.2,0,0.4,0.1,0.7 C1.3,7.8,0,9.5,0,11.5V13h12v-1.5C12,9.5,10.7,7.8,8.9,7.2z M4,2.5C4,1.7,4.7,1,5.5,1h1C7.3,1,8,1.7,8,2.5v4c0,0.2,0,0.4-0.1,0.6 l0.1,0L7.9,7.3C7.6,7.8,7.1,8.2,6.5,8.2h-1c-0.6,0-1.1-0.4-1.4-0.9L4.1,7.1l0.1,0C4,6.9,4,6.7,4,6.5V2.5z M11,12H1v-0.5 c0-1.6,1-2.9,2.4-3.4c0.5,0.7,1.2,1.1,2.1,1.1h1c0.8,0,1.6-0.4,2.1-1.1C10,8.5,11,9.9,11,11.5V12z"/>
            </svg>
        </label>

        <input  id="login" class='lf--input' name="login" placeholder='Informe o login' required="" value="{{old('login')}}" type='text'>
    </div>
    <div class="flex-row">
        <label class="lf--label" for="password">
            <svg x="0px" y="0px" width="15px" height="5px">
                <g>
                    <path fill="#B1B7C4" d="M6,2L6,2c0-1.1-1-2-2.1-2H2.1C1,0,0,0.9,0,2.1v0.8C0,4.1,1,5,2.1,5h1.7C5,5,6,4.1,6,2.9V3h5v1h1V3h1v2h1V3h1 V2H6z M5.1,2.9c0,0.7-0.6,1.2-1.3,1.2H2.1c-0.7,0-1.3-0.6-1.3-1.2V2.1c0-0.7,0.6-1.2,1.3-1.2h1.7c0.7,0,1.3,0.6,1.3,1.2V2.9z"/>
                </g>
            </svg>
        </label>
        <input id="senha" class='lf--input' name="password" placeholder='Informe a senha' type='password'>
    </div>
    <input class='lf--submit' type='submit' value='Login'>
</form>
<!-- <a class='lf--forgot' href='#'>Esqueceu a senha?</a> -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script src="js/site.js"></script>
</body>
</html>