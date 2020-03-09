

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

function calcularTotal($carrinhoCompras, $comDesconto){
    $total = 0;
    foreach($carrinhoCompras as $livro){
        if($comDesconto){
            if($livro->getPrice() > 20){
                $total += $livro->getPrice() - ($livro->getPrice() * 0.1);
            }else{
                $total += $livro->getPrice();
            }
        }else{
            $total += $livro->getPrice();
        }
        
    }
    return $total;
}

function getPrecoMais20($carrinhoCompras){
    $livrosComDesconto = array();
    foreach($carrinhoCompras as $livro){
        if($livro-> getPrice() >20){
            array_push($livrosComDesconto, $livro);
        }
    }
    return $livrosComDesconto;
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

<h3>Sem desconto: <?php echo calcularTotal($carrinhoCompras, false); ?></h3>

<h3>Livros com desconto: <?php 

        foreach(getPrecoMais20($carrinhoCompras) as $livro){
            echo $livro->getTitle() . ", ";
        }

?></h3>

<h3>Com desconto: <?php echo calcularTotal($carrinhoCompras, true); ?></h3>

<h3>Você poupa: <?php //TODO ?></h3>
 
</body>
</html>