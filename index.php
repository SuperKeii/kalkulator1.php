<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Stylish</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .calculator h2 {
            text-align: center;
        }

        .calculator form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .calculator input[type="text"],
        .calculator select,
        .calculator input[type="submit"] {
            margin: 5px 0;
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .calculator input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .calculator input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .calculator p {
            margin-top: 10px;
            text-align: center;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Kalkulator Stylish</h2>
        <form method="post" action="">
            <input type="text" name="angka1" placeholder="Angka pertama" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="angka2" placeholder="Angka kedua" required>
            <input type="submit" name="hitung" value="Hitung">
        </form>

        <?php
        if (isset($_POST['hitung'])) {
            $angka1 = $_POST['angka1'];
            $angka2 = $_POST['angka2'];
            $operator = $_POST['operator'];

            switch ($operator) {
                case '+':
                    $hasil = $angka1 + $angka2;
                    break;
                case '-':
                    $hasil = $angka1 - $angka2;
                    break;
                case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                case '/':
                    if ($angka2 != 0) {
                        $hasil = $angka1 / $angka2;
                    } else {
                        $hasil = "Tidak dapat dibagi oleh 0";
                    }
                    break;
                default:
                    $hasil = "Operator tidak valid";
                    break;
            }

            echo "<p>Hasil: " . $hasil . "</p>";
        }
        ?>
    </div>
</body>
</html>