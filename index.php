<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Page Scroll</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css">
</head>
<style>
    .titleDiv {
        position: relative;
        width: 100%;
        text-align: center;
    }
    .title{
        text-align: center; 
        position:absolute;
        left:50%;
        transform: translate( -50%, -50% );
        color:white;
    }
</style>

<body>
    <div id="fullpage">
        <div class="section" style="background: linear-gradient(0deg, #fff5ee, #deb887);">
            <div class="titleDiv">
                <h2 class="title" >청첩장 이올시다.</h2>
                <img src="./img/test.png" style="width: 100%;">
            </div>
        </div>
        <div class="section" style="background: linear-gradient(0deg, #F3F9A7,#ffc0cb );">
            <div>Section 2</div>
            <div>감사인사 + 연락하기 버튼 -> 레이어창으로 이동</div>
        </div>
        <div class="section" style="background: linear-gradient(0deg, #fff5ee,#D3CBB8 );">
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
            // Add more configurations as needed
        });
    </script>
</body>

</html>