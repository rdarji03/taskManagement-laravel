<x-mail::message>
# Introduction

<p>Email:{{$emailData->userEmail}}</p>
<p>subject:{{$emailData->subject}}</p>
<p>message:{{$emailData->mailMessage}}</p>

Thanks for contacting!,<br>
{{ config('app.name') }}
</x-mail::message>
