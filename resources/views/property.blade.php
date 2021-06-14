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
                font-size: 36px;
                padding-top: 5rem;
            }

            .reviews {
                list-style-type: none;
                padding: 0;
            }

            .reviews .rating {
                display: inline-block;
                font-weight: bold;
            }

        </style>
    </head>
    <body>
        <div class="full-height">
            <div class="content">
                <p><a href="/">< Go back</a></p>
                <div class="title m-b-md">
                    {{ $property->title }}
                </div>
                <div>
                    <h3>Type</h3>
                    <p>{{ $property->type()->title }}</p>
                </div>
                <div>
                    <h3>Reviews</h3>
                    <ul class="reviews">
                    @foreach($property->reviews() as $review)
                    <li><span class="rating">{{ $review->rating }} stars</span> - <span>{{ $review->review }}</span></li>
                    @endforeach
                    </ul>
                </div>
                <h3>Leave a review</h3>
                <form action="/review/{{ $property->property_id }}" method="POST">
                    @csrf
                    <label for="rating">Rating</label>
                    <div>
                        <label for="rating1"><input type="radio" name="rating" value="1" id="rating1"> 1</label>
                        <label for="rating2"><input type="radio" name="rating" value="2" id="rating2"> 2</label>
                        <label for="rating3"><input type="radio" name="rating" value="3" id="rating3"> 3</label>
                        <label for="rating4"><input type="radio" name="rating" value="4" id="rating4"> 4</label>
                        <label for="rating5"><input type="radio" name="rating" value="5" id="rating5"> 5</label>
                    </div>
                    <label for="review">Review</label>
                    <div>
                        <textarea name="review" id="review" cols="30" rows="10"></textarea>
                    </div>
                    <div>
                        <input type="submit" />
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
