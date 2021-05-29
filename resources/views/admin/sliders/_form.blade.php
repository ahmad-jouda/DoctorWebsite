
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
    <label for="slider">Image</label>
    <img src="{{ $slider->image_url }}" id="output" height="60" alt="" class="d-block">
    <input type="file" accept="image/*" onchange="loadFile(event)" class="form-control @error('image') is-invalid @enderror" id="slider" name="image" style="margin-top: 13px;">
    @error('image')
    <p class="invalid-feedback">{{ $message }}</p>
    @enderror
</div>


<button type="submit" class="btn btn-primary ">Save</button>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>