<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>invitation</title>
    <link rel="stylesheet" href="./invitation.css">
</head>

<body>

    <main>

        <div class="schedule scroll-page" id="page-4">
            <div id="invitext">
                <img src="./invitationPHOTO/SVG_side_invitation.svg" style="width: 38%;" alt="側欄標題invitation">
            </div>

            <div id="information">
                <!-- 日歷日歷圖片 -->
                <div class="dateimg">
                    <img src="./invitationPHOTO/SVG-日曆.svg" style="width:100%;height:100%" alt="日曆圖片">
                </div>
                <!-- 活動消息呈現 -->

                <div class="datetext">
                    <span id="newstext">NEWS</span>
                    {{-- <button class=" btn-top"><a href="/clientold">最舊置頂</a></button>
                    <button class=" btn-top"><a href="/clientnew">最新置頂</a></button> --}}
                    <ul id="datetext_ul">
                        @foreach ($project as $index => $item)
                        <li>
                            <span class="date"> 📅{{ $item->date }}</span>
                            <span class="title">{{ $item->title }}</span>
                            <br>
                            <span class="description">{!!$item->description!!}</span>
                        <hr>
                        </li>
                         @endforeach
                    </ul>
                </div>
            </div>

            <!--車子與線條圖片 -->
            <div id="iconCar">
                <img src="./invitationPHOTO/SVG_draw_car.svg" style="width:100%;" alt="灰棕色敞篷跑車圖片">
            </div>
            <div id="lineimg">
                <img src="./invitationPHOTO/SVG_line8.svg" alt="背景線條" style="width:100%;">
            </div>

            <!-- 藍色信箱區塊 -->
            <div id="mailtext">
                <img src="./invitationPHOTO/活動邀約.svg" alt="圖片檔的文字是活動邀約" width="150px" class="img_active">
                <p>西屯純愛組</p>
                <a href="mailto:highlocandhenry@gmail.com" target="_blank">highlocandhenry@gmail.com</a>
                <img src="./invitationPHOTO/SVG_draw_music.svg" style="width:180px;" alt="背景文字MUSIC" class="img_music">
            </div>

        </div>
    </main>
    <footer class="footer-box">
        <div class="logo">
            <img src="./invitationPHOTO/SVG_logo_old.svg" alt="西屯純愛組LOGO圖片">
        </div>
        <div class="link">
            <a href="https://m.facebook.com/HIGHLOCANDHENRY/" target="_blank">
                <img src="./invitationPHOTO/icon_fb.svg" alt="FB連結的ICON" height="38px">
            </a>
            <a href="https://www.instagram.com/highlocandhenry/" target="_blank">
                <img src="./invitationPHOTO/icon_ig (1).svg" alt="IG連結的ICON" height="29px">
            </a>
            <a href="https://www.youtube.com/channel/UCp0ogU9BUkTSVLwyv-44T2w" target="_blank">
                <img src="./invitationPHOTO/icon_yt.svg" alt="YOUTUBE連結的ICON" height="38px">
            </a>
            <a href="https://www.fireonshop.com/" target="_blank">
                <img src="./invitationPHOTO/icon_cart (1).svg" alt="實體專輯的購物車連結ICON" height="31px">
            </a>
        </div>
        <div class="text">
            <div>本網站內所有資料之著作權、所有權與智慧財產權，包括文字、圖片、聲音、影像、軟體、編曲…等，均為西屯純愛組原創作品或依法向原作者或代理人機構取得合法重製授權。</div>
            <div id="foot">©西屯純愛組</div>
        </div>
    </footer>





</body>

</html>
