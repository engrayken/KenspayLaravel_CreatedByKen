<?php

namespace App\Http\Controllers\admin\admin;

use App\Enums\SiteEnums;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Http\Requests\Admin\User\ProfileRequest;
use App\Interfaces\Admin\IAdminRepository;
use App\Mail\PHPMailler;
use App\Models\Admin\Admin;
use App\Models\Site\Epin;
use App\Models\Users\Reply_ticket;
use App\Models\Site\Setting;
use App\Models\Users\Notification;
use App\Models\Users\PUser;
use App\Models\Users\Ticket;
use App\Models\Users\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    private PHPMailler $MailService;
    private IAdminRepository $serviceReposervice;
    public function __construct(IAdminRepository $updateRepo, PHPMailler $MailServiceRepo) {
        $this->serviceReposervice = $updateRepo;
        $this->MailService = $MailServiceRepo;
    }

    public function dashboard()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $dabal = User::sum('dataBalance');
        $pinbal = User::sum('pinBalance');
        $vuser = User::all()->count();
        $Nuser = PUser::all()->count();
        $buser = User::where('status','-1')->count();
        $ticket = Ticket::where('status',0)->count();
        $cticket = Ticket::where('status',1)->count();
        $mticket = Ticket::whereNotNull('subject')->orderBy('created_at','desc')->first();
        $mtn =
        "Total: Quan".Epin::where(['net'=>'mtn'])->count()." N".Epin::where(['net'=>'mtn'])->sum('deno').
        "<br>MTN N100-".Epin::where(['net'=>'mtn','deno'=>100])->count()."quan-N".Epin::where(['net'=>'mtn','deno'=>100])->sum('deno')."<br>
       MTN N200-".Epin::where(['net'=>'mtn','deno'=>200])->count()."quan-N".Epin::where(['net'=>'mtn','deno'=>200])->sum('deno')."<br>
       MTN N400-".Epin::where(['net'=>'mtn','deno'=>400])->count()."quan-N".Epin::where(['net'=>'mtn','deno'=>400])->sum('deno')."<br>
       MTN N500-".Epin::where(['net'=>'mtn','deno'=>500])->count()."quan-N".Epin::where(['net'=>'mtn','deno'=>500])->sum('deno')."<br>
       MTN N1000-".Epin::where(['net'=>'mtn','deno'=>1000])->count()."quan-N".Epin::where(['net'=>'mtn','deno'=>1000])->sum('deno');

        $airtel =
        "Total: Quan".Epin::where(['net'=>'airtel'])->count()." N".Epin::where(['net'=>'airtel'])->sum('deno').
        "<br>AIRTEL 100-".Epin::where(['net'=>'airtel','deno'=>100])->count()."quan-N".Epin::where(['net'=>'airtel','deno'=>100])->sum('deno')."<br>
       AIRTEL 200-".Epin::where(['net'=>'airtel','deno'=>200])->count()."quan-N".Epin::where(['net'=>'airtel','deno'=>200])->sum('deno')."<br>
       AIRTEL 400-".Epin::where(['net'=>'airtel','deno'=>400])->count()."quan-N".Epin::where(['net'=>'airtel','deno'=>400])->sum('deno')."<br>
       AIRTEL 500-".Epin::where(['net'=>'airtel','deno'=>500])->count()."quan-N".Epin::where(['net'=>'airtel','deno'=>500])->sum('deno')."<br>
       AIRTEL 1000-".Epin::where(['net'=>'airtel','deno'=>1000])->count()."quan-N".Epin::where(['net'=>'airtel','deno'=>1000])->sum('deno');

           $glo =
        "Total: Quan".Epin::where(['net'=>'glo'])->count()." N".Epin::where(['net'=>'glo'])->sum('deno').
        "<br>GLO 100-".Epin::where(['net'=>'glo','deno'=>100])->count()."quan-N".Epin::where(['net'=>'glo','deno'=>100])->sum('deno')."<br>
       GLO 200-".Epin::where(['net'=>'glo','deno'=>200])->count()."quan-N".Epin::where(['net'=>'glo','deno'=>200])->sum('deno')."<br>
       GLO 400-".Epin::where(['net'=>'glo','deno'=>400])->count()."quan-N".Epin::where(['net'=>'glo','deno'=>400])->sum('deno')."<br>
       GLO 500-".Epin::where(['net'=>'glo','deno'=>500])->count()."quan-N".Epin::where(['net'=>'glo','deno'=>500])->sum('deno')."<br>
       GLO 1000-".Epin::where(['net'=>'glo','deno'=>1000])->count()."quan-N".Epin::where(['net'=>'glo','deno'=>1000])->sum('deno');

           $ninemobile =
        "Total: Quan".Epin::where(['net'=>'9mobile'])->count()." N".Epin::where(['net'=>'9mobile'])->sum('deno').
        "<br>9MOBILE 100-".Epin::where(['net'=>'9mobile','deno'=>100])->count()."quan-N".Epin::where(['net'=>'9mobile','deno'=>100])->sum('deno')."<br>
       9MOBILE 200-".Epin::where(['net'=>'9mobile','deno'=>200])->count()."quan-N".Epin::where(['net'=>'9mobile','deno'=>200])->sum('deno')."<br>
       9MOBILE 400-".Epin::where(['net'=>'9mobile','deno'=>400])->count()."quan-N".Epin::where(['net'=>'9mobile','deno'=>400])->sum('deno')."<br>
       9MOBILE 500-".Epin::where(['net'=>'9mobile','deno'=>500])->count()."quan-N".Epin::where(['net'=>'9mobile','deno'=>500])->sum('deno')."<br>
       9MOBILE 1000-".Epin::where(['net'=>'9mobile','deno'=>1000])->count()."quan-N".Epin::where(['net'=>'9mobile','deno'=>1000])->sum('deno');
       $tatalpins = "Total Pins: Quan".Epin::count()." N".Epin::sum('deno');



        return view('admin.dashboard',
        compact('title','admin','setting','buser','vuser','Nuser',
        'ticket','cticket','pinbal','dabal','mticket','mtn','airtel','glo','ninemobile','tatalpins'));

    }

        public function user()
    {
        $title = 'Users';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::all();
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.user', compact('user','title','admin','setting'));

    }
        public function manage_users($uid)
    {
        $title = 'User Details';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::findorFail($uid);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.manage_users', compact('user','title','admin','setting'));

    }

        public function uprofile(ProfileRequest $request, User $user)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
