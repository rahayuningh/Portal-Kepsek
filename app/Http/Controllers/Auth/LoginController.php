<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Tendik;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getUserData(Request $request)
    {
        $broker_token = "ecfc4805-3d68-4431-aeb8-a632bcf34b45";
        // get user data from SSO using inputed email
        $client = new Client();
        $res = $client->request('GET', 'https://sso.kato.studio/api/auth', [
            'query' => ['q' => json_encode(array('email' => $request->email))],
            'headers' => [
                'Authorization' => 'Bearer ' . $broker_token
            ]
        ]);

        $body = $res->getBody()->getContents();
        $decodedBody = json_decode($body, true);

        // return user data
        return $decodedBody['data'][0];
    }

    // protected function validateLogin(Request $request)
    // {
    //     $request->validate([
    //         $this->username() => 'required|string|email',
    //     ]);
    // }

    // public function login(Request $request)
    // {
    //     // validate login data
    //     $this->validateLogin($request);

    //     //login user in SSO
    //     $client = new Client();
    //     $res = $client->request('POST', 'https://sso.kato.studio/sso/login', [
    //         'form_params' => [
    //             'email' => $request->email,
    //             'password' => $request->password
    //         ]
    //     ]);

    //     $body = $res->getBody()->getContents();
    //     $decodedBody = json_decode($body, true);

    //     // if SSO login success
    //     if (isset($decodedBody['success'])) {
    //         // get user data from SSO
    //         $userData = $this->getUserData($request);

    //         // check user data in DB
    //         $user = User::firstOrCreate(
    //             ['sso_user_id' => $userData['_id']],
    //             [
    //                 'name' => $userData['name'],
    //                 'email' => $userData['email'],
    //                 'role' => $userData['role']
    //             ]
    //         );

    //         // login user to IMoSy
    //         if (Auth::loginUsingId($user->id)) {
    //             // if Authentication passed redirect to dashboard
    //             // or previous page the user try to access
    //             return redirect()->intended('dashboard');
    //         } else {
    //             throw ValidationException::withMessages([
    //                 $this->username() => [trans('auth.failed')],
    //             ]);
    //         }
    //     } else { // if not success
    //         // then check user data in DB
    //         // if data exist in DB then delete it
    //         $user = User::where('email', $request->email)->first();
    //         if (isset($user)) {
    //             if ($user->count() > 0) {
    //                 $user->delete();
    //             }
    //         }

    //         // throw failed login response
    //         throw ValidationException::withMessages([
    //             $this->username() => [trans('auth.failed')],
    //         ]);
    //     }
    // }
}
