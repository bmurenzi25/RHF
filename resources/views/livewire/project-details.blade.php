<div>

    <!-- inner banner -->
    <div class="inner-banner">
        <section class="w3l-breadcrumb">
            <div class="container">
                <h4 class="inner-text-title font-weight-bold text-white mb-sm-3 mb-2">{{ $project->title }}</h4>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="/our-projects">Projects</a></li>
                    <li class="active"><span class="fa fa-chevron-right mx-2" aria-hidden="true"></span>{{ $project->title }}</li>
                </ul>
            </div>
        </section>
    </div>
    <!-- //inner banner -->
    <div style="margin: 8px auto; display: block; text-align:center;">

    </div>
    <!-- blog single -->
    <section class="w3l-blog-single py-5">
        <div class="container py-md-5 py-4">
            <div class="row">
                <div class="col-md-3 left-blog-single pr-lg-4">
                    <div class="p-sticky-blog">
                        @if($prev_project)
                        <aside class="mr-md-0 mr-3">
                            <a href="{{ URL::to('/project/'. $prev_project->slug) }}"><img src="{{ asset('images/uploads/'. $prev_project->image) }}" class="img-fluid" alt="" /></a>
                            <h6 class="text-left-inner-9">
                                <a href="{{ URL::to('/project/'. $prev_project->slug) }}">
                                    {{ $prev_project->title }}
                                </a>
                            </h6>
                            <span class="sub-inner-text-9">{{ $prev_project->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        @endif
                        @if($next_project)
                        <aside>
                            <a href="{{ URL::to('/project/'. $next_project->slug) }}"><img src="{{ asset('images/uploads/'. $next_project->image) }}" class="img-fluid" alt="" /></a>
                            <h6 class="text-left-inner-9">
                                <a href="{{ URL::to('/project/'. $next_project->slug) }}">
                                    {{ $next_project->title }}
                                </a>
                            </h6>
                            <span class="sub-inner-text-9">{{ $next_project->created_at->diffForHumans() }}</span>
                            <hr>
                        </aside>
                        @endif
                    </div>
                </div>
                <div class="col-md-9 right-blog-single pl-lg-5 mb-md-0 mb-5">
                    <img src="{{ asset('images/uploads/'. $project->image) }}" class="img-fluid" alt="" />

                    <h5 class="sub-head-text-9">
                        {{ $project->description }}
                    </h5>
                    <p class="sub-para">
                        {!! $project->body !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- //blog single -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
</div>
@include('main-footer')
@include('scripts')