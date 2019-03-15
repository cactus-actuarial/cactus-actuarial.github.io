---
layout: default
title: Cactus actuarial
description: Tools to handle actuarial data.
---

## MPF visualizer

Model Points are policy data used by actuaries to calculate Technical Provisions. They include data such as: age of policyholders, premium type or sum assured. Usually, they include a huge amount of records which make them difficult analyze.

**MPF visualizer** helps to understand the data within Model Point Files. It allows to quickly see main statistics and visualize the distributions of variables within MPFs.

Main characteristics:
* visualization of data from one MPF or comparison of two MPFs,
* frequency or density histograms,
* product's description.

**MPF visualizer** is built in R Shiny. It can be used for Model Points used in Prophet, i.e. files with ".rpt" extension. It can also be easily adapted for any other kind of MPF format on request.

![MPF-visualizer](../img/screen-1.png)

![MPF-visualizer](../img/screen-2.png)

Requirements:
* MPF in Prophet format (also adaptable for any other MPF format),
* [R Studio](https://www.rstudio.com/).

If you would like to test out MPF visualizer, [just write](./contact.html).