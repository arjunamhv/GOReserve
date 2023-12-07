@extends('admin.app')

@section('content')
    <h1 class="text-center text-4xl font-bold m-5">Manage My GOR</h1>
    <h1 class="text-xl m-5 mb-1">My Gor</h1>
    <div class="mx-10">
        <div class="my-5">
            <label for="banner" class="label">
                <span class="label-text">GOR Banner</span>
            </label>
            <img src="{{ asset('storage/images/gorbanner/' . $gorData->gor_banner) }}" class="max-w-full mt-1 max-h-48"
                alt="banner.img">
        </div>
        <div class="my-5">
            <label for="images" class="label">
                <span class="label-text">GOR Images</span>
            </label>
            @foreach ($gorData->gor_photos as $image)
                <img src="{{ asset('storage/' . $image) }}" class="max-h-28 max-w-max m-1 inline-block" alt="photo.img">
            @endforeach
        </div>
        <div class="form-control my-5">
            <label class="label">
                <span class="label-text">GOR Name</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered w-full" value="{{ $gorData->name }}"
                disabled />
        </div>
        <div>
            <label class="pl-1 mt-5">GOR Address</label>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-2">
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Provinsi</span>
                    </label>
                    <input type="text" class="input input-bordered" value="{{ $gorData->address['provinsi'] }}" disabled>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Kota/Kabupaten</span>
                    </label>
                    <input type="text" class="input input-bordered" value="{{ $gorData->address['kota'] }}" disabled>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Kecamatan</span>
                    </label>
                    <input type="text" class="input input-bordered" value="{{ $gorData->address['kecamatan'] }}"
                        disabled>
                </div>
                <div class="form-control w-full">
                    <label class="label">
                        <span class="label-text">Kelurahan</span>
                    </label>
                    <input type="text" class="input input-bordered" value="{{ $gorData->address['kelurahan'] }}"
                        disabled>
                </div>
            </div>
            <div class="form-control">
                <label class="label">
                    <span class="label-text">Detail Alamat</span>
                </label>
                <textarea class="textarea textarea-bordered h-12" placeholder="Bio" disabled>{{ $gorData->address['detailAlamat'] }}</textarea>
            </div>
        </div>
        <div class="form-control my-5">
            <label class="label">
                <span class="label-text">GOR Contact</span>
            </label>
            <input type="text" placeholder="Type here" class="input input-bordered w-full"
                value="{{ $gorData->contact }}" disabled />
        </div>

        <div>
            <label class="label mt-5">
                <span class="label-text">GOR Operational Hour</span>
            </label>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-5 md:gap-0">
                <div class="form-control col-span-2">
                    <input type="time" placeholder="Type here" class="input input-bordered w-full"
                        value="{{ $gorData->opening_hour }}" disabled />
                </div>
                <div class="text-center my-auto">
                    <span>Sampai</span>
                </div>
                <div class="form-control col-span-2">
                    <input type="time" placeholder="Type here" class="input input-bordered w-full"
                        value="{{ $gorData->closing_hour }}" disabled />
                </div>
            </div>
        </div>

        <div class="form-control my-5" id="facilitiesContainer">
            <label class="label">
                <span class="label-text">GOR Facility</span>
            </label>
            <div class="facility-item">
                @foreach ($gorData->facility as $facility)
                    <input type="text" name="facilities[0]" placeholder="Type here"
                        class="input input-bordered my-1 w-full" value="{{ $facility }}" disabled />
                @endforeach
            </div>
        </div>
        <a href="{{ url('gor/' . $gorData->id . '/edit') }}" class="btn btn-block btn-primary">Edit</a>
    </div>
    <div class="divider"></div>
    <div class="mx-10">
        <div class="flex justify-between m-5">
            <h1 class="text-xl">My Fields</h1>
            <a href="{{ url('field/' . $gorData->id) }}" class="btn btn-sm btn-primary">Add Fields</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($fieldsData as $field)
                <div class="card w-full bg-base-100 shadow-xl">
                    <figure class="h-28 overflow-hidden"><img class="object-cover w-full h-full"
                            src="{{ asset('storage/images/fieldbanner/' . $field->field_banner) }}" alt="Field banner" />
                    </figure>
                    <div class="card-body">
                        <p>Field Name :</p>
                        <p>{{ $field->name }}</p>
                        <p>Field Type :</p>
                        <p>{{ $field->type->name }}</p>
                        <div class="card-actions justify-end">
                            <a href="{{ url('field/' . $field->id . '/edit') }}" class="btn btn-sm btn-warning"><i
                                    class="fa-regular fa-pen-to-square"></i></a>
                            <button class="btn btn-sm btn-error delete-btn" data-field-id="{{ $field->id }}">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    @if(session('success'))
    <script>
        let timerInterval;
        Swal.fire({
        title: '{{ session('success') }}',
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();
            const timer = Swal.getPopup().querySelector("b");
            timerInterval = setInterval(() => {
            timer.textContent = `${Swal.getTimerLeft()}`;
            }, 100);
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log("I was closed by the timer");
        }
        });
    </script>
    @endif

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('.delete-btn');

            deleteButtons.forEach((button) => {
                button.addEventListener('click', function() {
                    const fieldId = button.getAttribute('data-field-id');

                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    });

                    swalWithBootstrapButtons.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'No, cancel!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const form = document.createElement('form');
                            form.action = `{{ url('field/') }}/${fieldId}`;
                            form.method = 'POST';
                            form.innerHTML = `
                            @csrf
                            @method('DELETE')
                        `;
                            document.body.appendChild(form);
                            form.submit();
                        } else if (result.dismiss === Swal.DismissReason.cancel) {
                            swalWithBootstrapButtons.fire(
                                'Cancelled',
                                'Your imaginary file is safe :)',
                                'error'
                            );
                        }
                    });
                });
            });
        });
    </script>
@endsection
