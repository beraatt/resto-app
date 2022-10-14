<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;
use App\Http\Controllers\MenuStoreRequest;
use Illuminate\Support\Str;


class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /*  $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            ]);

            if($request->hasFile('file')){
                $request->validate([
                    'image' => 'mimes:jpg,jpeg,bmp,png'
                ]);
                $request->file->store('image','\public\uploads');
                $menu = new Menu([
                    'name' => $request->get('name'),
                    'description' => $request->get('description'),
                    'image' => $request->get('image'),
                    'price' => $request->get('price'),
                ]);
                $menu->save();
            }
            return redirect()->back()->with('message', 'IT WORKS!'); */








        Menu::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->image,
            'price' => $request->price,
        ]);
         return redirect()->back()->with('message', 'IT WORKS!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
     /*    if($request->hasFile(('image'))){
            $fileName = Str::slug($request->menus).'.'.$request->image->extension();
            $fileNameWithUpload = 'uploads/'.$fileName;
            $request->image->move(public_path('uploads'),$fileName);
            $request->merge([
                'image'=>$fileNameWithUpload
            ]);
        }
        Menu::find($id)->first()->update($request->post());
        return redirect()->route('admin.menus.index',$id); */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
