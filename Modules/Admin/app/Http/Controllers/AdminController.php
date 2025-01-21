<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Modules\Admin\Http\Requests\AdminRequest;

class AdminController extends Controller
{
    /**
     * Show the login form for the admin.
     */
    public function show()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->intended(app('backend.prefix')); // Redirect to the admin dashboard or any other authenticated page
        }

        $encryptedEmail = Cookie::get(app('backend.prefix') . '-email', '');
        $encryptedPassword = Cookie::get(app('backend.prefix') . '-password', '');
        $remember = Cookie::get(app('backend.prefix') . '-remember', false);

        $email = $encryptedEmail ? Crypt::decrypt($encryptedEmail) : '';
        $password = $encryptedPassword ? Crypt::decrypt($encryptedPassword) : '';

        return view('admin::auth.login', compact('email', 'password', 'remember'));
    }

    /**
     * Handle the admin login process.
     */
    public function login(AdminRequest $request)
    {
        $remember = $request->filled('remember');
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if ($remember) {
                $this->setRememberMeCookie($request->email, $request->password);
            } else {
                $this->clearRememberMeCookie();
            }
            return redirect()->intended(app('backend.prefix'));
        } else {
            return redirect()->back()->withErrors(['login' => 'Invalid credentials. Please try again.']);
        }
    }

    /**
     * Set cookies to remember the admin's login credentials.
     */
    private function setRememberMeCookie($email, $password)
    {
        $encryptedEmail = encrypt($email);
        $encryptedPassword = encrypt($password);

        Cookie::queue(app('backend.prefix') . '-email', $encryptedEmail, 43200); // Expires in 30 days
        Cookie::queue(app('backend.prefix') . '-password', $encryptedPassword, 43200); // Expires in 30 days
        Cookie::queue(app('backend.prefix') . '-remember', true, 43200); // Expires in 30 days
    }

    /**
     * Clear the cookies storing the admin's login credentials.
     */
    private function clearRememberMeCookie()
    {
        Cookie::queue(Cookie::forget(app('backend.prefix') . '-email'));
        Cookie::queue(Cookie::forget(app('backend.prefix') . '-password'));
        Cookie::queue(Cookie::forget(app('backend.prefix') . '-remember'));
    }

    /**
     * Log out the admin.
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.show');
    }
}
