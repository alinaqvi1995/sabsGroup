<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coming Soon | SA Business Solutions Group</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #c9a050; /* Gold */
            --dark: #0a0e17;
            --light: #ffffff;
            --glass: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--dark);
            color: var(--light);
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .bg-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url("{{ asset('img/coming-soon-bg.png') }}") no-repeat center center;
            background-size: cover;
            filter: brightness(0.4);
            z-index: -1;
        }

        .container {
            text-align: center;
            max-width: 800px;
            padding: 2rem;
            z-index: 1;
        }

        .logo-text {
            font-family: 'Montserrat', sans-serif;
            font-size: 4rem;
            font-weight: 800;
            color: #FFAE00;
            text-transform: uppercase;
            line-height: 1;
            display: inline-block;
        }

        .logo-details {
            display: inline-block;
            text-align: left;
            border-left: 2px solid rgba(255, 255, 255, 0.2);
            padding-left: 20px;
            margin-left: 15px;
            vertical-align: middle;
        }

        .logo-details h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 600;
            color: #fff;
            text-transform: uppercase;
            margin: 0;
            letter-spacing: 2px;
            line-height: 1;
        }

        .logo-details span {
            font-family: 'Montserrat', sans-serif;
            font-size: 0.8rem;
            font-weight: 400;
            text-transform: uppercase;
            letter-spacing: 12px;
            color: rgba(255, 255, 255, 0.5);
            display: block;
            margin-top: 8px;
        }
        
        .logo {
            margin-bottom: 3.5rem;
            animation: fadeInDown 1s ease-out;
        }

        .content-card {
            background: var(--glass);
            backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            padding: 4rem 3rem;
            border-radius: 30px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease-out;
        }

        h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1rem;
            letter-spacing: -1px;
            background: linear-gradient(to right, #fff, var(--primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .countdown {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .count-item {
            display: flex;
            flex-direction: column;
        }

        .count-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
        }

        .count-label {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, 0.5);
        }

        .newsletter-form {
            display: flex;
            gap: 10px;
            max-width: 500px;
            margin: 0 auto;
        }

        input {
            flex: 1;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            padding: 1rem 1.5rem;
            border-radius: 12px;
            color: #fff;
            font-family: inherit;
            outline: none;
            transition: all 0.3s;
        }

        input:focus {
            border-color: var(--primary);
            background: rgba(255, 255, 255, 0.1);
        }

        button {
            background: var(--primary);
            color: #000;
            border: none;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(201, 160, 80, 0.3);
            filter: brightness(1.1);
        }

        .social-links {
            margin-top: 3rem;
            display: flex;
            justify-content: center;
            gap: 1.5rem;
        }

        .social-links a {
            color: rgba(255, 255, 255, 0.5);
            font-size: 1.5rem;
            transition: all 0.3s;
        }

        .social-links a:hover {
            color: var(--primary);
            transform: scale(1.2);
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 600px) {
            h1 { font-size: 2.5rem; }
            .countdown { gap: 1rem; }
            .count-number { font-size: 1.5rem; }
            .newsletter-form { flex-direction: column; }
        }
    </style>
</head>
<body>
    <div class="bg-overlay"></div>
    
    <div class="container">
        <div class="logo">
            <a href="{{ url('/') }}" style="text-decoration: none; display: inline-block; text-align: left;">
                <div style="font-family: 'Montserrat', sans-serif; line-height: 1; text-transform: uppercase;">
                    <span style="font-size: 5rem; font-weight: 800; color: #FFAE00; display: block; letter-spacing: 2px;">SA BUSINESS</span>
                    <span style="font-size: 2rem; font-weight: 600; color: #fff; display: block; letter-spacing: 12px; margin-top: 15px;">Solutions Group</span>
                </div>
            </a>
        </div>

        <div class="content-card">
            <h1>Something Big is Coming</h1>
            <p>Our website is currently under construction. We are working hard to give you the best experience. Stay tuned!</p>
            
            <div class="countdown">
                <div class="count-item">
                    <span class="count-number" id="days">02</span>
                    <span class="count-label">Days</span>
                </div>
                <div class="count-item">
                    <span class="count-number" id="hours">08</span>
                    <span class="count-label">Hours</span>
                </div>
                <div class="count-item">
                    <span class="count-number" id="minutes">45</span>
                    <span class="count-label">Mins</span>
                </div>
                <div class="count-item">
                    <span class="count-number" id="seconds">30</span>
                    <span class="count-label">Secs</span>
                </div>
            </div>

            @if(session('success'))
                <div style="background: rgba(0,255,0,0.1); color: #00ff00; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div style="background: rgba(255,0,0,0.1); color: #ff0000; padding: 10px; border-radius: 5px; margin-bottom: 20px;">
                    {{ $errors->first() }}
                </div>
            @endif

            <form class="newsletter-form" action="{{ route('subscribe') }}" method="POST">
                @csrf
                <input type="email" name="email" placeholder="Enter your email for updates" required>
                <button type="submit">Notify Me</button>
            </form>

            <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <script>
        // Simple countdown logic
        let days = 2, hours = 8, minutes = 45, seconds = 30;
        
        function updateCountdown() {
            if (seconds > 0) seconds--;
            else {
                seconds = 59;
                if (minutes > 0) minutes--;
                else {
                    minutes = 59;
                    if (hours > 0) hours--;
                    else {
                        hours = 23;
                        if (days > 0) days--;
                    }
                }
            }
            
            document.getElementById('days').innerText = days.toString().padStart(2, '0');
            document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
        }

        setInterval(updateCountdown, 1000);
    </script>
</body>
</html>
