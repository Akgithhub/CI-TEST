<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <!-- Add Google reCAPTCHA Script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        .title {
            text-align: center; 
        }
        .form {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 30px;
            width: auto;
            border: 2px solid green;
            border-radius: 10px;
            padding: 40px;
        }
        input, textarea {
            border: none;
            border: 2px solid green;
            padding: 20px;
            border-radius: 10px;
            font-size: 1rem;
        }
        button {
            border: none;
            border: 2px solid green;
            padding: 5px 20px;
            border-radius: 10px;
            font-size: 1rem;
            cursor: pointer;
        }
        .g-recaptcha {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="title">Book an Appointment</h1>
        <?php if ($this->session->flashdata('error')): ?>
            <div class="alert alert-danger">
                <?php echo $this->session->flashdata('error'); ?>
            </div>
        <?php endif; ?>
        <form action="<?php echo site_url('appointment/save'); ?>" method="post" class="form">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="appointment_date">Appointment Date:</label>
                <input type="date" id="appointment_date" name="appointment_date" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="details">Details:</label>
                <textarea id="details" name="details" class="form-control"></textarea>
            </div>
            
            <!-- Add reCAPTCHA widget -->
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6Lfo-DMqAAAAAAgPVKWI1xxg_gj5EJ_6MlNibEEz"></div>
            </div>
            
            <button type="submit" class="button">Submit</button>
        </form>
    </div>
</body>
</html>



<!-- 6Lfo-DMqAAAAAAgPVKWI1xxg_gj5EJ_6MlNibEEz - SITE KEY
6Lfo-DMqAAAAANhmPLF6f_fxw5QZBIqGy-PiH0PZ - SECRET KEY -->
<!-- http://localhost/CodeIgnitor/index.php/appointment -->