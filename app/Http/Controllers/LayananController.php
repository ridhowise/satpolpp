<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Str;
 
use Illuminate\Http\Request;
use App\Models\Layanan;
  
class LayananController extends Controller
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

        $Layanans = Layanan::orderBy('id','desc')->get();
        // dd($Layanans);
        /// mengirimkan variabel $Layanans ke halaman views Layanans/index.blade.php
        /// include dengan number index
        return view('layananDashboard.Layanans.index', compact('Layanans'));
            // ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    public function create()
    {
        /// menampilkan halaman create
        return view('layananDashboard.Layanans.create');
    }
  
    public function store(Request $request)
    {
        /// membuat validasi untuk title dan content wajib diisi
        $request->validate([
            'nama' => 'required|unique:layanan,nama',
            'icon' => 'required|unique:layanan,icon',
        ]);
        
        $slug = Str::slug($request->nama, '-');
        $request['slug'] = $slug;
        // dd($request->all());
        /// insert setiap request dari form ke dalam database via model
        /// jika menggunakan metode ini, maka nama field dan nama form harus sama
        Layanan::create($request->all());
        
         
        /// redirect jika sukses menyimpan data
        return redirect()->action([LayananController::class,'index'])
                        ->with('success','Layanan created successfully.');
    }
  
    public function show(Layanan $layanan)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        return view('layananDashboard.Layanans.show',compact('layanan'));
    }
  
    public function edit($id)
    {
        /// dengan menggunakan resource, kita bisa memanfaatkan model sebagai parameter
        /// berdasarkan id yang dipilih
        $layanan = Layanan::findorfail($id);

        return view('layananDashboard.Layanans.edit',compact('layanan'));
    }
  
    public function update(Request $request, $id)
    {
        $slug = Str::slug($request->nama, '-');
        $request['slug'] = $slug;
        
        // $id = $request->input('id');
        $data = Layanan::findorfail($id);
        
        /// membuat validasi untuk title dan content wajib diisi
        // $request->validate([
        //     'title' => 'required',
        //     'content' => 'required',
        // ]);
         
        /// mengubah data berdasarkan request dan parameter yang dikirimkan
        $data->nama = $request->nama;
		$data->slug = $slug;
        $data->icon = $request->icon;
		$data->color = $request->color;
        $data->update();
         
        /// setelah berhasil mengubah data
        return redirect()->action([LayananController::class,'index'])->with('success','Layanan updated successfully');
    }
  
    public function destroy($id)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $data = Layanan::findorfail($id);
        $data->delete();
  
        return redirect()->action([LayananController::class,'index'])
                        ->with('success','Layanan deleted successfully');
    }
}
