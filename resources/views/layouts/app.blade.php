<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legal Marketplace</title>
    <style>
        /* Base Styles */
        body { 
            font-family: 'Roboto', Arial, sans-serif; 
            background: #f9f9f9; 
            margin: 0; 
            padding: 0;
            color: #333;
            transition: background-color 0.3s ease;
        }
        header { 
            background: linear-gradient(135deg, #003366, #2d89ef); 
            color: white; 
            padding: 20px 0; 
            text-align: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 1s ease-out;
        }
        h1 { 
            font-size: 36px; 
            margin: 0; 
            font-weight: 500;
            animation: fadeIn 1s ease-in;
        }
        .container { 
            max-width: 1200px; 
            margin: 30px auto; 
            padding: 20px; 
            background: white; 
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            animation: slideUp 0.8s ease-out;
        }
        h2 { 
            margin-top: 0; 
            font-size: 28px; 
            color: #003366;
        }
        form input, form select, form textarea {
            width: 100%; 
            margin-bottom: 15px; 
            padding: 12px;
            border: 1px solid #ccc; 
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        form input:focus, form select:focus, form textarea:focus {
            border-color: #2d89ef;
            outline: none;
        }
        .btn { 
            background: #2d89ef; 
            color: white; 
            border: none; 
            padding: 12px 20px; 
            border-radius: 8px; 
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease-in-out;
        }
        .btn:hover { 
            background: #0056b3; 
            transform: scale(1.05);
        }
        table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-top: 20px; 
            animation: fadeIn 1s ease-out;
        }
        table, th, td { 
            border: 1px solid #ddd; 
        }
        th, td { 
            padding: 15px; 
            text-align: left;
            font-size: 16px;
        }
        th { 
            background-color: #003366; 
            color: white; 
        }
        .filters input { 
            margin-right: 10px; 
        }
        .message { 
            padding: 15px; 
            background: #e0ffe0; 
            border: 1px solid #b2ffb2; 
            margin-bottom: 20px; 
            border-radius: 8px; 
            font-size: 16px;
            animation: fadeIn 1s ease-out;
        }
        footer { 
            text-align: center; 
            padding: 20px 0; 
            background: #222; 
            color: white; 
            font-size: 14px;
            margin-top: 40px;
        }

        /* Animations */
        @keyframes slideIn {
            0% { transform: translateY(-50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideUp {
            0% { transform: translateY(30px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }

        /* Responsive Design */
        @media screen and (max-width: 768px) {
            .container { 
                padding: 15px; 
                max-width: 100%; 
            }
            header h1 { 
                font-size: 28px; 
            }
            table th, table td { 
                font-size: 14px; 
                padding: 12px;
            }
            .btn { 
                padding: 10px 15px; 
            }
        }
    </style>
</head>
<body>
<header>
    <h1>Legal Marketplace</h1>
</header>

<div class="container">
    @if(session('success'))
        <div class="message">
            <img class="legal-icon" src="https://image.shutterstock.com/image-vector/law-icon-lawyer-logo-legal-260nw-1090759229.jpg" alt="Legal Icon">
            {{ session('success') }}
        </div>
    @endif
    @yield('content')
</div>

<footer>
    <p>© 2025 Legal Marketplace. All rights reserved.</p>
</footer>

</body>
</html>
