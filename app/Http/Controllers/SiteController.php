<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heads = Post::whereCategory_id('1')
                     ->get();
        $abouts = Post::whereCategory_id('2')
                     ->get();
        $etapes = Post::whereCategory_id('3')
                     ->get();
        $participations = Post::whereCategory_id('4')
                     ->get();
        $partenaires = Post::whereCategory_id('5')
                     ->get();
        
        return view('index',[
            'myHeads'=> $heads, 
            'myAbouts'=> $abouts,
            'myEtape'=> $etapes,
            'myParticipation'=> $participations,
            'myPartenaire'=> $partenaires,    
        ]);
    }

   
}
