<html>
<head>
    <title></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>الاسم</th>
            <td>{{ $data['name'] }}</td>
        </tr>

        <tr>
            <th>البريد الالكتروني</th>
            <td>{{ $data['from'] }}</td>
        </tr>

        <tr>
            <th> رقم الجوال</th>
            <td>{{ $data['phone'] }}</td>
        </tr>

        <tr>
            <th>المسمي الوظيفي</th>
            <td>{{ $data['service'] }}</td>
        </tr>

        <tr>
            <th> التفاصيل</th>
            <td>{{ $data['message'] }}</td>
        </tr>

    </table>
</body>
</html>
