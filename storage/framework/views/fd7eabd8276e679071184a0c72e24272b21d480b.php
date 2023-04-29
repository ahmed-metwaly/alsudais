<html>
<head>
    <title></title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>الاسم</th>
            <td><?php echo e($data['name']); ?></td>
        </tr>

        <tr>
            <th>البريد الالكتروني</th>
            <td><?php echo e($data['from']); ?></td>
        </tr>

        <tr>
            <th> رقم الجوال</th>
            <td><?php echo e($data['phone']); ?></td>
        </tr>

        <tr>
            <th>الخدمة</th>
            <td><?php echo e($data['service']); ?></td>
        </tr>


        <tr>
            <th>الشركة</th>
            <td><?php echo e($data['company']); ?></td>
        </tr>

        <tr>
            <th> التفاصيل</th>
            <td><?php echo e($data['message']); ?></td>
        </tr>

    </table>
</body>
</html>
<?php /**PATH /home/alsudais/public_html/resources/views/mail/price.blade.php ENDPATH**/ ?>