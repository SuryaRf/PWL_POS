<?php

namespace App\Http\Controllers;

use App\DataTables\KategoriDataTable;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use App\Models\KategoriModel;


class KategoriController extends Controller
{

    public function create()
    {
        return view('kategori.create');
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'kategori_kode' => 'bail|required|unique:m_kategori,kategori_kode|max:20',
            'kategori_nama' => 'bail|required|max:100',

        ]);
        // The post is valid ...
        return redirect('/kategori');
    }
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }
    public function edit($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        return view('kategori.edit', compact('kategori'));
    }

    public function update(Request $request, $id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->update([
            'kategori_kode' => $request->kodeKategori,
            'kategori_nama' => $request->namaKategori,
        ]);

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kategori = KategoriModel::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }


    // $data = [
    // 'kategori_kode' => 'SNK',
    // 'kategori_nama' => 'Snack/Makanan Ringan',
    // 'created_at' => now()
    // ];
    // DB :: table('m_kategori')->insert($data);
    // return 'Insert data baru berhasil';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->update(['kategori_nama' => 'Camilan']);
    // return 'Update data berhasil. Jumlah data yang diupdate: ' . $row . ' baris';

    // $row = DB::table('m_kategori')->where('kategori_kode', 'SNK')->delete();
    // return 'Delete data berhasil. Jumlah data yang dihapus: ' . $row . ' baris';

    // $data = DB::table('m_kategori')->get();
    // return view('kategori', ['data' => $data]);
}
