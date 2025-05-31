<x-mail::message>
    @component('mail::message')
    # Welcome, {{ $user->name }}

    You’ve been approved for the Global Wealth Conference 2025.

    Here’s your QR Code:

    <div>
        {!! file_get_contents(public_path('storage/' . $user->qr_code_path)) !!}
    </div>


    Please show this at the event entrance.

    Thanks,<br>
    Uprise City Team
    @endcomponent


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
