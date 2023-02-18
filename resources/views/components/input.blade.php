<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}"
        class="form-control" placeholder="Enter {{ $name }}" tabindex="1" {{ $attributes }}>
</div>
