<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.morioh.net/fa/v5.13.0/css/fontawesome.min.css" rel="stylesheet" />
    <link href="https://cdn.morioh.net/fa/v5.13.0/css/regular.min.css" rel="stylesheet" />

    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>

<body>
    <?php echo app('Tightenco\Ziggy\BladeRouteGenerator')->generate(); ?>
    @inertia
</body>

</html>
