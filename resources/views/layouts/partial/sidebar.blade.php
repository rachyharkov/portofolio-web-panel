<x-maz-sidebar href="/" logo="asset('images/logo/logo.png')">
    <!-- Add Sidebar Menu Items Here -->
    <x-maz-sidebar-item name="Dashboard" link="/" icon="bi bi-grid-fill"></x-maz-sidebar-item>
    <x-maz-sidebar-item name="Achievements" link="{{ route('achievements.index') }}" icon="bi bi-award-fill"></x-maz-sidebar-item>
</x-maz-sidebar>

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".submenu .submenu-item").each(function() {
                if ($(this).hasClass("active")) {
                    $(this).parents(".has-sub").addClass("active");
                    $(this).parents(".submenu").addClass("submenu-open");
                }
            });
        });
    </script>
@endpush
