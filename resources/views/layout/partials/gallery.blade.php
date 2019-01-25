<div class="clearfix"></div>

@if(isset($images))
    <div class="container col-md-10 col-md-offset-1" uk-slider="autoplay: true; autoplay-interval: 4000;">
        <div class="uk-position-relative uk-visible-toggle" tabindex="-1">
            <div class="uk-slider-container uk-dark">
                <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-5@m uk-grid-small" uk-lightbox>
                    @foreach($images as $i => $image)
                        <li>
                            <a href="{{ $image['large'] }}" data-caption="{{ $image['caption'] }}">
                                <img src="{{ $image['thumbnail'] }}" alt=""/>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="uk-hidden@s uk-light">
                <a class="uk-position-center-left uk-position-small uk-slidenav-previous uk-icon uk-slidenav" href="#" uk-slidenav-previous=""
                   uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-slidenav-next uk-icon uk-slidenav" href="#" uk-slidenav-next=""
                   uk-slider-item="next"></a>
            </div>
            <div class="uk-visible@s">
                <a class="uk-position-center-left-out uk-position-small uk-slidenav-previous uk-icon uk-slidenav" href="#" uk-slidenav-previous
                   uk-slider-item="previous"></a>
                <a class="uk-position-center-right-out uk-position-small uk-slidenav-next uk-icon uk-slidenav" href="#" uk-slidenav-next
                   uk-slider-item="next"></a>
            </div>

        </div>
        <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
    </div>
@endif

<div class="clearfix"></div>
