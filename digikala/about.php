<?php 
session_start();
include 'header.php' ?>
<!DOCTYPE html>
<meta charset="utf-8">

<!-- Load d3.js -->
<script src="https://d3js.org/d3.v4.js"></script>
<div id="allproduct" style="text-align:center;">
<!-- Initialize a select button -->
<select id="selectButton" style="height:40px;width:100px;"></select>

<!-- Create a div where the graph will take place -->
<div id="my_dataviz"></div>
</div>
<!-- Color Scale -->
<script src="https://d3js.org/d3-scale-chromatic.v1.min.js"></script>


<script>

// set the dimensions and margins of the graph
var margin = {top: 10, right: 10, bottom: 30, left: 10},
    width = 560 - margin.left - margin.right,
    height = 500 - margin.top - margin.bottom;

// append the svg object to the body of the page
var svg = d3.select("#my_dataviz")
  .append("svg")
    .attr("width", width + margin.left + margin.right)
    .attr("height", height + margin.top + margin.bottom)
  .append("g")
    .attr("transform",
          "translate(" + margin.left + "," + margin.top + ")");

//Read the data
d3.csv("https://raw.githubusercontent.com/holtzy/D3-graph-gallery/master/DATA/data_connectedscatter.csv", function(data) {

    // List of groups (here I have one group per column)
    
    var allGroup = ["valueA", "valueB", "valueC"]

    // add the options to the button
    d3.select("#selectButton")
      .selectAll('myOptions')
     	.data(allGroup)
      .enter()
    	.append('option')
      .text(function (d) { return d; }) // text showed in the menu
      .attr("value", function (d) { return d; }) // corresponding value returned by the button

    // Add X axis --> it is a date format
    var x = d3.scaleLinear()
      .domain([0,10])
      .range([ 0, width ]);
    svg.append("g")
      .attr("transform", "translate(0," + height + ")")
      .call(d3.axisBottom(x));

    // Add Y axis
    var y = d3.scaleLinear()
      .domain( [0,20])
      .range([ height, 0 ]);
    svg.append("g")
      .call(d3.axisLeft(y));

    // Initialize line with group a
    var line = svg
      .append('g')
      .append("path")
        .datum(data)
        .attr("d", d3.line()
          .x(function(d) { return x(+d.time) })
          .y(function(d) { return y(+d.valueA) })
        )
        .attr("stroke", "black")
        .style("stroke-width", 4)
        .style("fill", "none")

    // Initialize dots with group a
    var dot = svg
      .selectAll('circle')
      .data(data)
      .enter()
      .append('circle')
        .attr("cx", function(d) { return x(+d.time) })
        .attr("cy", function(d) { return y(+d.valueA) })
        .attr("r", 7)
        .style("fill", "#69b3a2")


    // A function that update the chart
    function update(selectedGroup) {

      // Create new data with the selection?
      var dataFilter = data.map(function(d){return {time: d.time, value:d[selectedGroup]} })

      // Give these new data to update line
      line
          .datum(dataFilter)
          .transition()
          .duration(1000)
          .attr("d", d3.line()
            .x(function(d) { return x(+d.time) })
            .y(function(d) { return y(+d.value) })
          )
      dot
        .data(dataFilter)
        .transition()
        .duration(1000)
          .attr("cx", function(d) { return x(+d.time) })
          .attr("cy", function(d) { return y(+d.value) })
    }

    // When the button is changed, run the updateChart function
    d3.select("#selectButton").on("change", function(d) {
        // recover the option that has been chosen
        var selectedOption = d3.select(this).property("value")
        // run the updateChart function with this selected option
        update(selectedOption)
    })

})


</script>