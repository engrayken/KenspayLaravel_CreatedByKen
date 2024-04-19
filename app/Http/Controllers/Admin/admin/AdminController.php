<?php

namespace App\Http\Controllers\Admin\admin;

use App\Enums\SiteEnums;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SettingsRequest;
use App\Http\Requests\Admin\User\ProfileRequest;
use App\Interfaces\Admin\IAdminRepository;
use App\Mail\PHPMailler;
use App\Models\Admin\Admin;
use App\Models\Admin\Faq;
use App\Models\Product\Category;
use App\Models\Product\Product;
use App\Models\Product\SubProduct;
use App\Models\Site\Api;
use App\Models\Site\Cpage;
use App\Models\Site\Epin;
use App\Models\Site\EpinLimit;
use App\Models\Users\Reply_ticket;
use App\Models\Site\Setting;
use App\Models\Users\Auth;
use App\Models\Users\Notification;
use App\Models\Users\PUser;
use App\Models\Users\Ticket;
use App\Models\Users\Transaction;
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
            "option"=>"required",
            "subject"=>"required",
            "comment"=>"required"
        ]);
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $user = User::all();
        if($request->option!='public')
        {
        foreach($user as $user)
        {
          $sent =  Notification::create([
                "userId"=>$user->id,
                "subject"=>$request->subject,
                "text"=>$request->comment,
            ]);
        }
    } else {
                foreach($user as $user)
        {  $sent =  Notification::create([
                "userId"=>$user->id,
                "options"=>$request->option,
                "subject"=>$request->subject,
                "text"=>$request->comment,
            ]);
        }
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
        $title = 'Site Settings';
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
        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $faq = Faq::all();

        return view('admin.faq', compact('faq','title','admin','setting'));

    }


        public function checkfaq(Faq $faq)
    {
        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.check_faq', compact('faq','title','admin','setting'));

    }

           public function cfaq()
    {
        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

        return view('admin.add_faq', compact('title','admin','setting'));

    }
        public function addfaq(Request $request)
    {
        $request->validate(["question"=>"required",
        "answer"=>"required"]);
        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
          $update = Faq::create(["question"=>$request->question,"answer"=>$request->answer]);
            if(!$update)
        return back()->with('failed','Faq failed to add');
        return back()->with('success','Faq added successfull');
    }

        public function editedfaq(Request $request,Faq $faq)
    {
        $request->validate(["question"=>"required",
        "answer"=>"required"]);

        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $update =  $faq->update(["question"=>$request->question,"answer"=>$request->answer]);
      if(!$update)
        return back()->with('failed','Faq failed to update');
        return back()->with('success','Faq updated successfull');
    }
        public function deletedfaq(Faq $faq)
    {
        $title = 'Forther enquiries';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $deleted =  $faq->delete($faq);
        return back()->with('success','Faq deleted successfull');
    }


        public function page()
    {
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $df = Cpage::all();
        return view('admin.web_pages', compact('title','admin','setting','df'));

    }


        public function vadd_page()
    {
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        return view('admin.create_page', compact('title','admin','setting'));

    }

      public function add_page(Request $request)
    {
        $request->validate(["type"=>"required","message"=>"required"]);

        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $update = Cpage::create(["type"=>$request->type,"message"=>$request->message,"status"=>0]);
      if(!$update)
        return back()->with('failed','Faq failed to create');
        return back()->with('success','Faq Created successfull');

    }

        public function editepage(Cpage $page)
    {
        // return $page;
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        return view('admin.edit_page', compact('title','admin','setting','page'));

    }

    public function edit_page(Request $request, Cpage $page)
    {
        // return $page;
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $update = $page->update(["type"=>$request->type,"message"=>$request->message]);
      if(!$update)
        return back()->with('failed','Faq failed to update');
        return back()->with('success','Faq updated successfull');

    }

       public function page_status(Cpage $page, $status)
    {
        // return $page;
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $update = $page->update(["status"=>$status]);
      if(!$update)
        return back()->with('failed','Faq failed to update');
        return back()->with('success','Faq updated successfull');

    }


        public function delete_page(Cpage $page)
    {
        // return $page;
        $title = 'Web Page';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $update = $page->delete($page);
        return back()->with('success','Faq deleted successfull');
    }

        public function auth()
    {
        $title = 'Create Authorization Code';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $code = Auth::all();

        return view('admin.auth', compact('title','admin','setting','code'));

    }
        public function pauth(Request $request)
    {
        $request->validate(["email"=>"required|unique:users,email","phone"=>"required|unique:users,phone","prefix"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = Auth::create(["code"=>$request->prefix.time(),"email"=>$request->email,"phone"=>$request->phone]);
       if(!$inserted)
        return back()->with('failed','Faq failed to create authorization Code');
        return back()->with('success','authorization code has been created successful');

    }

        public function dauth(Auth $delete)
    {
        $delete->delete($delete);
        return back()->with('success','authorization code has been deleted successful');

    }
        public function category()
    {
        $title = 'Product Category';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $cat = Category::orderBy('created_at','desc')->get();
        $cate='';
        return view('admin.category', compact('title','admin','setting','cat','cate'));

    }

        public function pcategory(Request $request)
    {
        $request->validate(["category_name"=>"required|unique:categories,catName","category_title"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = Category::create(["catName"=>$request->category_name,"catTitle"=>$request->category_title]);
       if(!$inserted)
        return back()->with('failed','Faq failed to create authorization Code');
        return back()->with('success','category has been created successful');

    }

        public function epcategory(Request $request, Category $edited)
    {
        $request->validate(["category_name"=>"required","category_title"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = $edited->update(["catName"=>$request->category_name,"catTitle"=>$request->category_title]);
       if(!$inserted)
        return back()->with('failed','category couldnt be updated');
        return back()->with('success','category has been edited successful');

    }
    public function ecategory(Category $edited)
    {
        $title = 'Product Category';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $cate = $edited;
        $cat = Category::OrderBy('created_at','desc')->get();

        return view('admin.category', compact('title','admin','setting','cat','cate'));

    }
        public function dcategory(Category $delete)
    {
        $delete->delete($delete);
        return back()->with('success','category has been deleted successful');

    }

            public function product(Category $product)
    {
        $title = 'Product';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $products =$product;
        $product = Product::where(['prodCat_id'=>$product->catId,'prodCat_name'=>$product->catName])->get();
      $prodCatid = Product::where(['prodCat_id'=>$products->catId,'prodCat_name'=>$products->catName])->first();
        $prod ='';
        return view('admin.product', compact('title','admin','setting','product','prod','prodCatid'));

    }

        public function pproduct(Request $request, $catid, $catname)
    {
        $request->validate(["product_name"=>"required","product_title"=>"required","product_slogan"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = Product::create(["prodName"=>$request->product_name,"prodTitle"=>$request->product_title,"prodSlonga"=>$request->product_slogan,"prodCat_id"=>$catid,"prodCat_name"=>$catname,]);
       if(!$inserted)
        return back()->with('failed','Faq failed to create authorization Code');
        return back()->with('success','product has been created successful');

    }

                public function eproduct(Category $product,Product $prod)
    {
        $title = 'Product';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $products =$product;
        $product = Product::where(['prodCat_id'=>$product->catId,'prodCat_name'=>$product->catName])->get();
      $prodCatid = Product::where(['prodCat_id'=>$products->catId,'prodCat_name'=>$products->catName])->first();
        return view('admin.product', compact('title','admin','setting','product','prod','prodCatid'));

    }


        public function epproduct(Request $request, Product $edited)
    {
        // $request->validate(["category_name"=>"required","category_title"=>"required"]);
        $request->validate(["product_name"=>"required","product_title"=>"required","product_slogan"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = $edited->update(["prodName"=>$request->product_name,"prodTitle"=>$request->product_title,"prodSlogan"=>$request->product_slogan]);
       if(!$inserted)
        return back()->with('failed','product couldnt be updated');
        return back()->with('success','product has been edited successful');

    }
        public function dproduct(Product $delete)
    {
        $delete->delete($delete);
        return back()->with('success','product has been deleted successful');

    }


            public function subproduct(Product $product)
    {
        $title = 'Sub Product';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
         $productid =$product;
        $subproduct = SubProduct::where(['subProdMain_id'=>$product->prodId])->get();
        $prod ='';
        return view('admin.sub_product', compact('title','admin','setting','subproduct','prod','productid'));

    }

                public function esubproduct(Product $product,SubProduct $prod)
    {
        $title = 'Product';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $products =$product;
         $subproduct = SubProduct::where(['subProdMain_id'=>$products->prodId])->get();
        //  $product = Product::where(['prodCat_id'=>$product->catId,'prodCat_name'=>$product->catName])->get();
        return view('admin.sub_product', compact('title','admin','setting','subproduct','prod'));

    }

            public function epsubproduct(Request $request, SubProduct $edited)
    {
        // $request->validate(["category_name"=>"required","category_title"=>"required"]);
        $request->validate(["product_title"=>"required","product_amount"=>"required","product_variation"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = $edited->update(["subProdTitle"=>$request->product_title,"subProdAmount"=>$request->product_amount,"subProdAmount_variation"=>$request->product_variation]);
       if(!$inserted)
        return back()->with('failed','sub product couldnt be updated');
        return back()->with('success','sub product has been edited successful');

    }


        public function psubproduct(Request $request,Product $product,category $category)
    {
        $request->validate(["product_title"=>"required","product_amount"=>"required","product_variation"=>"required"]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $inserted = SubProduct::create(["subProdTitle"=>$request->product_title,"subProdAmount"=>$request->product_amount,"subProdAmount_variation"=>$request->product_variation,"subProdMain_id"=>$product->prodId,"subProdMain_name"=>$product->prodName,"subProdMainCat_id"=>$category->catId,"subProdMainCat_name"=>$category->catName,]);
       if(!$inserted)
        return back()->with('failed',' failed to create sub product');
        return back()->with('success','sub product has been created successful');

    }



        public function dsubproduct(SubProduct $delete)
    {
        $delete->delete($delete);
        return back()->with('success','product has been deleted successful');

    }


        public function add_pins()
    {
        $title = 'Add Pins';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $pins = Epin::all();
        return view('admin.add_pins', compact('title','admin','setting','pins'));

    }

        public function padd_pins(Request $request)
    {
        $request->validate([
            "net"=>"required",
            "deno"=>"required",
            "bundle"=>"required",
        ]);

        $title = 'Add Pins';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);

       $exp = explode('
        ', $request->bundle);

// Splitting the string into lines
$lines = explode("\r\n", $exp[0]);
        $pinAlp = SiteEnums::$pinAlp;
        $pinNum = SiteEnums::$pinNum;
// Loop through each line
foreach ($lines as $line) {
    // Explode each line by comma
    $xexp = explode(',', $line);

    // Generate the description
    $dial = '*311*' . str_replace($pinNum,$pinAlp,$xexp[1]) . '#';

    // Prepare the data for insertion
    $pins = [
        "net" => $request->net,
        "deno" => $request->deno,
        "seria" => $xexp[0],
        "pin" => str_replace($pinNum,$pinAlp,$xexp[1]),
        "descr" => $dial
    ];

    // Insert the record into the database
    Epin::create($pins);
}

       return back()->with('success',$request->net.' Pin has been Added successful');

    }

            public function dadd_pins(Epin $delete)
    {
        $delete->delete($delete);
        return back()->with('success','Pin has been deleted successful');


    }

    public function transaction()
    {
        $title = 'Transaction History';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $trans = Transaction::orderBy('id', 'desc')->get();

        return view('admin.transaction', compact('title','admin','setting','trans'));

    }


        public function api()
    {
        $title = 'Api Setup';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $api = Api::orderBy('id', 'desc')->get();
        $apiE ='';

        return view('admin.api', compact('title','admin','setting','api','apiE'));

    }


    public function apiP(Request $request)
    {
        $request->validate([
            "type"=>"required",
            "name"=>"required",
            "url"=>"required",
            "username"=>"required",
        ]);

        $title = 'Api Setup';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
         $apip = Api::create([
            "type"=>$request->type,
            "name"=>$request->name,
            "url"=>$request->url,
            "username"=>$request->username]);
          if(!$apip)
         return back()->with('failed','Api has couldnt be created');
         return back()->with('success','Api has been created successful');


    }
       public function apiE(Api $apid)
    {
        $title = 'Api Setup';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $api = Api::orderBy('id', 'desc')->get();
        $apiE = $apid;

        return view('admin.api', compact('title','admin','setting','api','apiE'));

    }

    public function apiEP(Request $request, Api $api)
    {
        $request->validate([
            "type"=>"required",
            "name"=>"required",
            "url"=>"required",
            "username"=>"required",
        ]);
// return  $api;
        $title = 'Api Setup';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
         $api->update([
            "type"=>$request->type,
            "name"=>$request->name,
            "url"=>$request->url,
            "username"=>$request->username]);
         return redirect('admin/2718/api')->with('success','Api has been updated successful');


    }


    public function apiD(Api $api)
    {
        $api->delete($api);
        return back()->with('success','Api has been deleted successful');
    }


    public function apiU(Api $api, $status)
    {
        $api->update(["status"=>$status]);
        return back()->with('success','Api has been updated successful');
    }


        public function epinLimit()
    {
        $title = 'Epin Limit';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $epin = EpinLimit::orderBy('id', 'desc')->get();
        $epinE ='';

        return view('admin.epinLimit', compact('title','admin','setting','epin','epinE'));

    }


    public function epinP(Request $request)
    {
        $request->validate([
            "net"=>"required",
            "deno"=>"required",
            "balance"=>"required",
            "limit"=>"required",
        ]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
         $apip = EpinLimit::create([
            "net"=>$request->net,
            "deno"=>$request->deno,
            "balance"=>$request->balance,
            "limit"=>$request->limit]);
          if(!$apip)
         return back()->with('failed','Api has couldnt be created');
         return back()->with('success','Api has been created successful');


    }
       public function epinE(EpinLimit $pinid)
    {
        $title = 'Edit Epin Limit';
        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
        $epin = EpinLimit::orderBy('id', 'desc')->get();
        $epinE = $pinid;

        return view('admin.epinLimit', compact('title','admin','setting','epin','epinE'));

    }

   public function epinEP(Request $request, EpinLimit $pinid)
    {
        $request->validate([
            "net"=>"required",
            "deno"=>"required",
            "balance"=>"required",
            "limit"=>"required",
        ]);

        $id = session()->get('adminid');
        $admin = Admin::findorFail($id);
        $setting = Setting::findOrfail(SiteEnums::$settings);
         $pinid->update([
            "net"=>$request->net,
            "deno"=>$request->deno,
            "balance"=>$request->balance,
            "limit"=>$request->limit]);
         return redirect('admin/2718/epinLimit')->with('success','Epin Limit has been updated successful');


    }

    public function epinD(EpinLimit $pinid)
    {
        $pinid->delete($pinid);
        return back()->with('success','Epin Limit has been deleted successful');
    }


}
