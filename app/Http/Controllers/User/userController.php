<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class userController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function user_profile($id)
    {
        $user = user::find($id);
        if($user){
            return view('user.user_profile',compact('user'));
        }else{
            return view('user.profile');

        }
        
    }



    public function complete_register()
    {
        return view('user.complete-register');
    }

    public function edit_profile()
    {
        return view('user.edit_profile');
    }

    public function change_pass()
    {
        return view('user.change_pass');

    }

    public function completeRegister(Request $request)
    {
        $User = user::find(auth()->user()->id);

        $validator = Validator::make($request->all(), [
            'personal_photo' => 'required',
            'national_number_card' => 'required',
            'certificate_graduation' => 'required',
        ]);

            $ar_ex =  array('png', 'jpg', 'jpeg', 'svg');

            if ($request->hasFile('personal_photo')) {
                $file = $request->file('personal_photo');
                $extintion = $file->getClientOriginalExtension();

                if (in_array($extintion, $ar_ex)) {
                    $filename = time() . '.' . $extintion;
                    $file->move('assets/img/upload/', $filename);

                    $User->personal_photo = '/assets/img/upload/'.$filename;

                    $User->update();

                } else {
                    return redirect()->back();
                }
            }


            if ($request->hasFile('national_number_card')) {
                $file = $request->file('national_number_card');
                $extintion = $file->getClientOriginalExtension();

                if (in_array($extintion, $ar_ex)) {
                    $filename1 = time() . '.' . $extintion;
                    $file->move('assets/img/upload/', $filename1);

                    $User->national_number_card = '/assets/img/upload/'.$filename1;

                    $User->update();

                } else {
                    return redirect()->back();
                }
            }

            if ($request->hasFile('certificate_graduation')) {
                $file = $request->file('certificate_graduation');
                $extintion = $file->getClientOriginalExtension();

                if (in_array($extintion, $ar_ex)) {
                    $filename2 = time() . '.' . $extintion;
                    $file->move('assets/img/upload/', $filename2);

                    $User->certificate_graduation = '/assets/img/upload/'.$filename2;

                    $User->update();

                } else {
                    return redirect()->back();
                }
            }
            if ($request->hasFile('experience_certificates')) {
                $file = $request->file('experience_certificates');
                $extintion = $file->getClientOriginalExtension();

                if (in_array($extintion, $ar_ex)) {
                    $filename3 = time() . '.' . $extintion;
                    $file->move('assets/img/upload/', $filename3);

                    $User->experience_certificates = '/assets/img/upload/'.$filename3;

                    $User->update();

                } else {
                    return redirect()->back();
                }
            }


            return redirect('/profile');

    }
}
