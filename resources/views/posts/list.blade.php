@foreach ($posts as $post)
    <div class="post-card" style="background: {{ $post->color }}">
        <div class="post-name">
            <div>{{ $post->username }}</div>
            <?php
            if (!isset($postName)) {
            $postName = [];
            }
            if (!array_key_exists($post->username, $postName)) {
            $postName += [$post->username => 1];
            } else {
            $postName[$post->username] = $postName[$post->username] + 1;
            }
            ?>
            <div class="author-id">{{ $postName[$post->username] }} of this author</div>
        </div>
        <div class="post-title">
            <div class="post-title-header">{{ $post->title }}</div>
            <div class="post-title-content">{{ $post->content }}</div>
            <div class="post-title-date">
                date:
                {{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->format('Y-m-d H:i') }}
            </div>
        </div>
        <div class="post-action">
            <div class="post-action-content">
                <a href="/posts/{{ $post->id }}" class="post-update">Modify</a>
                <form action="/posts/delete/{{ $post->id }}" method="post">
                    @csrf
                    <button type="submit" class="post-delete" style="position: relative; bottom:0px" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endforeach
