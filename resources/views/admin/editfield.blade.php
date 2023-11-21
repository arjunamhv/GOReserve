@extends('layouts.app')

@section('content')
    <h1 class="text-center text-4xl font-bold m-5">Add Field</h1>

    <div class="m-10">
        <form method="POST" action="{{ url('field/'.$field->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-5">
                <label for="fieldbanner" class="label">
                    <span class="label-text">Edit Field Banner</span>
                </label>
                <input type="file" name="inpfieldbanner" id="fieldbanner"
                    class="error-check @error('inpfieldbanner') border-error @enderror file-input file-input-bordered w-full"
                    onchange="previewBanner(this)" />
                @error('inpfieldbanner')
                    <div class="text-error">{{ $message }}</div>
                @enderror
                <img id="bannerPreview" src="{{ asset('storage/images/fieldbanner/'.$field->field_banner) }}" alt="Preview" class="max-w-full mt-1 max-h-48" />
            </div>
            <div class="my-5">
                <label for="fieldphotos" class="label">
                    <span class="label-text">Add Field Images</span>
                </label>
                <input type="file" id="fieldphotos" name="inpfieldphotos[]"
                    class="error-check @error('inpfieldphotos') border-error @enderror file-input file-input-bordered w-full"
                    multiple onchange="previewPhotos(this)" />
                @error('inpfieldphotos')
                    <div class="text-error">{{ $message }}</div>
                @enderror
                <div id="previewfoto" class="mt-2 flex flex-wrap gap-4">
                    @foreach ($field->field_photos as $image)
                        <img src="{{ asset('storage/' . $image) }}" class="max-h-28 max-w-max m-1 inline-block" alt="photo.img">
                    @endforeach
                </div>
            </div>
            <div class="form-control my-5">
                <label for="fieldname" class="label">
                    <span class="label-text">Field Name</span>
                </label>
                <input type="text" name="inpfieldname" placeholder="Type here" value="{{ $field->name }}"
                    class="error-check @error('inpfieldname') border-error @enderror input input-bordered w-full" />
                @error('inpfieldname')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control my-5">
                <label for="fieldtype" class="label">
                    <span class="label-text">Field Type</span>
                </label>
                <select name="inpfieldtype" id="fieldtype"
                    class="error-check @error('inpfieldtype') border-error @enderror select select-bordered">
                    <option disabled selected>Pick one</option>
                    @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $field->type == $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                    @endforeach
                </select>
                @error('inpfieldtype')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-block btn-primary my-5">Update</button>
        </form>
    </div>
        
    <script>
        // image preview handling
        function previewPhotos(input) {
            var parentElement = input.parentElement;
            var previewfoto = parentElement.querySelector('#previewfoto');
            previewfoto.innerHTML = ''; // Clear existing previews
            previewfoto.style.display = 'flex';

            for (let i = 0; i < input.files.length; i++) {
                let file = input.files[i];
                let reader = new FileReader();

                reader.onload = function(e) {
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.alt = 'Image Preview';
                    img.style.maxWidth = '100%';
                    img.style.maxHeight = '100px';
                    img.style.margin = '4px';

                    previewfoto.appendChild(img);
                };

                reader.readAsDataURL(file);
            }
        }

        function previewBanner(input) {
            var bannerPreview = document.getElementById('bannerPreview');
            var fileInput = input.files[0];

            if (fileInput) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    bannerPreview.src = e.target.result;
                    bannerPreview.style.display = 'block';
                };

                reader.readAsDataURL(fileInput);
            } else {
                bannerPreview.src = '#';
                bannerPreview.style.display = 'none';
            }
        }

        // error input handling
        var fileInputs = document.querySelectorAll('.error-check');
        fileInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                // Mengambil elemen pesan kesalahan terkait dengan input
                var errorMessage = input.nextElementSibling;

                // Menyembunyikan pesan kesalahan jika inputannya diisi
                errorMessage.style.display = 'none';

                // Menghapus class 'border-error' dari elemen input
                input.classList.remove('border-error');
            });
        });
    </script>
@endsection
