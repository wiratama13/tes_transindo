<?php

namespace App\Http\Controllers;

use App\Models\ProfileMerchant;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class HomeController extends Controller
{
    public function index()
    {

    }

    public function profil()
    {
        return view('pages.sidebar');
    }

    public function profilView(Request $request)
    {
    
        $profile = ProfileMerchant::with('user')->where('user_id', auth()->user()->id)->first();
        return view('pages.profile.index' ,compact('profile'));
    }

  

    public function create()
    {
        $profile = ProfileMerchant::with('user')->where('user_id', auth()->user()->id)->first();
        return view('pages.profile.profile', compact('profile'));
    }

    public function store(Request $request)
    {
        
        $data = [
            'user_id'           => $request->user_id,
            'nama_perusahaan'   => $request->nama_perusahaan,
            'alamat'            => $request->alamat,
            'kontak'            => $request->kontak,
            'jenis_makanan'     => $request->jenis_makanan,
            'deskripsi'         => $request->deskripsi,
        ];
        // dd($request->all());
        $profile = ProfileMerchant::updateOrCreate(
            ['user_id' => $request->user_id], // Kondisi pencarian
           $data,
        );


        return redirect()->route('profil-view');
    }
}
