<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>김문수 & 조자영 결혼합니다 ♥</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css">
</head>
<style>
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
    }

    .weekday {
        /* font: 2em sans-serif; */
        color: white;
        margin: 0;
    }

    .imgwrap {
        overflow: hidden;
    }

    .sec1img {
        width: 100%;
    }
</style>

<body>

    <div id="fullpage">
        <audio autoplay id="bgm">
            <source src="./sound/test.mp3" type="audio/mpeg">
        </audio>
        <div class="section" style="background: linear-gradient(0deg, #fff5ee, #deb887);">
            <div class="titleDiv">
                <h1 class="title date">2024 / 12 / 08</h1>
                <h2 class="weekday">SUNDAY</h2>
                <div class="imgwrap">
                    <img class="sec1img" src="./img/test.png">
                </div>
            </div>
        </div>
        <div class="section" style="background: linear-gradient(0deg, #deb887,#fff5ee );">
            <div>Section 2</div>
            <div>감사인사 + 연락하기 버튼 -> 레이어창으로 이동</div>
        </div>
        <div class="section" style="background: linear-gradient(0deg, #fff5ee, #deb887);">
            <div>Section 3</div>
            <div>갤러리</div>
        </div>
        <div class="section" style="background-color: blue;">
            <div>Section 4</div>
            <div>날짜 , 시간 + 달력 표시</div>
        </div>
        <div class="section" style="background-color: skyblue;">
            <div>Section 5</div>
            <div>오시는길 -> 주소 + 지도 </div>
        </div>
        <div class="section" style="background-color: grey;">
            <div>Section 6</div>
            <div>방명록 </div>
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