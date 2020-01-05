<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\UserCreationValidation;
use App\Mail\ActivateUserEmailOnRegistration;
use App\Model\Activation;
use App\Model\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller {

    public function __construct() {
        $this->middleware('guest');
    }

    public function signup() {
        return view('auth.signup');
    }

    public function postSignup(UserCreationValidation $userCreationValidation) {
        $user = new User();
        $user->username = $userCreationValidation->get('username');
        $user->email = $userCreationValidation->get('email');
        $user->password = Hash::make($userCreationValidation->get('password'));
        $user->is_verified = false;
        $user->save();

        Mail::to($user->email)->send(new ActivateUserEmailOnRegistration($user));

        return redirect('/signin')->with('successMessage', 'registration Successful, please check our email!!');
    }

    public function verify(Request $request) {
        $code = $request->get('code');
        $activation = Activation::where('code', $code)->where('completed', false)->first();
        if ($activation != null) {
            $activation->completed = true;
            $activation->completed_at = \Carbon\Carbon::now();
            $activation->save();

            $user = User::find($activation->user_id);
            $user->is_verified = true;
            $user->save();

            return redirect('signin')->with('successMessage', 'Verification successful, please login');
        }

        return redirect('signin')->with('errorMessage', 'Invalid credentials!!, please try again');
    }

}
