<h1>{{ $category->name }}</h1>
<p>Posts of this category</p>
@foreach($category->posts as $post)
    <b>{{ $post->title }}</b>
    <br>
    {{ $post->description }}
    <br><br>
    @endforeach
