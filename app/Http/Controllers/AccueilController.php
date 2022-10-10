<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
class   AccueilController extends Controller
{
   
 
    function association(Request $request) {
        //return $request->input();
        $request->validate([
           'nom'=>'required',
           'description'=>'required',
           'email'=>'required',
           'contact'=>'required',
        ]);
  
  /*$user= new User;
  $user->nom= $request->nom;
  $user->prenom= $request->prenom;
  $user->naissance= $request->naissance;
  $user->sexe= $request->sexe;
  $user->telephone= $request->telephone;
  $user->email= $request->email;
  $user->password= $request->password;//$user->password= Hash::make($request->password);
  $user->role= $request->role;
  $query= $user->save();*/
  if ($request->hasFile('file')) {
  
     $request->validate([
         'image' => 'mimes:jpeg,bmp,png' // Only allow .jpg, .bmp and .png file types.
     ]);
  
     // Save the file locally in the storage/public/ folder under a new folder named /product
     $request->file->store('product', 'public');
  
     // Store the record, using the new file hashname which will be it's new filename identity.
     $association = new  Association ([
         "nom" => $request->get('nom'),
         "description" => $request->get('description'),
         "email" => $request->get('email'),
         "contact" => $request->get('contact'),
         "file_path" => $request->file->hashName()
     ]);
     $association->save(); // Finally, save the record.
  }
  
  if($association){
     return redirect("accueil");
        }
     else{
        return back()->with('fail', 'quelque chose s est mal passé');
     }
     }
  
  
}
