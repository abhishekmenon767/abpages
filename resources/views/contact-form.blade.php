<!DOCTYPE html>
<html>
<head>
    <title>Email</title>
</head>
<body>
    <h2>Hello {{ $name }},</h2>
    
    <p>You have received an email with the following details:</p>
    
    <p><strong>Email Subject:</strong> {{ $subject }}</p>
    
    <p><strong>Message:</strong></p>
    <p>{{ $message }}</p>
    
    <p>Thank you!</p>
</body>
</html>
