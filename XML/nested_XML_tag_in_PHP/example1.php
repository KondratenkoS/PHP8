<?php
	/*
		Дан следующий XML:

			<root>
				<tag1>
					<tag2>
						<tag3>
							text
						</tag3>
					</tag2>
				</tag1>
			</root>
		Выведите на экран текст самого внутреннего тега.
	*/
	
	$xml = simplexml_load_file('test.xml');
	echo $xml->tag1->tag2->tag3;