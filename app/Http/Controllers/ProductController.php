<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Category;
use App\Website;
use App\Product;
use App\Slider;

class ProductController extends Controller {

    public function __construct() {
        $this->middleware('auth');
    }

    protected function thisName() {
        return "ProductController";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($selected_website) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $records = Product::latest()->where('website_id', $selected_website_id[0]['id'])->paginate(10);
        return view('Admin.' . $selected_website . '.product.index', compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($selected_website) {
      
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $hidden_selected_website = Website::latest()->where('name', $selected_website)->get();
        $categories = Category::select('id','name','category_id')->where('published', '1')->where('website_id', $selected_website_id[0]['id'])->get();
        $sliders = Slider::select('id','name')->where('published', '1')->where('website_id', $selected_website_id[0]['id'])->get();
        return view('Admin.' . $selected_website . '.product.create', compact('website', 'selected_website_id', 'categories','sliders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProductRequest $request) {
        $request = setCheckbox($request, 'published');
        $input = $request->all();
        //return $input;
        $hidden_selected_website = searchForEloquentRecord(new Website(), 'id', $input['website_id']);
        //if( $input['cat_id']==''){$input['cat_id']=0;}
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images/product'; // upload path
        $image = uploadFile('image', $destination);
       // $pdf=uploadFile('pdf', $destination);
        $product = new Product($input);
       // return $product;
//        if (gettype($pdf) == 'string') {
//            $product['pdf'] = $pdf;
//        }
        
        if (gettype($image) == 'string') {
            $product['image'] = $image;
        }

        $big_image = uploadFile('big_image', $destination);
        if (gettype($big_image) == 'string') {
            $product['big_image'] = $big_image;
        }

        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/pdf/products'; // upload path
        $pdf = uploadFile('pdf', $destination);
        //return $product;
        if (gettype($pdf) == 'string') {
            $product['pdf'] = $pdf;
        }
        Auth::user()->products()->save($product);
        flash('Products added successfully!');
        $selected_website = $product->website->name;
        return redirect('/Admin/' . $selected_website . '/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($selected_website, $id) {
        $selected_website_id = Website::latest()->where('name', $selected_website)->get();
        $record = Product::findOrFail($id);
        $selected_website = $record->website->name;
        $website = Website::latest()->where('published', '1')->lists('title_en', 'id');
        $categories = Category::select('id','name','category_id')->where('published', '1')->where('website_id', $selected_website_id[0]['id'])->get();
        $sliders = Slider::select('id','name')->where('published', '1')->where('website_id', $record->website_id)->get();

        return view('Admin.' . $selected_website . '.product.edit', compact('record', 'website', 'categories','sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProductRequest $request,$id) {
        $product = Product::findOrFail($id);
        $product = updateCheckbox($request, $product, 'published');
        $input = $request->all();
        $hidden_selected_website = searchForEloquentRecord(new Website(), 'id', $input['website_id']);
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/images/product'; // upload path

        if (!is_null(Input::file('image'))) {
            $image = uploadFile('image', $destination);
            if (gettype($image) == 'string') {
                $input['image'] = $image;
            }
        }
        $destination = public_path() . '/' . $hidden_selected_website[0]['name'] . '/pdf/products'; // upload path
         if (!is_null(Input::file('pdf'))) {
             $pdf = uploadFile('pdf', $destination);
            if (gettype($pdf) == 'string') {
                $input['pdf'] = $pdf;
            }
        }
        $product->update($input);
        // Auth::user()->similar_sections()->save($similar_sections);
        $selected_website = $product->website->name;
        return redirect('/Admin/' . $selected_website . '/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        $record = Product::find($id);
        $selected_website = $record->website->name;
        $record->delete();
        flash()->success('Product deleted successfully!');
        return redirect('/Admin/' . $selected_website . '/products');
    }

}
