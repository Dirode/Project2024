<!-- resources/views/emails/booking_confirmation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Booking Confirmation</h1>
    <p>Hello,</p>
    <p>Your booking has been confirmed.</p>
    <p>Details:</p>
    <ul>
        <li>Booking ID: {{ $booking->id }}</li>
        <li>Hall: {{ $booking->hall }}</li>
        <li>Booking Date: {{ $booking->date }}</li>
        <li>Booking From {{ $booking->start_time }} to {{ $booking->end_time }}</li>
        <!-- Add more booking details here -->
    </ul>
    <p>Thank you for booking with us.</p>
</body>
</html>
