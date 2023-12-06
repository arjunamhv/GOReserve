@extends('layouts.app')

@section('content')
    <section class="py-12">
        <div class="w-full px-24">
            <a href="/myticket" class="text-lg font-semibold text-sky-800 flex items-center hover:opacity-50 transition duration-300 ease-in-out "><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5"/>
                </svg>
                Kembali</a>
            <div class="max-w-xl mx-auto text-center mb-10">
              <h4 class="font-medium text-lg text-sky-800 mb-2">GOReserve</h4>
              <h2
                class="font-bold text-dark text-2xl mb-4 sm:text-3xl lg:text-4xl tracking-widest"
              >
                USER REVIEWS
              </h2>
            </div>
          </div>
          <link rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
         .rate {
             float: left;
             height: 46px;
             padding: 0 10px;
             }
             .rate:not(:checked) > input {
             position:absolute;
             display: none;
             }
             .rate:not(:checked) > label {
             float:right;
             width:1em;
             overflow:hidden;
             white-space:nowrap;
             cursor:pointer;
             font-size:30px;
             color:#ccc;
             }
             .rated:not(:checked) > label {
             float:right;
             width:1em;
             overflow:hidden;
             white-space:nowrap;
             cursor:pointer;
             font-size:30px;
             color:#ccc;
             }
             .rate:not(:checked) > label:before {
             content: '★ ';
             }
             .rate > input:checked ~ label {
             color: #ffc700;
             }
             .rate:not(:checked) > label:hover,
             .rate:not(:checked) > label:hover ~ label {
             color: #deb217;
             }
             .rate > input:checked + label:hover,
             .rate > input:checked + label:hover ~ label,
             .rate > input:checked ~ label:hover,
             .rate > input:checked ~ label:hover ~ label,
             .rate > label:hover ~ input:checked ~ label {
             color: #c59b08;
             }
             .star-rating-complete{
                color: #c59b08;
             }
             .rating-container textarea:focus, .rating-container input:focus {
             color: #000;
             }
             .rated {
             float: left;
             height: 46px;
             padding: 0 10px;
             }
             .rated:not(:checked) > input {
             position:absolute;
             display: none;
             }
             .rated:not(:checked) > label {
             float:right;
             width:1em;
             overflow:hidden;
             white-space:nowrap;
             cursor:pointer;
             font-size:30px;
             color:#ffc700;
             }
             .rated:not(:checked) > label:before {
             content: '★ ';
             }
             .rated > input:checked ~ label {
             color: #ffc700;
             }
             .rated:not(:checked) > label:hover,
             .rated:not(:checked) > label:hover ~ label {
             color: #deb217;
             }
             .rated > input:checked + label:hover,
             .rated > input:checked + label:hover ~ label,
             .rated > input:checked ~ label:hover,
             .rated > input:checked ~ label:hover ~ label,
             .rated > label:hover ~ input:checked ~ label {
             color: #c59b08;
             }
    </style>  
    @if(!empty($value->star_rating))
    <div class="">
            <p class="font-bold text-lg">Review</p>
            <div class="form-group mt-2">
                <input type="hidden" name="booking_id" value="{{ $value->id }}">
                <div class="flex items-center">
                    @for($i=1; $i<=$value->star_rating; $i++)
                        <label class="star-rating-complete" title="text">{{ $i }} stars</label>
                    @endfor
                </div>
            </div>
            <div class="form-group mt-2">
                <p>{{ $value->comments }}</p>
            </div>
        </div>
    </div>
@else
        <div class="bg-white" style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
            <form class="py-4 px-5" action="{{ route('review.store') }}" style="box-shadow: 0 0 10px rgb(160, 141, 141); width: 80%;" method="POST" autocomplete="off">
                @csrf
                <h2 class="text-center text-2xl font-bold text-dark mb-4">Write a Review</h2>
                
                <div class="form-group mt-4">
                    <input type="hidden" name="booking_id">
                    <div class="flex items-center justify-center">
                        <div class="rate">
                            <input type="radio" id="star5" class="rate" name="rating" value="5"/>
                            <label for="star5" title="5 stars">5 stars</label>
                            <input type="radio" id="star4" class="rate" name="rating" value="4"/>
                            <label for="star4" title="4 stars">4 stars</label>
                            <input type="radio" id="star3" class="rate" name="rating" value="3"/>
                            <label for="star3" title="3 stars">3 stars</label>
                            <input type="radio" id="star2" class="rate" name="rating" value="2"/>
                            <label for="star2" title="2 stars">2 stars</label>
                            <input type="radio" id="star1" class="rate" name="rating" value="1"/>
                            <label for="star1" title="1 star">1 star</label>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-4">
                    <label for="comment" class="text-base font-medium text-gray-800">Your Comment:</label>
                    <textarea id="comment" class="form-control mt-2" name="comment" rows="4" style="height: 150px; width: 100%;" placeholder="Write your review here..." maxlength="100"></textarea>
                </div>

                <div class="mt-4 text-center">
                    <button class="btn btn-sm py-1 px-2 bg-sky-800 text-white">Submit Review</button>
                </div>
            </form>
        </div>
@endif
</section>
@endsection
