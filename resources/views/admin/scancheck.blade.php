@extends('admin.app')

@section('content')
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen">
        <div class="w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-16">
                <div class="grid grid-cols-1 gap-6 lg:gap-8">
                    <div id="reader"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            $('#result').val(decodedText);
            let id = decodedText;
            html5QrcodeScanner.clear().then(_ => {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    url: "{{ route('scancheck') }}",
                    type: 'POST',
                    data: {
                        _methode: "POST",
                        _token: CSRF_TOKEN,
                        qr_code: id
                    },
                    success: function(response) {
                        console.log(response);
                        if (response.status == 200) {
                            Swal.fire({
                            icon: "success",
                            title: "Check In Berhasil",
                            showConfirmButton: false,
                            timer: 1500
                            });
                            setTimeout(function() {
                                window.location.href = "{{ route('admin-dashboard') }}";
                            }, 1500);
                        } else {
                            Swal.fire({
                            icon: "error",
                            title: "Oops...",
                            text: "Something went wrong!",
                            });
                        }
                    },
                    error: function(xhr, status, error) {
                        console.log(xhr.responseText);
                        alert('failed');
                    }
                });
            }).catch(error => {
                alert('something wrong');
            });
        }

        function onScanFailure(error) {
            // handle scan failure, usually better to ignore and keep scanning.
            // for example:
            // console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
