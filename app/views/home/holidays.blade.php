@extends('home.templates.master')
@section('body')

<h1>Holiday Schedule</h1>

<p>Alchin's Disposal observes the following holidays:</p>

<ul>
	<li>New Year's Day</li>
	<li>Memorial Day</li>
	<li>Independence Day (4th of July)</li>
	<li>Labor Day</li>
	<li>Thanksgiving Day</li>
	<li>Christmas Day</li>
</ul>

<p>If a holiday falls on a weekday (Monday-Friday) then routes are delayed by one day.</p>

<hr>

<p>Should a holiday fall during the week (Monday-Friday) the routes will be delayed by one day. Thereafter, the routes will return to normal scheduled pick up days. For example, if your pick up day is Monday and a holiday we observe falls on that day the pick up day for that week only will be Tuesday.</p>

@stop