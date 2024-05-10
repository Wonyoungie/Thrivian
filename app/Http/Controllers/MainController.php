<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    protected $data;

    public function __construct()
    {
        $user = Auth::user();

        $this->data = [
            'id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
            'avatar' => $user->avatar,
            'bio' => $user->bio,
            'role' => $user->role,
            'created_at' => $user->created_at,
        ];
    }

    public function setViewHome()
    {
        $this->data['title'] = 'Home';
        $this->data['admins'] = User::where('role', 1)->get();
        
        return view('main.home',$this->data);
    }

    public function setViewProfile()
    {
        $this->data['title'] = 'Profile';
        $this->data['admins'] = User::where('role', 1)->get();
        
        return view('main.profile',$this->data);
    }

    public function setViewSettings()
    {
        $this->data['title'] = 'Settings';
        $this->data['admins'] = User::where('role', 1)->get();
        
        return view('main.settings',$this->data);
    }

    
}
