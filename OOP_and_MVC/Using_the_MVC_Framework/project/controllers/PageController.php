<?php
namespace Project\Controllers;
use Core\Controller;
use Project\Models\Page;

class PageController extends Controller
{
    private $pages = [];

    public function __construct()
    {
        $this->pages = [
            1 => ['title'=>'страница 1', 'text'=>'текст страницы 1'],
            2 => ['title'=>'страница 2', 'text'=>'текст страницы 2'],
            3 => ['title'=>'страница 3', 'text'=>'текст страницы 3'],
        ];
    }

    public function product($id)
    {
        $page = (new Page)->getProductById($id);

        $this->title = 'Один продукт';

        return $this->render('page/oneProduct', [
            'text' => $page,
        ]);
    }

    public function allProducts()
	{
		$this->title = 'Список всех продуктов';
			
		$pages = (new Page)->getAllProducts();
		return $this->render('page/allProducts', [
		    'products' => $pages,
	    	'h1' => $this->title
		]);
	}

    public function one($id)
    {
        $page = (new Page)->getById($id['id']);

        $this->title = $page['title'];

        return $this->render('page/one', [
            'text' => $page['text'],
            'h1' => $this->title,
        ]);
    }

    public function all()
	{
		$this->title = 'Список всех страниц';
			
		$pages = (new Page)->getAll();
		return $this->render('page/alldb', [
		    'pages' => $pages,
	    	'h1' => $this->title
		]);
	}

    public function test()
    {
        $page = new Page;

        $data = $page->getById(5);
        print_r($data);
        echo '<br>';

        $data = $page->getById(1);
        print_r($data);
        echo '<br>';

        $data = $page->getByRange(2, 4);
        print_r($data);
        echo '<br>';
    }

    public function show($n)
    {
        $this->title = $this->pages[$n['n']]['title'];

        return $this->render('test/act', ['text' => $this->pages[$n['n']]['text']]);
    }

    public function act()
    {
        return $this->render('page/act', [
            'header' => 'список юзеров',
            'users'  => ['user1', 'user2', 'user3'],
        ]);
    }
}