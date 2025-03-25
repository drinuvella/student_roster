<select name="sort" id="sort" class="form-control mb-4">
    <option {{$sorting == "asc" ? 'selected':''}} value="asc">Ascending</option>
    <option {{$sorting == "desc" ? 'selected':''}} value="desc">Descending</option>
</select>