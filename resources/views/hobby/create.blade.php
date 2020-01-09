<form action="/hobby" method="post">
    @csrf

    Title <br>
    <input required type="text" name="title" > <br>
    Description <br>
    <input required type="text" name="description" > <br>
    <input type="submit" value="submit">
</form>
<a href="/">Back</a>