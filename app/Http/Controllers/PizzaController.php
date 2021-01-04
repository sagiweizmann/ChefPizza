<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas = [
            ['type' => 'hawaiian','base' => 'chessy crust','price' => 10],
            ['type' => 'volcano','base' => 'gralic crust','price' => 10],
            ['type' => 'tornado','base' => 'thick crust','price' => 10]
        ];
        $name = request('name');
        $age = request('age');
        return view('pizzas',[
        'pizzas'=> $pizzas,
        'name' => $name,
        'age' => $age,
        ]);
    }
    public function show($id){
        return view('details',['id' =>$id]);
    }
}
