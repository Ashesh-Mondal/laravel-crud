<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function insertStudent(Request $request)
    {
        $student = new Student;
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->pass;
        $student->contact = $request->contact;
        $student->gender = $request->gender;
        $student->city = $request->city;
        isset($request->lang) ? $lang = implode(",", $request->lang) : $lang = "";
        $student->language = $lang;

        if (isset($request->image)) {
            $actualFile = $request->image;
            $fileExtension = $actualFile->getClientOriginalExtension();
            if ($fileExtension == "jpg" || $fileExtension == "jpeg" || $fileExtension == "png") {
                $fileName = $actualFile->getClientOriginalName();
                $actualFile->move('image-uploads/', $fileName);
            }
            $student->image = $fileName;
        }
        $student->save();
    }
}
