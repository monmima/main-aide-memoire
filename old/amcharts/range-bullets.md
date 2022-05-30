# Adding bullets to a range

To add a bullet to a range, you need to do this:

    createBullet(range, 0);
    createBullet(range2, -235);

A complete chart would look like this:

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
            /**
            * Creating the yellow bullet at the tip of the range (horizontal line)
            */
            function createBullet (whatRange, whatPosition) {
                whatRange.bullet = new am4core.Circle();
                whatRange.bullet.width = 15;
                whatRange.bullet.height = 11;
                whatRange.bullet.fill = am4core.color('#DCD267');
                whatRange.bullet.tooltipText = "Text to display";
                whatRange.bullet.dy = whatPosition;
            }

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
                "value": 1850
            }];

            var categoryAxis = chart.yAxes.push(new am4charts.CategoryAxis());
            categoryAxis.dataFields.category = "category";
            categoryAxis.renderer.grid.template.location = 0;

            var valueAxis = chart.xAxes.push(new am4charts.ValueAxis());

            var series = chart.series.push(new am4charts.ColumnSeries());
            series.dataFields.valueX = "value";
            series.dataFields.categoryY = "category";

            /**
            * Create vertical line
            */
            var range = valueAxis.axisRanges.create();
            range.value = 1000;
            range.grid.stroke = am4core.color("#396478");
            range.grid.strokeWidth = 2;
            range.grid.strokeOpacity = 1;
            range.label.inside = true;
            range.label.text = "Goal";
            range.label.fill = range.grid.stroke;
            //range.label.align = "right";
            range.label.verticalCenter = "bottom";

            // important, to make sure the vertical "Goal" line sits on top of the blue bars
            range.grid.above = true;

            var range2 = valueAxis.axisRanges.create();
            range2.value = 1000;

            /**
            * Calling the function that create bullets
            */
            createBullet(range, 0);
            createBullet(range2, -235);

            console.log(range2);

        </script>
    </body>
    </html>