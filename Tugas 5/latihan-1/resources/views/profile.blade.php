<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
                body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        header .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
        }

        header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        header .title {
            font-size: 1.2em;
            margin: 10px 0 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px 0;
        }

        section {
            padding: 60px 0;
        }

        .contact {
            background-color: white;
            margin: 20px 0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
        }

        footer p {
            margin: 0;
        }

    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="{{ asset('images/elden.png') }}" alt="Profile Photo" class="profile-photo">
            <h1>{{ $profile['name'] }}</h1>
            <p class="title">{{ $profile['bio'] }}</p>
        </div>
    </header>

    <section class="contact">
        <div class="container">
            <h2>Biodata</h2>
            <p>Gender: {{ $profile['gender'] }}</p>
            <p>Umur: {{ $profile['umur'] }}</p>
            <p>Alamat: {{ $profile['alamat'] }}</p>
            <p>Email: {{ $profile['email'] }}</p>
            <p>Telepon: {{ $profile['phone'] }}</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 {{ $profile['name'] }}. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
