<?php

namespace App\Http\Controllers;

use App\Files;
use App\filesData;
use App\User;
use Illuminate\Http\Request;



class FilesController extends Controller
{
    //

    public function index(){
        // $ads = ad::all();
        // $ads = ad::orderBy('type')->get();
        $files = Files::orderBy('id', 'DESC')->paginate(4);
        $files_data = filesData::all();
        // $ads = ad::latest()->get();
       
        return view('ads.files',[
            'files' => $files,
            'files_data'=> $files_data,
            
            ] );
    }

    public function store(request $request){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        if($request->method() == 'POST'){
            // $input = $request->all();
            // dd($input);
            $file = new Files();
            $filesData = new filesData();

            $file->filename = request('filename');
            $file->location = request('location');
            $file->type = request('type');
            $file->city = request('city');
            $file->area = request('area');
            $file->unit = request('unit');
            $file->phase = request('phase');
            $file->price= request('price');
            $file->save();
            
            $filesData->price = request('price');
            $filesData->files_id = $file->id;
            $filesData->save();
            return redirect()->route('files.create');
        }
        else{
            $files = Files::all();
            $files_data = filesData::all();
            return view('admin.submit-file',[
                'files' => $files,
                'files_data'=> $files_data,
                'user' => $user
            ]);
        }   
        return redirect()->route('files.create');
    }

    public function show($id){
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        $file = Files::findOrFail($id);
        
        // dd($file);
        $data = filesData::where('files_id',$id)->get();
        return view('admin.fileChart',['file' => $file,'data' => $data, 'user' => $user]);
    }

    public function destroy($id)
    {
        $file = Files::findOrFail($id);
        $file->delete();
        return redirect()->route('files.create');
    }

    public function edit($id)
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $file = Files::findOrFail($id);
        return view('admin.update-file',['file' => $file, 'user' => $user] );
    }

    public function update(request $request,$id){
        
            // $input = $request->all();
            // dd($input);
            $file = Files::findOrFail($id);
            $file->filename = request('filename');
            $file->phase = request('phase');
            $file->type = request('type');
            $file->location = request('location');
            $file->city = request('city');
            $file->area = request('area');
            $file->unit = request('unit');
            $file->save();
            
        
  
        return redirect()->route('files.create');
    }

    public function dataAdd(request $request,$id){

        if($request->method() == 'POST'){
            $file = Files::findOrFail($id);
            $file->price = request('price');
            $data = new filesData();
            $data->price = request('price');
            $data->files_id = $id;
            $data->save();
            $file->save();

        }
        
        return redirect()->route('files.show',[$id]);
    }



    public function searchBar()
    {
        $search = request('search');
        $files_data = filesData::all();
        
        if ($search) {
            $result = Files::where('city','LIKE','%'.$search.'%')->orwhere('price','LIKE','%'.$search.'%')->orwhere('type','LIKE','%'.$search.'%')->orwhere('unit','LIKE','%'.$search.'%')->orwhere('area','LIKE','%'.$search.'%')->paginate(3);
            return view('ads.files',[
                'files' => $result,
                'files_data'=> $files_data,
            ] );
        }
    }

    // function load_data(Request $request)
    // {
    //     // return $request;
    //     if ($request->ajax()) {
    //         if ($request->id) {
    //             $files = Files::
    //             where('id', '<', $request->id)
    //             ->orderBy('id', 'DESC')
    //             ->limit(1)
    //             ->get();
    //             $files_data = filesData::all();
    //             $output = '';
    //             $last_id = '';
    //             $image = '';
    //             foreach ($files as $file) {
    //                 $marla='';
                   
    //                 if ($file->unit == 'Marla'){
    //                 $marla = $file->area ;
    //                 }
    //                 else{
    //                         if ($file->unit != 'Marla'){
    //                             if ($file->unit == 'Square Feet'){
    //                             $marla = round($file->area/225, 2);
    //                             }
    //                             if ($file->unit == 'Square Yards'){
    //                             $marla = round($file->area/25, 2);
                                  
    //                             }
    //                             if ($file->unit == 'Square Meters'){
    //                             $marla =  round($file->area/20.9,2);
    //                             }
    //                             if ($file->unit == 'Kanal'){
    //                             $marla = $file->area*20 ;
    //                             }
    //                         }
    //                     }
                    

    //                 $output .='
    //                 <div class="filter-list row">
    //                         <!-- Property Block -->
    //                         <div class="property-block col-xl-4 col-lg-6 col-md-6 col-sm-12">
    //                             <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
    //                                 <div class="image-box">
    //                                 <div id="chart_div'.$file->id.'" style="width: auto; height: auto;"></div>
    //                                 </div>
    //                                 <div class="lower-content">
    //                                     <h3><a href="#" style="color: #FFFFFF">'.$file->bloc.'</a></h3>
    //                                     <ul class="property-info clearfix">
    //                                     //address
    //                                         <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>Rs. '.$file->price.'</li>
    //                                         <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>'.$file->city.'</li>
    //                                     </ul>
    //                                 </div>
    //                             </div>
    //                         </div>
    //                 </div>';



    //             $last_id = $file->id;
    //             }
    //             return [$output,$last_id];
    //             // return $output;
                
    //             // return view('home', ['ads'=>$ads]);

    //         } else {
    //             $files = Files::
    //             where('id', '<', $request->id)
    //             ->orderBy('id', 'DESC')
    //             ->limit(3)
    //             ->get();
    //             return $files;
    //         }
    //     }
    // }
    
}
// <div class="filter-list row">
// <!-- Property Block -->
// <div class="property-block all mix lahore commercial col-xl-4 col-lg-6 col-md-6 col-sm-12">
//     <div class="inner-box" style="border: solid grey 3px; padding: 5px 5px;">
//         <div class="image-box">
//         <div id="chart_div'.$file->id.'" style="width: auto; height: auto;"></div>
//         </div>
//         <div class="lower-content">
//             <h3><a href="#" style="color: #FFFFFF">'.$file->bloc.'</a></h3>
//             <ul class="property-info clearfix">
//             //address
//                 <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>Rs. '.$file->price.'</li>
//                 <li style="color: #FFFFFF"><i class="flaticon-dimension"></i>'.$file->city.'</li>
//             </ul>
//         </div>
//     </div>
// </div>
// </div>';