@component('mail::message')
<p style="text-align: center;">
# Hi SkoolBlike, You have a new feedback from {{ $data['name'] }}
</p>
<br>
<p style="text-align: center;">
    {{ $data['message'] }}
</p>
<p style="text-align: center;">
Email: {{ $data['email'] }}
</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent
