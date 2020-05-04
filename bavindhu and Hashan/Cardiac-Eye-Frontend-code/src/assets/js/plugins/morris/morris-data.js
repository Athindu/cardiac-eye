// Morris.js Charts sample data for SB Admin template

$(function() {

    // Area Chart
    Morris.Area({
        element: 'morris-area-chart',
        data: [{
            period: '2018 Q1',
            Donors: 122,
            Organizations: null,
            Requesters: 45
        }, {
            period: '2018 Q2',
            Donors: 131,
            Organizations: 21,
            Requesters: 123
        }, {
            period: '2018 Q3',
            Donors: 155,
            Organizations: 33,
            Requesters: 121
        }, {
            period: '2018 Q4',
            Donors: 123,
            Organizations: 3,
            Requesters: 32
        }, {
            period: '2018 Q5',
            Donors: 166,
            Organizations: 56,
            Requesters: 78
        }, ],
        xkey: 'period',
        ykeys: ['Donors', 'Organizations', 'Requesters'],
        labels: ['Donors', 'Organizations', 'Help Requesters'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "No of Donors Per day",
            value: 54
        }, {
            label: "No of Organizations Per Day",
            value: 24
        }, {
            label: "No of Requesters Per Day",
            value: 34
        }],
        resize: true
    });

    


});
