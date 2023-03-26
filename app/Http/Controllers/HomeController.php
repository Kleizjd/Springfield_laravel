<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            // 'photo'=> 'required|image|max:2048',
            'name' => 'required|min:4|string|max:255',
            'email' => 'required|email|string|max:255',
        ]);
        // $user = new User();
        $user = Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];      

        // UPLOAD IMAGES
        $file = $request->file('photo');
        if (!empty($file)) {
            $nombre =  time() . "_" . $file->getClientOriginalName();
            $imagenes = $file->storeAs('public/uploads', $nombre);
            $url = Storage::url($imagenes);
            File::create(['url' => $url]);
            $user->photo = $url;
        }
        $user->save();
        return back()->with('message', 'Profile Updated');
    }

    public function passwordUpdate(Request $request)
    {   dd($request);
        $request->validate([
            'old_password' => 'required|confirmed|min:8|max:32',
            'new_password' => 'required|confirmed|min:8|max:32',
            'password_confirmed' => 'required|confirmed|min:8|max:32'
        ]);
        #Match The Old Password
        if (!Hash::check($request->old_password, auth()->user()->password)) {
            return back()->with("error", "Old Password Doesn't match!");
        }
        if($request->new_password === $request->password_confirm){
             #Update the new Password
            User::whereId(auth()->user()->id)->update(['password' => Hash::make($request->new_password) ]);
        }
        return back()->with("status", "Password changed successfully!");
    }
}
