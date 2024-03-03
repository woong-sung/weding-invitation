<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김문수 & 조자영 결혼합니다 ♥</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.4/howler.min.js"></script>
</head>
<style>
    body{
        background: linear-gradient(0deg, #fff5ee, #deb887);
    }
    .titleDiv {
        position: relative;
        width: 100%;
        height: 100%;
        text-align: center;
        overflow: hidden;
    }

    .title {
        text-align: center;
        color: white;
        margin: 20px 0 0 0;
        z-index: 1;
    }

    .weekday {
        /* font: 2em sans-serif; */
        color: white;
        margin: 0;
    }

    .thanks {
        margin-top: 10px;
    }

    .imgwrap {
        overflow: hidden;
        position: absolute;
        bottom:0px
    }

    .sec1img {
        width: 100%;
        position: relative;
        z-index: -1;
    }
</style>
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
            <!-- <audio data-autoplay data-keepplaying id="bgm">
                <source src="./sound/test.mp3" type="audio/mpeg">
            </audio> -->
            <div class="titleDiv">
                <h1 class="title">2024 / 12 / 08</h1>
                <h2 class="weekday">SUNDAY</h2>
                <div class="imgwrap">
                    <img class="sec1img" src="./img/test.png">
                </div>
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
        <div class="section" >
            <div>
                <h1 class="title">날짜 , 시간 + 달력 표시</h1>
            </div>
        </div>
        <div class="section" >
            <div>
                <h1 class="title">오시는길 -> 주소 + 지도</h1>
            </div>
        </div>
        <div class="section" >
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
    </script>
</body>

</html>