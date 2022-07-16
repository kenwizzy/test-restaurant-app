<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'foods' => Food::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-food');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string',
            'imgurl' => 'required|file|mimes:jpeg,jpg,png',
            'description' => 'required|string'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        if ($request->hasFile('imgurl')) {
            $filen = $request->imgurl->getClientOriginalName();
            $filename = time() . '.' . $filen;
            $request->imgurl->move('images/', $filename);
        }

        $imageUrl = asset('images/' . $filename);

        $data = new Food();
        $data->food = $request->title;
        $data->imgurl = $imageUrl;
        $data->description = $request->description;
        $data->save();

        return redirect()->back()->withSuccess($request->title . ' Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $data = Food::find($request->id);
       if($data->like == 1){
          $data->like = 2;
          $data->save();

          return response()->json([
            'status' => 'successful',
            'message' => ucfirst($data->food)." Unliked Successfully",
            'data'   => $data
        ]);

          //return ucfirst($data->food)." Unliked Successfully";
       }else{

        $data->like = 1;
        $data->save();
        return response()->json([
            'status' => 'successful',
            'message' => ucfirst($data->food)." Liked Successfully",
            'data'   => $data
        ]);
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
