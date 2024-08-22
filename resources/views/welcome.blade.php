<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>
</head>
<body>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700&display=swap');

        body{
            font-family: 'Titillium Web', sans-serif;
        }

        #counter {
            height: 100vh;
            display:flex;
            justify-content: center;
            align-items: center;
        }

    </style>

    {{-- forma formas de chamar os componentes--}}
        @livewire('message')
    {{--   <livewire:message/> --}}
        
    <livewire:scripts/>
    {{-- @livewireScripts--}}

</body>
</html>