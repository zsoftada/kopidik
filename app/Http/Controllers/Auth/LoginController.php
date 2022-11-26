<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;

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

    public function logout(Request $request)
    {
        //Added
        $request->session()->forget('semester');

        //Original
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    protected function authenticated(Request $request, $user)
    {
        $request->session()->put('semester', $request['semester']);
        if($user->hasRole('super')){
            $this->redirectTo = 'admin/dashboard';
        }
    }

    public function showLoginForm()
    {
        return view('auth.login', ['semesters' => $this->generateSemester()]);
    }

    public function generateSemester()
    {
        $currentYear = date("Y");
        $semesters = [];

        for ($i=$currentYear+1; $i >= ($currentYear - 2); $i--) {
            $semesters[$i."2"] = $i."/".($i+1)." Semester Genap";
            $semesters[$i."1"] = $i."/".($i+1)." Semester Ganjil";
        }

        return $semesters;
    }
}
