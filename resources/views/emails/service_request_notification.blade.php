<!DOCTYPE html>
<html>
<head>
    <title>New Legal Service Request</title>
</head>
<body>
    <h2>Hello {{ $legalWorker->name }},</h2>

    <p>You have received a new legal service request from a user on <strong>Legal Marketplace</strong>.</p>

    <p><strong>User Name:</strong> {{ $user_name }}</p>
    <p><strong>User Email:</strong> {{ $user_email }}</p>
    <p><strong>Description:</strong></p>
    <blockquote>
        {{ $description }}
    </blockquote>

    <p>Please respond to the user at your earliest convenience.</p>

    <br>
    <p>Thank you,<br><strong>Legal Marketplace</strong></p>
</body>
</html>
