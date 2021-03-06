<div class="card col-md-6 mt-5 mb-5 my-0 mx-auto js-added-element js-testimonial-var" style="background-color: lightgrey;">
    <div style="text-align: center;"><h3>Testimonials</h3></div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
            <div class="w-100 carousel-inner js-reviews" role="listbox">

                @forelse($data['data']->singleItems as $item)

                    @include($item->blade_file, ['testimonial' => $item, 'images' => $data['images']])

                @empty

                @endforelse

            </div>
            <div class="float-right navi" style="margin-bottom: 24px;">
                <a class="btn btn-secondary" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="btn btn-secondary" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    <script>
        $(document).ready(function () {
            $('.js-reviews div:first').addClass('active');
        })

    </script>
</div>
