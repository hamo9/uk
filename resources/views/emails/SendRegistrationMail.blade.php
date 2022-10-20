@component('mail::message')

first name : {{ $maildata['first_name'] }}
<br>
father name : {{ $maildata['father_name'] }}
<br>
grandfather name : {{ $maildata['grandfather_name'] }}
<br>
family name : {{ $maildata['family_name'] }}
<br>
telephone number : {{ $maildata['telephone_number'] }}
<br>
email : {{ $maildata['email'] }}
<br>
date of birth : {{ $maildata['date_of_birth'] }}
<br>
address : {{ $maildata['address'] }}
<br>
Specialization to be registered : {{ $maildata['specialization'] }}


@component('mail::button', ['url' => 'https://nileuniversity.in/user-profile/'.$maildata['id'] ])
Show user
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
