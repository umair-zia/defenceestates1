<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\ad;

// use illuminate\Support\Facades\DB;
use App\user;

class DefenceController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function home()
    {
        // $ads = ad::all();
        // $ads = ad::orderBy('type')->get();
        // $ads = DB::table('ads')->paginate(1);
        $ads = ad::where('aproved', 'yes')->orderBy('id', 'DESC')->limit(3)->get();
        $Cads =  ad::where('category', 'Commercial')->orderBy('id', 'DESC')->limit(3)->get();
        $Rads =  ad::where('category', 'Homes')->orwhere('category', 'Appartment')->orderBy('id', 'DESC')->limit(3)->get();
        // $ads = ad::latest()->get();

        return view('index', [
            'ads' => $ads,
            'Cads' => $Cads,
            'Rads' => $Rads

        ]);
    }

    public function index()
    {
        // $ads = ad::all();
        // $ads = ad::orderBy('type')->get();
        // $ads = ad::where('aproved', 'yes')->get();
        // $ads = ad::latest()->get();

        $ads = ad::where('aproved', 'yes')->orderBy('id', 'DESC')->limit(12)->get();


        return view('ads.index', [
            'ads' => $ads

        ]);
    }

    public function show($id)
    {

        $ad = ad::findOrFail($id);
        $ads = ad::where('aproved', 'yes')->orderBy('id', 'DESC')->limit(3)->get();

        return view('ads.show', ['ad' => $ad, 'ads' => $ads]);
    }

    public function create()
    {
        return view('admin.submit-property');
    }

    public function store(request $request)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $ad = new ad();
        $input = $request->all();
        error_log(print_r($input, TRUE));

        $ad->status = request('status');
        $ad->city = request('city');
        $ad->title = request('title');
        $ad->category = request('category');
        $ad->type = request('type');
        $ad->phase = request('phase');
        $ad->kitchen = request('kitchen');
        $ad->bedroom = request('bedroom');
        $ad->bathroom = request('bathroom');
        $ad->demand = request('demand');
        $ad->area = request('area');
        $ad->unit = request('unit');
        $ad->adress = request('adress');
        $ad->postal = request('postal');
        $ad->detail = request('detail');
        $ad->name = request('name');
        $ad->email = request('email');
        $ad->phone = request('phone');
        if ($user->type == 'admin') {
            $ad->aproved = request('aproved');
        } else {
            $ad->aproved = '';
        }

        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        if ($request->hasfile('photos')) {

            foreach ($request->file('photos') as $image) {
                // print_r($image);
                $destination_path = '/public/properties';
                $image_name = Str::random(25).$image->getClientOriginalName();
                // $name = $image->getClientOriginalName();
                // $image->storeAs($destination_path, $image_name);
                Storage::disk('s3')->put($image_name, file_get_contents($image),'public');
                $data[] = $image_name;
            }
            $ad->images = json_encode($data);
        } else {
            return redirect()->back()->with(['message' => 'Images not found', 'alert' => 'alert-danger']);
        }
        $ad->features = request('shipping-option');
        $ad->user_id = auth()->user()->id; // for production mode
        // rand();//just for development mode
        $ad->save();

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $ad = ad::findOrFail($id);
        $ad->delete();

        return redirect()->route('admin.index');
    }

    public function find()
    {
        $status = request('status');
        $city = request('city');
        $category = request('category');
        $type = request('type');
        $phase = request('phase');
        $bedroom = request('bedroom');
        $priceFrom = request('priceFrom');
        $priceTo = request('priceTo');
        $priceTo = request('priceTo');

        if ($status == 'Sale') {
            $ads = ad::where([
                ['status',  '=', $status],
                ['city',    '=', $city],
                ['category', '=', $category],
                ['type',    '=', $type],
                ['bedroom',    '=', $bedroom],
                ['bedroom',    '=', $bedroom],
                ['phase',   '=', $phase]
            ])->whereBetween('demand', [$priceFrom, $priceTo])->get();
        } else {
            $area = request('area');
            $unit = request('unit');
            $ads = ad::where([
                ['status',  '=', $status],
                ['city',    '=', $city],
                ['area',    '=', $area],
                ['unit',    '=', $unit],
                ['category', '=', $category],
                ['type',    '=', $type],
                ['bedroom',    '=', $bedroom],
                ['bedroom',    '=', $bedroom],
                ['phase',   '=', $phase]
            ])->whereBetween('demand', [$priceFrom, $priceTo])->get();
        }


        // $result = ad::where('city','LIKE','%'.$city.'%')->andWhere('email','LIKE','%'.$q.'%')->get();
        if (count($ads) > 0) {
            return view('ads.index', ['ads' => $ads]);
        } else {
            return view('ads.index', ['ads' => $ads])->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }
    }


    public function findProp()
    {
        $city = request('city');
        $category = request('category');
        $type = request('type');
        $unit = request('unit');

       
            // $area = request('area');
        $ads = ad::where([
            ['city',    '=', $city],
            ['unit',    '=', $unit],
            ['category', '=', $category],
            ['type',    '=', $type],
        ])->get();
    


        // $result = ad::where('city','LIKE','%'.$city.'%')->andWhere('email','LIKE','%'.$q.'%')->get();
        if (count($ads) > 0) {
            return view('ads.index', ['ads' => $ads]);
        } else {
            return view('ads.index', ['ads' => $ads])->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }
    }

    public function FindByLocation($id)
    {
        $search = request('search');
        if ($search) {
            $result = ad::where('city', 'LIKE', '%' . $id . '%')->get();
            return view('ads.index', ['ads' => $result]);
            // ->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }

        if ($id) {
            $result = ad::where('city', 'LIKE', '%' . $id . '%')->limit(3)->get();
            return view('ads.index', ['ads' => $result]);
            // ->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }
    }

    public function FindByType($id)
    {
        // $search = request('search');
        if ($id) {
            $result = ad::where('category', 'LIKE', '%' . $id . '%')->limit(3)->get();
            return view('ads.index', ['ads' => $result]);
            // ->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }
    }


    public function searchBar()
    {
        $search = request('search');

        if ($search) {
            $result = ad::where('city', 'LIKE', '%' . $search . '%')->orwhere('unit', 'LIKE', '%' . $search . '%')->orwhere('demand', 'LIKE', '%' . $search . '%')->orwhere('type', 'LIKE', '%' . $search . '%')->limit(3)->get();
            return view('ads.index', ['ads' => $result]);
            // ->with(['message' => 'Not Found', 'alert' => 'alert-danger']);
        }
    }

    public function sideSearch()
    {
        $status = request('status');
        $city = request('city');
        $category = request('category');
        // if ($status and $city and $category) {
        $ads = ad::where([['status', '=', $status], ['city', 'LIKE', '%' . $city . '%'], ['category', '=', $category]])->limit(3)->get();
        if (count($ads) > 0) {
            return view('ads.index', ['ads' => $ads]);
        }
        print_r($city);
        print_r($status);
        print_r($category);
        // foreach ($ads as $key => $ad) {
        //     print_r($ad->status);

        // }
    }
 
    function load_data(Request $request)
    {
        // return $request;
        if ($request->ajax()) {
            if ($request->id) {
                $ads = ad::
                where('id', '<', $request->id)
                // where('aproved','=', 'yes')
                ->orderBy('id', 'DESC')
                ->limit(9)
                ->get();
                $output = '';
                $last_id = '';
                $image = '';
                foreach ($ads as $ad) {
                    $marla='';
                    $i = 0;
                    foreach (json_decode($ad->images) as $img){
                        if ($i == 0) {
                            $image = $img;
                        }
                        $i++;
                    };
                    // $output .= '<div class="card-header">'.$ad->demand  . $ad->id.'->'.$ad->title.'</div>';
                    if ($ad->unit == 'Marla'){
                    $marla = $ad->area ;
                    }
                    else{
                            if ($ad->unit != 'Marla'){
                                if ($ad->unit == 'Square Feet'){
                                $marla = round($ad->area/225, 2);
                                }
                                if ($ad->unit == 'Square Yards'){
                                $marla = round($ad->area/25, 2);
                                  
                                }
                                if ($ad->unit == 'Square Meters'){
                                $marla =  round($ad->area/20.9,2);
                                }
                                if ($ad->unit == 'Kanal'){
                                $marla = $ad->area*20 ;
                                }
                            }
                        }
                    

                    $output .='
                    <div class="property-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
                                    <div class="image-box">
                                        <a href="'.route('ads.show',['id' => $ad->id ]).'">
                                            <figure class="image"><img style="height: 280px" src="{{ asset("storage/properties")."/"'.$image.' }}" alt=""></figure>
                                        </a>
                                    </div>
                            <div class="lower-content">

                                <h3><a href="'.route('ads.show',['id' => $ad->id ]).'" style="color: #FFFFFF">'.$ad->title.'</a></h3>
                                <div class="lucation" style="color: #FFFFFF"><i class="la la-map-marker"></i>'.$ad->adress.'</div>
                                <ul class="property-info clearfix">
                                    <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>'.$marla.' Marla                                
                                    <sup>
                                        <a class="la la-info-circle" 
                                        data-toggle="popover" 
                                        title="Area Conversion" 
                                        data-content="'.$ad->unit.': ('.$ad->area.')">
                                        </a>
                                    </sup>
                                    </li>
                                    
                                    <li style="color: #FFFFFF"><i class="flaticon-bed"></i>'. $ad->bedroom.' Bedrooms</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-full-screen"></i>'.$ad->kitchen.' Kitchen</li>
                                    <li style="color: #FFFFFF"><i class="flaticon-bathtub"></i>'.$ad->bathroom .' Bathroom</li>
                                </ul>
                                <div class="property-price clearfix">
                                    <div class="read-more"><a href="'.route('ads.show',['id' => $ad->id ]).'" class="theme-btn">More Detail</a></div>
                                    <div class="price">Rs. '.$ad->demand .'</div>
                                </div>
                            </div>
                        </div>
                    </div>';



                $last_id = $ad->id;
                }
                return [$output,$last_id];
                // return $output;
                
                // return view('home', ['ads'=>$ads]);

            } else {
                $ads = ad::where('aproved', 'yes')->orderBy('id')
                    ->limit(1)
                    ->get();
                return $ads;
            }
        }
    }
}
