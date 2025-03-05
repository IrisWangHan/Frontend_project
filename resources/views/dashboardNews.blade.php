<x-app-layout>

    <style>
        .submit_btn {
            width: 100px;
            height: 30px;
            background: rgb(100, 163, 100);
            border-radius: 5px;
            color: white;
            position: absolute;
            font-size: 16px;


        }

        .btn_edit {
            right: 120px;
        }

        .btn_reset {
            background-color: rgb(156, 149, 149);
            right: 0;
        }

        .information_text {
            font-size: 20px;
            padding: 10px;
            font-family: 微軟正黑體
        }

        .information_button {
            margin-bottom: 20px;
            position: relative;
        }

        span {
            color: rgb(194, 141, 85);
            font-weight: bold;
        }

        p {
            font-size: 16px;
            padding-left: 10px;
        }

        #select-title {
            background-color: rgb(208, 203, 203)
        }

        .btn-top {
            width: 100px;
            height: 40px;
            background-color: rgb(211, 165, 165);
            border-radius: 10px;
            margin-left: 20px;

        }
 .btn-top a{font-size: 20px;}
        .btn-top:hover {
            background-color: rgb(225, 50, 50);
            color: white;
        }
    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('後台登錄介面') }}
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: rgb(93, 149, 204)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="" method="GET">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{-- <label for="contactChoice1">前台排序</label> --}}

                        {{-- <button class="btn-top1 btn-top">
                            <a href="/clientold" target="_blank">前台OLD
                                <input type="button" onclick="window.open('/dashboardNews')">
                            </a>
                        </button>
                        <button class="btn-top2 btn-top">
                            <a href="/clientnew" target="_blank">前台NEW
                                <input type="button" onclick="window.open('/dashboardNews')">
                            </a>
                        </button> --}}
                        {{-- <p style="font-size:16px;">資料排序</p> --}}
                        <button class="btn-top1 btn-top"><a href="/old">OLD</a></button>
                        <button class="btn-top2 btn-top"><a href="/new">NEW</a></button>
                        <ul>
                            @foreach ($project as $index => $item)
                                <li>
                                    <div class="information_text" style="position: relative;">
                                        <h3
                                            style="background-color: rgb(93, 149, 204); width:250px;border-radius:10px;color:white">
                                            {{ $index + 1 }}_🖋
                                            資料ID:{{ $item->id }}
                                        </h3>

                                        <div style="padding-left:10px; ">
                                            <span>日期:</span>
                                            <p id="information_date">{{ $item->date }}</p>
                                            <span>標題:</span>
                                            <p id="information_title"> {{ $item->title }}</p>
                                            <span> 描述:</span>
                                            <p id="information_description">{!! $item->description !!}</p>
                                        </div>

                                        <div class="information_button">
                                            <button class="submit_btn btn_edit">
                                                <a href="/edit/{{ $item->id }}">編輯</a>
                                            </button>
                                            <button type="reset" class="submit_btn btn_reset">
                                                <a href="/clear/{{ $item->id }}">刪除</a>
                                            </button>
                                        </div>
                                        <br>
                                        <hr>
                                    </div>

                                </li>
                            @endforeach

                        </ul>

                    </div>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
{{-- app.blade navigation.blade --}}

{{-- <script>
    let btn_top1 = document.querySelector('.btn-top1');
    let btn_top2 = document.querySelector('.btn-top2');

    btn_top1.addEventListener('click', function () {
    btn_top2.classList.remove('btn-act');
    btn_top1.classList.toggle('btn-act') })
    btn_top2.addEventListener('click', function () {
    btn_top1.classList.remove('btn-act');
    btn_top2.classList.toggle('btn-act') })
</script> --}}
