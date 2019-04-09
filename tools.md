---
layout: default
title: Cactus actuarial
description: Tools to handle actuarial data.
---

## MPF visualizer

You can **see [demo](https://cactus-actuarial.shinyapps.io/mpf-vis/)** of the application. You are **strongly** encourage to **use your own data** to discover the true power of data visualization.

Model Points are policy data used by actuaries for various valuations. They include information such as: age of policyholders, premium type or sum assured. 

Usually, they include a huge amount of records which make them difficult analyze.

**MPF visualizer** helps to understand the data within Model Point Files. It allows to quickly see main statistics and visualize the distributions of variables within MPFs.

Main characteristics:
* quickly visualizes MPF data,
* allows for comparison of two MPFs (e.g. for seeing changes from year to year)
* frequency or density histograms,
* view od MPF data in user-friendly table.

**MPF visualizer** is built in R Shiny. It can be used for Model Points used in Prophet, i.e. files with ".rpt" extension or it can also be easily adapted for any other kind of MPF format on request.

![MPF-visualizer](../img/screen-1.png)

![MPF-visualizer](../img/screen-2.png)

If you would like to test out MPF visualizer, [just write](./contact.html).