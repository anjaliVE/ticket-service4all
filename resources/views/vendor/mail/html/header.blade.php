<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'TicketService')
<img src="https://ticket-service4all.nl/images/logo-service4all-helpdesk.png" class="logo" alt="TicketService Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
