@props(['id', 'label' => ''])

<div class="col-sm-12" id="htmlTarget">
    <label for="#{{$id}}Input" class="form-label">{{ $label }}</label>
    <div
        class="input-group"
        id="{{$id}}"
        data-td-target-input="nearest"
        data-td-target-toggle="nearest"
    >
    <input
        id="#{{$id}}Input"
        type="text"
        class="form-control"
        data-td-target="#{{$id}}"
        {{ $attributes }}
        onchange="this.dispatchEvent(new InputEvent('input'))"
    />
    <span
        class="input-group-text"
        data-td-target="#{{$id}}"
        data-td-toggle="datetimepicker"
    >
        <i class="fas fa-calendar"></i>
    </span>
    </div>
</div>

<script type="module">
    new TempusDominus(document.getElementById('{{$id}}'), {
        display: {
            theme: 'light'
        },
        useCurrent: false,
        localization: {
            format: 'yyyy-MM-dd HH:mm:ss',
        }
    });
</script>