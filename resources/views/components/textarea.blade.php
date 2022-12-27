@props(['disabled' => false, 'field' => ''])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm']) !!}></textarea>
@error($field)
    <div class="text-red-600 text-sm">{{ $message }}</div>
@enderror
