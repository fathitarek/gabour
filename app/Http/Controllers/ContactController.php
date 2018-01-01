<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Contact;
use App\Website;
use App\City;

class ContactController extends Controller {
    public function __construct() {
        $this->middleware('auth',['except' => ['store_ar','store']]);
    }

    // public function __construct() {
    //     $this->middleware('auth');
    // }

    protected function thisName() {
        return "ContactController";
    }

    public function index($selected_website) {
       

          $selected_website_id = Website::latest()->where('name', $selected_website)->get();
          $records = Contact::oldest()->where('website_id', $selected_website_id[0]['id'])->paginate(10);
          return view('Admin.'.$selected_website.'.contacts.index', compact('records'));
    }

    // public function create($selected_website) {
    //     $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
    //     $hidden_selected_website=Website::latest()->where('name', $selected_website)->get();
    //
    //     $selected_website_id=$hidden_selected_website[0]->id;
    //     return view('Admin.'.$selected_website.'.Contact.create', compact('website','selected_website_id'));
    // }

    public function store(ContactRequest $request) {
//        return $request->all();
      //  $request = setCheckbox($request, 'published');
       
        $input = $request->all();
       //  return $input;
        $contact = new Contact($input);
       //return $contact;
      $contact=  $contact->save();
        //return $contact;
//        Auth::user()->contacts()->save($contact);
        flash('Contact added successfully!');

        $selected_website = $input['website'];
        $thanks = "Thanks, your message has been sent";
        //return redirect('/Admin/'.$selected_website.'/contacts');
        //return redirect($selected_website.'/contact_us',compact($thanks));
         return redirect('/'.$selected_website.'/contact_us?submit=1');

    }
 public function store_ar(ContactRequest $request) {
//        return $request->all();
      //  $request = setCheckbox($request, 'published');
        $input = $request->all();
        $contact = new Contact($input);
        $contact->save();
//        Auth::user()->contacts()->save($contact);
        flash('Contact added successfully!');

        $selected_website = $input['website'];
        $thanks = "Thanks, your message has been sent";
        //return redirect('/Admin/'.$selected_website.'/contacts');
        //return redirect($selected_website.'/contact_us',compact($thanks));
         return redirect('/'.$selected_website.'/contact_us_ar?submit=1');

    }
    // public function edit($selected_website,$id) {
    //     $record = Contact::findOrFail($id);
    //     $selected_website = $record->website->name;
    //     $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
    //     return view('Admin.'.$selected_website.'.Contact.edit', compact('record', 'website'));
    // }


//     public function update(ContactRequest $request, $id) {
//         $Contact = Contact::findOrFail($id);
//         $Contact = updateCheckbox($request, $Contact, 'published');
//         $input = $request->all();
//         $Contact->update($input);
//         Auth::user()->cities()->save($Contact);
//         $selected_website=$Contact->website->name;
//         return redirect('/Admin/'.$selected_website.'/cities');
// //        return $this->index($selected_website);
// //        return redirect(action($this->thisName() . '@index'));
//     }

    public function destroy($id) {
        $record = Contact::findOrFail($id);
        //return $record;
      // $selected_website_id=Website::latest()->where('name',$selected_website)->get();
      // return $selected_website_id;
        //return $record;
      $selected_website_id = Website::latest()->where('id', $record->website_id)->get();
      $selected_website= $selected_website_id[0]->name;
        flash()->success('Contact deleted successfully!');
        //echo $record->website;
       // $selected_website = $record->website->name;
       //return   $selected_website;
        $record->delete();
        return redirect('/Admin/'.$selected_website.'/contacts');
//        return $this->index($selected_website);
        //return redirect(action('ContactController@index'));
    }

}
