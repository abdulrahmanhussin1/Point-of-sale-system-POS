@extends('admin.layouts.app')
@section('title')
{{ __('Roles Page ') }}

@endsection
@section('content')
{{-- Start breadcrumbs --}}
    <x-breadcrumb pageName="Users">
        <x-breadcrumb-item>
            <a class="active" href="{{ route('home') }}">{{ __('Home') }}</a>
        </x-breadcrumb-item>
        <x-breadcrumb-item>{{ __('Users') }}</x-breadcrumb-item>


    </x-breadcrumb>
{{-- End breadcrumbs --}}

    <section class="section">


        <div>
            {{ $dataTable->table(['class' => ' responsive table fs--1 mb-0 bg-white my-3 rounded-2 shadow', 'width' => '100%']) }}
        </div>
    </section>
@endsection
@section('js')
<script>
  {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

    $(document).ready(function() {

        $(document).on('click', '.delete-this-user', function(e) {
            e.preventDefault();
            let el = $(this);
            let url = el.attr('data-url');
            let id = el.attr('data-id');
            swalWithBootstrapButtons.fire({
                title: "Are you sure you really want to delete this User?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        method: "DELETE",
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        success: function(msg) {
                            window.location.href = "{{ route('users.index') }}";
                        }
                    });
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === swalWithBootstrapButtons.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "User is safe :)",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
@endsection
