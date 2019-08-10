@component('mail::message')
# Hey Admin

- Nom: {{ $msg->nom }}
- Email : {{ $msg->email }}
- Message :{{ $msg->message }}

@component('mail::button', ['url' => '','color'=>'green'])
Voir mes messages
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
