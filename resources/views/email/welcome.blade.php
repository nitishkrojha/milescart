<!DOCTYPE html>
<html>

<head>
    <title>Welcome to Our Interior Design Service</title>
</head>

<body>
    <h1>Welcome, {{ $customer->name }}!</h1>
    <p>Thank you for signing up for our interior design service. We're excited to work with you to create your dream space.</p>
    <p>Your account details are as follows:</p>
    <ul>
        <li>Email: {{ $customer->email }}</li>
    </ul>
    <p>If you have any questions or concerns, please don't hesitate to reach out to us at support@interiordesign.com.</p>
    <p>Best regards,</p>
    <p>The Interior Design Team</p>
</body>

</html>