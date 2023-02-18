<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}" {{ $attributes }}>
        <option value="" selected>Select {{ $label }}</option>

        @foreach ($options as $option)
            <option  {{ $option['selected'] ? 'selected' : '' }} value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach
    </select>
</div>
