<!-- resources/views/emails/booking-request-successful.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Request Successful</title>
</head>
<body>
    <h1>Booking Request Successful</h1>
    <p>Dear {{ $user->name }},</p>
    <p>Your booking request has been successfully submitted.</p>
    <p>Here are the details of your booking:</p>
    
    <ul>
        <li>Hall: {{ $booking->hall->name }}</li>
        <li>Date: {{ $booking->date }}</li>
        <li>Start Time: {{ $booking->start_time }}</li>
        <li>End Time: {{ $booking->end_time }}</li>
        <li>Reason: {{ $booking->reason }}</li>
    </ul>
    <p>Thank you for choosing our venue!</p>
</body>
</html>
