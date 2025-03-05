<x-app-layout>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <style>
        .submit_btn {
            width: 100px;
            height: 30px;
            background: rgb(100, 163, 100);
            border-radius: 10px;
            color: white;
            margin: 20px;
            font-size: 20px;

        }

        .btn_reset {
            background-color: rgb(156, 149, 149);
        }

        label {
            font-size: 30px;
            font-family: Lucida Console;
            color: rgb(82, 119, 135);
        }

    </style>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('後台登錄介面-編輯頁') }}
        </h2>
    </x-slot>
    <div class="py-12" style="background-color: rgb(93, 204, 178)">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="/update/{{$editDB->id}}" method="GET">
                @csrf
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200" style="padding: 20px;">
                        <label for="date_input" ">Edit Date:</label><br>
                        <input type="text" name="date" id="date_input" placeholder="請輸入活動日期"
                            style="width: 400px;height:40px;" value="{{$editDB->date}}" required>
                        <br><br>
                        <label for="title_input">Edit Title:</label><br>
                        <input type="text" name="title" id="title_input"
                            placeholder="請輸入活動標題"style="width: 400px;height:40px;"value="{{$editDB->title}}" required>
                        <br><br>
                     </div>
                    <br>
                    <div id="Description" style="padding: 20px;">
                        <label for="description_input">Description:🖋🖋🖋</label><br><br>
                        <textarea name="description" id="description" required></textarea>
                    </div>
                    {{-- <div id="Description" style="padding: 20px;">
                        <label for="description_input">Edit Description:🖋🖋🖋</label><br><br>
                        <input type="text" name="description" id="description_input"
                            placeholder="請輸入活動描述"style="width:100%;height:20vh;" value="{{$editDB->description}}">
                    </div> --}}
                </div>
                <button type="submit" class="submit_btn" id="addButton" >更新</button>
                {{-- <button type="check" class="submit_btn btn_reset">清除</button> --}}
            </form>

            <script>
                $(document).ready(function() {
                    $('#description').summernote({
                        height: 225,
                        placeholder: '請輸入活動描述',
                        inheritPlaceholder: true,
                    });
                    $('#description').summernote('code', '');
                });

                let addButton = document.querySelector('#addButton');
                addButton.addEventListener('click', checkUI);
                //檢查UI資訊
                 function checkUI()
                 {
                    //判斷圖片輸入值是否為空
                     if (document.getElementById("date_input").value == '')
                     {
                        alert("日期欄位不得為空");
                        // addButton.disabled=true;
                        return;
                     }
                     else
                     {
                        if (document.getElementById("title_input").value == '')
                        {
                            alert("名稱欄位不得為空");
                            // addButton.disabled=true;
                            return;
                        }
                        else
                        {
                            if (document.getElementById("description").value == '')
                            {
                                alert("描述欄位不得為空");
                                // addButton.disabled=true;
                                return;
                            }

                        }
                     }}



            </script>
        </div>
    </div>
</x-app-layout>
{{-- app.blade navigation.blade --}}
