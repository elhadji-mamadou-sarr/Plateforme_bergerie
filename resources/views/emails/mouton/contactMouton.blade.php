
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <p>Nouvelle demande de contact. !</p>
    <p>Une nouvelle demande de contact a été fait pour le mouton <a href="{{ route('eleveur.mouton.show', $mouton) }}">{{ $mouton->nom_mouton}}
        de race {{ $mouton->race }}</a></p>

    <p>
        -Prénom : {{ $data['name'] }} <br>
        -Email : {{ $data['email'] }} <br>

        **Message : **<br/>
            {{ $data['message'] }}</p>
</body>
</html>
