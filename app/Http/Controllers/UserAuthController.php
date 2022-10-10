<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Association;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class UserAuthController extends Controller
{
    function login() {
       // echo 'test';
       return view('auth.login');
    }

    function register() {
       return view('auth.register');
    }
    function ajout(){
       return view("ajout");
    }

    function create(Request $request) {
      //return $request->input();
      $request->validate([
         'nom'=>'required',
         'prenom'=>'required',
         'naissance'=>'required',
         'sexe'=>'required',
         'telephone'=>'required',
         'email'=>'required|email|unique:users',
         'role'=>'required',
         'password'=>'required|min:5'
      ]);


$query = DB::table('users')
->insert([
   'nom'=> $request->nom,
   'prenom'=> $request->prenom,
   'naissance'=> $request->naissance,
   'sexe'=> $request->sexe,
   'telephone'=> $request->telephone,
   'email'=> $request->email,
   'password'=> $request->password,
   'role'=> $request->role
]);

if($query){
   return back()->with('success', 'vous avez bien été enregistré');
      }
   else{
      return back()->with('fail', 'quelque chose s est mal passé');
   }
   }

   function check(Request $request) {
      
      $user = DB::table('administrateur')
      ->where('nom_user', $request->username)
      ->first();



      if ($user) {
         if ($user->nom_user === $request->username){
            $request->session()->put('LoggedUser', $user->id_admin);
            return redirect('accueil');
         }else{
            return back()->with('fail', 'mot de passe non valide');
         }
      }else{
         return back()->with('fail', 'compte inexistant pour ce mail');
      }
   
   }

   /*function profile(){
      if(session()->has('LoggedUser')){
         //$user = User::where('id', '=', session('LoggedUser'))->first();
         $user=DB::table('users')
              ->where('id', session('LoggedUser'))
              ->first();
         $data = [
            'LoggedUserInfo'=>$user
         ];
      }

      return view('admin.profile', $data);
   }*/

   function logout(){
      if(session()->has('LoggedUser')){
         session()->pull('LoggedUser');
         return redirect('login');
      }
   }


   function accueil()
   {
      
      $data = Association::all();

      return view('accueil',compact('data'));
   }
 

   function association(Request $request) {
      //return $request->input();
      $request->validate([
         'nom'=>'required',
         'description'=>'required',
         'email'=>'required',
         'contact'=>'required',
         'fille' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
      ]);
      $image = $request->file('fille');

      $new_name = rand() . '.' . $image->getClientOriginalExtension();
 
      $image->move(public_path('images'), $new_name);
     
      $query = DB::table('association')
->insert([
   'nom_asso'=> $request->nom,
   'description_asso'=> $request->description,
   'contact'=> $request->contact,
   'eass'=> $request->email,
   'logo'=> $new_name
]);
if($query){
   return redirect('accueil');
      }
   else{
      return back()->with('fail', 'quelque chose s est mal passé');
   }
   /*$path = basename ($request->fille>store('assoxiation'));

   // Save thumb
   $image = InterventionImage::make ($request->fille)->widen (500)->encode ();
   Storage::put ('thumbs/' . $path, $image);
   
   $user= new Association;
 
   $user->easso= $request->email;
   $user->description_asso= $request->description;
   $user->nom_asso= $request->nom;
   $user->contact= $request->contact;
   $user->logo= $request->$path;
   $request->save($user);*/
   
    /*if ($request->hasFile('fille')) {
        $image = $request->file('fille')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('cover_image')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
  
   // make thumbnails
   $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
        $thumb = Image::make($request->file('cover_image')->getRealPath());
        $thumb->resize(80, 80);
        $thumb->save('storage/cover_images/'.$thumbStore);
    }else {
       return $request;
       $user->logo ='Capture.PNG';
    }
      
   $user->save();*/

        /*$article = new Association([
      "nom_asso" => $request->get('nom'),
      "description_asso" => $request->get('description'),
      "logo" => $image,
      "eass" => $request->get('email'),
      "contact" => $request->get('contact')
        ]);
      $article->save();
        }*/
      return redirect('accueil');
   
   }
}