return $this->serviceReposervice->uprofile($request->validated(), $user);

    }

        public function deleteuprofile(User $user)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
       $delete = $user->delete($user);
       if(!$delete)
    return back()->with('failed','failed to delete user account');
    return back()->with('success','Account deleted Successful');

    }

    public function buser(User $user, $status)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
       $update = $user->update(["status"=>$status]);
       if($status==1)
       $status="Activated";
        if($status==-1)
       $status="Blocked";
       if(!$update)
    return back()->with('failed','User Account as been successfully '.$status);
    return back()->with('success','User Account as been successfully '.$status);

    }

        public function ucredit(Request $request, User $user)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
       $update = $user;
       if($request->balance=='pinBalance')
       {
       $update->pinBalance += $request->amount; }
           if($request->balance=='dataBalance')
       {
       $update->dataBalance += $request->amount; }
       $save = $update->save();

       if($save)
    return back()->with('success',$user->name.' Account as been successfully credited with '.$request->amount);

    }


        public function sendEmail(User $user)
    {
        $title = "send email";
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
       $email = $user->email;
        return view('admin.send_email', compact('email','setting','admin','title'));

    }


    public function sendEmailNow(Request $request)
    {
        $request->validate([
            "subject"=>"required",
            "email"=>"required|email",
            "message"=>"required",
        ]);
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $subject =$request->subject;
        $message =$request->message;
        $email =$request->email;
$makeway = view('mail.user', compact('subject','message'));
 $this->MailService->sendMail($subject, $makeway, $email);

    return back()->with('success',' Email as been sent successfully');

    }


    public function promotion_emails()
    {
        $title = 'promotion_emails';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::all();
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.newsletter_subscribers', compact('title','admin','setting','user'));

    }

        public function sendpemail(Request $request)
    {
        $request->validate([
            "subject"=>"required",
            "message"=>"required",
        ]);
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $subject =$request->subject;
        $message =$request->message;
       $email =$request->email;
$makeway = view('mail.user', compact('subject','message'));
 $this->MailService->sendMail($subject, $makeway, $setting->email, $email);

    return back()->with('success',' Email as been sent successfully');

    }



        public function ticket()
    {
        $title = 'Ticket';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $ticket = Ticket::all();
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.ticket', compact('ticket','title','admin','setting'));

    }

    public function chticket(Ticket $ticket)
    {
        $title = 'Check Ticket';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
     $ticket = $ticket;
        $df = $ticket->Reply_ticket()->get();
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.check_ticket', compact('ticket','df','title','admin','setting'));

    }

        public function rticket(REQUEST $request, Ticket $ticket)
    {
        $request->validate(["reply"=>"required","user"=>"required","ticket_id"=>"required"]);
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $ticket->ticket_id;
        $user = $ticket->User()->first();
        $reply = $request->reply;

    $ticket = $ticket->Reply_ticket()->create(["status"=>1,
        "reply"=>$request->reply,"ticket_id"=>$request->ticket_id,"reply_id"=>$admin->id
    ]);

    $subject ="Support Ticket";
    $makeway = view('mail.reply_ticket', compact('admin','user','reply'));
 $this->MailService->sendMail($subject, $makeway, $user->email);
        if(!$ticket)
        return back()->with('failed','Reply failed to sent');
        return back()->with('success',' Reply sent successfully');
    }

        public function cticket(Ticket $ticket)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $ticket = $ticket->update(["status"=>1]);
        return back()->with('success','ticket deleted successfully');

    }

        public function dticket(Ticket $ticket)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $ticket = $ticket->delete($ticket);
        return back()->with('success','ticket deleted successfully');

    }


        public function notification()
    {
        $title = 'notification';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $noti = Notification::orderBy('id','desc')->get();
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.notification', compact('title','admin','setting','noti'));

    }

        public function pnotification(Request $request)
    {
        $request->validate([
            "subject"=>"required",
            "comment"=>"required"
        ]);
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $user = User::all();
        foreach($user as $user)
        {
          $sent =  Notification::create([
                "userId"=>$user->id,
                "subject"=>$request->subject,
                "text"=>$request->comment,
            ]);
        }
        if(!$sent)
        return back()->with('failed','Notification not sent');
        return back()->with('success','Notification sent successfull');
    }

            public function dnotification($delete)
    {

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
          $delete =  Notification::where('created_at',$delete)->delete();
        if(!$delete)
        return back()->with('failed','Notification failed to delete');
        return back()->with('success','Notification deleted successfull');
    }

    public function settings()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.general_settings', compact('title','admin','setting'));

    }


    public function upsettings(SettingsRequest $request)
    {

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);

        $settings = Setting::findOrfail(SiteEnums::$settings);
        $update = $settings->update($request->validated());

      if(!$update)
        return back()->with('failed','Settings failed to update');
        return back()->with('success','Settings updated successfull');
    }

    // public function transfer()
    // {
    //     $title = 'Dashboard';
    //     $id = session()->get('adminid');
    //     $admin = Admin::findorFail($id);
    //     $setting = Setting::findOrfail(SiteEnums::$settings);

    //     return view('admin.dashboard', compact('title','admin','setting'));

    // }     public function messages()
    // {
    //     $title = 'Dashboard';
    //     $id = session()->get('adminid');
    //     $admin = Admin::findorFail($id);
    //     $setting = Setting::findOrfail(SiteEnums::$settings);

    //     return view('admin.dashboard', compact('title','admin','setting'));

    // }



        public function faq()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function page()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function auth()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function product()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function add_pins()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function transaction()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.dashboard', compact('title','admin','setting'));

    }



}
