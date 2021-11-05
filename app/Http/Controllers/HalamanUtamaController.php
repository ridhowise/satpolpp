<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Str;
use App\Models\Layanan;
use App\Models\DetailsLayanan;



class HalamanUtamaController extends Controller
{

    public function index()
    {
        // $Layanans = Layanan::get();
        $Layanans = Layanan::with('detailsLayanan')->paginate(6);
        $Layananz = Layanan::get();
        // $slug = Str::slug($Layanans->nama, '-');

        return view("home.index", compact('Layanans','Layananz'));
    }

    public function dashboard()
    {
        $Layanans = Layanan::with('detailsLayanan')->get();
     
        // dd($Layanans);

        // $Layanann = $Layanans->detailsLayanan->

        // $Layananz = $Layanans->nama;
        // $count = Layanan::with('detailsLayanan')->where('nama',$Layananz)->count();
        // dd($layananz);
        // $keamanans = Keamanan::all()->count();
        // $olahraga = Olahraga::all()->count();
        // $transport = Transport::all()->count();
        // $pemadam_kebakaran = Pemadam_kebakaran::all()->count();
        // $lingkungan_hidup = Lingkungan_hidup::all()->count();

        return view("layananDashboard.index",compact('Layanans'));
    }


    public function index_layanan($slug_kategori)
    {
        /// mengambil data terakhir dan pagination 5 list
        // $Kesehatans = DetailsLayanan::with("layanan")->get()->where('slug',$layanan);\
        // Layanan::with("detailsLayanan")->get();
        $Detailz = Layanan::with('detailsLayanan')->where('slug',$slug_kategori)->first();
        $Details = DetailsLayanan::with('layanan')->where('layanan_id',$Detailz->id)->paginate(6);
        $Layananz = Layanan::get();
        // foreach ($Details as $detail)
        // $slug = $Details->title;
        // dd($slug);

        // endforeach

        
        // $Kesehatans = Layanan::with("detailsLayanan")->where('slug',$layanan)->get();

        // dd($Details);
        /// mengirimkan variabel $Kesehatans ke halaman views Kesehatans/index.blade.php
        /// include dengan number index
        return view('Layanan.index', compact('Details','Detailz','Layananz'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function show_details_layanan($slug_kategori, $slug_detail)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('Kesehatans.show',$post->id) }}
        $Details = DetailsLayanan::with('layanan')->where('slug',$slug_detail)->first();
        // dd($Details);
        $Layananz = Layanan::get();
        // dd($Details);
        return view('Layanan.show',compact('Details','Layananz'));
    }
}
