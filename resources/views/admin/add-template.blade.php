
    @routes
{{--    <script src="{{asset('js/templates/store.js')}}"></script>--}}
{{--    <script src="{{asset('js/templates/store.js')}}"></script>--}}
{{--    <script src="{{asset('js/templates/store.js')}}"></script>--}}
{{--    <script src="{{asset('js/templates/store.js')}}"></script>--}}
    <script src="{{asset('js/app.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
<div style="max-width: 50vw;margin-top: 50px;">
    <div class="input-group mb-3">
        <input type="text" class="form-control js-new-template-name" placeholder="Enter new template name" aria-label="" aria-describedby="basic-addon1">
        <div class="input-group-prepend">
            <button class="btn btn-outline-success js-add-template" type="button">Button</button>
        </div>
    </div>
</div>
<div>
    <div style="max-width: 50vw;margin-top: 50px;">
        <select class="form-control form-control-lg js-get-templates text-success">
            <option selected>Select template</option>
        </select>
    </div>
</div>

<div>
    <div style="max-width: 50vw;margin-top: 50px;">
        <input type="hidden" id="template_id">
        <input type="hidden" id="template_name">
        <input type="hidden" id="page_element_type_id">
        <select class="form-control form-control-lg js-get-elements text-success">
            <option selected>Select element</option>
        </select>
    </div>
</div>


<!-- Modal9 TOP MENU -->
<div class="modal fade js-modal10"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Top Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="img">Add your Logo</label>
                <input type="file" id="top-menu-image" name="img" required>
                <br>
                <span class="js-top-menu-link">
                        <input name="title-1" id="title-1" type="text" placeholder="Link title" required>
                        <input type="text" id="link-url-1" name="link-url-1" placeholder="Link URL" required>
                    </span>
                <span class="js-top-menu-link">
                        <input name="title-2" id="title-2" type="text" placeholder="Link title" required>
                        <input type="text" id="link-url-2" name="link-url-2" placeholder="Link URL" required>
                    </span>
                <span class="js-top-menu-link">
                        <input name="title-3" id="title-3" type="text" placeholder="Link title" required>
                        <input type="text" id="link-url-3" name="link-url-3" placeholder="Link URL" required>
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-top-menu">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal8 TESTIMONIALS-->
<div class="modal fade js-modal9"  aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal9">
            <div class="modal-header">
                <h5 class="modal-title">Testimonials</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="js-testimonial" style="display:flex; flex-direction:column;">
                <input type="file" id="js-testimonial-image-1" required>
                <input type="text" id="customer_name-1" placeholder="Enter user name">
                <input type="text" id="testimonial_title-1" placeholder="Review title">
                <input type="text" id="testimonial_text-1" placeholder="Enter user review">
                </span>
                <br>
                <span class="js-testimonial" style="display:flex; flex-direction:column;">
                <input type="file" id="js-testimonial-image-2" required>
                <input type="text" id="customer_name-2" placeholder="Enter user name">
                <input type="text" id="testimonial_title-2" placeholder="Review title">
                <input type="text" id="testimonial_text-2" placeholder="Enter user review">
                </span>
                <br>
                <span class="js-testimonial" style="display:flex; flex-direction:column;">
                <input type="file" id="js-testimonial-image-3" required>
                <input type="text" id="customer_name-3" placeholder="Enter user name">
                <input type="text" id="testimonial_title-3" placeholder="Review title">
                <input type="text" id="testimonial_text-3" placeholder="Enter user review">
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-testimonial-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Prices -->
<div class="modal fade js-modal8" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal8">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pricing</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body js-all-plans">
                    <span>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary" id="basic-addon2">Plan name</span>
                            </div>
                            <input type="text" class="form-control js-pricing-plan plan-1" placeholder="Enter plan name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control month-1" placeholder="Enter month price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/month</span>
                            </div>
                            <input type="text" class="form-control year-1" placeholder="Enter annual price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/year</span>
                            </div>
                            <input type="text" class="form-control discount-1" placeholder="Enter discount" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">discount</span>
                            </div>
                        </div>
                        <span>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Plan benefits</span>
                                </div>
                                <input type="text" class="form-control js-plan-benefit-1 benefit-1-1" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-1 benefit-1-2" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-1 benefit-1-3" placeholder="Benefit">
                            </div>
                        </span>
                    </span>
                <br>
                <span>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary" id="basic-addon2">Second plan name</span>
                            </div>
                            <input type="text" class="form-control js-pricing-plan plan-2" placeholder="Enter plan name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control month-2" placeholder="Enter month price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/month</span>
                            </div>
                            <input type="text" class="form-control year-2" placeholder="Enter annual price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/year</span>
                            </div>
                            <input type="text" class="form-control discount-2" placeholder="Enter discount" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">discount</span>
                            </div>
                        </div>
                        <span>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Plan benefits</span>
                                </div>
                                <input type="text" class="form-control js-plan-benefit-2 benefit-2-1" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-2 benefit-2-2" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-2 benefit-2-3" placeholder="Benefit">
                            </div>
                        </span>
                    </span>
                <br>
                <span>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text text-primary" id="basic-addon2">Third plan name</span>
                            </div>
                            <input type="text" class="form-control js-pricing-plan plan-3" placeholder="Enter plan name" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        </div>
                        <div class="input-group mb-3">

                            <input type="text" class="form-control month-3" placeholder="Enter month price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/month</span>
                            </div>
                            <input type="text" class="form-control year-3" placeholder="Enter annual price" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2">/year</span>
                            </div>
                            <input type="text" class="form-control discount-3" placeholder="Enter discount" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <span class="input-group-text discount-3" id="basic-addon2">discount</span>
                            </div>
                        </div>
                        <span>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="">Plan benefits</span>
                                </div>
                                <input type="text" class="form-control js-plan-benefit-3 benefit-3-1" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-3 benefit-3-2" placeholder="Benefit">
                                <input type="text" class="form-control js-plan-benefit-3 benefit-3-3" placeholder="Benefit">
                            </div>
                        </span>
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-prices-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Hero Section -->
<div class="modal fade js-modal6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal6">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hero section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <label>Add image</label>
                    <input type="file" id="hero-section-image" required>
                    <input type="text" class="js-hero-section-title" placeholder="Enter title">
                    <br>
                    <input type="text" class="js-hero-section-subtitle" placeholder="Enter subtitle">
                    <br>
                    <input type="text" class="js-hero-section-button" placeholder="Enter button text">
                </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-hero-section-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- General content-1 -->
