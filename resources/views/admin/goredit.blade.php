@extends('admin.app')

@section('content')
    <h1 class="text-center text-4xl font-bold m-5">Edit GOR</h1>

    <div class="m-10">
        <form method="POST" action="{{ url('gor/' . $gorData->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="my-5">
                <label for="gorbanner" class="label">
                    <span class="label-text">Add GOR Banner</span>
                </label>
                <input type="file" name="inpgorbanner" id="gorbanner"
                    class="error-check @error('inpgorbanner') border-error @enderror file-input file-input-bordered w-full"
                    onchange="previewBanner(this)" value="{{ $gorData->gor_banner }}" />
                @error('inpgorbanner')
                    <div class="text-error">{{ $message }}</div>
                @enderror
                <img id="bannerPreview" src="{{ asset('storage/images/gorbanner/' . $gorData->gor_banner) }}" alt="Preview"
                    class="max-w-full mt-1 max-h-48" />
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
                <div id="previewfoto" class="mt-2 gap-4">
                    @foreach ($gorData->gor_photos as $images)
                        <img src="{{ asset('storage/images/gorphotos/' . $images) }}"
                            class="max-h-28 max-w-max m-1 inline-block" alt="photo.img" />
                    @endforeach
                </div>
            </div>
            <div class="form-control my-5">
                <label for="gorname" class="label">
                    <span class="label-text">GOR Name</span>
                </label>
                <input type="text" name="inpgorname" placeholder="Type here" value="{{ $gorData->name }}"
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
                            @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}"
                                    {{ $gorData->address['provinsi'] == $provinsi->name ? 'selected' : '' }}>
                                    {{ $provinsi->name }}</option>
                            @endforeach
                        </select>
                        @error('inpprovinsi')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- @dd($gorData->address['kota']) --}}
                    <div class="form-control w-full">
                        <label for="kota" class="label">
                            <span class="label-text">Kota/Kabupaten</span>
                        </label>
                        <select name="inpkota" id="kota"
                            class="error-check @error('inpkota') border-error @enderror select select-bordered">
                            @foreach ($cities as $kota)
                                <option value="{{ $kota->id }}"
                                    {{ $gorData->address['kota'] == $kota->name ? 'selected' : '' }}>{{ $kota->name }}
                                </option>
                                @endforeach
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
                            @foreach ($districts as $kecamatan)
                                <option value="{{ $kecamatan->id }}"
                                    {{ $gorData->address['kecamatan'] == $kecamatan->name ? 'selected' : '' }}>
                                    {{ $kecamatan->name }}</option>
                            @endforeach
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
                            @foreach ($sub_districts as $kelurahan)
                                <option value="{{ $kelurahan->id }}"
                                    {{ $gorData->address['kelurahan'] == $kelurahan->id ? 'selected' : '' }}>
                                    {{ $kelurahan->name }}</option>
                            @endforeach
                        </select>
                        @error('inpkelurahan')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-control">
                    <label for="detail_alamat" class="label">
                        <span class="label-text">Detail Alamat</span>
                    </label>
                    <textarea name="inpdetail_alamat" id="detail_alamat"
                        class="error-check @error('inpdetail_alamat') border-error @enderror textarea textarea-bordered h-12"
                        placeholder="Type Here">{{ $gorData->address['detailAlamat'] }}</textarea>
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
                    value="{{ $gorData->contact }}"
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
                            value="{{ $gorData->opening_hour }}"
                            class="error-check @error('inpstarttime') border-error @enderror input input-bordered w-full" />
                        @error('inpstarttime')
                            <div class="text-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center my-auto">
                        <span>Sampai</span>
                    </div>
                    <div class="form-control col-span-2">
                        <input type="time" name="inpendTime" placeholder="Type here"
                            value="{{ $gorData->closing_hour }}"
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
                        value="{{ $gorData->facility[0] }}" class="input input-bordered col-span-10" />
                    <button type="button" class="btn btn-sm btn-primary col-span-2 my-auto" id="addFacilityBtn"><i
                            class="fa-solid fa-plus inline md:hidden"></i><span class="hidden md:inline">Add
                            more</span></button>
                </div>
            </div>
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <button type="submit" class="btn btn-block btn-primary">Update</button>
        </form>
    </div>

    <script>
        // image preview handling

        function previewPhotos(input) {
            var previewfoto = document.getElementById('previewfoto');
            // Clear existing previews
            previewfoto.innerHTML = '';

            for (let i = 0; i < input.files.length; i++) {
                let file = input.files[i];
                let reader = new FileReader();

                reader.onload = function(e) {
                    previewfoto.innerHTML += `
                    <img src="${e.target.result}" alt="Image Preview" class="max-h-28 max-w-max m-1 inline-block">
                `;
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
                    bannerPreview.src = '';
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
        document.addEventListener('DOMContentLoaded', function() {
            // Restore the facility inputs from old input values
            restoreFacilities();
        document.getElementById('addFacilityBtn').addEventListener('click', function() {
            let facilitiesContainer = document.getElementById('facilitiesContainer');
            let facilityCount = document.querySelectorAll('[name^="inpfacilities"]').length;

            // Tambah input untuk fasilitas baru
            let newFacilityInput = document.createElement('div');
            newFacilityInput.classList.add('facility-item');
            newFacilityInput.innerHTML = `
            <div class="grid grid-cols-12 gap-4 my-1 align-middle">
                <input type="text" name="inpfacilities[${facilityCount}]" placeholder="Type here"
                    class="input input-bordered col-span-10" />
                <button type="button" class="btn btn-sm btn-error my-auto col-span-2 removeFacility">
                    <i class="fa-solid fa-trash-can inline md:hidden"></i>
                    <span class="hidden md:inline">Remove</span>
                </button>
            </div>
            `;

            newFacilityInput.querySelector('.removeFacility').addEventListener('click', function() {
                newFacilityInput.remove();
            });

            facilitiesContainer.appendChild(newFacilityInput);
        });

        document.getElementById('facilitiesContainer').addEventListener('click', function(event) {
            if (event.target.classList.contains('removeFacility')) {
                event.target.closest('.facility-item').remove();
            }
        });
        
            function restoreFacilities() {
                let inpfacilitiesOld = @json($gorData->facility);
                let inpfacilitiesCount = inpfacilitiesOld.length;
                console.log(inpfacilitiesCount);
                if (inpfacilitiesCount > 1) {
                    let facilitiesContainer = document.getElementById('facilitiesContainer');
                    for (let i = 1; i < inpfacilitiesCount; i++) {
                        let newFacilityInput = document.createElement('div');
                        newFacilityInput.classList.add('facility-item');
                        newFacilityInput.innerHTML = `
                    <div class="grid grid-cols-12 gap-4 my-1 align-middle">
                        <input type="text" name="inpfacilities[${i}]" placeholder="Type here" class="input input-bordered col-span-10" value="${inpfacilitiesOld[i]}" />
                        <button type="button" class="btn btn-sm btn-error my-auto col-span-2 removeFacility"><i class="fa-solid fa-trash-can inline md:hidden"></i><span class="hidden md:inline">Remove</span></button>
                    </div>
                `;
                        facilitiesContainer.appendChild(newFacilityInput);

                        // Add event listener after adding a restored facility
                        newFacilityInput.querySelector('.removeFacility').addEventListener('click',
                            function() {
                                newFacilityInput.remove();
                            });
                    }
                }
            }
        });
    </script>
@endsection
