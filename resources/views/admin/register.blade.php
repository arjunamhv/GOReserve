@extends('layouts.app')

@section('content')
    <h1 class="text-center text-4xl font-bold m-5">Register GOR</h1>

    <div class="m-10">
        <form method="POST" action="{{ url('gor') }}" enctype="multipart/form-data">
            @csrf
            <div class="my-5">
                <label for="gorbanner" class="label">
                    <span class="label-text">Add GOR Banner</span>
                </label>
                <input type="file" name="inpgorbanner" id="gorbanner"
                    class="error-check @error('inpgorbanner') border-error @enderror file-input file-input-bordered w-full"
                    onchange="previewBanner(this)" />
                @error('inpgorbanner')
                    <div class="text-error">{{ $message }}</div>
                @enderror
                <img id="bannerPreview" src="#" alt="Preview" class="max-w-full mt-1 max-h-48 hidden" />
            </div>
            <div class="my-5">
                <label for="gorphotos" class="label">
                    <span class="label-text">Add GOR Images</span>
                </label>
                <input type="file" id="gorphotos" name="inpgorphotos[]"
                    class="error-check @error('inpgorphotos') border-error @enderror file-input file-input-bordered w-full"
                    multiple onchange="previewPhotos(this)" />
                @error('inpgorphotos')
                    <div class="text-error">{{ $message }}</div>
                @enderror
                <div id="previewfoto" class="mt-2 flex flex-wrap gap-4"></div>
            </div>
            <div class="form-control my-5">
                <label for="gorname" class="label">
                    <span class="label-text">GOR Name</span>
                </label>
                <input type="text" name="inpgorname" placeholder="Type here" value="{{ old('inpgorname') }}"
                    class="error-check @error('inpgorname') border-error @enderror input input-bordered w-full" />
                @error('inpgorname')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="pl-1 mt-5">GOR Address</label>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                    <div class="form-control w-full">
                        <label for="provinsi" class="label">
                            <span class="label-text">Provinsi</span>
                        </label>
                        <select name="inpprovinsi" id="provinsi"
                            class="error-check @error('inpprovinsi') border-error @enderror select select-bordered">
                            <option disabled selected>Pick one</option>
                            @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                            @endforeach
                        </select>
                        @error('inpprovinsi')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label for="kota" class="label">
                            <span class="label-text">Kota/Kabupaten</span>
                        </label>
                        <select name="inpkota" id="kota"
                            class="error-check @error('inpkota') border-error @enderror select select-bordered">
                            <option disabled selected>Pick one</option>
                        </select>
                        @error('inpkota')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label for="kecamatan" class="label">
                            <span class="label-text">Kecamatan</span>
                        </label>
                        <select name="inpkecamatan" id="kecamatan"
                            class="error-check @error('inpkecamatan') border-error @enderror select select-bordered">
                            <option disabled selected>Pick one</option>
                        </select>
                        @error('inpkecamatan')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control w-full">
                        <label for="kelurahan" class="label">
                            <span class="label-text">Kelurahan</span>
                        </label>
                        <select name="inpkelurahan" id="kelurahan"
                            class="error-check @error('inpkelurahan') border-error @enderror select select-bordered">
                            <option disabled selected>Pick one</option>
                        </select>
                        @error('inpkelurahan')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-control mt-1">
                    <label for="detail_alamat" class="label">
                        <span class="label-text">Detail Alamat</span>
                    </label>
                    <textarea name="inpdetail_alamat" id="detail_alamat"
                        class="error-check @error('inpdetail_alamat') border-error @enderror textarea textarea-bordered h-12"
                        placeholder="Type Here">{{ old('inpdetail_alamat') }}</textarea>
                    @error('inpdetail_alamat')
                        <div class="text-error">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            
            <div class="form-control my-5">
                <label for="gorcontact" class="label">
                    <span class="label-text">GOR Contact</span>
                </label>
                <input type="text" id="gorcontact" name="inpgorcontact" placeholder="Type here"
                    value="{{ old('inpgorcontact') }}"
                    class="error-check @error('inpgorcontact') border-error @enderror input input-bordered w-full" />
                @error('inpgorcontact')
                    <div class="text-error">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label class="label mt-5">
                    <span class="label-text">GOR Operational Hour</span>
                </label>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-5 md:gap-0">
                    <div class="form-control col-span-2">
                        <input type="time" name="inpstartTime" placeholder="Type here"
                            value="{{ old('inpstartTime') }}"
                            class="error-check @error('inpstarttime') border-error @enderror input input-bordered w-full" />
                        @error('inpstarttime')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center my-auto">
                        <span>Sampai</span>
                    </div>
                    <div class="form-control col-span-2">
                        <input type="time" name="inpendTime" placeholder="Type here" value="{{ old('inpendTime') }}"
                            class="error-check @error('inpendtime') border-error @enderror input input-bordered w-full" />
                        @error('inpendtime')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-control my-5" id="facilitiesContainer">
                <label class="label">
                    <span class="label-text">GOR Facility</span>
                </label>
                <div class="facility-item grid grid-cols-12 gap-4 my-1 align-middle">
                    <input type="text" name="inpfacilities[]" placeholder="Type here"
                        value="{{ implode(',', old('inpfacilities', [])) }}" class="input input-bordered col-span-10" />
                    <button type="button" class="btn btn-sm btn-primary col-span-2 my-auto" id="addFacilityBtn"><i
                            class="fa-solid fa-plus inline md:hidden"></i><span class="hidden md:inline">Add more</span></button>
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ 1 }}"> {{-- value="{{ Auth::user()->id }}" --}}
            <button type="submit" class="btn btn-block btn-primary">Register</button>
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


        // adress handling
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        $(function() {
            $('#provinsi').on('change', function() {
                let id_province = $('#provinsi').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getCity') }}',
                    data: {
                        id_province: id_province
                    },
                    cache: false,

                    success: function(data) {
                        $('#kota').html(data);
                        $('#kecamatan').html('<option disabled selected>Pick one</option>');
                        $('#kelurahan').html('<option disabled selected>Pick one</option>');
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                });
            });
        });

        $(function() {
            $('#kota').on('change', function() {
                let id_city = $('#kota').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getDistrict') }}',
                    data: {
                        id_city: id_city
                    },
                    cache: false,

                    success: function(data) {
                        $('#kecamatan').html(data);
                        $('#kelurahan').html('<option disabled selected>Pick one</option>');
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                });
            });
        });

        $(function() {
            $('#kecamatan').on('change', function() {
                let id_district = $('#kecamatan').val();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('getSubDistrict') }}',
                    data: {
                        id_district: id_district
                    },
                    cache: false,

                    success: function(data) {
                        $('#kelurahan').html(data);
                    },
                    error: function(data) {
                        console.log('error:', data);
                    }
                });
            });
        });

        // facility handling
        document.getElementById('addFacilityBtn').addEventListener('click', function() {
            let facilitiesContainer = document.getElementById('facilitiesContainer');
            let facilityCount = document.querySelectorAll('[name^="inpfacilities"]').length;
            // Tambah input untuk fasilitas baru
            let newFacilityInput = document.createElement('div');
            newFacilityInput.classList.add('facility-item');
            newFacilityInput.innerHTML = `
            <div class="grid grid-cols-12 gap-4 my-1 align-middle">
                <input type="text" name="inpfacilities[${facilityCount}]" placeholder="Type here" class="input input-bordered col-span-10" />
                <button type="button" class="btn btn-sm btn-error my-auto col-span-2 removeFacility"><i class="fa-solid fa-trash-can inline md:hidden"></i><span class="hidden md:inline">Remove</span></button>
            </div>
            `;
            facilitiesContainer.appendChild(newFacilityInput);

            // Setelah menambah fasilitas baru, kita perlu menambahkan event listener
            newFacilityInput.querySelector('.removeFacility').addEventListener('click', function() {
                newFacilityInput.remove();
            });
        });

        document.getElementById('facilityForm').addEventListener('click', function(event) {
            if (event.target.classList.contains('removeFacility')) {
                event.target.parentElement.remove();
            }
        });
    </script>
@endsection
