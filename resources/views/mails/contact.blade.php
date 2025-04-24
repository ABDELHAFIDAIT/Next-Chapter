{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="../images/logo-white.png">
    <title>Next Chapter</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.5;
            color: #333;
            margin: 0;
            padding: 0;
        }
        
        section {
            padding: 144px;
            display: flex;
            flex-direction: column;
            gap: 40px;
        }
        
        .logo-container {
            display: flex;
            justify-content: center;
        }
        
        .logo {
            width: 80px;
        }
        
        .content-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
        
        .heading {
            text-align: center;
            font-size: 20px;
            font-weight: 500;
            color: #2563eb;
        }
        
        .message-container {
            background-color: #f3f4f6;
            width: 66.666667%;
            padding: 40px;
            border-radius: 6px;
        }
        
        ul {
            list-style-type: disc;
            font-weight: 300;
            display: flex;
            flex-direction: column;
            gap: 8px;
            padding-left: 20px;
        }
        
        .label {
            font-weight: 500;
            padding-right: 12px;
            color: #1e3a8a;
        }
        
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #f3f4f6;
            font-size: 14px;
            color: #666;
        }
        
        /* Media queries for responsiveness */
        @media (max-width: 1024px) {
            section {
                padding: 80px;
            }
            
            .message-container {
                width: 80%;
            }
        }
        
        @media (max-width: 768px) {
            section {
                padding: 40px;
            }
            
            .message-container {
                width: 90%;
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            section {
                padding: 20px;
            }
            
            .message-container {
                width: 100%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <section>
        <div class="logo-container">
            <img src="../images/logo-black.png" class="logo">
        </div>
        
        <div class="content-container">
            <h1 class="heading">New Contact Message</h1>
            <div class="message-container">
                <ul>
                    <li>
                        <span class="label">First Name : </span>
                        {{ $f_name }}
                    </li>
                    <li>
                        <span class="label">Last Name : </span>
                        {{ $l_name }}
                    </li>
                    <li>
                        <span class="label">Email : </span>
                        {{ $email }}
                    </li>
                    <li>
                        <span class="label">Phone : </span>
                        {{ $phone }}
                    </li>
                    <li>
                        <span class="label">Profession : </span>
                        {{ $profession }}
                    </li>
                    <li>
                        <span class="label">Message : </span>
                        {{ $f_name }}
                    </li>
                </ul>
            </div>
            <div class="footer">
                <p>© 2025 Next Chapter. Tous droits réservés.</p>
            </div>
        </div>
    </section>
</body>
</html> --}}


















<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de Réservation - TaxiWsselni</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
            border-bottom: 2px solid #f3f4f6;
        }
        .logo img{
            width: 100px;
            margin-bottom: 10px;
        }
        .content {
            padding: 20px 0;
        }
        .details {
            background-color: #f3f4f6;
            padding: 15px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            padding-top: 20px;
            border-top: 2px solid #f3f4f6;
            font-size: 14px;
            color: #666;
        }
        .button {
            display: inline-block;
            background-color: #2563eb;
            color: white;
            padding: 12px 24px;
            text-decoration: none;
            border-radius: 6px;
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">
            <img src="https://github.com/ABDELHAFIDAIT/Next-Chapter/blob/main/frontend/images/logo-black.png?raw=true" alt="Logo de Next Chapter" class="h-16">
        </div>
    </div>

    <div class="content">
        <h2>New Contact Message</h2>
        
        <p>You've received a new contact request from NEXT CHAPTER website contact form, you'll find below teh details :</p>
        
        <div class="details">
            <p><strong>First Name :</strong> {{ $f_name }}</p>
            <p><strong>Last Name :</strong> {{ $l_name }}</p>
            <p><strong>Email :</strong> {{ $email }}</p>
            <p><strong>Phone :</strong> {{ $phone }}</p>
            <p><strong>Profession :</strong> {{ $profession }}</p>
            <p><strong>Message :</strong> {{ $content }}</p>
        </div>
    </div>

    <div class="footer">
        <p>© {{ date('Y') }} Next Chapter. Tous droits réservés.</p>
    </div>
</body>
</html>