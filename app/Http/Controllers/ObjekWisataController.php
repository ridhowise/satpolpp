<?php
 
namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\ObjekWisata;
use App\Models\Layanan;

use Image;
  
class ObjekWisataController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('password.confirm')->only(['create']);
    //     $this->middleware('password.confirm')->only(['edit']);

    // }

    public function index()
    {
        $ObjekWisatas = ObjekWisata::with("layanan")->get();
       
        return view('layananDashboard.ObjekWisatas.index', compact('ObjekWisatas'));
           
    }

    public function create()
    {
        /// menampilkan halaman create
        $Layanans = Layanan::get();

        return view('layananDashboard.ObjekWisatas.create',compact('Layanans'));
    }
  
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'namaObjekWisata' => 'required',
            'detailsObjekWisata' => 'required',
            'image' => 'required',
        ]);
        $slug = Str::slug($request->namaObjekWisata, '-');
        $request['slug'] = $slug;
        

        if ($request->file('image')) {
            $image = $request->file('image');

            $file_name = time(). rand(1111, 9999) . '.' .$image->getClientOriginalExtension();

            $image->move('images',$file_name);
            Image::make('images/'.$file_name)->save('images/'.$file_name);
        } else {
            $file_name = null;
        }

     
        $data = new ObjekWisata;
		$data->namaObjekWisata = $request->namaObjekWisata;
		$data->slug = $slug;
        $data->detailsObjekWisata = $request->detailsObjekWisata;
        $data->layanan_id = $request->layanan_id;
        $data->image = $file_name;

        $data->save();

        return redirect()->route('objek-wisata.index')
                        ->with('success','ObjekWisata created successfully.');
    }
  
    public function show($id)
    {
        $objekWisata = ObjekWisata::find($id);

    
        return view('layananDashboard.ObjekWisatas.show',compact('objekWisata'));
    }
  
    public function edit( ObjekWisata $objekWisata)
    {
        return view('layananDashboard.ObjekWisatas.edit',compact('objekWisata'));
    }
  
    public function update($id)
    {
        
        $slug = Str::slug($request->namaObjekWisata, '-');
        $request['slugObjekWisata'] = $slug;
        
        $id = $request->input('id');
        $data = ObjekWisata::findorfail($id);
        

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

        $data->namaObjekWisata = $request->namaObjekWisata;
		$data->slugObjekWisata = $slug;
        $data->detailsObjekWisata = $request->detailsObjekWisata;
        $data->layanan_id = $request->layanan_id;
        $data->image = $file_name;
        $data->update();
        
        return redirect()->route('objek-wisata.index')->with('success','ObjekWisata updated successfully');
    }
  
    public function destroy(ObjekWisata $objekWisata)
    {
        /// melakukan hapus data berdasarkan parameter yang dikirimkan
        $objekWisata->delete();
  
        return redirect()->route('objek-wisata.index')
                        ->with('success','ObjekWisata deleted successfully');
    }
}
