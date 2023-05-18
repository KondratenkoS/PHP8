<?php
	/*
		Форум, в нем категории, в них темы (тема принадлежит
		только одной категории), в темах посты. У темы есть автор.
		Пользователи могут обмениваться личными сообщениями.
		Составьте структуру таблиц.
	
		table forum
		id		categorys		themes
		1		category1		theme1
		2		category2		theme2
		3		category3		theme3
		
		table post
		id 		posts		themes_id
		1		post1		2
		2		post2		2
		3		post3		1
		4		post4		3
		5		post5		3
		
		table author
		id 		name		themes_id
		1		author1		2
		2		author2		3
		3		author3		1
		3		author4		1
		
		table users
		id		name
		1		user1
		2		user2
		3		user3
		
		table message
		id		text	user_id_send	user_id_get
		1		text1	2				2
		2		text2	2				2
		3		text3	3				3
		4		text4	1				1
	*/