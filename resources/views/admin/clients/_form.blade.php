
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="form-group">
    <label for="image">Image</label>
    <img src="{{ $client->image_url }}" id="output" height="60" alt="" class="d-block">
    <input type="file" accept="image/*" onchange="loadFile(event)" class="form-control @error('image') is-invalid @enderror" id="image" name="image" style="margin-top: 13px;">
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control ckeditor @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $client->description) }}</textarea>
    @error('description')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="name">Client Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $client->name) }}" id="name" name="name">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control @error('address') is-invalid @enderror" value="{{ old('address', $client->address) }}" id="address" name="address">
    @error('address')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<button type="submit" class="btn btn-primary">Save</button>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>