<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue</title>
</head>
<body>
    <p>Bienvenue, {{ $user->name }} !</p>
    <p>Votre inscription a été effectuée avec succès.</p>
    <p>Merci de rejoindre notre plateforme.</p>

    <p>Cordialement,</p>
    <p>Votre équipe {{ config('app.name') }}</p>
</body>
</html>
