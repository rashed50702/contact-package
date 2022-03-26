@component('mail::message')
# Introduction

{{ $message }}

<br>
From - {{ $name }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent