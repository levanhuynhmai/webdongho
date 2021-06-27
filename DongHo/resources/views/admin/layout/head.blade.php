<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>

    <title> Admin</title>

    <link href="{{ asset("vendor/app.css") }}" rel="stylesheet">
    
    <script src="{{ asset("vendor/app.js") }}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    @if(!empty($config['editor_content']) && $config['editor_content'] == 'ckeditor' )
        <script src="{{ asset("common/plugin/ckeditor4/ckeditor.js") }}" type="text/javascript"></script>
    @endif

</head>
