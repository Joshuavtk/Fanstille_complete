<div class="wrap">
    <h1>Upcoming events!</h1>
    <table id="event-table">
        <tr id="top-row">
            <td>Event name</td>
            <td>Event date</td>
            <td>Location</td>
        </tr>
        {foreach from=$events_list item=event}
            <tr>
                <td>{$event.festival}</td>
                <td>{$event.time|date_format:"Y-m-d"}</td>
                <td>{$event.location}</td>
                <td class="table-button"><a href="https://{$event.website}" class="dark-button">More info</a>
                </td>
            </tr>
        {/foreach}
    </table>
</div>