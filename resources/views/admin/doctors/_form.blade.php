
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
    <label for="name">Doctor Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $doctor->name) }}" id="name" name="name">
    @error('name')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control ckeditor @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $doctor->description) }}</textarea>
    @error('description')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>

<div class="form-group">
    <label for="image">Image</label>
    <img src="{{ $doctor->image_url }}" id="output" height="60" alt="" class="d-block">
    <input type="file" accept="image/*" onchange="loadFile(event)"  class="form-control @error('image') is-invalid @enderror" id="image" name="image" style="margin-top: 13px;">
    @error('image')
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