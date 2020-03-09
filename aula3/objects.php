

<?php
class Book {
  // Properties
  private $title;
  private $author;
  private $price;

  //Constructer
  function __construct($title, $author, $price){
    $this->title = $title;
    $this->author = $author;
    $this->price = $price;

  }

  // Methods
  function getTitle() {
    return $this->title;
  }

  function getAuthor() {
    return $this->author;
  }

  function getPrice() {
    return $this->price;
  }
}  
$livro1 = new Book("Harry Potter", "J. K. Rowling", 20.79);
$livro2 = new Book("Biblia", "Deus", 18.30);
$livro3 = new Book("Rabbi", "Marco Melo", 14.29);
$livro4 = new Book("COVID-19", "Marco Melo", 69.69);

$carrinhoCompras = array($livro1, $livro2, $livro3, $livro4);

function calcularTotal($carrinhoCompras){
    $total = 0;
    foreach($carrinhoCompras as $livro){
        $total += $livro->getPrice();
    }
    return $total;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Objects</title>
</head>
<body>
    <h1>Carrinho de Compras</h1>

    <?php foreach($carrinhoCompras as $livro){ ?>

        <h2><?php echo $livro->getTitle(); ?></h2>
        Author: <?php echo $livro->getAuthor(); ?><br>
        <strong><?php echo $livro->getPrice(); ?></strong>€ 
<?php } ?>

<h3>Total: <?php echo calcularTotal($carrinhoCompras); ?></h3>
 
</body>
</html>