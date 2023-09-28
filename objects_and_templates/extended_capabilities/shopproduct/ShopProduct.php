<?php
namespace ShopProduct;
use \ShopProduct\BookProduct;
use \ShopProduct\Cdproduct;


class ShopProduct
{
    private int | float $discount = 0;
    private int $id = 0;

    public function __construct(
        private string $title,
        private string $producerFirstName,
        private string $producerMainName,
        private int | float $price,
    )
    {
        
    }

    public function setID(int $id): void
    {
        $this->id = $id;
    }

    public function getProducerFirstName(): string
    {
        return $this->producerFirstName;
    }

    public function getProducerMainName(): string
    {
        return $this->producerMainName;
    }

    public function setDiscount(int | float $num): void
    {
        $this->discount = $num;
    }

    public function getDiscount(): int
    {
        return $this->discount;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): int | float
    {
        return ($this->price - $this->discount);
    }

    public function getProducer(): string
    {
        return $this->producerFirstName . ' ' . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        return "{$this->title} ( {$this->producerMainName}, {$this->producerFirstName} )";
    }

    public static function getInstance(int $id, \PDO $pdo): ShopProduct
    {
        $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
        $result = $stmt->execute([$id]);
        $row = $stmt->fetch();

        if(empty($row))
        {
            return null;
        }

        if($row['type'] == 'book')
        {
            $product = new BookProduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['numpages'],
            );
        }
        elseif($row['type'] == 'cd')
        {
            $product = new Cdproduct(
                $row['title'],
                $row['firstname'],
                $row['mainname'],
                (float) $row['price'],
                (int) $row['playlength'],
            );
        }
        else
        {
            $firstname = (is_null($row['firstname'])) ? "" :
            $row['firstname'];
            $product = new ShopProduct(
                $row['title'],
                $firstname,
                $row['mainname'],
                (float) $row['price'],
            );
        }

        $product->setID((int) $row['id']);
        $product->setDiscount((int) $row['discount']);
        return $product;
    }
}