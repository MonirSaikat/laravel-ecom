<div class="form-group">
    <label for="{{ $name }}">{{ $label }}</label>
    <select class="form-control" name="{{ $name }}" id="{{ $name }}">
        <option value="" selected>Select {{ $label }}</option>

        @foreach ($options as $option)
            <option value="{{$option->id}}">{{$option->name}}</option>
        @endforeach
    </select>
</div>
