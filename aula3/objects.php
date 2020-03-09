

<?php
class Book {
  // Properties
  private $title;
  private $author;
  private $price;

  //Constructer
  fuction __construct($title, $author, $price){
    $this->title = $title
    $this->author = $author
    $this->price = $price

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

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Objects</title>
</head>
<body>
    <h1><?php echo $livro->getTitle(); ?></h1>

    <?php foreach($carrinhoCompras as $livro){ ?>

    <h2><?php echo $livro->getTitle(); ?><h2>
    Author: <?php echo $livro->getAuthor(); ?><br>
    <strong><?php echo $livro->getPrice(); ?><strong>€ 
<?php } ?>

<H3>Total: <?php //TODO ?></h3>
 
</body>
</html>