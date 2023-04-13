<div class="row tm-row">

    @foreach ($articles as $article)
        <article class="col-12 col-md-6 tm-post">
            <hr class="tm-hr-primary">
            <a href="{{ route('article-detail',['id'=>$article->id])}}" class="effect-lily tm-post-link tm-pt-60">
                <div class="tm-post-link-inner">
                    <img src="{{ $article->image }}" alt="Image" class="img-fluid">
                </div>

                @if (\Carbon\Carbon::parse($article->created_at)->gt(\Carbon\Carbon::yesterday()))
                    <span class="position-absolute tm-new-badge">New</span>
                @endif

                <h2 class="tm-pt-30 tm-color-primary tm-post-title">
                    {{ \Illuminate\Support\Str::limit($article->title, 50, $end='...') }}
                </h2>
            </a>
            <p class="tm-pt-30">

                {{ \Illuminate\Support\Str::limit($article->description, 50, $end='...') }}
            </p>
            <div class="d-flex justify-content-between tm-pt-45">
                <span class="tm-color-primary"></span>
                <span class="tm-color-primary">{{ $article->created_at }}</span>
            </div>
            <hr>
            <div class="d-flex justify-content-between">
                <span>36 comments</span>
                <span>by {{ $article->user->name }}</span>
            </div>
        </article>
    @endforeach

</div>




<div class="row tm-row tm-mt-50 tm-mb-75 float-right">

    {{ $articles->withQueryString()->onEachSide(2)->links('pagination::bootstrap-4') }}
    {{-- <ul>
                <li class="tm-paging-item active">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                </li>
                <li class="tm-paging-item">
                    <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                </li>
            </ul> --}}


</div>

@section('customCss')
    <style>

        .page-link{

            color:#00cccc;
            margin-left: 10px;

        }
        .page-item.active .page-link{
            background: #00cccc;
            color: white;
        }


    </style>
@endsection
