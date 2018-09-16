'use strict';
$(document).ready(function() {

    /*Area chart*/

        var chart = AmCharts.makeChart("statestics-chart", {
            "type": "serial",
            "marginTop": 0,
            "hideCredits": true,
            "marginRight": 0,
            "dataProvider": [{
                "year": "Jan",
                "value": 0.98
            }, {
                "year": "Feb",
                "value": 1.87
            }, {
                "year": "Mar",
                "value": 0.97
            }, {
                "year": "Apr",
                "value": 1.64
            }, {
                "year": "May",
                "value": 0.40
            }, {
                "year": "Jun",
                "value": 2.90
            }, {
                "year": "Jul",
                "value": 5.2
            }, {
                "year": "Aug",
                "value": 0.77
            }, {
                "year": "Sap",
                "value": 3.1
            }],
            "valueAxes": [{
                "axisAlpha": 0,
                "dashLength": 6,
                "gridAlpha": 0.1,
                "position": "left"
            }],
            "graphs": [{
                "id": "g1",
                "bullet": "round",
                "bulletSize": 9,
                "lineColor": "#4680ff",
                "lineThickness": 2,
                "negativeLineColor": "#4680ff",
                "type": "smoothedLine",
                "valueField": "value"
            }],
            "chartCursor": {
                "cursorAlpha": 0,
                "valueLineEnabled": false,
                "valueLineBalloonEnabled": true,
                "valueLineAlpha": false,
                "color": '#fff',
                "cursorColor": '#FC6180',
                "fullWidth": true
            },
            "categoryField": "year",
            "categoryAxis": {
                "gridAlpha": 0,
                "axisAlpha": 0,
                "fillAlpha": 1,
                "fillColor": "#FAFAFA",
                "minorGridAlpha": 0,
                "minorGridEnabled": true
            },
            "export": {
                "enabled": true
            }
        });
        /*donut chart*/

});