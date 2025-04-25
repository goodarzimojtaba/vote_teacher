<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پیام</title>
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
            <h2 style="font-family:Vazir;">{{$user->name}} سلام</h2>
        <h4 style="font-family:Vazir;color:green;">در نظر داشته باشید اطلاعات شما در این فرم بصورت محرمانه باقی خواهد ماند و تاثیری در روند نمرات و امتحانات شما ندارد، لذا از شما درخواست می گردد صادقانه به سوالات نظرسنجی پاسخ دهید.</h4>
        <br>
        <a style="font-family:Vazir" href="{{route('surveys.index')}}" name="submit" class="signup-btn">ورود به فرم نظرسنجی معلمان</a>
    </div>
</body>
</html>
