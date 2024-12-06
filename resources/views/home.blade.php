<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <style>
        html,
        body {
            height: 100%;
            width: 100%;
            margin: 0;
            background: #053575;

        }

        .container {
            display: flex;
            height: 100%;
            width: 100%;
            margin: 0%;
            justify-content: space-between;
            align-items: center;
            align-content: center;  
        }

        .pembuka {
            font-size: 90px;
            color: white;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            font-weight: 700;
            margin-left: 30px;
        }

        .pembuka-2 {
            width: 800px;
            font-size: 28px;
            color: white;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS", sans-serif;
            margin-left: 40px;
            margin-top: 20px;
        }

        .tombol {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            width: 150px;
            margin-top: 40px;
            background-color: #8c52ff;
            color: white;
            border-radius: 15px;
            border: none;
            font-weight: bold;
            margin-left: 40px;
            font-size: 25px;
            text-decoration-line: none
        }

        
        .tombol-2{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 60px;
            width: 180px;
            margin-top: 40px;
            background-color: #8c52ff;
            color: white;
            border-radius: 15px;
            border: none;
            font-weight: bold;
            margin-left: 20px;  
            font-size: 25px;
            text-decoration-line: none
        }

        .TBL {
            display: flex;
        }

        .Gambar{
            width: 800px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="background-1">
            <h1 class="pembuka">
                <span class="merah">Welcome</span> To <br />
                Website Saran
            </h1>
            <p class="pembuka-2">
                Website ini dibuat untuk kalian yang mau memberi saran ataupun Kritik
                kepada kami.
            </p>
            <div class="TBL">
                <div style="display: flex; gap: 20px">
                    <a href="{{ route('form_siswa.index') }}" class="tombol">Lets Chat</a>
                </div>
                <div style="display: flex; gap: 5px">
                    <a href="{{ route('register') }}" class="tombol-2">Lest Register</a>
                </div>
            </div>
        </div>
        <div>
            <img src="{{ asset('assets/images/surat.png') }}" class="Gambar">
        </div>
    </div>
</body>

</html>
