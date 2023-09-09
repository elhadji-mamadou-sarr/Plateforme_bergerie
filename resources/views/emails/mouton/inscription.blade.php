<x-mail::message>
# Bienvenue

<p>Bienvenue, {{ $user->name }} !</p>
    <p>Votre inscription a été effectuée avec succès.</p>
    <p>Merci de rejoindre notre plateforme.</p>
    <p> Identifiants :
    Email : {{ $user->name }} <br>
    Mot de passe : {{ $user->password }} <br>

    On vous prie de ne pas partager ces informations. </p>
    <p>Cordialement,</p>
    <p>Votre équipe {{ config('app.name') }}</p>

</x-mail::message>
