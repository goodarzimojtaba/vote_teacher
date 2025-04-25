<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نتایج نظرسنجی</title>
    <link rel="stylesheet" href="https://yarjani19.com/mark/management_style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
</head>
<body>
<style>
        @font-face {
            font-family: "IRANSans";
            src: url("https://yarjani19.com/mark/fonts/IRANSans.ttf")format("truetype");
            src: url("https://yarjani19.com/mark/fonts/IRANSans.woff")format("woff");
            src: url("https://yarjani19.com/mark/fonts/IRANSans.woff2")format("woff2");

        }
    </style>
    <div class="container">
    <button onclick="exportToExcel()" style="margin-bottom: 10px;font-family:IRANSans;">📁 خروجی اکسل</button>
    <a style="font-family:Vazir" href="{{route('login1')}}" name="submit" class="signup-btn">خروج از سامانه</a>
<h2 style="font-family:IRANSans;text-align:center;color:blue;">نظرات دانش آموزان به شما</h2>
<h4 style="font-family:IRANSans;text-align:center;color:green;">همکار گرانقدر جدول زیر براساس نظرسنجی دانش آموزان گردآوری گردیده و بصورت یکپارچه و در لحظه بروزرسانی می گردد، بیشترین امتیاز در هر شاخص 5 و کمترین امتیاز 1 می باشد.</h4>
        <table id="report">
            <thead>
                <tr> 
                <th style="font-family:IRANSans;">انتقاد یا پیشنهاد</th>
                    <th style="font-family:IRANSans;">نظم و وقت شناسی</th>
                    <th style="font-family:IRANSans;">رفتار و اخلاق</th>
                    <th style="font-family:IRANSans;">روش تدریس</th>
                    <th style="font-family:IRANSans;">سطح علمی</th>
                    <th style="font-family:IRANSans;">دانش آموز</th>
                    <th style="font-family:IRANSans;">ردیف</th>


                </tr>
            </thead>
            <tbody>
                @foreach($survey as $index=> $survey)
                <tr>
                    <td style="font-family:IRANSans;"><strong>{{$survey->comment}}</strong></td>
                    <td style="font-family:IRANSans;">{{$survey->punctuality}}</td>
                    <td style="font-family:IRANSans;">{{$survey->behavior}}</td>
                    <td style="font-family:IRANSans;">{{$survey->teaching_style}}</td>
                    <td style="font-family:IRANSans;">{{$survey->knowledge_level}}</td>
                    <td style="font-family:IRANSans;">{{$survey->student->user->name}}</td>
                    <td style="font-family:IRANSans;">{{$index+1}}  </td>
                    <td style="font-family:IRANSans;"><span class="status waiting"></span></td>
                </tr>

           @endforeach    
            </tbody>
        </table>
        <h6 style="font-family:IRANSans;text-align:center;">Developed by: Mojtaba Goodarzi</h6>
        <p style="font-family:IRANSans;text-size:12px;text-align:center;color:blue;"></p>
        <script>
            function exportToExcel(){
                let table= document.getElementById("report");
                let excel= XLSX.utils.table_to_book(table,{sheet:"گزارش کارآموزی"});
                XLSX.writeFile(excel,"گزارش.xlsx");
            }
            </script>
    </div>
</body>
</html>
