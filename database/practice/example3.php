<?php
	/*
		Сайт с датами футбольных игр. Каждая игра содержит дату игры,
		первую команду и вторую команду. Есть игроки, каждый из которых
		принадлежит одной команде. Составьте структуру таблиц.
		
		table play_date
		id		date
		1		play1		
		2		play2		
		3		play3		
	
		table football_teams
		id 		name		play_date_id
		1		team1		1
		2		team2		2
		3		team3		2
		4		team4		1
		
		table players
		id		name		football_teams_id
		1		player1		1
		2		player2		1
		3		player3		1
		4		player4		2
		5		player5		2
		5		player6		2
	*/