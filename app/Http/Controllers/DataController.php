<?php

namespace App\Http\Controllers;

use App\Http\Resources\StudentDataResource;

use Illuminate\Http\Request;

use App\Models\Profile;

use Carbon\Carbon;

class DataController extends Controller
{
    public function newprofiledata() {
        $profile = Profile::inRandomOrder()->first();
        return new StudentDataResource($profile);
    }

    public function sendsubmission(Request $request) {
        /*
          $this->validate($request, [
            'forum_content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimes:mpeg,ogg,mp4,webm,3gp,mov,flv,avi,wmv,ts|max:100040'
          ]);*/
  
          $maskoffimage="";
          $maskonimage="";
  
          $maskoffimage = $request->file('maskoff')->getClientOriginalName();
          $request->file('maskoff')->move(public_path('storage/maskoff'), $maskoffimage);

          $maskonimage = $request->file('maskon')->getClientOriginalName();
          $request->file('maskon')->move(public_path('storage/maskon'), $maskonimage);
  
          $student = new Profile;
          $time = Carbon::now();
          $student->name = $request->input('name');
          $student->gender = $request->input('gender');
          $student->grade = $request->input('grade');
          $student->date_created = $time;
          $student->maskoffimg = $maskoffimage;
          $student->maskonimg = $maskonimage;
          $student->save();
  
          return redirect('/');//->with('success', 'Post Created!')->with('user', $user);
    }
}
