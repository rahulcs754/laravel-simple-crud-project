<h1>Hobbies</h1>

@foreach ($hobbies as $hobby)
<li>{{$hobby -> title}}  <a href="/hobby/create">Create</a> / <a href="/hobby/{{ $hobby->id }}">Detail View</a> / <a href="/hobby/{{ $hobby->id }}/edit">Edit</a> 
/
    <form style="display: inline;" method="post" action="/hobby/{{ $hobby->id }}">
        @csrf 
        @method("DELETE")
        <input type="submit" value="delete">
        </form>    

</li>
@endforeach
