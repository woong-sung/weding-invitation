<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김문수 & 조자영 결혼합니다 ♥</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/sakura.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.4/howler.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.7.1.js" ></script> -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="./js/sakura.js"></script>
</head>
<script>
    var sound = new Howl({
        src: ['./sound/test.mp3']
    });
    sound.play();
</script>

<body>
    <div class="bgmcontrol"></div>
    <div id="fullpage">
        <div class="section">
            <div class="titleDiv">
                <div class="soundctl">
                    <p>음소거</p>
                </div>
                <h1 class="title">2024 / 12 / 08</h1>
                <h2 class="weekday">SUNDAY</h2>
                <h2 class="title">김문수 ♥ 조자영</h2>
                <div class="imgwrap">
                    <img class="sec1img" src="./img/test.png">
                </div>
                <!-- <h2 class="title btm-txt">김문수 ♥ 조자영</h2> -->
            </div>
        </div>
        <div class="section">
            <div>
                <h1 class="title thanks">감사인사</h1>
            </div>

        </div>
        <div class="section">
            <div>
                <h1 class="title">갤러리</h1>
            </div>
        </div>
        <div class="section">
            <div>
                <h1 class="title">날짜 , 시간 + 달력 표시</h1>
            </div>
        </div>
        <div class="section">
            <div>
                <h1 class="title">오시는길 -> 주소 + 지도</h1>
            </div>
        </div>
        <div class="section">
            <div>
                <h1 class="title">방명록</h1>
            </div>
        </div>

        <!-- Add more sections as needed -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.js"></script>
    <script>
        new fullpage('#fullpage', {
            autoScrolling: true,
            scrollHorizontally: false,
            navigation: true,
            scrollingSpeed: 900,
            // Add more configurations as needed
        });

        $(window).load(function() {
        $('body').sakura();
    });
    </script>
</body>

</html>