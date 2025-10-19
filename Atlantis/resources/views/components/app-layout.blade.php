<!DOCTYPE html>
{{-- Questa riga ha 2 funzioni principali: 
1)  app()->getLocale()	È una funzione PHP di Laravel che recupera la lingua corrente impostata nell'applicazione (ad esempio, it per l'italiano o en per l'inglese).
2) str_replace('_', '-', ...)	A volte, le locale di Laravel usano un underscore (es. en_US), mentre lo standard HTML richiede un trattino (es. en-US). Questa funzione si assicura che il formato sia corretto per l'HTML, sostituendo l'_ con un -. --}}
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    {{-- {{ config('app.name', 'Laravel') }}	Dinamico/Variabile	Recupera il nome dall'ambiente. Utile per cambiare il nome dell'app senza toccare i file Blade e fornisce un fallback.
        <title>Nome Applicazione</title>	Fisso/Statico	Il titolo è bloccato in quel file. Se devi cambiarlo, devi modificare quel file e tutti gli altri file che contengono lo stesso titolo. --}}
    <title>{{ config('app.name', 'Atlantis') }}</title>




</head>

<body>

    <x-navbar />

    {{ $slot }}

</body>

</html>
