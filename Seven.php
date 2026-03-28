<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>webpage รับค่าเวลา hh:mm:ss</title>
    <style>
        body { font-family: sans-serif; text-align: center; margin-top: 50px; }
        input { padding: 10px; font-size: 16px; width: 150px; text-align: center; }
        button { padding: 10px 20px; font-size: 16px; cursor: pointer; }
        #displayZone { margin-top: 30px; font-size: 1.5em; color: blue; }
    </style>
</head>
<body>

    <h1>รับค่าเวลา hh mm ss</h1>

    <input type="text" id="timeInput" placeholder="hh:mm:ss" maxlength="8">
    
    <button id="checkButton">ดูผลลัพธ์</button>

    <div id="displayZone">...รอรับค่า...</div>

    <script>
        var btn = document.getElementById('checkButton');

        btn.onclick = function() {
            var textTime = document.getElementById('timeInput').value;
            
            if(textTime === "") { return; }

            var parts = textTime.split(':');

            var result = parts[0] + ' ชั่วโมง ' + parts[1] + ' นาที ' + parts[2] + ' วินาที';

            document.getElementById('displayZone').innerText = result;
        };
    </script>

</body>
</html>