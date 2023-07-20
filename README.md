# functional_programming_vs_procedural_programming
The goal of this study was to compare the efficiency of functional programming vs procedural programming.

An interesting introduction on this topic is <b>Adam Wathan book "Refactoring to Collections" (2016)</b>.

The book contains 13 study cases where commonplace programming challenge can be solved using both 
functional programming (= "declarative programming" and procedural progamming (= "imperative programming").

A. Wathan book uses Laravel Collection class (Illuminate\Support\Collection) to solve the 13 challenges.

You can read and/or download the 13 study cases here : 

https://drive.google.com/file/d/18QI1LkxP7MKxuh9d6F1KQl1uodr6N8G9/view?usp=sharing

The code in the repository shows how to solve each challenge using both (1) declarative progamming methods and (2) imperative progamming methods.

For each of the 13 study cases, I compared the speed at which a solution is obtained. (Note: 1 microsecond = 0.001 millisecond)

To try to obtain meaningful results, I made sure each array contains at least 100 rows entries. 

Only the relevant Laravel files for the computations have been added to the repository.

The results: 

<b>1. Pricing Lamps and Wallets</b>

<b>imperative solution:</b> 7.5817108154297E-5 microseconds, <b>declarative solution:</b> 0.0013389587402344 microseconds

<b>2. CSV Surgery 101</b>

<b>imperative solution:</b> 6.0081481933594E-5 microseconds, <b>declarative solution:</b> 0.00060510635375977 microseconds

<b>3. Binary to Decimal</b>

<b>imperative solution:</b> 2.8610229492188E-6 microseconds, <b>declarative solution:</b> 8.082389831543E-5 microseconds

<b>4. What's your Github Score</b>

<b>imperative solution:</b> 1.0471658706665 microseconds, <b>declarative solution:</b> 0.23328900337219 microseconds

<b>5. Formatting a Pull Request Comment</b>

<b>imperative solution:</b> 0.00059890747070312 microseconds, <b>declarative solution:</b> 0.00013899803161621 microseconds

<b>6. Stealing Mail</b>

<b>imperative solution:</b> 0.00035881996154785 microseconds, <b>declarative solution:</b> 5.3882598876953E-5 microseconds

<b>7. Choosing a Syntax Handler</b>

<b>imperative solution:</b> 1.5020370483398E-5 microseconds, <b>declarative solution:</b> 5.6982040405273E-5 microseconds

<b>8. Tagging on the Fly</b>

<b>imperative solution:</b>  0.00051498413085938 microseconds, <b>declarative solution:</b> 0.0002892017364502 microseconds

<b>9. Nitpicking a Pull Request</b>

<b>imperative solution:</b> 0.0016169548034668 microseconds, <b>declarative solution:</b> 0.0016999244689941 microseconds

<b>10. Comparing Monthly Revenue</b>

<b>imperative solution:</b> 0.00088286399841309 microseconds, <b>declarative solution:</b> 0.00071811676025391 microseconds

<b>11. Building a Lookup Table</b>

<b>imperative solution:</b> 0.001635074615478 microseconds, <b>declarative solution:</b> 0.00046586990356445 microseconds

<b>12. Transforming Form Input</b>

<b>imperative solution:</b> 0.0038280487060547 microseconds, <b>declarative solution:</b> 2.5033950805664E-5 microseconds

<b>13. Ranking a Competition</b>

<b>imperative solution:</b> 0.0062758922576904 microseconds, <b>declarative solution:</b> 0.0056121349334717 microseconds

<b>Conclusion:</b> 

It appears quite complicated to draw clear conclusions. Overall, the more array computations are involved, the greater the declarative solution edge over the imperative solution (Study cases #4,#11,#12 and #13).
