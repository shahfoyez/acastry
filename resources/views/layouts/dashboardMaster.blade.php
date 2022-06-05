@include('shared.header')
<body>
    @include('navbar.navbar')

    @yield('content')

    @include('shared.footer')

    <!--begin::Modals-->
    @include('modals.createClassroom')
    @include('modals.joinClassroom')
    @include('modals.validationError')
    @include('modals.confirmDelete')

    <!--end::Modals-->
    <script type="text/javascript">
        @if (count($errors) > 0)
            $('#validationError').modal('show');
        @endif
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
    ></script>
    <script>
        $(document).on("click", ".foy-dm-trigger", function () {
            var deleteSlug= $(this).attr('data-item');
            $("#foy-modal-item").attr("action", deleteSlug)
        });
    </script>
</body>
</html>
