@props(['id', 'inModal' => false, 'modalId' => ''])
<select id="{{ $id }}">
    {{ $slot }}
</select>

<script type="module">
    $(document).ready(function () {
        $('#{{$id}}').select2({
            @if ($inModal)
                dropdownParent: $('#{{$modalId}}')
            @endif
        });
    });
</script>