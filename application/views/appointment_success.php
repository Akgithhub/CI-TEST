<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Success</title>
    <style>
        .container {
            text-align: center;
            padding: 20px;
        }
        .data-display {
            border: 2px solid green;
            border-radius: 10px;
            padding: 20px;
            margin: 20px auto;
            width: fit-content;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Appointment Submitted Successfully!</h1>
        <div class="data-display">
            <h2>Your Appointment Details:</h2>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($appointment_data['name']); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($appointment_data['email']); ?></p>
            <p><strong>Phone:</strong> <?php echo htmlspecialchars($appointment_data['phone']); ?></p>
            <p><strong>Appointment Date:</strong> <?php echo htmlspecialchars($appointment_data['appointment_date']); ?></p>
            <p><strong>Details:</strong> <?php echo htmlspecialchars($appointment_data['details']); ?></p>
        </div>
        <button onclick="window.location.href = '<?php echo site_url('appointment'); ?>';">Book Another Appointment</button>
    </div>
</body>
</html>
