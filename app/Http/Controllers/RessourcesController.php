<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RessourcesController extends Controller
{
    public function index () 
    {
        return view('ressources.index', ['ressources' => \App\Models\Ressource::orderBy('created_at', 'DESC')->take(20)->get()]);
    }

    public function show (int $id)
    {
        return view('ressources.show', [
            'ressource' => \App\Models\Ressource::find($id), 
            'comments' => \App\Models\Comments::where('ressources_id', $id)->orderBy('created_at', 'DESC')->get()
        ]);
    }

    public function create ()
    {
        return view('ressources.create');
    }

    public function store (Request $request)
    {
        // validation
        $validated = $request->validate([
            'name' => 'required|max:255',
            'text' => 'alpha_num',
            'img' => 'image|mimes:jpg,gif,png',
            'storage' => 'required|numeric',
            'categories_id' => 'integer'
        ]);

        // Upload de l'image 
        $path = explode('img/', $request->file('image')->store('public/img'));

        $validated['img'] = $path[1];
        \App\Models\Ressource::create($validated);

        return redirect()->route('ressources.index');

    }

    public function destroy (\App\Models\Ressource $ressource)
    {
        $ressource->delete(); 
        return redirect()->route('ressources.index');
    }

    public function edit (\App\Models\Ressource $ressource)
    {
        return view('ressources.edit', ['ressource' => $ressource]);
    }

    public function update(Request $request, \App\Models\Ressource $ressource)
    {
        // Upload de l'image 
        $path = explode('img/', $request->file('image')->store('public/img'));

        $ressource->name = $request->input('name');
        $ressource->text = $request->input('text');
        $ressource->storage = $request->input('storage');
        $ressource->img = $path[1];
        $ressource->categories_id = $request->input('categories_id');

        $ressource->update();

        return redirect()->route('ressources.index');
    }


    // AJAX

    public function ajaxInsert (Request $request)
    {
        $comment = new \App\Models\Comments;
        $comment->pseudo = $request->input('pseudo');
        $comment->text = $request->input('text');
        $comment->ressources_id = (int)$request->input('id');

         return ($comment->save())?1:0;
    }

    public function ajaxOlders (Request $request)
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::orderBy('created_at', 'DESC')->take(4)->offset($request->get('offset'))->get()]);
        
    }

    public function ajaxAi ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 4)->orderBy('created_at', 'DESC')->get()]);
        
    }

    public function ajaxPsd ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 3)->orderBy('created_at', 'DESC')->get()]);
        
    }

    public function ajaxTheme ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 6)->orderBy('created_at', 'DESC')->get()]);
        
    }

    public function ajaxFont ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 5)->orderBy('created_at', 'DESC')->get()]);
        
    }

    public function ajaxPhoto ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 2)->orderBy('created_at', 'DESC')->get()]);
        
    }

    public function ajaxPremium ()
    {
        return view('ressources.list', ['ressources' => \App\Models\Ressource::where('categories_id', 1)->orderBy('created_at', 'DESC')->get()]);
        
    }

    
}
