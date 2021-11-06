<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\DetailsLayanan;
use App\Models\Layanan;
use Image;
  
class DetailsLayananController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('password.confirm')->only(['create']);
    //     // $this->middleware('password.confirm')->only(['show']);
    //     $this->middleware('password.confirm')->only(['edit']);

    // }

    public function index()
    {
        /// mengambil data terakhir dan pagination 5 list
        $DetailsLayanans = DetailsLayanan::with("layanan")->get();
        // $Layanans = Layanan::get();
        // dd($Layanans);
        /// mengirimkan variabel $DetailsLayanans ke halaman views DetailsLayanans/index.blade.php
        /// include dengan number index
        return view('layananDashboard.DetailsLayanans.index', compact('DetailsLayanans'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        /// menampilkan halaman create
        $Layanans = Layanan::get();

        return view('layananDashboard.DetailsLayanans.create',compact('Layanans'));
    }
  
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'details' => 'required',
            'image' => 'required',
        ]);
        $slug = Str::slug($request->title, '-');
        $request['slug'] = $slug;
        

        if ($request->file('image')) {
            $image = $request->file('image');

            $file_name = time(). rand(1111, 9999) . '.' .$image->getClientOriginalExtension();

            // $save_Path = 'images/'.$file_name;
            //$save_Path = public_path('images/'.$file_name);

            //Image::make($image->getRealPath())->resize(300, 236)->save($save_Path);
            $image->move('images',$file_name);
            Image::make('images/'.$file_name)->save('images/'.$file_name);
        } else {
            $file_name = null;
        }

     
        $data = new DetailsLayanan;
		$data->title = $request->title;
		$data->slug = $slug;
        $data->subtitle = $request->subtitle;
		$data->details = $request->details;
        $data->layanan_id = $request->layanan_id;
        $data->image = $file_name;

        $data->save();

        //request()->pic->move(public_path('assets/images'), $imageName);
        //return redirect('akuntansi');
        return redirect()->action([DetailsLayananController::class,'index'])
                        ->with('success','DetailsLayanan created successfully.');
    }
  
    public function show(DetailsLayanan $detailsLayanan)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('DetailsLayanans.show',$post->id) }}
        // dd($detailsLayanan);
        return view('layananDashboard.DetailsLayanans.show',compact('detailsLayanan'));
    }
  
    public function edit($id)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        /// href="{{ route('DetailsLayanans.edit',$post->id) }}
        $detailsLayanan = DetailsLayanan::findorfail($id);

        return view('layananDashboard.DetailsLayanans.edit',compact('detailsLayanan'));
    }
  
    public function update(Request $request,$id)
    {
        
        $slug = Str::slug($request->title, '-');
        $request['slug'] = $slug;
        
        // $id = $request->input('id');
        $data = DetailsLayanan::findorfail($id);
        

        if ($request->file('image')){

            $image = $request->file("image");

            $file_name = time(). rand(1111, 9999) . '.' .$image->getClientOriginalExtension();

            $image->move('images',$file_name);
            Image::make('images/'.$file_name)->save('images/'.$file_name);

        }
        elseif($data->image != null){
            $file_name = $request->input('image');
        }
        else{
            $file_name = null;
        }

        $data->title = $request->title;
		$data->slug = $slug;
        $data->subtitle = $request->subtitle;
		$data->details = $request->details;
        $data->layanan_id = $request->layanan_id;
        $data->image = $file_name;
        $data->update();
        
        /// membuat validasi untuk title dan content wajib diisi
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        // $DetailsLayanan->update($request->all());
        
        /// setelah berhasil mengubah data
        return redirect()->action([DetailsLayananController::class,'index'])->with('success','DetailsLayanan updated successfully');
    }
  
    public function destroy($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $data = DetailsLayanan::findorfail($id);
        $data->delete();
  
        return redirect()->action([DetailsLayananController::class,'index'])
                        ->with('success','DetailsLayanan deleted successfully');
    }
}
