

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
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Objects</title>
</head>
<body>
    <h1><?php echo $harryPotter->getTitle(); ?></h1>
    Author: <?php echo $harryPotter->getAuthor(); ?><br>
    <strong><?php echo $harryPrice->getAuthor(); ?><strong>€        
 
</body>
</html>