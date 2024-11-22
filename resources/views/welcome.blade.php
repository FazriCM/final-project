<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <style>
        body {
            height: 100%;
            margin: 0;
        }

        .container {
            display: flex;
            height: 100%;
            margin: 0%;
        }

        .background-1 {
            background-color: #053575;
            flex: 1;
        }

        .background-2 {
            background-color: #f1f6e1;
            flex: 1;
        }

        .pembuka {
            font-size: 70px;
            color: white;
            font-family: "Trebuchet MS", "Lucida Sans Unicode", "Lucida Grande",
                "Lucida Sans", Arial, sans-serif;
            font-weight: 700;
            margin-left: 30px;
            margin-top: 120px;
        }

        .pembuka-2 {
            font-size: 28px;
            color: white;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
                sans-serif;
            margin-left: 30px;
            margin-top: 30px;
        }

        .garis {
            height: 3px;
            width: 100px;
            margin-left: 40px;
            margin-top: 65px;
            background-color: #f1f6e1;
        }

        .garis-2 {
            height: 3px;
            width: 100px;
            position: absolute;
            top: 200px;
            margin-left: 180px;
            rotate: 50deg;
            background-color: #545454;
        }

        .garis-3 {
            height: 3px;
            width: 80px;
            position: absolute;
            top: 200px;
            margin-left: 330px;
            rotate: -60deg;
            background-color: #545454;
        }

        .tombol {
            height: 50px;
            width: 120px;
            margin-top: 40px;
            background-color: #8c52ff;
            color: white;
            border-radius: 15px;
            border: none;
            font-weight: bold;
        }

        .tombol:hover {
            cursor: pointer;
        }

        .gmbr-1 {
            height: 400px;
            margin-left: 100px;
            margin-top: 120px;
        }

        .lingkaran-1 {
            height: 60px;
            width: 100px;
            border-radius: 100%;
            background-color: #f4c2a1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
                sans-serif;
            color: white;
            position: absolute;
            top: 100px;
            margin-left: 130px;
            rotate: -10deg;
        }

        .lingkaran-2 {
            height: 60px;
            width: 100px;
            border-radius: 100%;
            background-color: #f4c2a1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Gill Sans", "Gill Sans MT", Calibri, "Trebuchet MS",
                sans-serif;
            color: white;
            position: absolute;
            top: 100px;
            margin-left: 360px;
            rotate: 10deg;
        }

        .merah {
            color: #f3ffcc;
        }
    </style>
    <html>
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
            <div style="display: flex; gap: 20px">
                <div class="garis"></div>
                <button class="tombol">Let's Chat</button>
            </div>
        </div>
        <div class="background-2">
            <img class="gmbr-1" src="IT-Final-Project.png" alt="" />
            <div class="garis-2"></div>
            <div class="garis-3"></div>
            <div class="lingkaran-1">Masukan</div>
            <div class="lingkaran-2">Kritik</div>
        </div>
    </div>
</body>

</html>
