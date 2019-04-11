---
layout: default
title: Cactus actuarial
description: Tools to handle actuarial data.
---

## [1] MPF vis

You can see [demo](https://cactus-actuarial.shinyapps.io/mpf-vis/) of the application. 

You are **strongly** encouraged to **use your own data** to discover the true power of data visualization.

Model Points are policy data used by actuaries for various purposes, such as valuation of reserves or measuring profitability of products. They include information such as: age of policyholders, premium type or sum assured. 

Usually, they include a huge amount of records which make them difficult analyze.

**MPF visualizer** helps to understand the data within Model Point Files. It allows to quickly see main statistics and visualize the distributions of variables within MPFs.

Main characteristics:
* quickly visualizes MPF data,
* allows for comparison of two MPFs (e.g. for seeing changes from year to year)
* frequency or density histograms,
* view of MPF data in user-friendly table.

**MPF visualizer** is built in R Shiny. It can be used for Model Points used in Prophet, i.e. files with ".rpt" extension or it can also be easily adapted for any other kind of MPF format on request.

![MPF-visualizer](../img/screen-1.png)

![MPF-visualizer](../img/screen-2.png)

## [2] EIOPA RFR vis

See [EIOPA RFR vis](https://cactus-actuarial.shinyapps.io/eiopa-rfr-vis/) application.

This tool allows to visualize **curves**. In the application above, we can see EIOPA RFR spot with no VA curves for various countries.

The interactive graph bases on risk-free interest rates (RFR) term structures published by EIOPA. RFR term structures are used for the calculation of the technical provisions for (re)insurance obligations.

In line with the Solvency II Directive, EIOPA publishes technical information relating to RFR term structures on a monthly basis.

The EIOPA RFR vis application allows to quickly visualize and compare curves for certain countries.

![EIOPA-RFR-vis](../img/eiopa-rfr-1.png)

![EIOPA-RFR-vis](../img/eiopa-rfr-2.png)

If you would like to test out MPF or curves visualizer, [just write](./contact.html).