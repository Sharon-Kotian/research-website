@component('mail::message')
We heard that you lost your MIT-WPU research web credentials. Use the OTP given below to reset your password.

OTP : {{ $otp }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent