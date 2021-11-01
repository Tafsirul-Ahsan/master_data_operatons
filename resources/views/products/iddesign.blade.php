<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application</title>
    <style>
                /* devanagari */
        @font-face {
        font-family: 'Rajdhani';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pb0EPOqeef2kg.woff2) format('woff2');
        unicode-range: U+0900-097F, U+1CD0-1CF6, U+1CF8-1CF9, U+200C-200D, U+20A8, U+20B9, U+25CC, U+A830-A839, U+A8E0-A8FB;
        }
        /* latin-ext */
        @font-face {
        font-family: 'Rajdhani';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pb0EPOleef2kg.woff2) format('woff2');
        unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
        }
        /* latin */
        @font-face {
        font-family: 'Rajdhani';
        font-style: normal;
        font-weight: 500;
        font-display: swap;
        src: url(https://fonts.gstatic.com/s/rajdhani/v10/LDI2apCSOBg7S-QT7pb0EPOreec.woff2) format('woff2');
        unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
        }
        body {
            font-family: 'Rajdhani', sans-serif;
        }
        .font-bold {
            font-weight: bold; 
            font-size: 18px; 
        }

        .name {
            background-color: #000C66;
            text-align:center;
            color:yellow;
            margin: 0px;
            padding: 5px;
        }

        .image {
            margin-top:5px;
            height:150px;
        }

        .detail-container {
            float:left;
            margin-left: 110px;
            margin-top: 20px;
                
        }
    </style>
</head>
<body>
    @foreach ($students as $student)
        <div>
            <img src="{{ $student->logo }}" style="margin-top: 20px;">
            <div>
                <h3 class="name">{{ strtoupper($student->name) }}</h3>
            </div>
            <div style="width: 100px; float:left;">
                <img class="image" src="{{ $student->image }}">
            </div>
            <div class="detail-container">
                <span class="font-bold">ID&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; : {{ $student->student_id }}</span><br>
                <span class="font-bold">Roll&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;: {{ $student->roll }}</span><br>
                <span class="font-bold">Class&nbsp; &nbsp; &nbsp; &nbsp;: {{ $student->class }} </span><br>
                <span class="font-bold">Section&nbsp; &nbsp;: {{ $student->section }} </span><br>
                <span class="font-bold">Year&nbsp; &nbsp; &nbsp; &nbsp; : {{ $student->year }} </span>
            </div>
        </div>
    @endforeach
</body>
</html>