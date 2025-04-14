<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'ShopCar') }}</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Styles -->
    <style>
        /* Reset CSS */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Instrument Sans', sans-serif;
            line-height: 1.5;
            overflow-x: hidden;
        }

        /* Header Styles */
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 40px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            z-index: 10;
        }

        .header-logo {
            height: 40px;
        }

        .header-nav {
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .header-nav-item {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }

        .header-nav-item:hover {
            color: #1a73e8;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .header-user-icon {
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
        }

        .header-button {
            background-color: #1a73e8;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-weight: bold;
            cursor: pointer;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 0.5px;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .header-button:hover {
            background-color: #1557b0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .menu-toggle {
            font-size: 24px;
            color: #333;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        /* Video Styles */
        .video-container {
            position: relative;
            height: calc(100vh - 74px); /* Subtract header height */
            width: 100%;
            overflow: hidden;
        }

        .hero-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .video-overlay h1 {
            font-size: 48px;
            font-weight: bold;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .video-overlay p {
            font-size: 24px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 992px) {
            .header-nav {
                display: none;
            }

            .video-overlay h1 {
                font-size: 32px;
            }

            .video-overlay p {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    @include('components.header')
    
    <main>
        @yield('content')
    </main>
    
    <footer>
        <!-- Footer content -->
    </footer>
</body>
</html>
