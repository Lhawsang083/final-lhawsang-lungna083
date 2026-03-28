<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>เครื่องคิดเลขแบบง่าย</title>
</head>
<body>

    <h1>เครื่องคิดเลขแบบง่าย</h1>

    <p>ตัวเลขที่ 1: <input type="number" id="num1"></p>
    <p>ตัวเลขที่ 2: <input type="number" id="num2"></p>

    <p>
        <button id="btnAdd">+</button>
        <button id="btnSub">-</button>
        <button id="btnMul">*</button>
        <button id="btnDiv">/</button>
    </p>

    <p><button id="btnClear">ล้างข้อมูล (Clear)</button></p>

    <h3>ผลลัพธ์: <span id="result">-</span></h3>

    <script>

        function calculate(operator) {
            var n1 = document.getElementById('num1').value;
            var n2 = document.getElementById('num2').value;

            if (n1 === "" || n2 === "") {
                alert("⚠️ กรุณากรอกตัวเลขให้ครบทั้ง 2 ช่องครับ");
                return;
            }

            var num1 = parseFloat(n1);
            var num2 = parseFloat(n2);

            var total;

            if (operator === '+') {
                total = num1 + num2;
            } 
            else if (operator === '-') {
                total = num1 - num2;
            } 
            else if (operator === '*') {
                total = num1 * num2;
            } 
            else if (operator === '/') {
                if (num2 === 0) {
                    alert("⚠️ ไม่สามารถหารด้วย 0 ได้ครับ");
                    document.getElementById('result').innerText = "Error (หารด้วย 0)";
                    return;
                }
                total = num1 / num2;
                total = Math.round(total * 10000) / 10000;
            }

            document.getElementById('result').innerText = total;
        }

        document.getElementById('btnAdd').onclick = function() {
            calculate('+');
        };

        document.getElementById('btnSub').onclick = function() {
            calculate('-');
        };

        document.getElementById('btnMul').onclick = function() {
            calculate('*');
        };

        document.getElementById('btnDiv').onclick = function() {
            calculate('/');
        };

        document.getElementById('btnClear').onclick = function() {
            document.getElementById('num1').value = "";
            document.getElementById('num2').value = "";
            document.getElementById('result').innerText = "-";
        };

    </script>

</body>
</html>