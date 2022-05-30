# Bugs

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

