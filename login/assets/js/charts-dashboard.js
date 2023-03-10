/*global $, document, Chart, LINECHART, data, options, window*/
'use strict';

// Main Template Color
var brandPrimary = '#33b35a';

// ------------------------------------------------------- //
// Pie Chart
// ------------------------------------------------------ //

var mysql = require('mysql');

var con = mysql.createConnection({
    host: "www.azedpress.com",
    user: "azedpres_user",
    password: 'Azedpress@2022',
    database: 'azedpres_trackingdb'
});

con.connect(function (err) {
    if (err) throw err;
    con.query("SELECT COUNT(uid) FROM tbltrackings", function (err, result) {
        if (err) throw err;

        setValue(result);

        function setValue(value) {
            someVar = value;
            console.log(someVar);
        }

        var PIECHART = $('#pieChart');
        var myPieChart = new Chart(PIECHART, {
            type: 'doughnut',
            data: {
                labels: [
                    "Entregado",
                    "Warehouse",
                    "Para Entrega"
                ],
                datasets: [
                    {
                        data: [someVar, 2, 0],
                        borderWidth: [1, 1, 1],
                        backgroundColor: [
                            brandPrimary,
                            "rgba(75,192,192,1)",
                            "#FFCE56"
                        ],
                        hoverBackgroundColor: [
                            brandPrimary,
                            "rgba(75,192,192,1)",
                            "#FFCE56"
                        ]
                    }]
            }
        });
    });
});