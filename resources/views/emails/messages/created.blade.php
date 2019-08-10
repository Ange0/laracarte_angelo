@component('mail::message')
# Hey Admin

- Nom: {{ $name }}
- Email : {{ $email }}
- Message :{{ $msg }}

@component('mail::button', ['url' => '','color'=>'green'])
Voir mes messages
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
