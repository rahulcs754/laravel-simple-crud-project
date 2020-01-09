<form action="/hobby/{{$hobby->id}}" method="post">
    @csrf
    @method('PUT')
    Title <br>
<input required type="text" name="title" value="{{ $hobby->title }}" > <br>
    Description <br>
    <input required type="text" name="description" value="{{ $hobby->description }}"><br>
    <input type="submit" value="submit">
</form>
<a href="/">Back</a>