<?php

namespace App\Http\Controllers;

use App\Coffee;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view("home", ["key" => "home"]);
        // return view ("home");
    }
    public function coffee()
    {
        $coffee = Coffee::orderBy('id', 'desc')->get();
        return view('coffee', ["key" => "coffee", "coffee" => $coffee]);
    }
    public function about()
    {
        return view("about", ["key" => "about"]);
    }
    public function faq()
    {
        return view("faq", ["key" => "faq"]);
    }
    public function tambah()
    {
        return view("tambah", ["key" => "coffee"]);
    }
    public function savecoffee(request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image',
        ]);

        $file_name = time() . '_' . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('images', $file_name, 'public');

        Coffee::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'kategori' => $request->kategori,
            'deskripsi' => $request->deskripsi,
            'gambar' => $path,
        ]);

        return redirect("coffee")->with('alert', 'Data Berhasil ditampilkan');
    }

    public function formupdate($id){
        $data = Coffee::find($id);
        return view('formupdate', ["key" => "coffee" , 'data'=>$data]);
    }
    public function saveedit($id, request $request)
    {
        $file_name = time() . '_' . $request->file('gambar')->getClientOriginalName();
        $path = $request->file('gambar')->storeAs('images', $file_name, 'public');

        $data = Coffee::find($id);
        $data->nama = $request->nama;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->kategori = $request->kategori;
        $data->deskripsi = $request->deskripsi;
        $data->gambar = $path;
        $data->save();

        return redirect("/coffee")->with('alert', 'nama' . $data->nama . 'Data Berhasil disimpan');
    }
    public function deletecoffee($id)
    {
        $coffee = Coffee::find($id);
        $coffee->delete();
        return redirect('coffee')->with('alertdelete', 'Data coffee berhasil dihapus.');
    }

    public function login()
    {
        return view("login");
    }
}
