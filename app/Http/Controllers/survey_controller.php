<?php

namespace App\Http\Controllers;
use App\Models\student;
use App\Models\teacher;
use App\Models\survey;
use App\Models\User;
use App\Http\requests\login_validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class survey_controller extends Controller
{
public function index(){
    $student=Auth::user()->student;
    $teachers = $student->teachers()->with('user')->get();
        return view('surveys.index',compact('teachers'));
}
public function store(Request $request)
    {
        $request->validate([
            'teacher_id' => 'required|exists:teachers,id',
            'knowledge_level' => 'required|integer|min:1|max:5',
            'teaching_style' => 'required|integer|min:1|max:5',
            'behavior' => 'required|integer|min:1|max:5',
            'punctuality' => 'required|integer|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        $student = Auth::user()->student;

        // بررسی تکراری نبودن نظرسنجی
        $alreadyVoted = Survey::where('student_id', $student->id)
            ->where('teacher_id', $request->teacher_id)
            ->exists();

        if ($alreadyVoted) {
            return redirect()->route('valid');
        }

        Survey::create([
            'student_id' => $student->id,
            'teacher_id' => $request->teacher_id,
            'knowledge_level' => $request->knowledge_level,
            'teaching_style' => $request->teaching_style,
            'behavior' => $request->behavior,
            'punctuality' => $request->punctuality,
            'comment' => $request->comment,
        ]);
return redirect()->route('msg');
}
public function start_app(){
    return view('login');
}
public function validation(login_validation $request){
    $validation = $request->validated();

    $user = User::where('code_melli', $request->code_melli)
        ->where('birth', $request->birth)
        ->first();
    
    if ($user) {
        Auth::login($user);
        if ($user->role === 'teacher') {
            return redirect()->route('panel');
        } elseif ($user->role === 'student') {
            return redirect()->route('home');
        } 
    } else {
        return back()->withErrors(['اطلاعات وارد شده صحیح نیست']);
    }
    
}
public function message(){
    return view('message');
}
public function valid(){
    return view('valid_request');
} 
public function panel(){
   $teacher=auth()->user()->teacher;
   $survey = $teacher->survey()->with('student.user')->get(); 
   return view('surveys/Teacher_panel', compact('survey'));
}
public function home(){
$user=Auth()->user();
if($user){
    return view('notice',compact('user'));
}
else{
    return redirect()->route('login1');
}
}
public function exit(){
Auth()->logout();
return redirect()->route('login1');
}
}

 