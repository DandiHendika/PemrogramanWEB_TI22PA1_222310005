<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Dandi Hendika',
            'gender' => 'Laki - laki',
            'umur' => 19,
            'alamat' => 'Bogor',
            'email' => '222310005@student.ibik.ac.id',
            'phone' => '+62 123 4567 890',
            'bio' => 'Web dan Mobile Developer'
        ];

        return view('profile', compact('profile'));
    }
}
