<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>شروع نظرسنجی</title>
    <link rel="stylesheet" href="https://yarjani19.com/assets/style_mobile.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="" alt="">
        </div>
        <style>
            @font-face {
                font-family: "Vazir";
                src: url("https://yarjani19.com/mark/fonts/Vazir.ttf")format("Truetype");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff")format("woff");
                src: url("https://yarjani19.com/mark/fonts/Vazir.woff2")format("woff2");
            }
            </style>
        <h2 style="font-family:Vazir">نظرسنجی</h2>
        <h4 style="font-family:Vazir;color:green;">دانش آموز عزیز می توانید در شاخص های مربوطه از 1 تا 5 به معلم تان امتیاز بدهید، 5 بالاترین امتیاز و 1 کمترین امتیاز است.</h4>
        @foreach($errors->all() as $error)
        <label style="font-family:Vazir">{{$error}}</label>
@endforeach
        <form method="POST" action="{{route('surveys.store')}}">
            @csrf
                <label  style="font-family:Vazir;text-align:center;" class="fas fa-eye-slash" >ابتدا معلم مورد نظر را انتخاب نمایید</label>
                <div class="password-container">
                <select class="password-container" name="teacher_id" id="teacher_id"
                style="font-family:Vazir; text-align:center; width:300px;">
                @foreach($teachers as $teacher)
               <option value="{{$teacher->id}}" style="font-family:Vazir;text-align:center;">{{$teacher->user->name}}</option>

                @endforeach
               </select>
        <br>
               
                <label  style="font-family:Vazir;text-align:center;" >سطح علمی</label>
            <div class="password-container">
            <input type="number" name="knowledge_level" id="knowledge_level" class="form-control" min="1" max="5" required>  
            @error('knowledge_level')
                <small class="text-danger">{{ $message }}</small>
            @enderror       
                   <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;">روش تدریس</label>
            <div class="password-container">
            <input type="number" name="teaching_style" id="teaching_style" class="form-control" min="1" max="5" required>
            @error('teaching_style')
                <small class="text-danger">{{ $message }}</small>
            @enderror
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >رفتار و اخلاق</label>
            <div class="password-container">
            <input type="number" name="behavior" id="behavior" class="form-control" min="1" max="5" required> 
            @error('behavior')
                <small class="text-danger">{{ $message }}</small>
            @enderror               
            <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >وقت شناسی و بازدهی کلاس</label>
            <div class="password-container">
            <input type="number" name="punctuality" id="punctuality" class="form-control" min="1" max="5" required>
            @error('punctuality')
                <small class="text-danger">{{ $message }}</small>
            @enderror
                <i class="fas fa-eye-slash"></i>
                <label  style="font-family:Vazir;text-align:center;" >در صورت داشتن انتقاد و پیشنهادی در خصوص راجع این معلم در کادر زیر بنویسید</label>
            <div class="password-container">
            <textarea style="font-family:Vazir;width:300px;text-align:right;" name="comment" id="comment" class="form-control"  rows="3"></textarea>
            @error('comment')
                <small class="text-danger">{{ $message }}</small>
            @enderror
                <i class="fas fa-eye-slash"></i>
            </div>

            <button style="font-family:Vazir" type="submit" name="submit" class="signup-btn">ثبت نظر </button>
            <p style="font-family:Vazir;Font-size:12px;text-align:center;">Developed by: Mojtaba Goodarzi</p>
        </form>
    </div>
</body>
</html>
