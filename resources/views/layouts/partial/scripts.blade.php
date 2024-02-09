<script src="{{ asset("assets/static/js/components/dark.js")}}"></script>
<script src="{{ asset("assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js")}}"></script>

<script src="{{ asset("assets/compiled/js/app.js")}}"></script>

@include("sweetalert::alert")

{{-- import jquery --}}
{{-- <script src="{{ asset("assets/extensions/jquery/jquery.min.js")}}"></script> --}}

@stack("js")
