# Course Content

On this page are the topics covered in the course. Please also explore the '[Notes](notes)' page for supplementary material that might be of interest, or further applicable to your project, including notes from workshops, seminars and tutorials.

Note that there are no classes in Week 1.

## Wk2: Design to Analysis

<div class="thumbnail span3 pull-right grey">
**In this topic...**
<ul><li>The Systems Lens</li></ul>
**Online Classroom**
<ul><li>[Design to Analysis](http://www.youtube.com/watch?v=rfnNX_vegGo&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_01-Design-to-Analysis.pdf))</li></ul>
**Related Resources**
<ul><li>[Seminar Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk2-design-to-analysis)</li></ul>
</div>

Good systems engineers are continually designing, testing (analysing), re-designing, re-testing until they reach perfection, which is (of course) unachievable. In this course you'll be asked to take a 'systems' view of problems, where your design is not a nice, discrete system, but has boundaries that you cannot control. 

### Technique: The Systems Lens
*  [The Systems Lens](http://eng.anu.edu.au/courses/ENGN2225/course-files/wk01-Meadows_ThinkingInSystems.pdf) (PDF)

## Wk3: Informed Estimation

<div class="thumbnail span3 pull-right grey">
**In this topic...**
<ul><li>Technique: BOTE Estimation</li>
<li>Technique: Data Collection</li>
<li>Fundamentals: Error</li>
</ul>
**Online Classroom**
<ul><li>[BotE Estimation](http://www.youtube.com/watch?v=2dIM-wK9unc&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_03-BotEEstimation.pdf))</li></ul>
**Related Resources**
<ul><li>[Tutorial on Estimation](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk3-informed-estimation)</li></ul>
</div>

Information about your system is not always nicely collated. Sometimes you have access to information, sometimes you have access to 'proxy' indicators, and other times you have to make an informed estimation. The focus of this topic is to develop a good working understanding of how you can make good estimations in the absence of data.

### Technique: Back of the Envelope Estimation
<iframe class="pull-right thumbnail" width="360" height="210" src="//www.youtube.com/embed/0YzvupOX8Is?rel=0" frameborder="0" allowfullscreen></iframe>

Back of the envelope estimation is an important skill - one that Manhattan Project physicist Enrico Fermi was fascinated by.

*  [Fermi problem on Wikipedia](http://en.wikipedia.org/wiki/Fermi_problem)
*  [Maths & Modern Life](http://www.abc.net.au/radionational/programs/bigideas/maths-and-modern-life/4554220) ([Direct Link to Audio ~17min](	http://mpegmedia.abc.net.au/rn/podcast/2013/03/bia_20130312_2042.mp3))
*  [A Clever Way to Estimate Enormous Numbers (video)](http://ed.ted.com/lessons/michael-mitchell-a-clever-way-to-estimate-enormous-numbers)

### Technique: Data Collection

A good place to start finding data to verify estimation of Fermi problems is the [Australian Bureau of Statistics](http://abs.gov.au/). For example, does the [Population Pyramid](http://www.abs.gov.au/websitedbs/d3310114.nsf/home/Population%20Pyramid%20-%20Australia) help you understand how many families own pianos? Or would the [Key Economic Indicators](http://abs.gov.au/AUSSTATS/abs@.nsf/mf/1345.0?opendocument?opendocument#from-banner=LN) offer a better understanding?

See also: [Google's Public Data Explorer](https://www.google.com.au/publicdata/directory)

### Fundamentals: Error

Error is inherent in all analyses. It is crucial to be aware of these errors, and to design your analysis in such a way that it minimises the bias when collecting data. If you're collecting data about your system, how would you make sure that you avoid these types of error?

* Sampling error
* Non-sampling errors
  * coverage error
  * non-response error
  * response error
  * interviewer error
  * processing error

More information and examples are available on the [Australian Bureau of Statistics website](http://www.abs.gov.au/websitedbs/a3121120.nsf/home/statistical+language+-+types+of+error)

## Wk4: Behaviour Over Time

<div class="thumbnail span3 pull-right grey">
**In this topic...**
<ul><li>Technique: Reference Modes</li>
<li>Technique: Diffusion of Innovations</li>
<li>Fundamentals: Data fitting</li></ul>
**Online Classroom**
<ul><li>[Diffusion of Innovations](http://www.youtube.com/watch?v=egfP7zs3kps&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_04_Diffusion.pdf))</li></ul>
**Related Resources**
<ul><li>[Seminar on Dynamic Systems](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk4-dynamical-systems)</li>
<li>[Approach: Systems Thinking](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk4-dynamical-systems)</li></ul>
</div>

Week 4 is not a heavy content week, as the tutorials are concentrating on the PCD, and everyone is gearing up for the student facilitations in Week 5. That said, take notice of this topic, as it might be useful for your portfolio.

Systems change over time, and understanding the dynamical behaviour is important to being able to make good decisions about your system. A reference mode provides an indication of past behaviour over time, and is invaluable in attempting to forecast future behaviour.

### Technique: Reference Modes
You should seek to find as much historical data as possible to better understand what the underlying behaviour is - this is the Reference Mode. By understanding the historical context, you can better forecast future behaviour.

### Technique: Diffusion of Innovations
The Diffusion of Innovations is a phenomena seen repeatedly in society. Also known as S-shaped growth, this 'system behaviour' can be used to predict the rate of technology adoption, the spread of an infectious disease or the growth of a sunflower. Another important aspect of S-shaped growth is the Technique that all growth has a limit, and systems can't grow indefinitely.

*  The [Wikipedia page on System Dynamics](http://en.wikipedia.org/wiki/System_dynamics) has a good example model of technology adoption, explaining S-Shaped growth

### Fundamentals: Data fitting
There are many measures for understanding how well your model fits your data set. A good method is to use Total of Least Squares to approximate how well the data fits your simulation.

*  [A mathematical approach to the least squares problem](https://www.khanacademy.org/math/linear-algebra/alternate_bases/orthogonal_projections/v/linear-algebra--least-squares-approximation)
*  *Note, we'll sum the residuals at each point to measure how well our model conforms to the reference mode.*

## Wk5: Human Factors
<div class="thumbnail span3 pull-right grey">
**In this topic...**
<ul><li>Technique: Anthropometrics</li>
<li>Technique: Ergonomics</li>
<li>Fundamentals: Dispersion</li></ul>
**Online Classroom**
<ul><li>[Anthropometrics](http://www.youtube.com/watch?v=kjY_sKSSrL8&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_05_HumanFactors.pdf))</li>
<li>[Population Data](http://www.youtube.com/watch?v=QTtoCjLw1Sw&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_05_PopulationData.pdf))</li></ul>
**Related Resources**
<ul><li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk5-human-factors)</li>
<li>[Seminar: Keyboards](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk5-human-factors)</li>
<li>[Bonus Technique: Comfort](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk5-human-factors)</li>
<li>[Side Note: Broken](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk5-human-factors)</li>
</ul>

<img src="http://www.k-state.edu/udlearnsite/img/L4-bodymeasurementsgif.gif" alt="">
<p>**Human Factors:** Knowing what range of sizes to design parts of your system is the first step in our analysis
<small>Image: [KSU](http://www.k-state.edu/udlearnsite/img/L4-bodymeasurementsgif.gif)</small></p>
</div>

Humans are a major factor in design. When seats don't fit, when shops don't flow, when signs don't point you in the right direction, it's as if the designer hasn't considered humans in the design.

### Technique: Anthropometrics
Anthropometrics (human measurements) are an important consideration when designing a system or analysing a workflow. Is your design a one-size-fits-all, or do you tailor it to a particular size? Anthropometric data can give you that information.

*  [Anthropometry](http://en.wikipedia.org/wiki/Anthropometry) - an introduction to the topic on Wikipedia
*  [Anthropometric and Biomechanics](http://msis.jsc.nasa.gov/sections/section03.htm#_3.2_GENERAL_ANTHROPOMETRICS) - *NASA are one of the leaders in understanding what the human body can do. In particular, use this as a resource to find some anthropometric data related to your project*
*  [Anthropometric data and Australian populations - do they fit?](http://www.ergonomics.org.au/downloads/EA_Journals/2011_Conference_Edition/Ward_S.pdf) *this is a critique of how generic anthropometric data fits Australians*

### Technique: Ergonomics & Comfort
An ergonomic design will not only make your users happier, but can make big differences to the bottom line of any enterprise. For example, Apple Inc. have differentiated themselves in the technology market by creating, implementing and evolving their Human Interface Principles.

*  [Ergonomic computer workstation design](http://hr.anu.edu.au/staff-health-and-wellbeing/injury-prevention/preventing-computer-related-injury)
*  Apple Computer's [Human Interface Principles](http://developer.apple.com/library/ios/#documentation/userexperience/Techniqueual/mobilehig/Principles/Principles.html#//apple_ref/doc/uid/TP40006556-CH5-SW1)
*  ABS's [Work-Related Injuries](http://www.abs.gov.au/AUSSTATS/abs@.nsf/Latestproducts/6324.0Main%20Features32009-10?opendocument&tabname=Summary&prodno=6324.0&issue=2009-10&num=&view=) survey - *details the cost of work-related injuries on industry*

Human Comfort is also a major consideration in design. 
***TBA***

### Fundamentals: Dispersion in population data
When looking through anthropometric data, you'll come across some statistical Techniques that you should be across when considering human factors in your design. The key Technique is dispersion, mainly standard deviation.

[Have a look through Standard Deviation on the Khan Academy](https://www.khanacademy.org/math/probability/descriptive-statistics/variance_std_deviation/e/exploring_standard_deviation_1). *There are a number of videos and exercises that you can engage with. If you present any anthropometric data in your paper or tutorial, you should address these Techniques.*

## Wk6: Waiting Systems
<div class="thumbnail span3 pull-right grey">
**In this topic...**
<ul><li>Technique: Channels</li>
<li>Technique: PERT Charts</li>
<li>Fundamentals: Queue Theory</li>
<li>Discussion: Queuing</li></ul>
**Online Classroom**
<ul><li>[Queue Theory](http://www.youtube.com/watch?v=oAuYMHgS7oQ&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_06_QueueTheory.pdf))</li></ul>
**Related Resources**
<ul>
<li>[Tutorial Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk6-queue-theory)</li>
<li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk6-queue-theory)</li>
<li>[Seminar: Beer Game](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk6-queue-theory)</li>
<li>[Side Note 2: Just it Time](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk6-queue-theory)</li>
</ul>

<img src="http://www.abc.net.au/radionational/image/4543746-3x2-700x467.jpg" alt=""><p>**Queue Theory:** Queues can make or break an experience in a system. <small>Image: [ABC](http://www.abc.net.au/radionational/programs/bydesign/queing/4534256)</small></p>
</div>

Everyone spends time waiting, whether we like it or not. This week we take a birds-eye view of our systems, and look at the application of Queue Theory to optimise our systems or PERT charts to plan future activities.

### Technique: Single- and Multi-Channel Design
We are concerned with how queue theory will influence our design. The best practical resource I can find is from iSixSigma:

*  [Queuing Theory and Practice: A Source of Competitive Advantage](http://www.isixsigma.com/industries/retail/queuing-theory-and-practice-source-competitive-advantage/)

To this end, you should think of your system in terms of:

*  the arrival mechanism (is it random or known)
*  the service mechanism (the time it takes to get through)
*  the associated cost (the 'cost' of employing service)
*  and extend it to the human factors (how long do you like to wait?)

You could use Single- and Multi-Channel queue designs to compare approaches in your system. See also:

*  [Chris' (traditional) lecture slides from 2012](http://eng.anu.edu.au/courses/ENGN2226/current/data/2012_queuing.pdf)
*  [Blanchard & Fabrycky, Chapter 10](http://eng.anu.edu.au/courses/ENGN2225/course-files/wk05_QueueTheory.pdf) *if you are more mathematically inclined..*

For many groups, it may be difficult to see how Queue Theory applies to your project. You might need to get creative. The big factors that you might want to optimise are your Service Time, and your Cost (eg of installation, maintenance, repair). Optimising your design for these factors will improve your design when it comes to implementation. If you're worried about your project not applying, talk to Chris(!)

Below is a table of simple possible applications to get your creative juices flowing:
| Case | Arrival | Service | Cost |
|:-----|:--------|:--------|:-----|
| LED lighting | Buildings to be installed | Speed of installation | Skill level of operator |
| Prosthetics fitting | Patients to be fitted | Consultation, fitting time | Skill level of operator |
| Wheel retrofit/<br />iPad mount | Wheelchairs to be serviced | Time taken to install | Skill level of operator<br />Number of steps |
| Toothpaste Dispenser | Children on a summer camp | Speed of brushing teeth | Capital cost of units |

### Technique: PERT Charts

Another method of looking work in a system over time is by using the Critical Path Method (CPM) and Program Evaluation and Review Technique (PERT) charts. If you're struggling to apply queue theory to your project or portfolio, these techniques are welcome to be used.

*  [CPM and PERT in Blanchard & Fabrycky](http://eng.anu.edu.au/courses/ENGN2225/course-files/ENGN2226/notes_qt-blanchard-pert.pdf)


### Fundamentals: Queue Theory
Queue theory is highly mathematical. As we are looking at how the theory informs our design, the mathematics should inform our design. To that end, you might want to explore more aspects of Queue Theory, but you should be able to calculate:

*  the mean number of units in the system
*  the average length of the line
*  the mean waiting time

### Discussion: Queuing Discussion
*Experts in the dark art of queuing theory can use lavender smells, TVs, sight barriers, and music to warp your perception of time. When they get it wrong, queuing rage can result-with deadly consequences* - [Fenella Kernebone hosts a discussion on ABC's 'By Design'](http://www.abc.net.au/radionational/programs/bydesign/the-panelqueueing/4504716) [(Direct link to audio)](http://mpegmedia.abc.net.au/rn/podcast/2013/02/bdn_20130220_1438.mp3) **Definitely listen to this while you're waiting in line if you're trying to find applications to your project.**

## Wk7: Multifactorial Design

<div class="thumbnail span3 pull-right">
**In this topic...**
<ul><li>Technique: Pareto Principle</li>
<li>Technique: Bathtub Curve</li>
<li>Fundamentals: DoE</li></ul>
**Online Classroom**
<ul><li>[Pareto Principle](http://www.youtube.com/watch?v=1KqSFHnFxi4&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_07_Pareto.pdf))</li>
<li>[Bathtub Curve](http://www.youtube.com/watch?v=6khFYWLZGOU&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_07_Bathtub.pdf))</li>
<li>[Design of Experiments](http://www.youtube.com/watch?v=6xdAFGBWark&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_07_DoE.pdf))</li>
</ul>
**Related Resources**
<ul>
<li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk7-multifactorial-design)</li>
<li>[Tutorial Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk7-multifactorial-design)</li>
<li>[Seminar: Paper Aircraft](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk7-multifactorial-design)</li>
<li>[Side Note 1: RCM](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk7-multifactorial-design)</li>
<li>[Side Note 2: MTBF & MTBM](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk7-multifactorial-design)</li>
</ul>
<img src="http://failuremag.com/images/uploads/articles/tacomanarrowscollapse.jpg" alt=""><p>**Multifactorial Design:** Understanding the important components in a system will help reduce failure. <small>Image: [failuremag](http://failuremag.com/images/uploads/articles/tacomanarrowscollapse.jpg)</small></p>
</div>

All systems will fail, eventually. Understanding the likely sources of existing and future problems will help you design a much more reliable system.

### Technique: Pareto Analysis
A Pareto Analysis will help you determine the most important variables/factors for consideration in a system. The Pareto principle (also known as the 80-20 rule) is a rule of thumb observed in many systems, and understanding this can make a big difference when optimising your design.

*  The [Pareto principle](http://en.wikipedia.org/wiki/Pareto_principle) and [Pareto chart](http://en.wikipedia.org/wiki/Pareto_chart) Wikipedia pages have some good examples on how this applies
*  An example application can be seen in [*Safety at Sea - Applying Pareto Analysis* by R. Ziarati](http://www.marifuture.org/Publications/Papers/safety_at_sea_applying_pareto_analysis.pdf)

### Technique: The Bathtub Curve
The bathtub curve is a classical model used again as a rule of thumb to understand the likelihood of system failure over its lifecycle. Of the three categories of failure, early failures are usually associated with electronic systems, and wear-out failures are usually associated with mechanical systems. Appreciating this established relationship should help you identify potential areas where you can improve the quality of your design. 

*  [The Bathtub Curve](http://en.wikipedia.org/wiki/Bathtub_curve) on Wikipedia

See also [Reliability-Centered Maintenance](notes#side-note-reliability-centered-maintenance).

### Technique: FMCEA
Failure-mode cause and effect analysis. TBC


## Wk8: Life-Cycle Audit

<div class="thumbnail span3 pull-right">
**In this topic...**
<ul><li>Technique: I=PAT</li>
<li>Technique: Embodied Energy</li>
<li>Fundamentals: Materials Audit</li></ul>
**Online Classroom**
<ul><li>[IPAT](http://www.youtube.com/watch?v=fU9SP5hL2XA&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_08_IPAT.pdf))</li>
<li>[Materials Audit](http://www.youtube.com/watch?v=3G-iV0-tp38&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_08_MaterialsAudit.pdf))</li></ul>
**Related Resources**
<ul>
<li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk8-life-cycle-audit)</li>
<li>[Tutorial Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk8-life-cycle-audit)</li>
<li>[Seminar: Mobile Teardown](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk8-life-cycle-audit)</li>
<li>[Side Note 1: Story of Electronics](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk8-life-cycle-audit)</li>
</ul>
<img src="http://images.smh.com.au/2009/05/21/535587/toxicewaste-420x0.jpg" alt=""><p>**Product Life-Cycle:** Considering the end-of-life issues in a design could be the key to resolving the eWaste problem. <small>Image: [SMH](http://www.smh.com.au/environment/toxic-australian-ewaste-dumped-on-china-20090521-bh6f.html)</small></p>
</div>

### Technique: Population, Consumption, and Technology
Three factors combine to present a massive challenge to the ongoing survival of industry on our planet. Population is increasing, consumption is increasing, leaving technology to save us (perhaps a techno-optimistic perspective). Consider the formula: I=PAT (where: I is [Enviromental] Impact, P is Population, A for Affluence, or Consumption, and T is Technology) as a useful framework for thinking about the environmental impact of your system.

*  Paul Ehrlich and John Holdren's 1971 *Science* article [Impact of Population Growth](http://eng.anu.edu.au/courses/ENGN2225/course-files/wk08_1971_Holdren.pdf) is still as relevant today as it was when it was written.
*  [Barry Newell's manuscript](http://eng.anu.edu.au/courses/ENGN2225/course-files/wk08_Newell.pdf) covers Population, Consumption and Technology in Human Ecology terms (see pp12-18).

### Technique: Material Audit
There are four key steps to a Life-Cycle Assessment:

-  Goal and Scope
-  Life-Cycle Inventory < ***what we're concerned with here***
-  Life-Cycle Impact Assessment 
-  Interpretation

The fundamental topic this week is conducting a materials audit on your project. This should probably take the form of a table listing the key components of your design, and approximate quantities.

For example, a hammer:
| Component | Material | Quantity |
|:----------|:---------|:---------|
| Shaft | Oak | 400 grams |
| Head | Steel | 600 grams |

This should then give you a basis to explore some of the information about the materials being used. 

*  [US Life-Cycle Inventory Database](http://www.nrel.gov/lci/) gives a comprehensive list of processes and flows of certain materials


### Technique: Embodied Energy
When considering the energy impact of a product's life-cycle, the embodied energy is very important in establishing the true amount of energy consumed in production. A good place to start is the [Your Home](http://www.yourhome.gov.au/technical/index.html) technical manual collated by the Australian Government. Here a starting point for tabulating embodied energy can be found.

*  [Embodied Energy in the Your Home technical manual](http://www.yourhome.gov.au/technical/fs52.html)
*  [ISO standard 14040](http://www.iso.org/iso/catalogue_detail.htm?csnumber=37456) details the LCA ISO standard
*  [Life-Cycle Assessment](http://en.wikipedia.org/wiki/Life_cycle_assessment) on Wikipedia provides an overview of the various tools used to account for embodied energy
*  [Guidelines for Social Life-Cycle Assessment of Products](http://www.unep.fr/shared/publications/pdf/DTIx1164xPA-guidelines_sLCA.pdf) by the *UNEP* -- ***excellent resource***


## Wk9: Energy-Mass Balance

<div class="thumbnail span3 pull-right">
**In this topic...**
<ul><li>Technique: EMB Audit</li>
<li>Fundamentals: E/M Mapping</li>
<li>Fundamentals: Sankey Diagrams</li></ul>
**Online Classroom**
<ul><li>[EMB Flow Map](http://www.youtube.com/watch?v=8b3ZaQ_Xi0o&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_09_EnergyMassFlowMap.pdf))</li>
<li>[Sankey Diagrams](http://www.youtube.com/watch?v=5ohpsE_EyBA&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_09_SankeyDiagram.pdf))</li></ul>
**Related Resources**
<ul>
<li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk9-energy-mass-balance)</li>
<li>[Tutorial Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk9-energy-mass-balance)</li>
<li>[Seminar: Pedal Power](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk9-energy-mass-balance)</li>
<li>[Side Note 1: Energy Savings](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk9-energy-mass-balance)</li>
<li>[Side Note 2: Cradle-to-Cradle](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk9-energy-mass-balance)</li>
</ul>
<img src="http://3.bp.blogspot.com/-xgG0-KGx6Tw/UKth8KZ7wiI/AAAAAAAAAJk/AhbxLYYxedw/s1600/ei.jpg" alt=""><p>**Energy Loss:** Where does all the energy in your system go? <small>Image: [tueinmotion](http://tueinmotion.blogspot.com.au/)</small></p>
</div>

### Technique: Energy-Mass Balance Audit

An energy-mass balance audit is a method of understanding energy and mass flows through a system.

*An EMB is a model, from an energy perspective, of how a process or system works. It helps to understand the energy flows, mass flows, and other factors influencing energy efficiency, to determine the efficiencies of processes and equipment, and to evaluate the effects of external factors.* - [Energy Efficiency Opportunities, 2013](http://energyefficiencyopportunities.gov.au/guides/embs/)

There are two particular examples of Energy Mass-Balance Audits relevant to your projects:

*  [Commercial Buildings](http://eeo.govspace.gov.au/files/2012/10/EMB-Commercial.pdf)
*  [Transport](http://eeo.govspace.gov.au/files/2012/10/EMB-Transport.pdf)
*  ([All Energy Efficiency Opportunities resources](http://energyefficiencyopportunities.gov.au/guides/embs/))

You should be able to identify key areas of energy/mass flows in order to complete the Fundamentals below.

### Technique: Energy and Mass Flow Mapping
You should be able to present a coherent energy and mass flow diagram, as demonstrated on page 18 of the [Commerial Buildings guide](http://eeo.govspace.gov.au/files/2012/10/EMB-Commercial.pdf). Please note that HVAC groups should especially deliver something very specific to your building, and not this generic structure.

### Technique: Sankey Diagrams
You should be able to complete a Sankey diagram for your entire system, or at least an aspect of your system. An example of this is shown on Page 26 of the [Transport guide](http://eeo.govspace.gov.au/files/2012/10/EMB-Transport.pdf), but there are plenty of great online resources.

If you're having trouble drawing these diagrams, there are some specific software packages listed at [www.sankey-diagrams.com](http://www.sankey-diagrams.com/sankey-diagram-software/). Personally, I use [Omnigraffle](http://www.omnigroup.com/products/omnigraffle/), which is a paid Mac app but there is a free trial.

## Wk10: Economic Analysis

<div class="thumbnail span3 pull-right">
**In this topic...**
<ul><li>Technique: Life-Cycle Costing</li>
<li>Technique: Rebound Effect</li>
<li>Fundamentals: Payback Period</li>
</ul>
**Online Classroom**
<ul><li>[Life-Cycle Cost](http://www.youtube.com/watch?v=fufQZg89iiI&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_10_LCC.pdf))</li>
<li>[Payback Period](http://www.youtube.com/watch?v=XtqKLJDi_FM&feature=share&list=PL2hygCecjFiVarnhIYx8RZ_dQMr11qLzb) ([as PDF](http://eng.anu.edu.au/courses/engn2226/current/data/oc/OC_10_PaybackPeriod.pdf))</li></ul>
**Related Resources**
<ul>
<li>[Workshop Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk10-economic-analysis)</li>
<li>[Tutorial Notes](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk10-economic-analysis)</li>
<li>[Seminar: Business Case](http://eng.anu.edu.au/courses/ENGN2226/current/notes#wk10-economic-analysis)</li>
</ul>
<img src="http://pmstudy.com/blog/wp-content/uploads/2012/11/Payback-Period-300x225.jpg" alt=""><p>**Pay-back:** Establishing the trade-off between time and money.<small>Image: [PMStudy](http://pmstudy.com/blog/?p=312)</small></p>
</div>

At the end of the day, the most important analytical technique to get a project off the ground is likely to be the economic analysis. Can the system pay for itself? Can it be profitable? Once you've established the feasibility of the other aspects of your design, now turn your mind to selling it!


### Technique: Life-Cycle Costing

Capital and non-capital investment--also known as fixed and variable costs--these can provide an understanding of the cost of your system over its entire lifecycle.

*Australian Standard AS/ NZS 4536:1999 defines life-cycle cost as the sum of acquisition cost and
ownership cost of an asset over its life cycle from design stage, manufacturing, usage,
maintenance and disposal.* [ANAO, 2001](http://www.anao.gov.au/uploads/documents/Life_Cycle_Costing.pdf)

Key costs to consider in Life-Cycle Costing are ([from Blanchard & Fabrycky, p583](http://eng.anu.edu.au/courses/ENGN2225/course-files/wk10_life-cycle-cost.pdf)):

*  Aquisition cost - *research, design, test, production, construction*
*  Operations cost - *personnel, facilities, utilities, energy*
*  Software cost - *operation and maintenance cost*
*  Product distribution cost - *transportation, traffic, materials handling*
*  Maintenance cost - *customer service, field, supplier factory maintenance*
*  Test and support equipment cost
*  Training cost - *operator and maintenance cost*
*  Technical data cost
*  Refinement and disposal cost
*  Supply support cost - *spares, inventory, material support*

It's worthwhile establishing which of these costs lie within and outside of the boundaries of your analysis.

The Office of National Assessments has produced a guide for undertaking a Life-Cycle Costing. Use this as a key resource for undertaking your Economic Analysis.

*  [Life-Cycle Costing, Better Practice Guide. ANAO, 2001.](http://www.anao.gov.au/uploads/documents/Life_Cycle_Costing.pdf)

### Technique: The Rebound Effect

Basic economics dictates when a resource is more abundant, it will become cheaper. Think of the [cost/MB](http://www.mkomo.com/cost-per-gigabyte) of a hard drive. When it comes to natural resources - say for the production of energy - where there are multiple opportunities for increased efficiency and production, then the cheaper, more efficient production of a resource may well lead to an increased consumption. 

An example relevant to group projects could be the investment in LED lighting, leading to the increased use of lights as people's behaviour changes. A good place to start in this area is [Alcott's article on the Jevon's paradox](http://www.blakealcott.org/pdf/sdarticle.pdf).

### Fundamentals: Pay-back Period

There are several classic examples to make economic arguments for one system over another, especially when weighing up options at the acquisition stage. An example you might be well aware of is the decision made when buying a phone:

* buy a phone outright, with a lower monthly fee 
* buy a phone on contract, with a higher monthly fee

When plotted on an axis over time, there will be a point at which the two options cross - this is the payback period. In a system, this becomes more complicated when you consider all life-cycle costs, like those outlined in the Life-Cycle Costs topic.

A good guide for calculating the payback period is in the Victorian Government's EREP Toolkit: [Calculating payback periods](http://www.epa.vic.gov.au/~/media/publications/1210.pdf)