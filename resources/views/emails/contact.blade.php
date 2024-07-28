@component('mail::message')
# Contact Message

**Name:** {{ $data['name'] }}<br>
**Email:** {{ $data['email'] }} <br>
**Subject:** {{ $data['subject'] }}<br>

**Message:**
{{ $data['message'] }} <br>

Thanks,
{{ config('app.name') }}
@endcomponent
