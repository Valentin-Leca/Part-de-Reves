flatpickr.localize(flatpickr.l10ns.fr);
flatpickr("#flatpickr", {
    enableTime: true,
    minDate: "today",
    dateFormat: "d-m-Y H:i",
    time_24hr: true,
    minTime: "10:00",
    maxTime: "18:00",
    "disable": [
        function(date) {
            return (date.getDay() === 0 || date.getDay() === 7);

        }
    ],
    "locale": {
        "firstDayOfWeek": 1
    }
});

$('.flatpickr-input:visible').on('focus', function () {
    $(this).blur()
})
$('.flatpickr-input:visible').prop('readonly', false)