<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function tambah()
    {
        return view('user_tambah');
    }
    public function ubah($id)
    {
        $user = Usermodel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function hapus($id)
    {
        $user = Usermodel::find($id);
        $user->delete();

        return redirect('/user');
    }
    public function index()
    {
        $user = Usermodel::with('level')->get(); 
        return view('user', ['data' => $user]);
    }
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'name' => $request->nama,
            'password' => Hash::make($request->password),
            'level_id' => $request->level_id
        ]);

        return redirect('/user');
    }

    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->name;
        $user->password = Hash::make('$request->password');
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user');
    }
    // class UserController extends Controller
    // {
    //     public function index()
    //     {
    //         $user = UserModel::create([
    //             'username' => 'manager11',
    //             'name' => 'Manager11',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2,

    //         ]);

    //         $user->username = 'manager12';

    //         $user->save();

    //         $user->wasChanged(); // true
    //         $user->wasChanged('username'); // true
    //         $user->wasChanged(['username', 'level_id']); // true
    //         $user->wasChanged('name'); // false
    //         dd($user->wasChanged(['name', 'username'])); // true
    //     }
    // class UserController extends Controller
    // {
    //       public function index()
    //     {
    //         $user = UserModel :: create([
    //             'username' => 'manager55',
    //             'name' => 'Manager55',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2,  
    //             ]);
    //             $user->username = 'manager56';           
    //             $user->isDirty(); // true
    //             $user->isDirty('username'); // true
    //             $user->isDirty('name'); // false
    //             $user->isDirty(['name', 'username']); // true        
    //             $user->isClean(); // false
    //             $user->isClean('username'); // false
    //             $user->isClean('name'); // true
    //             $user->isClean(['name', 'username']); // false
    //             $user->save();       
    //             $user->isDirty(); // false
    //             $user->isClean(); // true
    //             dd($user->isDirty());
    //     }
    // class UserController extends Controller
    // {
    //       public function index()
    //     {
    //         $user = UserModel::firstOrNew(
    //             [
    //                 'username' => 'manager33',
    //                 'name' => 'Manager Tiga Tiga',
    //                 'password' => Hash::make('12345'),
    //                 'level_id' => 2
    //             ],
    //         );
    //         $user->save();
    //         return view('user', ['data' => $user]);
    //     }
    // class UserController extends Controller
    // {
    //       public function index()
    //     {
    //         $user = UserModel::firstOrNew(
    //             [
    //                 'username' => 'manager',
    //                 'name' => 'Manager',
    //             ],
    //         );
    //         return view('user', ['data' => $user]);
    //     }
    // public function index()
    // {
    //     $user = UserModel::firstOrCreate(
    //         [
    //             'username' => 'manager22',
    //             'name' => 'Manager Dua Dua',
    //             'password' => Hash::make('12345'),
    //             'level_id' => 2
    //         ],
    //     );
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {
    //     $user = UserModel::firstOrCreate(
    //         [
    //             'username' => 'manager',
    //             'name' => 'Manager',

    //         ],
    //     );
    //     return view('user', ['data' => $user]);
    // }

    // public function index()
    // {
    //     $userCount = UserModel::where('level_id', 2)->count();
    //     return view('user', ['userCount' => $userCount]);
    // }

    // public function index()
    // {

    //     $user = UserModel::where('level_id', 2)->count();
    //     dd($user);
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::where('username', 'manager9')->firstOrFail();

    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::findOrFail(1);

    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::findOr(20, ['username', 'name'], function () {
    //         abort(404);
    //     });

    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::findOr(1, ['username', 'name'], function () {
    //         abort(404);
    //     });

    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::firstwhere('level_id', 1);
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::where('level_id', 1)->first();
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {

    //     $user = UserModel::find(1);
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {
    //     $data = [
    //         'level_id' => 2,
    //         'username' => 'manager_tiga',
    //         'name' => 'Manager 3',
    //         'password' => Hash::make('12345')
    //     ];
    //     UserModel::create($data);

    //     $user = UserModel::all();
    //     return view('user', ['data' => $user]);
    // }
    // public function index()
    // {
    //     // tambah data user dengan Eloquent Model
    //     $data = [
    //         'name' => 'Pelanggan Pertama',
    //     ];
    //     UserModel::where('username', 'customer-1')->update($data); // update data user

    //     // coba akses model UserModel
    //     $user = UserModel::all(); // ambil semua data dari tabel m_user
    //     return view('user', ['data' => $user]);
    // }
}

// // tambah data user dengan Eloquent Model
// $data = [
//     'username' => 'customer-1',
//     'name' => 'Pelanggan',
//     'password' => Hash::make('12345'),
//     'level_id' => 4
// ];

// UserModel::insert($data); // tambahkan data ke tabel m_user

// // coba akses model UserModel
// $user = UserModel::all(); // ambil semua data dari tabel m_user
// return view('user', ['data' => $user]);