# Course Content

Note that there are no classes in Week 1.

## Wk2: Design to Analysis
Good systems engineers are continually designing, testing (analysing), re-designing, re-testing until they reach perfection, which is (of course) unachievable. In this course you'll be asked to take a 'systems' view of problems, where your design is not a nice, discrete system, but has boundaries that you cannot control. 

### Seminar: Course Introduction + Interdependent Design
*  [Seminar Slides](../data/Seminar01.pdf)

### Concept: The Systems Lens
*  [The Systems Lens](../../../ENGN2225/course-files/wk01-Meadows_ThinkingInSystems.pdf)



## Wk3: Informed Estimation
Information about your system is not always nicely collated. Sometimes you have access to information, sometimes you have access to 'proxy' indicators, and other times you have to make an informed estimation. The focus of this topic is to develop a good working understanding of how you can make good estimations in the absence of data.

### Concept: Back of the Envelope Estimation
<iframe class="pull-right thumbnail" width="360" height="210" src="//www.youtube.com/embed/0YzvupOX8Is?rel=0" frameborder="0" allowfullscreen></iframe>

Back of the envelope estimation is an important skill - one that Manhattan Project physicist Enrico Fermi was fascinated by.

*  [Fermi problem on Wikipedia](http://en.wikipedia.org/wiki/Fermi_problem)
*  [Maths & Modern Life](http://www.abc.net.au/radionational/programs/bigideas/maths-and-modern-life/4554220) ([Direct Link to Audio ~17min](	http://mpegmedia.abc.net.au/rn/podcast/2013/03/bia_20130312_2042.mp3))
*  [A Clever Way to Estimate Enormous Numbers (video)](http://ed.ted.com/lessons/michael-mitchell-a-clever-way-to-estimate-enormous-numbers)

### Concept: Data Collection

A good place to start finding data to verify estimation of Fermi problems is the [Australian Bureau of Statistics](http://abs.gov.au/). For example, does the [Population Pyramid](http://www.abs.gov.au/websitedbs/d3310114.nsf/home/Population%20Pyramid%20-%20Australia) help you understand how many families own pianos? Or would the [Key Economic Indicators](http://abs.gov.au/AUSSTATS/abs@.nsf/mf/1345.0?opendocument?opendocument#from-banner=LN) offer a better understanding?

### Fundamentals: Error

While you're looking at the Australian Bureau of Statistics, brush up on common errors in data collection on the ABS's [types of error](http://www.abs.gov.au/websitedbs/a3121120.nsf/home/statistical+language+-+types+of+error). Pay particular notice to the green box at the bottom of the page describing non-sampling errors. If you're collecting data about your system, how would you make sure that you avoid these types of error?

### Tutorial: How Many X in Y?

<div class="alert alert-info">
<ul>
<li>[Week 3 Tutorial Worksheet](../data/wk03-estimationhandout.pdf)</li>
<li>[Week 3 Tutor's Secret Plan](../data/secret_plan_estimation.pdf)</li>
</ul>
</div>

Please note that the Thursday Seminar is not being held in Week 3. Newcomers please come to the Week 3 Workshop slot on Monday instead, and use the Seminar slot on Thursday to work on your group project.



## Wk4: Dynamical Systems
Week 4 is not a heavy content week, as the tutorials are concentrating on the PCD, and everyone is gearing up for the student facilitations in Week 5. That said, take notice of this topic, as it might be useful for your portfolio.

Systems change over time, and understanding the dynamical behaviour is important to being able to make good decisions about your system. A reference mode provides an indication of past behaviour over time, and is invaluable in attempting to forecast future behaviour.

### Concept: Reference Modes
You should seek to find as much historical data as possible to better understand what the underlying behaviour is - this is the Reference Mode. By understanding the historical context, you can better forecast future behaviour.

### Concept: Diffusion of Innovations
The Diffusion of Innovations is a phenomena seen repeatedly in society. Also known as S-shaped growth, this 'system behaviour' can be used to predict the rate of technology adoption, the spread of an infectious disease or the growth of a sunflower. Another important aspect of S-shaped growth is the concept that all growth has a limit, and systems can't grow indefinitely.

*  The [Wikipedia page on System Dynamics](http://en.wikipedia.org/wiki/System_dynamics) has a good example model of technology adoption, explaining S-Shaped growth


### Approach: Systems Thinking
There are a number great resources for understanding systems using systems thinking. We covered positive and negative feedback in ENGN2225, and in ENGN2226 we'll look at Stock & Flow modelling to understand these types of models in the seminar (this also might help you think about Queue Theory).

*  [Beginner Modelling Exercises](http://clexchange.org/ftp/documents/Roadmaps/RM2/D-4347-7.pdf)
*  [Graphical Integration Exercises](http://clexchange.org/ftp/documents/Roadmaps/RM2/D-4547-1.pdf)

### Fundamentals: Data fitting
There are many measures for understanding how well your model fits your data set. A good method is to use Total of Least Squares to approximate how well the data fits your simulation.

*  [A mathematical approach to the least squares problem](https://www.khanacademy.org/math/linear-algebra/alternate_bases/orthogonal_projections/v/linear-algebra--least-squares-approximation)
*  *Note, we'll sum the residuals at each point to measure how well our model conforms to the reference mode.*

### Seminar: Using Insightful Models - Home Insulation modelling and C-ROADS
*SMART+ Goal for this session: To play with dynamical models to match a reference mode, and understand the benefits and limitations of simulation.*

We'll get hands-on with models of two very different stock-and-flow models. First, a simple model of the temperature in a room, and then later using a model to forecast how to save the world from catastrophic climate change.

*  [Download ISEE Player Windows](../../../ENGN2225/course-files/isee_Player_10.0.3.msi)
*  [Download ISEE Player Mac](../../../ENGN2225/course-files/isee_Player_10.0.3.dmg)
*  [Download Thermostat Models](../../../ENGN2225/course-files/Chapter2Thermostat.zip)



## Wk5: Human Factors
<div class="thumbnail span4 pull-right">
      <img src="http://www.k-state.edu/udlearnsite/img/L4-bodymeasurementsgif.gif" alt="">
      <p>**Human Factors:** Knowing what range of sizes to design parts of your system is the first step in our analysis
      <small>Image: [KSU](http://www.k-state.edu/udlearnsite/img/L4-bodymeasurementsgif.gif)</small></p>
    </div>

Humans are a major factor in design. When seats don't fit, when shops don't flow, when signs don't point you in the right direction, it's as if the designer hasn't considered humans in the design.

### Workshop Notes
[Download Chris' Secret Plan for the workshop.](../data/workshop_secret_plan_hf.pdf)

### Concept: Anthropometrics
Anthropometrics (human measurements) are an important consideration when designing a system or analysing a workflow. Is your design a one-size-fits-all, or do you tailor it to a particular size? Anthropometric data can give you that information.

*  [Anthropometry](http://en.wikipedia.org/wiki/Anthropometry) - an introduction to the topic on Wikipedia
*  [Anthropometric and Biomechanics](http://msis.jsc.nasa.gov/sections/section03.htm#_3.2_GENERAL_ANTHROPOMETRICS) - *NASA are one of the leaders in understanding what the human body can do. In particular, use this as a resource to find some anthropometric data related to your project*
*  [Anthropometric data and Australian populations - do they fit?](http://www.ergonomics.org.au/downloads/EA_Journals/2011_Conference_Edition/Ward_S.pdf) *this is a critique of how generic anthropometric data fits Australians*

### Concept: Ergonomics
An ergonomic design will not only make your users happier, but can make big differences to the bottom line of any enterprise. For example, Apple Inc. have differentiated themselves in the technology market by creating, implementing and evolving their Human Interface Principles.

*  [Ergonomic computer workstation design](http://hr.anu.edu.au/staff-health-and-wellbeing/injury-prevention/preventing-computer-related-injury)
*  Apple Computer's [Human Interface Principles](http://developer.apple.com/library/ios/#documentation/userexperience/conceptual/mobilehig/Principles/Principles.html#//apple_ref/doc/uid/TP40006556-CH5-SW1)
*  ABS's [Work-Related Injuries](http://www.abs.gov.au/AUSSTATS/abs@.nsf/Latestproducts/6324.0Main%20Features32009-10?opendocument&tabname=Summary&prodno=6324.0&issue=2009-10&num=&view=) survey - *details the cost of work-related injuries on industry*

### Bonus Concept: Workplace Comfort
Some projects might not have a strong anthropometric or ergonomic component (or at least, not strong enough to write a research paper on). If this is the case, then you might want to explore other human-related measures, such as lighting or heating levels.

*  [WorkSafe ACT's Thermal Comfort Guidelines](http://www.worksafe.act.gov.au/page/view/1227)

### Fundamentals: Dispersion in population data
When looking through anthropometric data, you'll come across some statistical concepts that you should be across when considering human factors in your design. The key concept is dispersion, mainly standard deviation.

[Have a look through Standard Deviation on the Khan Academy](https://www.khanacademy.org/math/probability/descriptive-statistics/variance_std_deviation/e/exploring_standard_deviation_1). *There are a number of videos and exercises that you can engage with. If you present any anthropometric data in your paper or tutorial, you should address these concepts.*

### Tinker Seminar: Computer Keyboards are Slow
*SMART+ Goal for this session: To use population data and a statistical process to analyse a variety of computer keyboard layouts.*

How fast can you type? A computer keyboard is a fairly universal design solution for inputting text into a computer, but has it been designed with humans in mind? We'll test the traditional QWERTY layout against alternative layouts.

### Side note: Broken
<iframe class="thumbnail span4 pull-right" src="http://player.vimeo.com/video/4246943?title=0&amp;byline=0&amp;portrait=0" width="300" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

Who determines when and to what degree things are broken? The user does, of course. Seth Godin gives a great overview of how many systems are broken and what we should do to fix them in seven categories:

1. Not my job
1. Selfish jerks
1. The world changed
1. I don't know
1. I'm not a fish
1. Contradictions
1. Broken on purpose



## Wk6: Queue Theory
<div class="thumbnail span4 pull-right">
      <img src="http://www.abc.net.au/radionational/image/4543746-3x2-700x467.jpg" alt=""><p>**Queue Theory:** Queues can make or break an experience in a system. <small>Image: [ABC](http://www.abc.net.au/radionational/programs/bydesign/queing/4534256)</small></p>
</div>

Everyone spends time queuing, whether we like it or not. This week we take a birds-eye view of our systems, and look at the application of Queue Theory to better understand aspects of our systems.

### Workshop & Tutorial Notes
*  [Download Chris' Secret Plan for the workshop (PDF)](../data/workshop_secret_plan_qt.pdf)
*  [Orientation notes from last week's tutorial (PDF)](../data/tutorial_notes.pdf)


### Concept: Single- and Multi-Channel Design
We are concerned with how queue theory will influence our design. The best practical resource I can find is from iSixSigma:

*  [Queuing Theory and Practice: A Source of Competitive Advantage](http://www.isixsigma.com/industries/retail/queuing-theory-and-practice-source-competitive-advantage/)

To this end, you should think of your system in terms of:

*  the arrival mechanism (is it random or known)
*  the service mechanism (the time it takes to get through)
*  the associated cost (the 'cost' of employing service)
*  and extend it to the human factors (how long do you like to wait?)

You could use Single- and Multi-Channel queue designs to compare approaches in your system.

For many groups, it may be difficult to see how Queue Theory applies to your project. You might need to get creative. The big factors that you might want to optimise are your Service Time, and your Cost (eg of installation, maintenance, repair). Optimising your design for these factors will improve your design when it comes to implementation. If you're worried about your project not applying, talk to Chris(!)

Below is a table of simple possible applications to get your creative juices flowing:
<table>
<tr><th>Case</th><th>Arrival</th><th>Service</th><th>Cost</th></tr>
<tr><td>LED lighting</td><td>Buildings to be installed</td><td>Speed of installation</td><td>Skill level of operator</td></tr>
<tr><td>Prosthetics fitting</td><td>Patients to be fitted</td><td>Consultation, fitting time</td><td>Skill level of operator</td></tr>
<tr><td>Wheel retrofit/<br />iPad mount</td><td>Wheelchairs to be serviced</td><td>Time taken to install</td><td>Skill level of operator<br />Number of steps</td></tr>
<tr><td>Toothpaste Dispenser</td><td>Children on a summer camp</td><td>Speed of brushing teeth</td><td>Capital cost of units</td></tr>
</table>


*  [Chris' (traditional) lecture slides from 2012](../data/2012_queuing.pdf)
*  [Blanchard & Fabrycky, Chapter 10](../../../ENGN2225/course-files/wk05_QueueTheory.pdf) *if you are more mathematically inclined..*


### Fundamentals: Queue Theory
Queue theory is highly mathematical. As we are looking at how the theory informs our design, the mathematics should inform our design. To that end, you might want to explore more aspects of Queue Theory, but you should be able to calculate:

*  the mean number of units in the system
*  the average length of the line
*  the mean waiting time


### Tinker Seminar: The Beer Game
*SMART+ Goal for this session: To test strategies on optimising a workflow of queues in a system.*

We'll play the Beer Game, a logistics game that matches supply of 'beer' with the demand from thirsty customers. We'll use Queue Theory to try and optimise the workflow.

*  [Beer Distribution Game on Wikipedia](http://en.wikipedia.org/wiki/Beer_distribution_game)
 
### Side note: Queuing Discussion
*Experts in the dark art of queuing theory can use lavender smells, TVs, sight barriers, and music to warp your perception of time. When they get it wrong, queuing rage can result-with deadly consequences* - [Fenella Kernebone hosts a discussion on ABC's 'By Design'](http://www.abc.net.au/radionational/programs/bydesign/the-panelqueueing/4504716) [(Direct link to audio)](http://mpegmedia.abc.net.au/rn/podcast/2013/02/bdn_20130220_1438.mp3) **Definitely listen to this while you're waiting in line if you're trying to find applications to your project.**

## Wk7: Multifactorial Design

<div class="thumbnail span4 pull-right">
      <img src="http://failuremag.com/images/uploads/articles/tacomanarrowscollapse.jpg" alt=""><p>**Multifactorial Design:** Understanding the important components in a system will help reduce failure. <small>Image: [failuremag](http://failuremag.com/images/uploads/articles/tacomanarrowscollapse.jpg)</small></p>
</div>

All systems will fail, eventually. Understanding the likely sources of existing and future problems will help you design a much more reliable system.

### Concept: Pareto Analysis
A Pareto Analysis will help you determine the most important variables/factors for consideration in a system. The Pareto principle (also known as the 80-20 rule) is a rule of thumb observed in many systems, and understanding this can make a big difference when optimising your design.

*  The [Pareto principle](http://en.wikipedia.org/wiki/Pareto_principle) and [Pareto chart](http://en.wikipedia.org/wiki/Pareto_chart) Wikipedia pages have some good examples on how this applies
*  An example application can be seen in [*Safety at Sea - Applying Pareto Analysis* by R. Ziarati](http://www.marifuture.org/Publications/Papers/safety_at_sea_applying_pareto_analysis.pdf)


### Concept: The Bathtub Curve
The bathtub curve is a classical model used again as a rule of thumb to understand the likelihood of system failure over its lifecycle. Of the three categories of failure, early failures are usually associated with electronic systems, and wear-out failures are usually associated with mechanical systems. Appreciating this established relationship should help you identify potential areas where you can improve the quality of your design. 

*  [The Bathtub Curve](http://en.wikipedia.org/wiki/Bathtub_curve) on Wikipedia

Note that not all products and systems observe the Bathtub curve, and with increasingly more complicated systems being developed all the time, the bathtub curve is increasingly becoming known as the "Bathtub Fallacy". Companies are instead opting for Reliability-Centered Maintenance (RCM) as a method to improve the reliability of systems.

*  [*Reliability-Centered Maintenance*](http://homepages.laas.fr/kader/rcm.pdf) by Anthony M. Smith provides a great overview of Bathtub-to-RCM thinking.

### Fundamentals: Design of Experiments (DoE)
The fundamental theory this week (DoE) gives us a methodology to navigate concepts of reliability. When the interactions in systems are so complex that you can't see simple patterns of cause-and-effect, identifying some key parameters and analysing them can help you see their relationships. 

*  [http://en.wikipedia.org/wiki/Design_of_experiments](http://en.wikipedia.org/wiki/Design_of_experiments)
*  [Design of Experiments Overview](http://asq.org/learn-about-quality/data-collection-analysis-tools/overview/design-of-experiments.html) (with links to tutorials) on ASQ's website.

### Tinker Seminar: Paper Aircraft 
Ever wondered what makes the best paper aeroplanes? Is it the materials, the design, or how well the folds are made? 

We'll conduct the DoE on a variety of paper aeroplane designs, to understand what parameters could be optimised for the best design.



## Wk8: Life-Cycle Audit

<div class="thumbnail span4 pull-right">
      <img src="http://images.smh.com.au/2009/05/21/535587/toxicewaste-420x0.jpg
" alt=""><p>**Product Life-Cycle:** Considering the end-of-life issues in a design could be the key to resolving the eWaste problem. <small>Image: [SMH](http://www.smh.com.au/environment/toxic-australian-ewaste-dumped-on-china-20090521-bh6f.html)</small></p>
</div>

### Concept: Population, Consumption, and Technology
Three factors combine to present a massive challenge to the ongoing survival of industry on our planet. Population is increasing, consumption is increasing, leaving technology to save us (perhaps a techno-optimistic perspective). Consider the formula: I=PAT (where: I is [Enviromental] Impact, P is Population, A for Affluence, or Consumption, and T is Technology) as a useful framework for thinking about the environmental impact of your system.

*  Paul Ehrlich and John Holdren's 1971 *Science* article [Impact of Population Growth](../course-files/wk08_1971_Holdren.pdf) is still as relevant today as it was when it was written.
*  [Barry Newell's manuscript](../../..ENGN2225/course-files/wk08_Newell.pdf) covers Population, Consumption and Technology in Human Ecology terms (see pp12-18).

### Concept: Embodied Energy
When considering the energy impact of a product's life-cycle, the embodied energy is very important in establishing the true amount of energy consumed in production. A good place to start is the [Your Home](http://www.yourhome.gov.au/technical/index.html) technical manual collated by the Australian Government. Here a starting point for tabulating embodied energy can be found.

*  [Embodied Energy in the Your Home technical manual](http://www.yourhome.gov.au/technical/fs52.html)
*  [ISO standard 14040](http://www.iso.org/iso/catalogue_detail.htm?csnumber=37456) details the LCA ISO standard
*  [Life-Cycle Assessment](http://en.wikipedia.org/wiki/Life_cycle_assessment) on Wikipedia provides an overview of the various tools used to account for embodied energy
*  [Guidelines for Social Life-Cycle Assessment of Products](http://www.unep.fr/shared/publications/pdf/DTIx1164xPA-guidelines_sLCA.pdf) by the *UNEP* -- ***excellent resource***

### Fundamentals: Material Audit
There are four key steps to a Life-Cycle Assessment:

-  Goal and Scope
-  Life-Cycle Inventory < ***what we're concerned with here***
-  Life-Cycle Impact Assessment 
-  Interpretation

The fundamental topic this week is conducting a materials audit on your project. This should probably take the form of a table listing the key components of your design, and approximate quantities.

For example, a hammer:
<table>
<tr><th>Component</th><th>Material</th><th>Quantity</th></tr>
<tr><td>Shaft</td><td>Oak</td><td>400 grams</td></tr>
<tr><td>Head</td><td>Steel</td><td>600 grams</td></tr>
</table>

<div class="thumbnail span2 pull-right">
<a href="http://www.ifixit.com/Manifesto"><img src="http://d1luk0418egahw.cloudfront.net/static/images/manifesto/ifixit_self-repair_manifesto_900x1390.jpg" alt="" width="140px"></a></div>

This should then give you a basis to explore some of the information about the materials being used. 

*  [US Life-Cycle Inventory Database](http://www.nrel.gov/lci/) gives a comprehensive list of processes and flows of certain materials


### Tinker Seminar: Mobile Phone Teardown


This week we're going to document (photograph) the process of taking apart an old mobile phone. [MobileMuster](http://www.mobilemuster.com.au/) has kindly donated mobile phones, but we can try to revive an old phone you have lying around too. 

Note that if you'd like to fix the screen of a phone that you have broken, talk to Chris, buy the parts, and we can see what we can do :)

A great resource for fixing modern electronics is [iFixit](http://ifixit.org).


### Side Note: The Story of Electronics

<iframe class="pull-right span2 thumbnail" src="http://www.storyofstuff.org/movies/embed_SoE.html" style="border:0px;" name="SoE_embed" scrolling="no" frameborder="0" align="top" > </iframe>

Annie Leonard has become somewhat of a folk-hero with her informed but personal stories of (un)sustainable consumption at [The Story of Stuff Project](http://www.storyofstuff.org/). Check out the Story of Electronics (and then make sure you come and fix your old phone :)

## Wk9: Energy-Mass Balance

<div class="thumbnail span4 pull-right">
      <img src="http://3.bp.blogspot.com/-xgG0-KGx6Tw/UKth8KZ7wiI/AAAAAAAAAJk/AhbxLYYxedw/s1600/ei.jpg" alt=""><p>**Energy Loss:** Where does all the energy in your system go? <small>Image: [tueinmotion](http://tueinmotion.blogspot.com.au/)</small></p>
</div>

### Concept: Energy and Materials Planning

TBA

### Concept: End-of-Life Issues

TBA

### Fundamentals: Energy-Mass Balance Audit

TBA

### Tinker Seminar: Electric Bikes (TBC)

TBA

### Side Note: Cradle to Cradle Design

<iframe class="pull-right span4 thumbnail" src="http://embed.ted.com/talks/william_mcdonough_on_cradle_to_cradle_design.html" width="560" height="315" frameborder="0" scrolling="no" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>

What about designing a machine that can convert carbon dioxide into oxygen, stores large amounts of carbon, provide shade and a home to animals, releases nutrients into the ground... You get the idea. Check out William McDonough's video on Cradle-to-Cradle design, and reframe the way you think about waste.


## Wk10: Economic Analysis

<div class="thumbnail span4 pull-right">
      <img src="http://pmstudy.com/blog/wp-content/uploads/2012/11/Payback-Period-300x225.jpg
" alt=""><p>**Pay-back:** Establishing the trade-off between time and money.<small>Image: [PMStudy](http://pmstudy.com/blog/?p=312)</small></p>
</div>

### Concept: Capital and Non-Capital Investment

TBA

### Concept: Limits to Growth and the Rebound Effect

TBA

### Approach: System Dynamics Modelling

TBA

### Fundamentals: Pay-back Period

TBA

### Tinker Seminar: Business Case (TBC)
