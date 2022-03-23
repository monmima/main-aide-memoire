# Bugs

## Truncated label on X axis

If your last label is truncated on the X axis, try adding a margin to the right of your chart.

    chart.paddingRight = 30;

The problem:

![Truncated label before](img/truncated-label-before-1.png)

The solution:

![A truncated label after](img/truncated-label-after-1.png)

## Truncated labels within a graph

Try changing the values for <code>startLocation</code> and <code>endLocation</code>.

The problem:

![Truncated label before](img/truncated-label-before-2.png)

    categoryAxis.startLocation = 0.4;
    categoryAxis.endLocation = 0.6;

The solution:

![Truncated label after](img/truncated-label-after-2.png)

    categoryAxis.startLocation = 0;
    categoryAxis.endLocation = 1;

