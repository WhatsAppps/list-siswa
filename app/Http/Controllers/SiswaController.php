<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\StoreSiswaRequest;
use App\Http\Requests\UpdateSiswaRequest;
use Illuminate\Support\Str;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;
class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::all();
        $images = \File::allFiles(public_path('images'));
        return response(view('layouts.app')->with('siswa', $siswa));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response(view('list.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSiswaRequest $request): RedirectResponse
    { 

        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $input['slug'] = Str::slug($request->nama, '-');
        }
    
        Siswa::create($input);
     
        return redirect('/siswa')->with('success',);
    
}
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $siswa = Siswa::findOrFail($id);
        return response(view('list.detail')->with('siswa', $siswa));
    }
    public function edit(string $slug): Response
    {
        $siswa = Siswa::findOrFail($slug);

        return response(view('list.edit')->with('siswa', $siswa));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function update(UpdateSiswaRequest $request, string $id): RedirectResponse
    {
        $siswa = Siswa::findOrFail($id);

        if ($siswa->update($request->validated())) {

            $input = $request->all();
      
            if ($image = $request->file('image')) {
                $destinationPath = 'images/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }else{
                unset($input['image']);
            }
              
            $siswa->update($input);
        
            return redirect('/siswa')->with('success');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $siswa = Siswa::findOrFail($id);

        if ($siswa->delete()) {
            return redirect('/siswa')->with('success', 'Terubah!');
        }



        return redirect('/siswa')->with('error', 'Maaf, tidak dapat menghapus ini!');
    }
    public function register()
    {
        return view('list.register');
    }
 
    public function registerPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->save();
 
        return response(view('list.login ')->with('success', 'Register successfully'));
    }
 
    public function login()
    {
        return view('list.login');
    }
 
    public function loginPost(Request $request)
    {
        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
 
        if (Auth::attempt($credetials)) {
            return redirect('/siswa')->with('success', 'Login Success');
        }
 
        return back()->with('error', 'Error Email or Password');
    }
 
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}