<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class AdminProdukController extends Controller
{


    function index()
    {
        $data['list_produk'] = Produk::all();
        return view('Produk.index', $data);
    }

    function create()
    {
        return view('Produk.create');
    }

    function store()
    {
        $produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('AdminProduk')->with('success', 'Data Berhasil Di Tambahkan');
    }

    function show(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('Produk.show', $data);
    }

    function edit(Produk $produk)
    {
        $data['produk'] = $produk;
        return view('Produk.edit', $data);
    }

    function update(Produk $produk)
    {
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('AdminProduk')->with('success', 'Data Berhasil Di Edit');
    }

    function destroy(Produk $produk)
    {
        $produk->delete();
        return redirect('AdminProduk')->with('danger', 'Data Berhasil Di Hapus');
    }
    function filter()
    {
        $nama = request('nama');
        $stok = explode(",", request('stok'));
        $harga_min['harga_min'] = request('harga_min');
        $harga_max['harga_max']  = request('harga_max');
        //$data['list_adminproduk'] = Produk::where('nama', 'like', "%$nama%")->get();
        //$data['list_produk'] = Produk::whereIn('stok',$stok)->get();
        //$data['list_produk'] = Produk::whereBetween('nama', $harga_min, $harga_max)->get();
        //$data['list_produk'] = Produk::where('stok','<>',$stok)->get();
        //$data['list_produk'] = Produk::whereNotIn('stok',$stok)->get();
        //$data['list_produk'] = Produk::whereNotBetween('nama', $harga_min, $harga_max)->get();
        //$data['list_produk'] = Produk::whereNotNull('stok')->get();
        //$data['list_produk'] = Produk::whereDate('created_at', ['2022-09-07', '2022-09-09'])->get();
        $data['list_produk'] = Produk::whereNotBetween('nama', $harga_min, $harga_max)->whereNotIn('stok', [750])->whereYear('created_at', '2022')->get();
        $data['nama'] = $nama;
        $data['stok'] = request('stok');
        return view('Produk.index', $data);
    }
}
