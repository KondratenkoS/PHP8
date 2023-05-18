<?php
	/*
		Есть моря, реки и их притоки. Реки могут быть притоками
		других рек или впадать прямо в море. Составьте структуру таблиц.
		
		table seas
		id		name
		1		sea1
		2		sea2
		3		sea3
		
		table rivers_inflows
		id		name		flows_into_sea_id	flows_into_river_id
		1		river1		3					2
		2		river2		2					1
		3		river3		2					3
		4		river4		1					1
	*/