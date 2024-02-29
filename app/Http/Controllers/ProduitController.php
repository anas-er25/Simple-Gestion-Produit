<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Models\typeProduit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function index(){
        $products=produit::paginate(5);
        $type=typeProduit::all();
        return view('products.product', ['products'=>$products, 'type'=>$type]);
    }

    public function create(){
        $types=typeProduit::all();
        return view('products.create', ['types'=>$types]);
    }
    public function save(Request $request){
        // $request->validate([
        //     'RefPdt' => 'required',
        //     'libPdt' => 'required',
        //     'Prix' => 'required',
        //     'Qte' => 'required',
        //     'description' => 'required',
        //     'Type' => 'required',
        //     'image' => 'required|mimes:jpeg,png,jpg|max:2048',
        // ]);
        // dd($request->all());
        $product=new produit();
        $product->RefPdt=$request->input('RefPdt');
        $product->libPdt=$request->input('libPdt');
        $product->Prix=$request->input('Prix');
        $product->Qte=$request->input('Qte');
        $product->description=$request->input('description');
        if($image=$request->file('image')){
            $destination='img';
            $imageName=time().'.'.$image->getClientOriginalExtension();
            $image->move($destination, $imageName);
        }
        $product->image=$imageName;
        $product->type_id=$request->input('Type');


        $product->save();
        return redirect('/home');
    }

    public function detail($RefPdt){
        $product=produit::all()->where('RefPdt', $RefPdt)->first();
        $type=typeProduit::all();
        return view('products.detail', ['product'=>$product, 'type'=>$type]);
    }
    public function destroy($RefPdt){
        $product=DB::table('produits')->where('RefPdt', $RefPdt);
        $product->delete();
        return redirect('/home');
    }
}
