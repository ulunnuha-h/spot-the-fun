<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\File;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:'.User::class],
            'photo' => 'file|image|mimes:jpeg,png,jpg,gif,svg',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $photo = $request->file('photo');

        if($photo == null){
            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'photo' => '',
                'password' => Hash::make($request->password),
            ]);
        } else {
            $tujuan_upload = 'images';
            $nama_file = time()."_".$photo->getClientOriginalName();
            // upload file
		    $photo->move($tujuan_upload, $nama_file);

            $user = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'photo' => $nama_file,
                'password' => Hash::make($request->password),
            ]);
        }

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
