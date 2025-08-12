<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 notification_message">
            @foreach (['success', 'fail', 'info', 'warning'] as $msg)
                @if ($message = Session::get($msg))
                    <div class="alert alert-{{ $msg == 'fail' ? 'danger' : $msg }} dark alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            @foreach (['success', 'fail', 'info', 'warning'] as $msg)
                @if ($message = Session::get($msg))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire({
                                icon: '{{ $msg == 'fail' ? 'error' : $msg }}',
                                title: '{{ ucfirst($msg) }}',
                                text: '{{ $message }}',
                                confirmButtonText: 'Close',
                                customClass: {
                                    confirmButton: 'btn btn-primary'
                                },
                                buttonsStyling: false
                            });
                        });
                    </script>
                @endif
            @endforeach
        </div>
    </div>
</div>

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Validation Errors',
                html: '<ol>{!! implode('', $errors->all('<li>:message</li>')) !!}</ol>',
                confirmButtonText: 'Ok'
            });

        });
    </script>
@endif --}}
