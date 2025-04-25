<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نظرسنجی</title>
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
        <h2 style="font-family:Vazir">سامانه نظرسنجی هنرستان یارجانی</h2>
        @if($errors->any())
        @foreach($errors->all() as $error)
        <label style="font-family:Vazir">{{$error}}</label>
@endforeach
@endif
        <form method="POST" action="{{route('login')}}">
            @csrf
            <label style="font-family:Vazir;text-align:center;">کد ملی</label>
            <input type="number" name="code_melli" autocomplete="off" maxlength="12" style="font-family:Vazir;text-align:center;" value="{{old('code_melli')}}" placeholder="کد ملی" required>
            
            <label style="font-family:Vazir;text-align:center;" >تاریخ تولد</label>
            <div class="password-container">
                <input type="text" name="birth" autocomplete="off" maxlength="8" style="font-family:Vazir;text-align:center;" value="{{old('birth')}}" placeholder="مثال: 860112 " required>
                <i class="fas fa-eye-slash"></i>
            </div>


            <button style="font-family:Vazir" type="submit" name="submit" class="signup-btn">ورود به سامانه</button>
        <p style="font-family:Vazir;color:red;text-align:center;">کد ملی خود را بدون 0 در ابتدای آن وارد کنید</p>
        <br>
        <p style="font-family:Vazir;color:red;text-align:center;">بطور مثال اگر تاریخ تولد شما 21 فروردین 1386 است آن را بصورت 860121 وارد نمایید</p>

        </form>
    </div>
</body>
</html>