<div class="modal fade js-modal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal3">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">General content</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <span>
                        <input type="text" class="js-general-content-section-one-title" placeholder="Enter section title">
                        <input type="text" class="js-general-content-section-one-text" placeholder="Enter section text">
                        <input type="file" id="js-general-content-section-one-image" class="js-general-content-section-one-image" required>
                        <input type="text" class="js-general-content-section-one-link-url" placeholder="Enter link url">
                        <input type="text" class="js-general-content-section-one-button-value" placeholder="Enter link button text">
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-general-content-one-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Gallery -->
<div class="modal fade js-modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal2">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gallery</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span>
                    <input type="file" class="js-gallery-image" multiple>
                    <label>Add images</label>
                </span>
{{--                <span>                    --}}
{{--                    <input type="file" class="js-video-image" multiple>--}}
{{--                    <label>Add videos</label>--}}
{{--                </span>--}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-gallery-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<div class="modal fade js-modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal1">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Footer</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Creator name</span>
                    </div>
                    <input type="text" class="form-control" id="footer_creator" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Add company name">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Facebook</span>
                    </div>
                    <input type="text" class="form-control" id="facebook_url" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Add link">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Twitter</span>
                    </div>
                    <input type="text" class="form-control" id="twitter_url" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Add link">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Instagram</span>
                    </div>
                    <input type="text" class="form-control" id="instagram_url" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Add link">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-footer-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- General content-2 -->
<div class="modal fade js-modal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal4">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">General content-2</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <span>
                        <input type="text" class="js-general-content-section-two-title" placeholder="Enter section title">
                        <input type="text" class="js-general-content-section-two-text" placeholder="Enter section text">
                        <input type="file" id="js-general-content-section-two-image" class="js-general-content-section-two-image" required>
                        <input type="text" class="js-general-content-section-two-link-url" placeholder="Enter link url">
                        <input type="text" class="js-general-content-section-two-button-value" placeholder="Enter link button text">
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-general-content-two-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- General content-3 -->
<div class="modal fade js-modal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal5">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">General content-3</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <span>
                        <input type="text" class="js-general-content-three-title" placeholder="Enter section title">
                        <input type="text" class="js-general-content-three-text" placeholder="Enter section text">
                        <input type="text" class="js-general-content-three-link-url" placeholder="Enter link url">
                        <input type="text" class="js-general-content-three-button-value" placeholder="Enter link button text">
                    </span>
                    <span class="js-general-content-three-bullets">
                        <input type="text" id="js-general-content-three-bullet-point-title-1" class="js-general-content-three-bullet-point-title-1" placeholder="Bullet 1 title" required>
                        <input type="text" id="js-general-content-three-bullet-point-text-1" class="js-general-content-three-bullet-point-text-1" placeholder="Bullet 1 text" required>
                    </span>
                    <span class="js-general-content-three-bullets">
                        <input type="text" id="js-general-content-three-bullet-point-title-2" class="js-general-content-three-bullet-point-title-2" placeholder="Bullet 2 title" required>
                        <input type="text" id="js-general-content-three-bullet-point-text-2" class="js-general-content-three-bullet-point-text-2" placeholder="Bullet 2 text" required>
                    </span>
                    <span class="js-general-content-three-bullets">
                        <input type="text" id="js-general-content-three-bullet-point-title-3" class="js-general-content-three-bullet-point-title-3" placeholder="Bullet 3 title" required>
                        <input type="text" id="js-general-content-three-bullet-point-text-3" class="js-general-content-three-bullet-point-text-3" placeholder="Bullet 3 text" required>
                    </span>
                    <p>Add tiles</p>
                    <span class="js-general-content-three-tiles">
                        <input type="text" id="js-general-content-three-tile-title-1" class="js-general-content-three-tile-title-1" placeholder="Tile1 title" required>
                        <input type="text" id="js-general-content-three-tile-text-1" class="js-general-content-three-tile-text-1" placeholder="Tile1 short text" required>
                    </span>
                    <span class="js-general-content-three-tiles">
                        <input type="text" id="js-general-content-three-tile-title-2" class="js-general-content-three-tile-title-2" placeholder="Tile2 title" required>
                        <input type="text" id="js-general-content-three-tile-text-2" class="js-general-content-three-tile-text-2" placeholder="Tile2 short text" required>
                    </span>
                    <span class="js-general-content-three-tiles">
                        <input type="text" id="js-general-content-three-tile-title-3" class="js-general-content-three-tile-title-3" placeholder="Tile3 title" required>
                        <input type="text" id="js-general-content-three-tile-text-3" class="js-general-content-three-tile-text-3" placeholder="Tile3 short text" required>
                    </span>
                    <span class="js-general-content-three-tiles">
                        <input type="text" id="js-general-content-three-tile-title-4" class="js-general-content-three-tile-title-4" placeholder="Tile4 title" required>
                        <input type="text" id="js-general-content-three-tile-text-4" class="js-general-content-three-tile-text-4" placeholder="Tile4 short text" required>
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-general-content-three-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- SUBSCRIBE -->
<div class="modal fade js-modal7" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal7">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Subscribe</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    <span>
                        <input type="text" class="js-newsletter-title" placeholder="Enter subscribe title">
                        <input type="text" class="js-newsletter-button-value" placeholder="Enter button text like 'Subscribe now'">
                    </span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success js-save-newsletter-changes">Save changes</button>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){

        $.ajax({
            type: "GET",
            url: route('page-element-types.show'),
            success: function (data) {
                output = [];
                console.log(data.types);
                $.each(data.types, function (i, e) {
                    output += '<option data-id="'+ e.id +'" value="option'+e.id +'" id="'+ e.id+'" class="btn-success" >'+ e.name + '</option>'
                });
                $(".js-get-elements").append(output)
            }
        });

        $.ajax({
            type: "GET",
            url: route('templates.show'),
            success: function (data) {
                output = [];
                console.log(data.templates);
                $.each(data.templates, function (i, e) {
                    output += '<option data-name="'+ e.name +'" data-id="'+ e.id +'" class="js-template btn-success">'+ e.name + '</option>'
                });
                $(".js-get-templates").append(output)
            }
        });

        $(".js-add-template").click(function(){
            let name = $(".js-new-template-name").val();
            console.log(name);
            $.ajax({
                type: "POST",
                url: route('template.store'),
                data: {
                    name: name
                },
                success: function (data) {
                    console.log(data)
                }
            })
                .done(function(data){
                        $(".js-get-templates").append('<option data-name="'+ data.template.name +'" data-id="'+ data.template.id +'" class="js-template" >'+ name + '</option>')
                    }

                );

        });

        // add dropdown to every tile with unique class
        $('.js-general-content-three-tiles').each(function (e, i) {

            let select = "<select class='js-awesome-icons-tile-"+ (e + 1) +"'><option selected>Select awesome icon</option></select><br>";

            $(this).append(select);

            // get awesome icons
            $.ajax({
                type: "GET",
                url: route('awesome-icons.show'),
                success: function (data) {
                    output = [];
                    $.each(data.awesomeIcons, function (e, i) {
                        output += '<option value="'+ i.id +'" data-id="'+ i.id +'">'+ i.name + '</option>'
                    });
                    $(".js-awesome-icons-tile-" + (e + 1)).append(output)
                }
            });
        });



        // save template_id into hidden field
        $('.js-get-templates').change(function() {
            let template_id = $(this).find(':selected').data('id');
            let template_name = $(this).find(':selected').data('name');
            $('#template_id').val(template_id);
            $('#template_name').val(template_name);
        });

        $('.js-get-elements').change(function() {
            // save page_element_type_id into hidden field
            let type = $(this).find(':selected').data('id');
            $('#page_element_type_id').val(type);

            var opval = $(this).val();
            if(opval=="option10"){
                $('.js-modal10').modal("show");
            }
            if(opval=="option9"){
                $('.js-modal9').modal("show");
            }
            if(opval=="option8"){
                $('.js-modal8').modal("show");
            }
            if(opval=="option7"){
                $('.js-modal7').modal("show");
            }
            if(opval=="option6"){
                $('.js-modal6').modal("show");
            }
            if(opval=="option5"){
                $('.js-modal5').modal("show");
            }
            if(opval=="option4"){
                $('.js-modal4').modal("show");
            }
            if(opval=="option3"){
                $('.js-modal3').modal("show");
            }
            if(opval=="option2"){
                $('.js-modal2').modal("show");
            }
            if(opval=="option1"){
                $('.js-modal1').modal("show");
            }
        });

        $('.js-save-top-menu').click(storeTopMenuSettings);

        $('.js-save-testimonial-changes').click(storeTestimonialSection);

        $('.js-save-prices-changes').click(storePriceSection);

        $('.js-save-footer-changes').click(storeTemplateFooter);

        $('.js-save-hero-section-changes').click(storeHeroSectionSettings);

        $('.js-save-general-content-one-changes').click(storeGeneralContentOneSettings);

        $('.js-save-general-content-two-changes').click(storeGeneralContentTwoSettings);

        $('.js-save-general-content-three-changes').click(storeGeneralContentThreeSettings);

        $('.js-save-newsletter-changes').click(storeTemplateNewsletter);

        $('.js-save-gallery-changes').click(storeGallery);
    })

</script>
