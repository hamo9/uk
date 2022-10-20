@component('mail::message')
# {{ $maildata['title'] }}

Name : {{ $maildata['name'] }}
<br>
Email : {{ $maildata['email'] }}
<br>
Message : {{ $maildata['message'] }}
{{--
@component('mail::button', ['url' => $maildata['url']])
Verify
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
