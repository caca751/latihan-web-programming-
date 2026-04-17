<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabel</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffc0e0 0%, #ffb3d9 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(255, 105, 180, 0.2);
            padding: 40px;
            width: 100%;
            max-width: 600px;
        }

        h1 {
            color: #ff1493;
            text-align: center;
            margin-bottom: 30px;
            font-size: 32px;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        thead {
            background: linear-gradient(145deg, #ff69b4, #ff1493);
            color: white;
        }

        th {
            padding: 15px;
            text-align: left;
            font-weight: 600;
            font-size: 16px;
        }

        td {
            padding: 12px 15px;
            border-bottom: 2px solid #ffe0f0;
            color: #333;
        }

        tbody tr {
            transition: background-color 0.3s ease;
            border: 2px solid #ff69b4;
        }

        tbody tr:hover {
            background-color: #ffe0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>📊 Data Tabel</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Umur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Caca</td>
                    <td>21</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>