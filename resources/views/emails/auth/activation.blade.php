@component('mail::message')
# Activation Your Account

Thanks For signing up,Your Token IS ({{$user->activation_token}})

@component('mail::button', ['url' => route('auth.active')])
    Enter Your Token
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
