@extends('home.templates.master')
@section('body')

<h1>Holiday Schedule</h1>

<p>Alchin's Disposal observes the following holidays:</p>

<dl class="dl-horizontal">
    <dt>New Year's Day</dt>
    <dd>If New Year’s Day is on or before your pick-up day (Monday – Friday) your route will be delayed by ONE day. If New Year’s Day is on Saturday or Sunday routes will run as scheduled.</dd>
    <dt>Memorial Day</dt>
    <dd>All routes will be delayed by ONE day.</dd>
    <dt>Independence Day<br><small>(4th of July)</small></dt>
    <dd>If Independence Day is on or before your pick-up day (Monday – Friday) your route will be delayed by ONE day. If Independence Day is on Saturday or Sunday routes will run as scheduled.</dd>
    <dt>Labor Day</dt>
    <dd>All routes will be delayed by ONE day.</dd>
    <dt>Thanksgiving Day</dt>
    <dd>Thursday and Friday routes will be delayed by ONE day.</dd>
    <dt>Christmas Day</dt>
    <dd>If Christmas Day is on or before your pick-up day (Monday – Friday) your route will be delayed by ONE day. If Christmas Day is on Saturday or Sunday all routes will run as scheduled.</dd>
</dl>

<!--<ul>
	<li>New Year's Day</li>
	<li>Memorial Day</li>
	<li>Independence Day (4th of July)</li>
	<li>Labor Day</li>
	<li>Thanksgiving Day</li>
	<li>Christmas Day</li>
</ul>

<p>If one of the above holidays falls on your pick-up day your route will be delayed by ONE day for that week only.</p>-->

@stop