@component('mail::message')
# Package Development

{{ $message }}

@component('mail::button', ['url' => 'https://mvtechzone.com/'])
Author
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
