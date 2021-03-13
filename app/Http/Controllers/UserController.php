<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;


use App\ad;
use App\Files;
use App\User;
use App\filesData;

class UserController extends Controller
{
    //
    public function admin()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        // $type = $user->type;
        // $ad = ad::where('user_id','=',$user_id)->get();;

        $ads_aproved = ad::where('aproved', '=', 'yes')->get();
        $ads_pending = ad::where('aproved', '!=', 'yes')->get();
        if ($user->type == 'admin') {
            $active = $ads_aproved->count();
            $pending = $ads_pending->count();
        } else {
            $active = $ads_aproved->where('user_id', $user_id)->count();
            $pending = $ads_pending->where('user_id', $user_id)->count();
        }


        $files = Files::all();
        $all = $files->count();
        $total_listing = $active + $pending;

        // if ($type == 'admin') {
        return view('admin.index', [
            'active' => $active,
            'pending' => $pending,
            'all' => $all,
            'files' => $files,
            'total_listing' => $total_listing,
            'ads_aproved' => $ads_aproved,
            'ads_pending' => $ads_pending,
            'user_id' => $user_id,
            'user' => $user,
        ]);
    }

    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        if ($user->type == 'admin') {
            $ad = ad::all()->get();
        }else{
            $ad = ad::where('user_id', $user_id )->get();
        }
        return view('admin.my-properties', ['ads' => $ad, 'user' => $user]);
    }

    public function updateform($id)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $ad = ad::findOrFail($id);
        return view('admin.update', ['ad' => $ad, 'user' => $user]);
    }

    function myproperty() 
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('admin.submit-property',['user' => $user]);
    }

    public function aprovelist($id)
    {
        $ad = ad::findOrFail($id);
        $ad->aproved = 'yes';
        $ad->save();
        // return redirect()->route('admin.index');
        // return redirect()->back()->with(['message' => 'Record is saved into the database', 'alert' => 'alert-success']);
        return redirect()->back()->with(['message' => 'Ad aproved! ', 'alert' => 'alert-success']);

        //    return redirect()->action('UserController@admin');
    }

    // public function updateProperty(request $request, $id)
    // {
    //     $user_id = auth()->user()->id;
    //     $user = User::find($user_id);
        
    //     $ad = ad::findOrFail($id);
    //     // DB::update('update st set  where id = ?',[$id]);

    //     $ad->status = request('status');
    //     $ad->city = request('city');
    //     $ad->title = request('title');
    //     $ad->category = request('category');

    //     $ad->type = request('type');
    //     $ad->phase = request('phase');
    //     $ad->kitchen = request('kitchen');
    //     $ad->bedroom = request('bedroom');
    //     $ad->bathroom = request('bathroom');
    //     $ad->demand = request('demand');
    //     $ad->area = request('area');
    //     $ad->unit = request('unit');
    //     $ad->adress = request('adress');
    //     $ad->postal = request('postal');
    //     $ad->detail = request('detail');
    //     $ad->name = request('name');
    //     $ad->email = request('email');
    //     $ad->phone = request('phone');
    //     if ($user->type == 'admin') {
    //         $ad->aproved = request('aproved');
    //     } else {
    //         $ad->aproved = '';
    //     }
        
    //     $this->validate($request, [
    //         'photos' => 'required',
    //         'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    //     ]);

    //     if ($request->hasfile('photos')) {

    //         foreach ($request->file('photos') as $image) {
    //             // print_r($image);
    //             $destination_path = '/public/properties';
    //             // $image_name = $image->getClientOriginalName();
    //             $image_name = Str::random(25).$image->getClientOriginalName();

    //             // $name = $image->getClientOriginalName();
    //             $image->storeAs($destination_path, $image_name);
    //             $data[] = $image_name;
    //         }
    //     }
    //     $ad->images = json_encode($data);
    //     $ad->features = request('shipping-option');
    //     $ad->user_id = auth()->user()->id; // for production mode
    //     // rand();//just for development mode
    //     $ad->save();
    //     // echo "workinnnnnnnng";
    //     // $ad->update();

    //     // return view('admin.index');
    //     // return redirect()->back();
    //     ad::where('id', $id)->updateOrInsert(
    //     ['status' => request('status')],
    //     ['city' => request('city')],
    //     ['title' => request('title')],
    //     ['category' => request('category')]
    //     );

    //     return redirect()->route('admin.index');
    // }


    public function updateProperty(request $request, $id)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        ad::where('id', $id)->update(['city' => request('city')]);
        ad::where('id', $id)->update(['title' => request('title')]);
        ad::where('id', $id)->update(['status' => request('status')]);
        ad::where('id', $id)->update(['category' => request('category')]);
        ad::where('id', $id)->update(['unit' => request('unit')]);
        ad::where('id', $id)->update(['type' => request('type')]);
        ad::where('id', $id)->update(['kitchen' => request('kitchen')]);
        ad::where('id', $id)->update(['bedroom' => request('bedroom')]);
        ad::where('id', $id)->update(['demand' => request('demand')]);
        ad::where('id', $id)->update(['area' => request('area')]);
        ad::where('id', $id)->update(['adress' => request('adress')]);
        ad::where('id', $id)->update(['postal' => request('postal')]);
        ad::where('id', $id)->update(['detail' => request('detail')]);
        ad::where('id', $id)->update(['email' => request('email')]);
        ad::where('id', $id)->update(['phone' => request('phone')]);
        ad::where('id', $id)->update(['name' => request('name')]);
        if ($user->type == 'admin') {
            ad::where('id', $id)->update(['aproved' => request('aproved')]);
        } else {
            ad::where('id', $id)->update(['aproved' => '']);
        }

        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasfile('photos')) {

            foreach ($request->file('photos') as $image) {
                // print_r($image);
                $destination_path = '/public/properties';
                // $image_name = $image->getClientOriginalName();
                $image_name = Str::random(25).$image->getClientOriginalName();

                // $name = $image->getClientOriginalName();
                $image->storeAs($destination_path, $image_name);
                $data[] = $image_name;
            }
        }
        ad::where('id', $id)->update(['images' => json_encode($data)]);
        ad::where('id', $id)->update(['features' => request('shipping-option')]);
        
    //     return redirect()->route('admin.index');
        return redirect()->action('UserController@index'); 
      
    }




    public function seller()
    {
        return view('seller.index');
    }
}
