<?php

namespace App\Http\Controllers\Website;

use App\Enums\AccountEnums;
use App\Enums\PageTitleEnums;
use App\Enums\SiteEnums;
use App\Http\Controllers\Controller;
use App\Models\Site\Setting;
use App\Models\Users\Notification;
use App\Models\Users\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
  public function LogedajaxPlatformNotification()
{
        $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
    $noti = Notification::where('userId',$ids)->where('status', '!=', 1)->get();

    $count = Notification::where('userId',$ids)->where('status', '!=', 1)->count();
    if($count>0)
    {
    foreach($noti as $item)
    {
        $display = ["data"=>[
        [
            "id"=>$item->id,"subject"=>$item->subject,"date"=>date('d M, Y, h:ia', strtotime($item->created_at)),"flag"=>"",
            "content"=>$item->text,"preamble"=>$item->subject,
        ]],
        "totalCount"=>$count
        ];
    }
}
else{
   $display = ["data"=>[],"totalCount"=>$count];
}
    return json_encode($display);

}

  public function ajaxPlatformNotification()
{
    $noti = Notification::where('options','public')->get();
    $count = Notification::where('options','public')->count();
    foreach($noti as $item)
    {
        $display = ["data"=>[
        [
            "id"=>$item->id,"subject"=>$item->subject,"date"=>date('d M, Y, h:ia', strtotime($item->created_at)),"flag"=>"",
            "content"=>$item->text,"preamble"=>$item->subject,
        ]],
        "totalCount"=>$count
        ];
    }
    return json_encode($display);

}
public function platformNotificationRead(Notification $id)
{
    $id->update(["status"=>1]);
    $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
    $noti = Notification::where('userId',$ids)->where('status', '!=', 1)->get();
    $count = Notification::where('userId',$ids)->where('status', '!=', 1)->count();
    if($count>0)
    $display = ["data"=>[],"totalCount"=>$count];
    return json_encode($display);
}

public function allplatformNotificationRead()
{
    $ids= session()->get(AccountEnums::$Auth['sessionLogin']);
    if($ids)
   $noti = Notification::select(['subject','text'])->distinct()->get();
   $noti = Notification::select(['subject','text'])->distinct()->where('options','public')->get();
    $title='all notification';
   $settings = Setting::findOrfail(SiteEnums::$settings);
    return view('home.notification',compact('title','settings','noti'));
}

}
