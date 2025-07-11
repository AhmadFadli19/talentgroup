<?php

namespace App\Http\Controllers;

use App\Models\Slidebanner;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function index()
    {
        $user = User::where('usertype', 'admin')->get();
        return view('admin.index', compact('user'));
    }

    public function content()
    {
        return view('admin.content.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'string|max:255',
            'subtitle' => 'string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'button_text' => 'string|max:255',
            'url' => 'string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $path = $file->storeAs('images', $filename, 'public');
            $data['image'] = $path;
        }

        $slidebanner = Slidebanner::create($data);
        $slidebanner->save();

        return redirect()->route('admin-home');
    }

    public function kelolaakun()
    {
        $SemuaAkun = User::all();
        $TotalAkunAdmin = User::where('usertype', 'admin')->count();
        $TotalAkunUser = User::where('usertype', 'user')->count();
        $TotalAkunBank = User::where('usertype', 'developer')->count();

        return view('admin.KelolaAkun', compact('TotalAkunAdmin', 'TotalAkunUser', 'TotalAkunBank', 'SemuaAkun'));
    }

    function search(Request $request)
    {
        $SemuaAkun = User::all();
        $TotalAkunAdmin = User::where('usertype', 'admin')->count();
        $TotalAkunUser = User::where('usertype', 'user')->count();
        $TotalAkunBank = User::where('usertype', 'bank')->count();

        $search = $request->search;
        $data_user = User::where('name', 'like', "%$search%")
            ->get();

        return view('admin.KelolaAkun', [
            'SemuaAkun' => $data_user
        ], compact('data_user', 'TotalAkunAdmin', 'TotalAkunUser', 'TotalAkunBank', 'SemuaAkun'));
    }


    public function registar_proses(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'usertype' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'usertype' => $request->usertype,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('admin-kelolaakun');
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->usertype = $request->usertype;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin-kelolaakun');
    }

    public function akun_delete($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin-kelolaakun');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('/')->alert('success', 'Kamu berhasil logout');
    }

    public function registar()
    {
        return view('auth.registar');
    }

}
