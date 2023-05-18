<?php
	/*
		Социальная сеть, в ней пользователи, их друзья, стена,
		комментарии к записям на стене. Пользователи могут 
		обмениваться личными сообщениями. Составьте структуру таблиц.
		
		table users
		id		name		friend_id
		1		user1		3
		2		user2		3
		3		user3		2
		
		table message
		id		text	user_id_send	user_id_get
		1		text1	2				2
		2		text2	2				2
		3		text3	3				3
		4		text4	1				1
		
		table wall
		id		entry_wall
		1		entry1
		2		entry2
		3		entry3
		
		table comments
		id		comment		user_id_send	wall_id	
		1		text1		1				2
		2		text2		1				2
		3		text3		2				1
		4		text4		4				3
	*/