<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            background-image: url('https://www.transparenttextures.com/patterns/cubes.png'); /* Replace with your pattern URL */
            color: #333;
        }
        .email-container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #4CAF50;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-bottom: 4px solid #3e8e41;
        }
        .email-header h2 {
            margin: 0;
            font-size: 24px;
        }
        .email-body {
            padding: 20px;
        }
        .email-body p {
            margin: 15px 0;
            color: #555;
        }
        .email-body strong {
            color: #222;
        }
        .email-footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #888;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header Section -->
        <div class="email-header">
            <h2>New Contact Form Submission</h2>
        </div>
        
        <!-- Body Section -->
        <div class="email-body">
            <p><strong>Name:</strong> {{ $details['username'] }}</p>
            <p><strong>Email:</strong> {{ $details['email'] }}</p>
            <p><strong>Subject:</strong> {{ $details['subject'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $details['message'] }}</p>
        </div>
        
        <!-- Footer Section -->
        <div class="email-footer">
            <p>This is an automated email. Please do not reply directly to this message.</p>
        </div>
    </div>
</body>
</html>
