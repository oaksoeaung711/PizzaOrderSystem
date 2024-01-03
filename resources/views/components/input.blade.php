@if(!empty($label))
    <label
        for="{{ $name }}"
        @class([
            "block mb-2 text-sm font-medium",
            "text-red-500" => $errors->has($name),
            "text-gray-500" => !$errors->has($name)
        ])
        >
        {{ $label }}
    </label>
@endif
<div class="form-group relative">
    <div 
        @class([
            "form-group-icon absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none transition-all duration-300",
            "text-gray-400" => !$errors->has($name),
            "text-red-500" => $errors->has($name),
        ])
    
    >
        <i class="{{ $icon }}"></i>
    </div>
    <input
        id = "{{ $name }}"
        name = "{{ $name }}"
        type = "{{ $type }}"
        value="{{ old($name,$value) }}"
        placeholder="{{ $placeholder }}"
        autocomplete="off"
        @class([
            "form-group-input bg-gray-50 border border-gray-200 text-gray-700 text-sm rounded-lg focus:outline-none block w-full ps-10 p-2.5",
            "focus:border-gray-400" => !$errors->has($name),
            "border-red-400" => $errors->has($name),
        ])
    >
</div>
@error($name)
    <div class="text-red-500 text-sm font-medium mt-2">{{ $message }}</div>
@enderror

@pushOnce('inputBoxScript')
    <script src="{{ asset('assets/js/inputbox.js') }}" type="text/javascript"></script>
@endPushOnce

{{-- <x-input label="" name="" type="" icon="" placeholder="" value="" /> --}}