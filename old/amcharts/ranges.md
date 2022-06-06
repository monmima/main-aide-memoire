# Creating a range

If you want to have a range in a horizontal bar chart, this is how you do it. In a horizontal bar chart, a range would be a vertical overlapping line.

    // blue bar
    var range = valueAxis.axisRanges.create();
    range.value = 1000;
    range.grid.stroke = am4core.color("blue");
    range.grid.strokeWidth = 2;
    range.grid.strokeOpacity = 1;
    range.label.inside = true;
    range.label.text = "Goal";
    range.label.fill = range.grid.stroke;
    //range.label.align = "right";
    range.label.verticalCenter = "bottom";
    // This is important. You need this to have the blue line on top of the horizontal bar.
    range.grid.above = true;

Example of a range in a horizontal bar chart:

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            #chartdiv {
                width: 100%;
                height: 300px;
            }

        </style>
    </head>
    <body>
        <script src="//www.amcharts.com/lib/4/core.js"></script>
        <script src="//www.amcharts.com/lib/4/charts.js"></script>
        <script src="//www.amcharts.com/lib/4/themes/animated.js"></script>

        <div id="chartdiv"></div>
        
        <script>
            am4core.useTheme(am4themes_animated);

            // Create chart instance
            var chart = am4core.create("chartdiv", am4charts.XYChart);

            // Add data
            chart.data = [{
                "category": "Research",
                "value": 450
            }, {
                "category": "Marketing",
                "value": 1200
            }, {
                "category": "Distribution",
                "value": 9999
            }];

            var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "category";
            categoryAxis.renderer.grid.template.location = 0;

            var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());

            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueX = "value";
            series.dataFields.categoryY = "category";

            valueLabel.label.truncate = false;
            valueLabel.label.hideOversized = false;

            // creating your ranges

            // blue bar
            var range = valueAxis.axisRanges.create();
            range.value = 1000;
            range.grid.stroke = am4core.color("blue");
            range.grid.strokeWidth = 2;
            range.grid.strokeOpacity = 1;
            range.label.inside = true;
            range.label.text = "Goal";
            range.label.fill = range.grid.stroke;
            //range.label.align = "right";
            range.label.verticalCenter = "bottom";
            // This is important. You need this to have the blue line on top of the horizontal bar.
            range.grid.above = true;

            // green bar 
            var range2 = valueAxis.axisRanges.create();
            range2.value = 750;
            range2.grid.stroke = am4core.color("green");
            range2.grid.strokeWidth = 2;
            range2.grid.strokeOpacity = 1;
            range2.label.inside = true;
            range2.label.text = "Threshold";
            range2.label.fill = range2.grid.stroke;
            //range2.label.align = "right";
            range2.label.verticalCenter = "bottom";
            // This is important. You need this to have the green line on top of the horizontal bar.
            range2.grid.above = true;

        </script>
    </body>
    </html>