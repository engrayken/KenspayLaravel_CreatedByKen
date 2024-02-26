<?php
namespace App\Repositories\Admin;

use App\Enums\AdminEnums;
use App\Interfaces\Admin\IAdminRepository;
use App\Models\Admin\Admin;
use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;

class AdminRepository implements IAdminRepository
{
public function login($request)
{
    $admin = Admin::where('email',$request->email)->first();
    if(!$admin)
    return back()->with('failed','email or password are invalid');
    if(!Hash::check($request->password, $admin->password))
    return back()->with('failed','email or password are invalid');
    // return Hash::make($request->password);
        Session()->put('adminid',$admin->id);
    return redirect('admin/2718/dashboard');
}

public function uprofile($request, User $user)
{
    $update = $user->update($request);
    if(!$update)
    return back()->with('failed','failed to update user account');
    return back()->with('success','Account updated Successful');

}

}
