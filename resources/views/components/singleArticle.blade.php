<div class="row tm-row">
    <div class="col-lg-12 tm-post-col">
        <div class="tm-post-full">
            <div class="mb-4">
                <h2 class="pt-2 tm-color-primary tm-post-title">{{ $article->title }}</h2>
                <p class="tm-mb-40">{{ $article->created_at }} posted by {{ $article->user->name }}</p>
                <p>
                    {{ $article->description }}
                </p>
            </div>

            <!-- Comments -->
            <div>
                <h2 class="tm-color-primary tm-post-title">Comments</h2>
                <hr class="tm-hr-primary tm-mb-45">
                @foreach ($article->comments as $comment)
                    <div class="tm-comment tm-mb-45">
                        <figure class="tm-comment-figure">
                            <img width="100px" src="{{ $comment->user->image }}" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                            <figcaption class="tm-color-primary text-center">{{ $comment->user->name }}</figcaption>
                        </figure>
                        <div>
                            <p>
                                {{ $comment->message }}
                            </p>
                            <div class="d-flex justify-content-between">
                                <span class="tm-color-primary">{{ $comment->created_at }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach


                @if (!Auth::guest())
                    <form action="{{ route('save-comment')}}" class="mb-5 tm-comment-form" method="POST">
                        <h2 class="tm-color-primary tm-post-title mb-4">Your comment</h2>
                        @csrf
                        <input value="{{ $article->id }}" hidden name="article_id" type="number">
                        
                        <div class="mb-4">
                            <input value="{{Auth::user()->name }}" disabled placeholder="Name" class="form-control" name="name" type="text">
                        </div>
                        <div class="mb-4">
                            <input value="{{Auth::user()->email }}" disabled placeholder="Email" class="form-control" name="email" type="text">
                        </div>
                        <div class="mb-4">
                            <textarea placeholder="Message" class="form-control" name="message" rows="6"></textarea>
                        </div>
                        <div class="text-right">
                            <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>
                        </div>
                    </form>
                @else

                    <div class="row">
                        <span>You must be <a href="{{route('login')}}">logged in</a>  before you can comment. </span>
                    </div>
                    
                @endif

            </div>
        </div>
    </div>

</div>
