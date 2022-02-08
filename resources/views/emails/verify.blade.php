@component('mail::message')
# Verification mail

Hello {{ $user->first_name . ' ' . $user->last_name }}.

@component('mail::button', ['url' => route('verification.verify', [$user->id, $user->activation_code])])
Click here to verify your account
@endcomponent

Thank you for trusting us,<br>
The Doctogon Team.
@endcomponent
