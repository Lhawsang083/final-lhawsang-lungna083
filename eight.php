<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>กดปุ่มเพื่อเปลี่ยนสีหน้าเว็บ</title>
    <style>
        body {
            font-family: sans-serif;
            text-align: center;
            margin-top: 100px;
            transition: background-color 0.5s ease; 
        }

        h1 {
            color:#333;
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 8px;
            color: white;
            font-weight: bold;
            box-shadow: 0 4px 6pxrgba(0,0,0,0.1);
        }

        #greenBtn { background-color:#4CAF50; }
        #greenBtn:hover { background-color:#45a049; }

        #orangeBtn { background-color:#FF9800; }
        #orangeBtn:hover { background-color:#e68a00; }

        #purpleBtn { background-color:#9C27B0; }
        #purpleBtn:hover { background-color:#8e24aa; }

        #clearBtn { 
            background-color:#f44336;
            margin-top: 20px;
        }
        #clearBtn:hover { background-color:#d32f2f; }

    </style>
</head>
<body>

    <h1>กดปุ่มเพื่อเปลี่ยนสีพื้นหลัง</h1>

    <button id="greenBtn">เขียว</button>

    <button id="orangeBtn">ส้ม</button>

    <button id="purpleBtn">ม่วง</button>

    <br> <button id="clearBtn">Clear (ล้างสี)</button>

    <script>
        function changeBackgroundColor(color) {
            document.body.style.backgroundColor = color;
        }

        document.getElementById('greenBtn').onclick = function() {
            changeBackgroundColor('green');
        };

        document.getElementById('orangeBtn').onclick = function() {
            changeBackgroundColor('orange');
        };

        document.getElementById('purpleBtn').onclick = function() {
            changeBackgroundColor('purple');
        };

        document.getElementById('clearBtn').onclick = function() {
            changeBackgroundColor('white');
        };
    </script>

</body>
</html>