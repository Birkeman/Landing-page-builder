<div class="general-content js-added-element js-content3-var">

    <div class="row row-pad-all" style="margin: 0px;">
        @foreach($data->tiles as $tile)

            @include($tile->blade_file, ['data' => $tile])

        @endforeach
    </div>

    <section>
        <div>
            <div>
                <div>
                    <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center" style="margin: 48px auto;">
                        <h1>{{$data->title}}</h1>
                        <div class="mb32">
                            <p>{{$data->text}}</p>
                        </div>
                        <a class="btn btn-lg btn-filled btn-secondary" href="//{{$data->link_url}}">{{$data->button_value}}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bullets-div">
        <div class="content center bullets">

            @foreach($data->bulletPoints as $bulletPoint)

                @include($bulletPoint->blade_file, ['data' => $bulletPoint])

            @endforeach
        </div>
    </div>
</div>
