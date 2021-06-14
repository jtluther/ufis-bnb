<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>UFIS-BNB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                padding-top: 5rem;
            }

            .types {
                margin-bottom: 20px;
            }

            .links {
                margin-bottom: 20px;
            }

            .links > a {
                color: #636b6f;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: block;
                margin: 5px 0px;
            }

            .links > a span {
                text-transform: none;
                letter-spacing: 0;
            }
        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <div class="title m-b-md">
                    Welcome to UFIS-BNB!
                </div>
                <div class="types">
                    Filter By
                    @foreach($types as $type)
                    <a href="/?type={{ $type->type_id }}">{{ $type->title }}</a>
                    @endforeach
                </div>
                <div class="links">
                    @foreach($properties as $property)
                        @if( request()->get('type'))
                            @if( request()->get('type') == $property->type_id )
                                <a href="/property/{{ $property->property_id }}">{{ $property->title }}</a>
                            @endif
                        @else
                            <a href="/property/{{ $property->property_id }}">{{ $property->title }} - <span>{{ $property->averageRating() }} rating</span></a>
                        @endif
                    @endforeach
                </div>
                <div>
                    @if( request()->get('sortBy'))
                        <a href="/">Normal sorting</a>
                    @else
                        <a href="/?sortBy=averageRating">Sort by average rating</a>
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
