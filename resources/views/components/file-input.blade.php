<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>

    <input id="{{ $name }}" name="{{ $name }}" value="{{ old('name') }}" type="file"
        class="form-control" placeholder="Enter {{$name}}" tabindex="1">
</div>
