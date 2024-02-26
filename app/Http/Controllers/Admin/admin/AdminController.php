<?php

namespace App\Http\Controllers\admin\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\ProfileRequest;
use App\Interfaces\Admin\IAdminRepository;
use App\Mail\PHPMailler;
use App\Models\Admin\Admin;
use App\Models\Site\Setting;
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
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function user()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::all();
        $setting = Setting::findorFail('1');

        return view('admin.user', compact('user','title','admin','setting'));

    }
        public function manage_users($uid)
    {
        $title = 'User Details';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::findorFail($uid);
        $setting = Setting::findorFail('1');

        return view('admin.manage_users', compact('user','title','admin','setting'));

    }

        public function uprofile(ProfileRequest $request, User $user)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');
return $this->serviceReposervice->uprofile($request->validated(), $user);

    }

        public function deleteuprofile(User $user)
    {
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');
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
        $setting = Setting::findorFail('1');
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

        public function transfer()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function ticket()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function promotion_emails()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $user = User::all();
        $setting = Setting::findorFail('1');

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
        $subject =$request->subject;
        $message =$request->message;
       return $email =$request->email;
$makeway = view('mail.user', compact('subject','message'));
 $this->MailService->sendMail($subject, $makeway, $admin->email, $email);

    return back()->with('success',' Email as been sent successfully');

    }

        public function messages()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function reviews()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function settings()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function faq()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function page()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function auth()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function product()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function add_pins()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }

        public function transaction()
    {
        $title = 'Dashboard';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findorFail('1');

        return view('admin.dashboard', compact('title','admin','setting'));

    }



}
