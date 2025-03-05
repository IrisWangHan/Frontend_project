<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\DB;



class ProjectController extends Controller
{

//  public function dashboardNews(){
//     return view('dashboardNews');
//  }

// 在model建立一筆資料 資料來源從input送出後request取出
    public function store(Request $request){
        Project::create(
         [
         'date' =>$request->date,
         'title'=>$request->title,
         'description'=>$request->description,]
         )
     ;return redirect('/dashboardNews');
      }

    //印出畫面到客戶端首頁
    public function print()
      {
        // 放入$project變數= project MODEL抓到全部資料
          $project=Project::get();
          return view('dashboardNews',compact('project'));
      }



    public function printclient()
      {
          $project=Project::get();
          return view('index',compact('project'));
      }


    //   清除該資料
    public function clear($target)
        {
        DB::table('projects')->where('id',$target)->delete();
       return redirect('/dashboardNews');
    }
    //   編輯資料
    public function edit($id){
        $editDB=DB::table('projects')->find($id);
        return view('editNews',compact('editDB'));
    }
    //   更新資料
    public function update($id,Request $request){
         DB::table('projects')->where('id',$id)->update([
        'date' =>$request->date,
         'title'=>$request->title,
         'description'=>$request->description,
         ]);
          return redirect('dashboardNews');
        }
// 複製新的dashboardNews 建立路由


    }

    //   view(不是放路徑 / )
